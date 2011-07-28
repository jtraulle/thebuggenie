<p><?php echo __('Use this page to set up the connection details for your LDAP or Active Directory server. It is highly recommended that you read the online help before use, as misconfiguration may prevent you from accessing configuration pages to rectify issues.'); ?></p>
<p><b><?php echo link_tag('http://thebuggenie.com/thebuggenie/wiki/Category%3ATheBugGenie%3AUserGuide%3AModules%3ALDAP', __('View the online documentation')); ?></b></p>
<?php if ($noldap): ?>
<div class="rounded_box red" style="margin-top: 5px">
	<div class="header"><?php echo __('LDAP support is not installed'); ?></div>
	<p><?php echo __('The PHP LDAP extension is required to use this functionality. As this module is not installed, all functionality on this page has been disabled.'); ?></p>
</div>
<?php endif; ?>
<div class="rounded_box yellow" style="margin-top: 5px">
	<div class="header"><?php echo __('Important information'); ?></div>
	<p><?php echo __('When you enable LDAP as your authentication backend in Authentication configuration, you will lose access to all accounts which do not also exist in the LDAP database. This may mean you lose administrative access.'); ?></p>
	<p style="font-weight: bold; padding-top: 5px"><?php echo __('To resolve this issue, either import all users using the tool on this page and make one an administrator using Users configuration, or create a user with the same username as one in LDAP and make that one an administrator.'); ?></p>
