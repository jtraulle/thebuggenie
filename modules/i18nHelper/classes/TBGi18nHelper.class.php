<?php

	/**
	 * i18n Helper
	 *
	 * @author Jean Traullé <jean@opencomp.fr>
	 * @version 0.1
	 * @license http://www.opensource.org/licenses/mozilla1.1.php Mozilla Public License 1.1 (MPL 1.1)
	 * @package i18nHelper
	 */

	/**
	 * i18nHelper
	 *
	 * @package i18nHelper
	 *
	 * @Table(name="TBGModulesTable")
	 */
	class TBGi18nHelper extends TBGModule
	{

		protected $_longname = 'i18n Helper';
		
		protected $_description = 'A convenient way to access strings on Transifex';
		
		protected $_module_config_title = 'i18n Helper';
		
		protected $_module_config_description = 'Configure i18n Helper';
		
		protected $_module_version = '1.0';
		
		protected $_has_config_settings = false;

		/**
		 * Return an instance of this module
		 *
		 * @return LDAP Authentication
		 */
		public static function getModule()
		{
			return TBGContext::getModule('TBGi18nHelper');
		}

		protected function _initialize()
		{
		    
		}

		protected function _install($scope)
		{
		}

		protected function _uninstall()
		{
		}
		
		protected function _addListeners()
		{
			TBGEvent::listen('core', 'footer_end', array($this, 'listen_footerEnd'));
			TBGEvent::listen('core', 'end_i18n', array($this, 'listen_headerBegins'));
		}
		
		public function listen_footerEnd(TBGEvent $event)
		{
			TBGActionComponent::includeComponent('i18nHelper/i18nHelper');
		}
		
		public function listen_headerBegins(TBGEvent $event)
		{
			TBGActionComponent::includeComponent('i18nHelper/modifyStrings');
		}
	}

