<?php

    namespace thebuggenie\core\framework;

    use thebuggenie\core\entities\Scope,
        thebuggenie\core\entities\tables;

    /**
     * Settings class
     *
     * @author Daniel Andre Eikeland <zegenie@zegeniestudios.net>
     * @version 3.1
     * @license http://opensource.org/licenses/MPL-2.0 Mozilla Public License 2.0 (MPL 2.0)
     * @package thebuggenie
     * @subpackage core
     */

    /**
     * Settings class
     *
     * @package thebuggenie
     * @subpackage core
     */
    final class Settings
    {

        const ACCESS_READ = 1;
        const ACCESS_FULL = 2;

        const CONFIGURATION_SECTION_WORKFLOW = 1;
        const CONFIGURATION_SECTION_USERS = 2;
        const CONFIGURATION_SECTION_UPLOADS = 3;
        const CONFIGURATION_SECTION_ISSUEFIELDS = 4;
        const CONFIGURATION_SECTION_PERMISSIONS = 5;
        const CONFIGURATION_SECTION_ROLES = 7;
        const CONFIGURATION_SECTION_ISSUETYPES = 6;
        const CONFIGURATION_SECTION_PROJECTS = 10;
        const CONFIGURATION_SECTION_SETTINGS = 12;
        const CONFIGURATION_SECTION_THEMES = 18;
        const CONFIGURATION_SECTION_SCOPES = 14;
        const CONFIGURATION_SECTION_MODULES = 15;
        const CONFIGURATION_SECTION_IMPORT = 16;
        const CONFIGURATION_SECTION_AUTHENTICATION = 17;

        const APPEARANCE_HEADER_THEME = 0;
        const APPEARANCE_HEADER_CUSTOM = 1;

        const APPEARANCE_FAVICON_THEME = 0;
        const APPEARANCE_FAVICON_CUSTOM = 1;

        const SYNTAX_HIHGLIGHTING_FANCY_NUMBERS = 1;
        const SYNTAX_HIHGLIGHTING_NORMAL_NUMBERS = 2;
        const SYNTAX_HIHGLIGHTING_NO_NUMBERS = 3;

        const INFOBOX_PREFIX = 'hide_infobox_';
        const TOGGLE_PREFIX = 'toggle_';

        const SYNTAX_MW = 1;
        const SYNTAX_MD = 2;
        const SYNTAX_PT = 3;

        const SETTING_ADMIN_GROUP = 'admingroup';
        const SETTING_ALLOW_REGISTRATION = 'allowreg';
        const SETTING_ALLOW_USER_THEMES = 'userthemes';
        const SETTING_AWAYSTATE = 'awaystate';
        const SETTING_DEFAULT_CHARSET = 'charset';
        const SETTING_DEFAULT_COMMENT_SYNTAX = 'comment_syntax';
        const SETTING_DEFAULT_ISSUE_SYNTAX = 'issue_syntax';
        const SETTING_DEFAULT_LANGUAGE = 'language';
        const SETTING_DEFAULT_USER_IS_GUEST = 'defaultisguest';
        const SETTING_DEFAULT_USER_ID = 'defaultuserid';
        const SETTING_MULTI_TEAM_WORKFLOW_SCHEME = 'multi_team_workflow_scheme';
        const SETTING_BALANCED_WORKFLOW_SCHEME = 'balanced_workflow_scheme';
        const SETTING_SIMPLE_WORKFLOW_SCHEME = 'simple_workflow_scheme';
        const SETTING_FULL_RANGE_ISSUETYPE_SCHEME = 'full_range_issuetype_scheme';
        const SETTING_BALANCED_ISSUETYPE_SCHEME = 'balanced_issuetype_scheme';
        const SETTING_BALANCED_AGILE_ISSUETYPE_SCHEME = 'balanced_agile_issuetype_scheme';
        const SETTING_SIMPLE_ISSUETYPE_SCHEME = 'simple_issuetype_scheme';
        const SETTING_ENABLE_UPLOADS = 'enable_uploads';
        const SETTING_ENABLE_GRAVATARS = 'enable_gravatars';
        const SETTING_FAVICON_TYPE = 'icon_fav';
        const SETTING_FAVICON_ID = 'icon_fav_id';
        const SETTING_GUEST_GROUP = 'guestgroup';
        const SETTING_HEADER_ICON_TYPE = 'icon_header';
        const SETTING_HEADER_ICON_ID = 'icon_header_id';
        const SETTING_HEADER_LINK = 'header_link';
        const SETTING_IS_PERMISSIVE_MODE = 'permissive';
        const SETTING_IS_SINGLE_PROJECT_TRACKER = 'singleprojecttracker';
        const SETTING_KEEP_COMMENT_TRAIL_CLEAN = 'cleancomments';
        const SETTING_NOTIFICATION_POLL_INTERVAL = 'notificationpollinterval';
        const SETTING_OFFLINESTATE = 'offlinestate';
        const SETTING_ONLINESTATE = 'onlinestate';
        const SETTING_PREVIEW_COMMENT_IMAGES = 'previewcommentimages';
        const SETTING_REGISTRATION_DOMAIN_WHITELIST = 'limit_registration';
        const SETTING_REQUIRE_LOGIN = 'requirelogin';
        const SETTING_ELEVATED_LOGIN_DISABLED = 'elevatedlogindisabled';
        const SETTING_RETURN_FROM_LOGIN = 'returnfromlogin';
        const SETTING_RETURN_FROM_LOGOUT = 'returnfromlogout';
        const SETTING_SALT = 'salt';
        const SETTING_SERVER_TIMEZONE = 'server_timezone';
        const SETTING_SHOW_PROJECTS_OVERVIEW = 'showprojectsoverview';
        const SETTING_SYNTAX_HIGHLIGHT_DEFAULT_LANGUAGE = 'highlight_default_lang';
        const SETTING_SYNTAX_HIGHLIGHT_DEFAULT_NUMBERING = 'highlight_default_numbering';
        const SETTING_SYNTAX_HIGHLIGHT_DEFAULT_INTERVAL = 'highlight_default_interval';
        const SETTING_TBG_NAME = 'b2_name';
        const SETTING_TBG_NAME_HTML = 'tbg_header_name_html';
        const SETTING_THEME_NAME = 'theme_name';
        const SETTING_UPLOAD_EXTENSIONS_LIST = 'upload_extensions_list';
        const SETTING_UPLOAD_LOCAL_PATH = 'upload_localpath';
        const SETTING_UPLOAD_MAX_FILE_SIZE = 'upload_max_file_size';
        const SETTING_UPLOAD_RESTRICTION_MODE = 'upload_restriction_mode';
        const SETTING_UPLOAD_STORAGE = 'upload_storage';
        const SETTING_UPLOAD_ALLOW_IMAGE_CACHING = 'upload_allow_image_caching';
        const SETTING_UPLOAD_DELIVERY_USE_XSEND = 'upload_delivery_use_xsend';

        const SETTING_ISSUETYPE_BUG_REPORT = 'issuetype_bug_report';
        const SETTING_ISSUETYPE_FEATURE_REQUEST = 'issuetype_feature_request';
        const SETTING_ISSUETYPE_ENHANCEMENT = 'issuetype_enhancement';
        const SETTING_ISSUETYPE_TASK = 'issuetype_task';
        const SETTING_ISSUETYPE_USER_STORY = 'issuetype_user_story';
        const SETTING_ISSUETYPE_EPIC = 'issuetype_epic';
        const SETTING_ISSUETYPE_IDEA = 'issuetype_idea';

        const SETTING_USER_COMMENT_ORDER = 'comment_order';

        const SETTING_USER_DISPLAYNAME_FORMAT = 'user_displayname_format';
        const SETTING_USER_GROUP = 'defaultgroup';
        const SETTING_USER_TIMEZONE = 'timezone';
        const SETTING_USER_KEYBOARD_NAVIGATION = 'keyboard_navigation';
        const SETTING_USER_LANGUAGE = 'language';
        const SETTING_USER_ACTIVATION_KEY = 'activation_key';
        const SETTING_USER_NOTIFICATION_TIMEOUT = 'notifications_timeout';
        const SETTING_USER_DESKTOP_NOTIFICATIONS_NEW_TAB = 'desktop_notifications_new_tab';

        const SETTINGS_USER_SUBSCRIBE_CREATED_UPDATED_COMMENTED_ISSUES = 'subscribe_posted_updated_commented_issues';
        const SETTINGS_USER_SUBSCRIBE_CREATED_UPDATED_COMMENTED_ARTICLES = 'subscribe_created_updated_commented_articles';
        const SETTINGS_USER_SUBSCRIBE_NEW_ISSUES_MY_PROJECTS = 'subscribe_new_issues_project';
        const SETTINGS_USER_SUBSCRIBE_NEW_ISSUES_MY_PROJECTS_CATEGORY = 'subscribe_new_issues_project_category';
        const SETTINGS_USER_SUBSCRIBE_NEW_ARTICLES_MY_PROJECTS = 'subscribe_new_articles_project';
        const SETTINGS_USER_SUBSCRIBE_ASSIGNED_ISSUES = 'subscribe_assigned_issues';

        const SETTINGS_USER_NOTIFY_NEW_ISSUES_MY_PROJECTS = 'notify_new_issues_my_projects';
        const SETTINGS_USER_NOTIFY_NEW_ISSUES_MY_PROJECTS_CATEGORY = 'notify_new_issues_my_projects_category';
        const SETTINGS_USER_NOTIFY_NEW_ARTICLES_MY_PROJECTS = 'notify_new_articles_my_projects';
        const SETTINGS_USER_NOTIFY_ITEM_ONCE = 'notify_issue_once';
        const SETTINGS_USER_NOTIFY_SUBSCRIBED_ISSUES = 'notify_subscribed_issues';
        const SETTINGS_USER_NOTIFY_SUBSCRIBED_ARTICLES = 'notify_subscribed_articles';
        const SETTINGS_USER_NOTIFY_UPDATED_SELF = 'notify_updated_self';
        const SETTINGS_USER_NOTIFY_MENTIONED = 'notify_mentioned';
        const SETTINGS_USER_NOTIFY_GROUPED_NOTIFICATIONS = 'notify_grouped_notifications';
        const SETTINGS_USER_NOTIFY_ONLY_IN_BOX_WHEN_ACTIVE = 'notify_only_in_box_when_active';

        const SETTING_AUTH_BACKEND = 'auth_backend';
        const SETTING_MAINTENANCE_MODE = 'offline';
        const SETTING_MAINTENANCE_MESSAGE = 'offline_msg';
        const SETTING_ICONSET = 'iconset';

        const SETTING_ENABLE_SCOPES = 'enable_scopes';

        const USER_RSS_KEY = 'rsskey';

        const USER_DISPLAYNAME_FORMAT_REALNAME = 1;
        const USER_DISPLAYNAME_FORMAT_BUDDY = 0;

        protected static $_ver_mj = 4;
        protected static $_ver_mn = 3;
        protected static $_ver_rev = 0;
        protected static $_ver_name = "On the road again";
        protected static $_defaultscope;
        protected static $_settings;

        /**
         * @var \DateTimeZone
         */
        protected static $_timezone;

        protected static $_loadedsettings = array();

        protected static $_core_workflow;
        protected static $_verified_theme = false;
        protected static $_core_workflowscheme;
        protected static $_core_issuetypescheme;

        /**
         * @var AuthenticationBackend
         */
        protected static $_authentication_backend;

        public static function forceSettingsReload()
        {
            self::$_settings = null;
        }

        public static function loadSettings($uid = 0)
        {
            Logging::log("Loading settings");
            if (self::$_settings === null || ($uid > 0 && !array_key_exists($uid, self::$_loadedsettings)))
            {
                Logging::log('Loading settings');
                if (self::$_settings === null)
                    self::$_settings = array();

                Logging::log('Settings not cached or install mode enabled. Retrieving from database');
                if ($res = tables\Settings::getTable()->getSettingsForScope(Context::getScope()->getID(), $uid))
                {
                    $cc = 0;
                    while ($row = $res->getNextRow())
                    {
                        $cc++;
                        self::$_settings[$row->get(tables\Settings::MODULE)][$row->get(tables\Settings::NAME)][$row->get(tables\Settings::UID)] = $row->get(tables\Settings::VALUE);
                    }
                    if ($cc == 0 && !Context::isInstallmode() && $uid == 0)
                    {
                        Logging::log('There were no settings stored in the database!', 'main', Logging::LEVEL_FATAL);
                        throw new SettingsException('Could not retrieve settings from database (no settings stored)');
                    }
                }
                elseif (!Context::isInstallmode() && $uid == 0)
                {
                    Logging::log('Settings could not be retrieved from the database!', 'main', Logging::LEVEL_FATAL);
                    throw new SettingsException('Could not retrieve settings from database');
                }
                self::$_loadedsettings[$uid] = true;
                self::$_timezone = new \DateTimeZone(self::getServerTimezoneIdentifier());
                Logging::log('Retrieved');
            }

            Logging::log("...done");
        }

        public static function deleteModuleSettings($module_name, $scope)
        {
            if ($scope == Context::getScope()->getID())
            {
                if (array_key_exists($module_name, self::$_settings))
                {
                    unset(self::$_settings[$module_name]);
                }
            }
            tables\Settings::getTable()->deleteModuleSettings($module_name, $scope);
        }

        /**
         * Save a setting
         *
         * @param string $name The settings key / name of the setting to store
         * @param mixed $value The value to store
         * @param string $module The name / key of the module storing the setting
         * @param int $scope A scope id (or 0 to apply to all scopes)
         * @param int $uid A user id to save settings for
         * @throws \Exception
         */
        public static function saveSetting($name, $value, $module = 'core', $scope = 0, $uid = 0)
        {
            if ($scope == 0 && $name != 'defaultscope' && $module == 'core')
            {
                if (($scope = Context::getScope()) instanceof Scope)
                {
                    $scope = $scope->getID();
                }
                else
                {
                    throw new \Exception('No scope loaded, cannot autoload it');
                }
            }

            tables\Settings::getTable()->saveSetting($name, $module, $value, $uid, $scope);

            if ($scope != 0 && ((!Context::getScope() instanceof Scope) || $scope == Context::getScope()->getID()))
            {
                self::$_settings[$module][$name][$uid] = $value;
            }
        }

        public static function copyDefaultScopeSetting($name, $module = 'core')
        {
            $setting = self::_loadSetting($name, $module, self::getDefaultScopeID());
            self::saveSetting($name, $setting[0], $module, Context::getScope()->getID());
        }

        public static function get($name, $module = 'core', $scope = null, $uid = 0)
        {
            if (Context::isInstallmode() && !Context::getScope() instanceof Scope)
            {
                return null;
            }
            if ($scope instanceof Scope)
            {
                $scope = $scope->getID();
            }
            if (!Context::getScope() instanceof Scope)
            {
                throw new \Exception('The Bug Genie is not installed correctly');
            }
            if ($scope != Context::getScope()->getID() && $scope !== null)
            {
                $setting = self::_loadSetting($name, $module, $scope);
                return $setting[$uid];
            }
            if (self::$_settings === null)
            {
                self::loadSettings();
            }
            if ($uid > 0 && !array_key_exists($uid, self::$_loadedsettings))
            {
                self::loadSettings($uid);
            }
            if (!is_array(self::$_settings) || !array_key_exists($module, self::$_settings))
            {
                return null;
            }
            if (!array_key_exists($name, self::$_settings[$module]))
            {
                return null;
                //self::$_settings[$name] = self::_loadSetting($name, $module, Context::getScope()->getID());
            }
            if ($uid !== 0 && array_key_exists($uid, self::$_settings[$module][$name]))
            {
                return self::$_settings[$module][$name][$uid];
            }
            else
            {
                if (!array_key_exists($uid, self::$_settings[$module][$name]))
                {
                    return null;
                }
                return self::$_settings[$module][$name][$uid];
            }
        }

        public static function getVersion($with_codename = false, $with_revision = true)
        {
            $retvar = self::$_ver_mj . '.' . self::$_ver_mn;
            if ($with_revision) $retvar .= (is_numeric(self::$_ver_rev)) ? '.' . self::$_ver_rev : self::$_ver_rev;
            if ($with_codename) $retvar .= ' ("' . self::$_ver_name . '")';
            return $retvar;
        }

        public static function getUpgradeStatus()
        {
            $version_info = explode(',', file_get_contents(THEBUGGENIE_PATH . 'installed'));
            $current_version = $version_info[0];
            $upgrade_available = ($current_version != self::getVersion(false));

            return [$current_version, $upgrade_available];
        }

        public static function getUserSetting($user_id, $name, $module = 'core', $scope = 0)
        {
            return self::get($name, $module, $scope, $user_id);
        }

        public static function hasUserSetting($user_id, $name, $module = 'core', $scope = 0)
        {
            return self::getUserSetting($name, $module, $scope, $user_id) !== null;
        }

        public static function saveUserSetting($user_id, $name, $value, $module = 'core', $scope = 0)
        {
            return self::saveSetting($name, $value, $module, $scope, $user_id);
        }

        public static function deleteUserSetting($user_id, $setting, $module = 'core', $scope = 0)
        {
            return self::deleteSetting($setting, $module, $scope, $user_id);
        }

        public static function getMajorVer()
        {
            return self::$_ver_mj;
        }

        public static function getMinorVer()
        {
            return self::$_ver_mn;
        }

        public static function getRevision()
        {
            return self::$_ver_rev;
        }

        /**
         * Returns the default scope
         *
         * @return Scope
         */
        public static function getDefaultScopeID()
        {
            if (self::$_defaultscope === null)
            {
                self::$_defaultscope = tables\ScopeHostnames::getTable()->getScopeIDForHostname('*');
            }
            return self::$_defaultscope;
        }

        public static function deleteSetting($name, $module = 'core', $scope = null, $uid = null)
        {
            $scope = ($scope === null) ? Context::getScope()->getID() : $scope;
            $uid = ($uid === null) ? Context::getUser()->getID() : $uid;

            $crit = new \b2db\Criteria();
            $crit->addWhere(tables\Settings::NAME, $name);
            $crit->addWhere(tables\Settings::MODULE, $module);
            $crit->addWhere(tables\Settings::SCOPE, $scope);
            $crit->addWhere(tables\Settings::UID, $uid);

            tables\Settings::getTable()->doDelete($crit);
            unset(self::$_settings[$module][$name][$uid]);
        }

        private static function _loadSetting($name, $module = 'core', $scope = 0)
        {
            $crit = new \b2db\Criteria();
            $crit->addWhere(tables\Settings::NAME, $name);
            $crit->addWhere(tables\Settings::MODULE, $module);
            $crit->addWhere(tables\Settings::SCOPE, $scope);
            $res = tables\Settings::getTable()->doSelect($crit);
            if ($res)
            {
                $retarr = array();
                while ($row = $res->getNextRow())
                {
                    $retarr[$row->get(tables\Settings::UID)] = $row->get(tables\Settings::VALUE);
                }
                return $retarr;
            }
            else
            {
                return null;
            }
        }

        public static function isRegistrationAllowed()
        {
            return self::isRegistrationEnabled();
        }

        /**
         * Return the default admin group
         *
         * @return \thebuggenie\core\entities\Group
         */
        public static function getAdminGroup()
        {
            return \thebuggenie\core\entities\Group::getB2DBTable()->selectByID((int) self::get(self::SETTING_ADMIN_GROUP));
        }

        public static function isRegistrationEnabled()
        {
            return (bool) self::get(self::SETTING_ALLOW_REGISTRATION);
        }

        public static function getUserDisplaynameFormat()
        {
            $format = self::get(self::SETTING_USER_DISPLAYNAME_FORMAT);
            if (!is_numeric($format))
                $format = 0;
            return (int) $format;
        }

        public static function isGravatarsEnabled()
        {
            return (bool) self::get(self::SETTING_ENABLE_GRAVATARS);
        }

        public static function getLanguage()
        {
            return self::get(self::SETTING_DEFAULT_LANGUAGE);
        }

        public static function getHTMLLanguage()
        {
            $lang = explode('_', self::getLanguage());
            return $lang[0];
        }

        public static function getCharset()
        {
            return self::get(self::SETTING_DEFAULT_CHARSET);
        }

        public static function getHeaderIconID()
        {
            return self::get(self::SETTING_HEADER_ICON_ID);
        }

        public static function getFaviconID()
        {
            return self::get(self::SETTING_FAVICON_ID);
        }

        public static function getHeaderIconURL()
        {
            return (self::isUsingCustomHeaderIcon()) ? Context::getRouting()->generate('showfile', array('id' => self::getHeaderIconID())) : 'logo_24.png';
        }

        public static function getHeaderLink()
        {
            return self::get(self::SETTING_HEADER_LINK);
        }

        public static function getFaviconURL()
        {
            return (self::isUsingCustomFavicon()) ? Context::getRouting()->generate('showfile', array('id' => self::getFaviconID())) : 'favicon.png';
        }

        public static function getSiteHeaderName()
        {
            try
            {
                if (!Context::isReadySetup()) return 'The Bug Genie';
                $name = self::get(self::SETTING_TBG_NAME);
                if (!self::isHeaderHtmlFormattingAllowed()) $name = htmlspecialchars($name, ENT_COMPAT, Context::getI18n()->getCharset());
                return trim($name);
            }
            catch (\Exception $e)
            {
                return 'The Bug Genie';
            }
        }

        public static function isFrontpageProjectListVisible()
        {
            return (bool) self::get(self::SETTING_SHOW_PROJECTS_OVERVIEW);
        }

        public static function isHeaderHtmlFormattingAllowed()
        {
            return (bool) self::get(self::SETTING_TBG_NAME_HTML);
        }

        public static function isSingleProjectTracker()
        {
            return (bool) self::get(self::SETTING_IS_SINGLE_PROJECT_TRACKER);
        }

        public static function isUsingCustomHeaderIcon()
        {
            return self::get(self::SETTING_HEADER_ICON_TYPE);
        }

        public static function isUsingCustomFavicon()
        {
            return self::get(self::SETTING_FAVICON_TYPE);
        }

        public static function getThemeName()
        {
            $themename = self::get(self::SETTING_THEME_NAME);
            if (!self::$_verified_theme) {
                if (!file_exists(THEBUGGENIE_PATH . 'themes' . DS . $themename . DS . 'theme.php')) {
                    self::saveSetting(self::SETTING_THEME_NAME, 'oxygen');
                    $themename = 'oxygen';
                }
                self::$_verified_theme = true;
            }

            return $themename;
        }

        public static function getIconsetName()
        {
            return self::get(self::SETTING_ICONSET);
        }

        public static function setIconsetName($iconset)
        {
            self::loadSettings();
            self::$_settings['core'][self::SETTING_ICONSET][0] = $iconset;
        }

        public static function isUserThemesEnabled()
        {
            return (bool) self::get(self::SETTING_ALLOW_USER_THEMES);
        }

        public static function isCommentTrailClean()
        {
            return (bool) self::get(self::SETTING_KEEP_COMMENT_TRAIL_CLEAN);
        }

        public static function isCommentImagePreviewEnabled()
        {
            return (self::get(self::SETTING_PREVIEW_COMMENT_IMAGES) !== null) ? (bool) self::get(self::SETTING_PREVIEW_COMMENT_IMAGES) : true;
        }

        public static function isLoginRequired()
        {
            return (bool) self::get(self::SETTING_REQUIRE_LOGIN);
        }

        public static function isElevatedLoginRequired()
        {
            return !(bool) self::get(self::SETTING_ELEVATED_LOGIN_DISABLED);
        }

        public static function isDefaultUserGuest()
        {
            return (bool) self::get(self::SETTING_DEFAULT_USER_IS_GUEST);
        }

        public static function getDefaultUserID()
        {
            return (int) self::get(self::SETTING_DEFAULT_USER_ID);
        }

        /**
         * Return the default user
         *
         * @return \thebuggenie\core\entities\User
         */
        public static function getDefaultUser()
        {
            try
            {
                return tables\Users::getTable()->selectByID(self::getDefaultUserID());
            }
            catch (\Exception $e)
            {
                return null;
            }
        }

        public static function allowRegistration()
        {
            return self::isRegistrationAllowed();
        }

        public static function getRegistrationDomainWhitelist()
        {
            return self::get(self::SETTING_REGISTRATION_DOMAIN_WHITELIST);
        }

        public static function getDefaultGroupIDs()
        {
            return array(self::get(self::SETTING_ADMIN_GROUP), self::get(self::SETTING_GUEST_GROUP), self::get(self::SETTING_USER_GROUP));
        }

        /**
         * Return the default user group
         *
         * @return \thebuggenie\core\entities\Group
         */
        public static function getDefaultGroup()
        {
            try
            {
                return \thebuggenie\core\entities\Group::getB2DBTable()->selectByID(self::get(self::SETTING_USER_GROUP));
            }
            catch (\Exception $e)
            {
                return null;
            }
        }

        public static function getLoginReturnRoute()
        {
            return self::get(self::SETTING_RETURN_FROM_LOGIN);
        }

        public static function getLogoutReturnRoute()
        {
            return self::get(self::SETTING_RETURN_FROM_LOGOUT);
        }

        public static function isMaintenanceModeEnabled()
        {
            return (bool)self::get(self::SETTING_MAINTENANCE_MODE);
        }

        public static function hasMaintenanceMessage()
        {
            if (self::get(self::SETTING_MAINTENANCE_MESSAGE) == '')
            {
                return false;
            }
            return true;
        }

        public static function getMaintenanceMessage()
        {
            return self::get(self::SETTING_MAINTENANCE_MESSAGE);
        }

        /**
         * Return the "online" userstate object
         * @return \thebuggenie\core\entities\Userstate
         */
        public static function getOnlineState()
        {
            try
            {
                return \thebuggenie\core\entities\Userstate::getB2DBTable()->selectByID(self::get(self::SETTING_ONLINESTATE));
            }
            catch (\Exception $e)
            {
                return null;
            }
        }

        /**
         * Return the "offline" userstate object
         * @return \thebuggenie\core\entities\Userstate
         */
        public static function getOfflineState()
        {
            try
            {
                return \thebuggenie\core\entities\Userstate::getB2DBTable()->selectByID(self::get(self::SETTING_OFFLINESTATE));
            }
            catch (\Exception $e)
            {
                return null;
            }
        }

        /**
         * Return the "away" userstate object
         * @return \thebuggenie\core\entities\Userstate
         */
        public static function getAwayState()
        {
            try
            {
                return \thebuggenie\core\entities\Userstate::getB2DBTable()->selectByID(self::get(self::SETTING_AWAYSTATE));
            }
            catch (\Exception $e)
            {
                return null;
            }
        }

        public static function getURLhost()
        {
            return Context::getScope()->getCurrentHostname();
        }

        public static function getGMToffset()
        {
            return self::get(self::SETTING_SERVER_TIMEZONE);
        }

        public static function getServerTimezoneIdentifier()
        {
            $timezone = self::get(self::SETTING_SERVER_TIMEZONE);

            if (is_numeric($timezone) || $timezone == null)
            {
                $timezone = date_default_timezone_get();
            }

            if (!$timezone)
            {
                throw new exceptions\ConfigurationException('No timezone specified, not even in php configuration.<br>For more information on how to fix this, see <a href="http://www.php.net/manual/en/datetime.configuration.php#ini.date.timezone">php.net &raquo; Runtime configuration &raquo; date.timezone</a>');
            }

            return $timezone;
        }

        /**
         * @return \DateTimeZone
         */
        public static function getServerTimezone()
        {
            return self::$_timezone;
        }

        public static function isUploadsEnabled()
        {
            return (bool) (Context::getScope()->isUploadsEnabled() && self::get(self::SETTING_ENABLE_UPLOADS));
        }

        public static function isUploadsImageCachingEnabled()
        {
            $caching = self::get(self::SETTING_UPLOAD_ALLOW_IMAGE_CACHING);
            return (($caching == null) ? false : (bool) $caching);
        }

        public static function isUploadsDeliveryUseXsend()
        {
            $useXsend = self::get(self::SETTING_UPLOAD_DELIVERY_USE_XSEND);
            return (($useXsend == null) ? false : (bool) $useXsend);
        }

        public static function getUploadsMaxSize($bytes = false)
        {
            return ($bytes) ? (int) (self::get(self::SETTING_UPLOAD_MAX_FILE_SIZE) * 1024 * 1024) : (int) self::get(self::SETTING_UPLOAD_MAX_FILE_SIZE);
        }

        public static function getUploadsEffectiveMaxSize($bytes = false)
        {
            $ini_min = min((int) ini_get('upload_max_filesize'), (int) ini_get('post_max_size')) * ($bytes ? 1024 * 1024 : 1);

            return (0 == self::getUploadsMaxSize($bytes)) ? $ini_min : min($ini_min, self::getUploadsMaxSize($bytes));
        }

        public static function getUploadsRestrictionMode()
        {
            return self::get(self::SETTING_UPLOAD_RESTRICTION_MODE);
        }

        public static function getUploadsExtensionsList()
        {
            $extensions = (string) self::get(self::SETTING_UPLOAD_EXTENSIONS_LIST);
            $delimiter = ' ';

            switch (true)
            {
                case (mb_strpos($extensions, ',') !== false):
                    $delimiter = ',';
                    break;
                case (mb_strpos($extensions, ';') !== false):
                    $delimiter = ';';
                    break;
            }
            return explode($delimiter, $extensions);
        }

        public static function getUploadStorage()
        {
            return self::get(self::SETTING_UPLOAD_STORAGE, 'core', self::getDefaultScopeID());
        }

        public static function getUploadsLocalpath()
        {
            $path = self::get(self::SETTING_UPLOAD_LOCAL_PATH, 'core', self::getDefaultScopeID());
            return (substr($path, -1, 1) == DS) ? $path : $path . DS;
        }

        public static function isInfoBoxVisible($key)
        {
            return !(bool) self::get(self::INFOBOX_PREFIX . $key, 'core', Context::getScope()->getID(), Context::getUser()->getID());
        }

        public static function hideInfoBox($key)
        {
            self::saveSetting(self::INFOBOX_PREFIX . $key, 1, 'core', Context::getScope()->getID(), Context::getUser()->getID());
        }

        public static function showInfoBox($key)
        {
            self::deleteSetting(self::INFOBOX_PREFIX . $key);
        }

        public static function setToggle($toggle, $state)
        {
            self::saveSetting(self::TOGGLE_PREFIX . $toggle, $state, 'core', Context::getScope()->getID(), Context::getUser()->getID());
        }

        public static function getToggle($toggle)
        {
            return (bool) self::get(self::TOGGLE_PREFIX . $toggle, 'core', Context::getScope()->getID(), Context::getUser()->getID());
        }

        public static function isPermissive()
        {
            return (bool) self::get(self::SETTING_IS_PERMISSIVE_MODE);
        }

        public static function getAll()
        {
            return self::$_settings;
        }

        public static function getDefaultSyntaxHighlightingLanguage()
        {
            return self::get(self::SETTING_SYNTAX_HIGHLIGHT_DEFAULT_LANGUAGE);
        }

        public static function getDefaultSyntaxHighlightingNumbering()
        {
            return self::get(self::SETTING_SYNTAX_HIGHLIGHT_DEFAULT_NUMBERING);
        }

        public static function getDefaultSyntaxHighlightingInterval()
        {
            return self::get(self::SETTING_SYNTAX_HIGHLIGHT_DEFAULT_INTERVAL);
        }

        /**
         * @return AuthenticationBackend
         * @throws \Exception
         *
         */
        public static function getAuthenticationBackend()
        {
            if (self::$_authentication_backend === null)
            {
                if (self::isUsingExternalAuthenticationBackend())
                {
                    self::$_authentication_backend = Context::getModule(self::getAuthenticationBackendIdentifier())->getAuthenticationBackend();
                }
                else
                {
                    self::$_authentication_backend = new AuthenticationBackend();
                }
            }

            return self::$_authentication_backend;
        }

        public static function getAuthenticationBackendIdentifier()
        {
            return self::get(self::SETTING_AUTH_BACKEND);
        }

        /**
         * Get default comment syntax
         *
         * @return integer
         */
        public static function getDefaultCommentSyntax()
        {
            $syntax = self::get(self::SETTING_DEFAULT_COMMENT_SYNTAX);
            return ($syntax == null) ? self::SYNTAX_MW : $syntax;
        }

        /**
         * Get default issue syntax
         *
         * @return integer
         */
        public static function getDefaultIssueSyntax()
        {
            $syntax = self::get(self::SETTING_DEFAULT_ISSUE_SYNTAX);
            return ($syntax == null) ? self::SYNTAX_MW : $syntax;
        }

        /**
         * Get associated syntax class for a given syntax value
         *
         * @param integer $syntax
         * @return string
         */
        public static function getSyntaxClass($syntax)
        {
            switch ($syntax)
            {
                case self::SYNTAX_MW:
                    return 'mw';
                case self::SYNTAX_PT:
                    return 'pt';
                case self::SYNTAX_MD:
                default:
                    return 'md';
            }
        }

        /**
         * Return syntax value for a given syntax shorthand
         *
         * @param string $syntax
         *
         * @return integer
         */
        public static function getSyntaxValue($syntax)
        {
            switch ($syntax)
            {
                case 'mw':
                    return self::SYNTAX_MW;
                case 'pt':
                    return self::SYNTAX_PT;
                case 'md':
                default:
                    return self::SYNTAX_MD;
            }
        }

        /**
         * Notification polling interval in seconds
         *
         * @return integer
         */
        public static function getNotificationPollInterval()
        {
            $seconds = self::get(self::SETTING_NOTIFICATION_POLL_INTERVAL);
            return $seconds == null ? 180 : $seconds;
        }

        public static function getSubscriptionsSettings()
        {
            $i18n = Context::getI18n();
            $subscriptionssettings = array();
            $subscriptionssettings[self::SETTINGS_USER_SUBSCRIBE_CREATED_UPDATED_COMMENTED_ISSUES] = $i18n->__('Automatically subscribe to issues I posted');
            $subscriptionssettings[self::SETTINGS_USER_SUBSCRIBE_CREATED_UPDATED_COMMENTED_ARTICLES] = $i18n->__('Automatically subscribe to article I posted');
            $subscriptionssettings[self::SETTINGS_USER_SUBSCRIBE_NEW_ISSUES_MY_PROJECTS] = $i18n->__('Automatically subscribe to new issues that are created in my project(s)');
            $subscriptionssettings[self::SETTINGS_USER_SUBSCRIBE_NEW_ARTICLES_MY_PROJECTS] = $i18n->__('Automatically subscribe to new articles that are created in my project(s)');
            $subscriptionssettings[self::SETTINGS_USER_SUBSCRIBE_NEW_ISSUES_MY_PROJECTS_CATEGORY] = $i18n->__('Automatically subscribe to new issues in selected categories');
            $subscriptionssettings[self::SETTINGS_USER_SUBSCRIBE_ASSIGNED_ISSUES] = $i18n->__('Automatically subscribe to issues I get assigned to');
            return $subscriptionssettings;
        }

        public static function getNotificationSettings()
        {
            $i18n = Context::getI18n();
            $notificationsettings = array();
            $notificationsettings[self::SETTINGS_USER_NOTIFY_SUBSCRIBED_ISSUES] = $i18n->__('Notify when there are updates to my subscribed issues');
            $notificationsettings[self::SETTINGS_USER_NOTIFY_SUBSCRIBED_ARTICLES] = $i18n->__('Notify when there are updates to my subscribed articles');
            $notificationsettings[self::SETTINGS_USER_NOTIFY_NEW_ISSUES_MY_PROJECTS] = $i18n->__('Notify when new issues are created in my project(s)');
            $notificationsettings[self::SETTINGS_USER_NOTIFY_NEW_ARTICLES_MY_PROJECTS] = $i18n->__('Notify when new articles are created in my project(s)');
            $notificationsettings[self::SETTINGS_USER_NOTIFY_UPDATED_SELF] = $i18n->__('Notify also when I am the one making the changes');
            $notificationsettings[self::SETTINGS_USER_NOTIFY_MENTIONED] = $i18n->__('Notify when I am mentioned in issue or article or their comment');
            $notificationsettings[self::SETTINGS_USER_NOTIFY_ITEM_ONCE] = $i18n->__('Only notify once per issue or article until I view the issue or article in my browser');
            $notificationsettings[self::SETTINGS_USER_NOTIFY_NEW_ISSUES_MY_PROJECTS_CATEGORY] = $i18n->__('Notify when issues are created in selected categories');
            $notificationsettings[self::SETTINGS_USER_NOTIFY_GROUPED_NOTIFICATIONS] = $i18n->__('Group similar notifications together if they are related');
            return $notificationsettings;
        }

        /**
         * Whether or not the authentication backend is external
         *
         * @return boolean
         */
        public static function isUsingExternalAuthenticationBackend()
        {
            return (self::getAuthenticationBackendIdentifier() !== null && self::getAuthenticationBackendIdentifier() !== 'tbg');
        }

        public static function isScopesFunctionalityEnabled()
        {
            return (bool) self::get(self::SETTING_ENABLE_SCOPES);
        }

        /**
         * File access listener
         *
         * @param \thebuggenie\core\framework\Event $event
         */
        public static function listen_thebuggenie_core_entities_File_hasAccess(Event $event)
        {
            $file = $event->getSubject();
            if ($file->getID() == self::getHeaderIconID() || $file->getID() == self::getFaviconID())
            {
                $event->setReturnValue(true);
                $event->setProcessed();
            }
        }

        /**
         * Return associated configuration sections
         *
         * @param I18n $i18n The translation object
         *
         * @return array
         */
        public static function getConfigSections($i18n)
        {
            $config_sections = array('general' => array(), self::CONFIGURATION_SECTION_MODULES => array());

            if (Context::getScope()->getID() == 1)
                $config_sections['general'][self::CONFIGURATION_SECTION_SCOPES] = array('route' => 'configure_scopes', 'description' => $i18n->__('Scopes'), 'fa_style' => 'fas', 'fa_icon' => 'clone', 'details' => $i18n->__('Scopes are self-contained Bug Genie environments. Configure them here.'));

            $config_sections['general'][self::CONFIGURATION_SECTION_SETTINGS] = array('route' => 'configure_settings', 'description' => $i18n->__('Settings'), 'fa_style' => 'fas', 'fa_icon' => 'cog', 'details' => $i18n->__('Every setting in the bug genie can be adjusted in this section.'));
            $config_sections['general'][self::CONFIGURATION_SECTION_THEMES] = array('route' => 'configuration_themes', 'description' => $i18n->__('Theme'), 'fa_style' => 'fas', 'fa_icon' => 'paint-brush', 'details' => $i18n->__('Configure the selected theme from this section'));
            $config_sections['general'][self::CONFIGURATION_SECTION_ROLES] = array('route' => 'configure_roles', 'description' => $i18n->__('Roles'), 'fa_style' => 'fas', 'fa_icon' => 'user-md', 'details' => $i18n->__('Configure roles in this section'));
            $config_sections['general'][self::CONFIGURATION_SECTION_AUTHENTICATION] = array('route' => 'configure_authentication', 'description' => $i18n->__('Authentication'), 'fa_style' => 'fas', 'fa_icon' => 'lock', 'details' => $i18n->__('Configure the authentication method in this section'));

            if (Context::getScope()->isUploadsEnabled())
                $config_sections['general'][self::CONFIGURATION_SECTION_UPLOADS] = array('route' => 'configure_files', 'description' => $i18n->__('Uploads and attachments'), 'fa_style' => 'fas', 'fa_icon' => 'upload', 'details' => $i18n->__('All settings related to file uploads are controlled from this section.'));

            $config_sections['general'][self::CONFIGURATION_SECTION_IMPORT] = array('route' => 'import_home', 'description' => $i18n->__('Import data'), 'fa_style' => 'fas', 'fa_icon' => 'download', 'details' => $i18n->__('Import data from CSV files and other sources.'));
            $config_sections['general'][self::CONFIGURATION_SECTION_PROJECTS] = array('route' => 'configure_projects', 'description' => $i18n->__('Projects'), 'fa_style' => 'fas', 'fa_icon' => 'code', 'details' => $i18n->__('Set up all projects in this configuration section.'));
            $config_sections['general'][self::CONFIGURATION_SECTION_ISSUETYPES] = array('route' => 'configure_issuetypes', 'fa_style' => 'fas', 'fa_icon' => 'copy', 'description' => $i18n->__('Issue types'), 'details' => $i18n->__('Manage issue types and configure issue fields for each issue type here'));
            $config_sections['general'][self::CONFIGURATION_SECTION_ISSUEFIELDS] = array('route' => 'configure_issuefields', 'fa_style' => 'fas', 'fa_icon' => 'list', 'description' => $i18n->__('Issue fields'), 'details' => $i18n->__('Status types, resolution types, categories, custom fields, etc. are configurable from this section.'));
            $config_sections['general'][self::CONFIGURATION_SECTION_WORKFLOW] = array('route' => 'configure_workflow', 'fa_style' => 'fas', 'fa_icon' => 'share-alt', 'description' => $i18n->__('Workflow'), 'details' => $i18n->__('Set up and edit workflow configuration from this section'));
            $config_sections['general'][self::CONFIGURATION_SECTION_USERS] = array('route' => 'configure_users', 'description' => $i18n->__('Users, teams and clients'), 'fa_style' => 'fas', 'fa_icon' => 'users', 'details' => $i18n->__('Manage users, user teams and clients from this section.'));
            $config_sections['general'][self::CONFIGURATION_SECTION_MODULES] = array('route' => 'configure_modules', 'description' => $i18n->__('Manage modules'), 'fa_style' => 'fas', 'fa_icon' => 'puzzle-piece', 'details' => $i18n->__('Manage Bug Genie extensions from this section. New modules are installed from here.'), 'module' => 'core');
            foreach (Context::getModules() as $module)
            {
                if ($module->hasConfigSettings() && $module->isEnabled()) {
                    $module_array = array('route' => array('configure_module', array('config_module' => $module->getName())), 'description' => Context::geti18n()->__($module->getConfigTitle()), 'icon' => $module->getName(), 'details' => Context::geti18n()->__($module->getConfigDescription()), 'module' => $module->getName());
                    if ($module->hasFontAwesomeIcon()) {
                        $module_array['fa_icon'] = $module->getFontAwesomeIcon();
                        $module_array['fa_style'] = $module->getFontAwesomeStyle();
                        $module_array['fa_color'] = $module->getFontAwesomeColor();
                    }
                    $config_sections[self::CONFIGURATION_SECTION_MODULES][] = $module_array;
                }
            }

            return $config_sections;
        }

        public static function getAccessLevel($section, $module = 'core')
        {
            return (Context::getUser()->canSaveConfiguration($section, $module)) ? self::ACCESS_FULL : self::ACCESS_READ;
        }

    }