</div>
<form accept-charset="<?php echo TBGContext::getI18n()->getCharset(); ?>" action="<?php echo make_url('configure_module', array('config_module' => $module->getName())); ?>" enctype="multipart/form-data" method="post">
	<div class="rounded_box borderless mediumgrey<?php if ($access_level == TBGSettings::ACCESS_FULL): ?> cut_bottom<?php endif; ?>" style="margin: 10px 0 0 0; width: 700px;<?php if ($access_level == TBGSettings::ACCESS_FULL): ?> border-bottom: 0;<?php endif; ?>">
		<div class="header"><?php echo __('Connection details'); ?></div>
		<table style="width: 680px;" class="padded_table" cellpadding=0 cellspacing=0 id="ldap_settings_table">
			<tr>
				<td style="padding: 5px;"><label for="hostname"><?php echo __('Hostname'); ?></label></td>
				<td><input type="text"<?php if ($noldap): echo ' disabled="disabled"'; endif; ?> name="hostname" id="hostname" value="<?php echo $module->getSetting('hostname'); ?>" style="width: 100%;"></td>
			</tr>
			<tr>
				<td class="config_explanation" colspan="2"><?php echo __('Use URL syntax (ldap://hostname:port). If your server requires SSL, use ldaps://hostname/ in this field.'); ?></td>
			</tr>
			<tr>
				<td style="padding: 5px;"><label for="u_dn"><?php echo __('Users DN'); ?></label></td>
				<td><input type="text"<?php if ($noldap): echo ' disabled="disabled"'; endif; ?> name="u_dn" id="u_dn" value="<?php echo $module->getSetting('u_dn'); ?>" style="width: 100%;"></td>
			</tr>
			<tr>
				<td class="config_explanation" colspan="2"><?php echo __('This should be the DN string for the OU containing the user list. For example, OU=People,OU=staff,DN=ldap,DN=example,DN=com.'); ?></td>
			</tr>
			<tr>
				<td style="padding: 5px;"><label for="u_attr"><?php echo __('Username attribute'); ?></label></td>
				<td><input type="text"<?php if ($noldap): echo ' disabled="disabled"'; endif; ?> name="u_attr" id="u_attr" value="<?php echo $module->getSetting('u_attr'); ?>" style="width: 100%;"></td>
			</tr>
			<tr>
				<td class="config_explanation" colspan="2"><?php echo __('This field should contain the name of the attribute where the username is stored, such as uid.'); ?></td>
			</tr>
			<tr>
				<td style="padding: 5px;"><label for="f_attr"><?php echo __('Full name attribute'); ?></label></td>
				<td><input type="text"<?php if ($noldap): echo ' disabled="disabled"'; endif; ?> name="f_attr" id="f_attr" value="<?php echo $module->getSetting('f_attr'); ?>" style="width: 100%;"></td>
			</tr>
			<tr>
				<td style="padding: 5px;"><label for="e_attr"><?php echo __('Email address attribute'); ?></label></td>
				<td><input type="text"<?php if ($noldap): echo ' disabled="disabled"'; endif; ?> name="e_attr" id="e_attr" value="<?php echo $module->getSetting('e_attr'); ?>" style="width: 100%;"></td>
			</tr>
			<tr>
				<td style="padding: 5px;"><label for="g_dn"><?php echo __('Groups DN'); ?></label></td>
				<td><input type="text"<?php if ($noldap): echo ' disabled="disabled"'; endif; ?> name="g_dn" id="g_dn" value="<?php echo $module->getSetting('g_dn'); ?>" style="width: 100%;"></td>
			</tr>
			<tr>
				<td class="config_explanation" colspan="2"><?php echo __('This should be the DN string for the OU containing the group list.'); ?></td>
			</tr>
			<tr>
				<td style="padding: 5px;"><label for="g_attr"><?php echo __('Group members attribute'); ?></label></td>
				<td><input type="text"<?php if ($noldap): echo ' disabled="disabled"'; endif; ?> name="g_attr" id="g_attr" value="<?php echo $module->getSetting('g_attr'); ?>" style="width: 100%;"></td>
			</tr>
			<tr>
				<td class="config_explanation" colspan="2"><?php echo __('This field should contain the name of the attribute where the list of members of a group is stored, such as uniqueMember.'); ?></td>
			</tr>
			<tr>
				<td style="padding: 5px;"><label for="groups"><?php echo __('Allowed groups'); ?></label></td>
				<td><input type="text"<?php if ($noldap): echo ' disabled="disabled"'; endif; ?> name="groups" id="groups" value="<?php echo $module->getSetting('groups'); ?>" style="width: 100%;"></td>
			</tr>
			<tr>
				<td class="config_explanation" colspan="2"><?php echo __('You may wish to restrict access to users who belong to certain groups in LDAP. If so, write a comma separated list of group names here. Leave blank to disable this feature.'); ?></td>
			</tr>
			<tr>
				<td style="padding: 5px;"><label for="control_user"><?php echo __('Control username'); ?></label></td>
				<td><input type="text"<?php if ($noldap): echo ' disabled="disabled"'; endif; ?> name="control_user" id="control_pass" value="<?php echo $module->getSetting('control_user'); ?>" style="width: 100%;"></td>
			</tr>
			<tr>
				<td style="padding: 5px;"><label for="control_pass"><?php echo __('Control user password'); ?></label></td>
				<td><input type="password"<?php if ($noldap): echo ' disabled="disabled"'; endif; ?> name="control_pass" id="control_pass" value="<?php echo $module->getSetting('control_pass'); ?>" style="width: 100%;"></td>
			</tr>
			<tr>
				<td class="config_explanation" colspan="2"><?php echo __('Please insert the authentication details for a user who can access all LDAP records. Only read access is necessary, and this will be used to perform validation checks on users.'); ?></td>
			</tr>
		</table>
	</div>
<?php if ($access_level == TBGSettings::ACCESS_FULL): ?>
	<div class="rounded_box iceblue borderless cut_top" style="margin: 0 0 5px 0; width: 700px; border-top: 0; padding: 8px 5px 2px 5px; height: 25px;">
		<div style="float: left; font-size: 13px; padding-top: 2px;"><?php echo __('Click "%save%" to save the settings', array('%save%' => __('Save'))); ?></div>
		<input type="submit" id="submit_settings_button"<?php if ($noldap): echo ' disabled="disabled"'; endif; ?> style="float: right; padding: 0 10px 0 10px; font-size: 14px; font-weight: bold;" value="<?php echo __('Save'); ?>">
	</div>
