<?php

	/**
	 * Project assignees table
	 *
	 * @author Daniel Andre Eikeland <zegenie@zegeniestudios.net>
	 ** @version 3.0
	 * @license http://www.opensource.org/licenses/mozilla1.1.php Mozilla Public License 1.1 (MPL 1.1)
	 * @package thebuggenie
	 * @subpackage tables
	 */

	/**
	 * Project assignees table
	 *
	 * @package thebuggenie
	 * @subpackage tables
	 */
	class TBGProjectAssigneesTable extends TBGB2DBTable 
	{

		const B2DBNAME = 'projectassignees';
		const ID = 'projectassignees.id';
		const SCOPE = 'projectassignees.scope';
		const UID = 'projectassignees.uid';
		const TID = 'projectassignees.tid';
		const PROJECT_ID = 'projectassignees.project_id';
		const TARGET_TYPE = 'projectassignees.target_type';

		const TYPE_DEVELOPER = 1;
		const TYPE_PROJECTMANAGER = 2;
		const TYPE_TESTER = 3;
		const TYPE_DOCUMENTOR = 4;
		
		public function __construct()
		{
			parent::__construct(self::B2DBNAME, self::ID);
			parent::_addInteger(self::TARGET_TYPE, 5);
			parent::_addForeignKeyColumn(self::PROJECT_ID, TBGProjectsTable::getTable(), TBGProjectsTable::ID);
			parent::_addForeignKeyColumn(self::UID, TBGUsersTable::getTable(), TBGUsersTable::ID);
			parent::_addForeignKeyColumn(self::TID, B2DB::getTable('TBGTeamsTable'), TBGTeamsTable::ID);
			parent::_addForeignKeyColumn(self::SCOPE, TBGScopesTable::getTable(), TBGScopesTable::ID);
		}
		
		public static function getTypes()
		{
			return array(self::TYPE_DEVELOPER => TBGContext::getI18n()->__('Developer'), 
						self::TYPE_PROJECTMANAGER => TBGContext::getI18n()->__('Project manager'),
						self::TYPE_DOCUMENTOR => TBGContext::getI18n()->__('Documentation editor'),
						self::TYPE_TESTER => TBGContext::getI18n()->__('Tester'));
		}
		
		public static function getTypeName($type)
		{
			$types = self::getTypes();
			return $types[$type];
		}
		
		public function getByProjectID($project_id)
		{
			$crit = $this->getCriteria();
			$crit->addWhere(self::PROJECT_ID, $project_id);
			$res = $this->doSelect($crit);
			return $res;
		}
		
		public function getByProjectAndRoleAndUser($project_id, $role, $user_id)
		{
			$crit = $this->getCriteria();
			$crit->addWhere(self::PROJECT_ID, $project_id);
			$crit->addWhere(self::TARGET_TYPE, $role);
			$crit->addWhere(self::UID, $user_id);
			$res = $this->doSelect($crit);
			return $res;
		}

		public function addByProjectAndRoleAndUser($project_id, $role, $user_id)
		{
			$crit = $this->getCriteria();
			$crit->addInsert(self::PROJECT_ID, $project_id);
			$crit->addInsert(self::TARGET_TYPE, $role);
			$crit->addInsert(self::UID, $user_id);
			$crit->addInsert(self::SCOPE, TBGContext::getScope()->getID());
			$res = $this->doInsert($crit);
			return $res;
		}
		
		public function getByProjectAndRoleAndTeam($project_id, $role, $team_id)
		{
			$crit = $this->getCriteria();
			$crit->addWhere(self::PROJECT_ID, $project_id);
			$crit->addWhere(self::TARGET_TYPE, $role);
			$crit->addWhere(self::TID, $team_id);
			$res = $this->doSelect($crit);
			return $res;
		}

		public function addByProjectAndRoleAndTeam($project_id, $role, $team_id)
		{
			$crit = $this->getCriteria();
			$crit->addInsert(self::PROJECT_ID, $project_id);
			$crit->addInsert(self::TARGET_TYPE, $role);
			$crit->addInsert(self::TID, $team_id);
			$crit->addInsert(self::SCOPE, TBGContext::getScope()->getID());
			$res = $this->doInsert($crit);
			return $res;
		}
		
		public function getProjectsByUserID($user_id)
		{
			$projects = array();
			
			$crit = $this->getCriteria();
			$crit->addWhere(self::UID, $user_id);
			if ($res = $this->doSelect($crit))
			{
				while ($row = $res->getNextRow())
				{
					$projects[$row->get(self::PROJECT_ID)] = TBGContext::factory()->TBGProject($row->get(self::PROJECT_ID), $row); 
				}
			}
			return $projects;
		}
		
	}