<?php endif; ?>
</form>

<form accept-charset="<?php echo TBGContext::getI18n()->getCharset(); ?>" action="<?php echo make_url('ldap_test'); ?>" method="post">
	<div class="rounded_box borderless mediumgrey" style="margin: 10px 0 0 0; width: 700px; padding: 5px 5px 30px 5px;">
		<div class="header"><?php echo __('Test connection'); ?></div>
		<div class="content"><?php echo __('After configuring and saving your connection settings, you should test your connection to the LDAP server. This test does not check whether the DN and attributes can allow The Bug Genie to correctly find users, but it will give an indication if The Bug Genie can talk to your LDAP server.'); ?></div>
		<input type="submit" id="test_button"<?php if ($noldap): echo ' disabled="disabled"'; endif; ?> style="float: right; padding: 0 10px 0 10px; font-size: 13px; font-weight: bold;" value="<?php echo __('Test connection'); ?>">
	</div>
</form>

<form accept-charset="<?php echo TBGContext::getI18n()->getCharset(); ?>" action="<?php echo make_url('ldap_import'); ?>" method="post">
	<div class="rounded_box borderless mediumgrey" style="margin: 10px 0 0 0; width: 700px; padding: 5px 5px 30px 5px;">
		<div class="header"><?php echo __('Import all users'); ?></div>
		<div class="content"><?php echo __('So that you can ensure all users from LDAP exist in The Bug Genie exist for initial configuration (e.g. to set permissions), you can import all users who don\'t already exist using this tool. If you set a group restriction, this will be obyed here. Remember to make at least one an administrator so you can continue to configure The Bug Genie after switching.'); ?></div>
		<table style="width: 680px;" class="padded_table" cellpadding=0 cellspacing=0 id="vcsintegration_settings_table">
			<tr>
				<td style="padding: 5px;"><label for="prefix"><?php echo __('Create users with prefix'); ?></label></td>
				<td><input type="text"<?php if ($noldap): echo ' disabled="disabled"'; endif; ?> name="prefix" id="prefix" style="width: 100%;"></td>
			</tr>
			<tr>
				<td class="config_explanation" colspan="2"><?php echo __('Some setups will require the username to have a prefix in order to log in. A common example is Active Directory, where the prefix DOMAIN\ must be supplied, where DOMAIN is your Active Directory Domain name. If this is not necessary, leave it blank.'); ?></td>
			</tr>
		</table>
		<input type="submit" id="import_button"<?php if ($noldap): echo ' disabled="disabled"'; endif; ?> style="float: right; padding: 0 10px 0 10px; font-size: 13px; font-weight: bold;" value="<?php echo __('Import users'); ?>">
	</div>
</form>

<form accept-charset="<?php echo TBGContext::getI18n()->getCharset(); ?>" action="<?php echo make_url('ldap_prune'); ?>" method="post">
	<div class="rounded_box borderless mediumgrey" style="margin: 10px 0 0 0; width: 700px; padding: 5px 5px 30px 5px;">
		<div class="header"><?php echo __('Prune users'); ?></div>
		<div class="content"><?php echo __('If a user is deleted from LDAP then they will not be able to log into The Bug Genie. However if you want to remove users from The Bug Genie who have been deleted from LDAP you may wish to prune the users list. This action will delete all users from The Bug Genie\'s user list who do not exist in the LDAP database, and can not be reversed. The default (typically the guest) user will not be removed. Users who would not be able to log in due to a group restriction will be deleted.'); ?></div>
		<input type="submit"<?php if ($noldap): echo ' disabled="disabled"'; endif; ?> id="prune_button" style="float: right; padding: 0 10px 0 10px; font-size: 13px; font-weight: bold;" value="<?php echo __('Prune users'); ?>">
	</div>
</form>