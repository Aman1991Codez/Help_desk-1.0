<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2021 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with iTop. If not, see <http://www.gnu.org/licenses/>
 */
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	// Dictionary entries go here
	'Menu:JSOFT_SOLUTION_Hub' => 'iTop Hub~~',
	'Menu:JSOFT_SOLUTION_:Register' => 'Connect to iTop Hub~~',
	'Menu:JSOFT_SOLUTION_:Register+' => 'Go to iTop Hub to update your '.ITOP_APPLICATION_SHORT.' instance~~',
	'Menu:JSOFT_SOLUTION_:Register:Description' => '<p>Get access to your community platform iTop Hub!</br>Find all the content and information you need, manage your instances through personalized tools & install more extensions.</br><br/>By connecting to the Hub from this page, you will push information about this '.ITOP_APPLICATION_SHORT.' instance into the Hub.</p>~~',
	'Menu:JSOFT_SOLUTION_:MyExtensions' => 'Deployed extensions~~',
	'Menu:JSOFT_SOLUTION_:MyExtensions+' => 'See the list of extensions deployed on this instance of '.ITOP_APPLICATION_SHORT.'~~',
	'Menu:JSOFT_SOLUTION_:BrowseExtensions' => 'Get extensions from iTop Hub~~',
	'Menu:JSOFT_SOLUTION_:BrowseExtensions+' => 'Browse for more extensions on iTop Hub~~',
	'Menu:JSOFT_SOLUTION_:BrowseExtensions:Description' => '<p>Look into iTop Hub’s store, your one stop place to find wonderful '.ITOP_APPLICATION_SHORT.' extensions !</br>Find the ones that will help you customize and adapt '.ITOP_APPLICATION_SHORT.' to your processes.</br><br/>By connecting to the Hub from this page, you will push information about this '.ITOP_APPLICATION_SHORT.' instance into the Hub.</p>~~',
	'JSOFT_SOLUTION_:GoBtn' => 'Go To iTop Hub~~',
	'JSOFT_SOLUTION_:CloseBtn' => 'Close~~',
	'JSOFT_SOLUTION_:GoBtn:Tooltip' => 'Jump to www.JSOFT_SOLUTION_.io~~',
	'JSOFT_SOLUTION_:OpenInNewWindow' => 'Open iTop Hub in a new window~~',
	'JSOFT_SOLUTION_:AutoSubmit' => 'Don\'t ask me again. Next time, go to iTop Hub automatically.~~',
	'UI:About:RemoteExtensionSource' => 'iTop Hub~~',
	'JSOFT_SOLUTION_:Explanation' => 'By clicking this button you will be redirected to iTop Hub.~~',

	'JSOFT_SOLUTION_:BackupFreeDiskSpaceIn' => '%1$s free disk space in %2$s.~~',
	'JSOFT_SOLUTION_:FailedToCheckFreeDiskSpace' => 'Failed to check free disk space.~~',
	'JSOFT_SOLUTION_:BackupOk' => 'Backup Ok.~~',
	'JSOFT_SOLUTION_:BackupFailed' => 'Backup failed!~~',
	'JSOFT_SOLUTION_:Landing:Status' => 'Deployment status~~',
	'JSOFT_SOLUTION_:Landing:Install' => 'Deploying extensions...~~',
	'JSOFT_SOLUTION_:CompiledOK' => 'Compilation successful.~~',
	'JSOFT_SOLUTION_:ConfigurationSafelyReverted' => 'Error detected during deployment!<br/>'.ITOP_APPLICATION_SHORT.' configuration has NOT been modified.~~',
	'JSOFT_SOLUTION_:FailAuthent' => 'Authentication failed for this action.~~',

	'JSOFT_SOLUTION_:InstalledExtensions' => 'Extensions deployed on this instance~~',
	'JSOFT_SOLUTION_:ExtensionCategory:Manual' => 'Extensions deployed manually~~',
	'JSOFT_SOLUTION_:ExtensionCategory:Manual+' => 'The following extensions have been deployed by copying them manually in the %1$s directory of '.ITOP_APPLICATION_SHORT.':~~',
	'JSOFT_SOLUTION_:ExtensionCategory:Remote' => 'Extensions deployed from iTop Hub~~',
	'JSOFT_SOLUTION_:ExtensionCategory:Remote+' => 'The following extensions have been deployed from iTop Hub:~~',
	'JSOFT_SOLUTION_:NoExtensionInThisCategory' => 'There is no extension in this category~~',
	'JSOFT_SOLUTION_:NoExtensionInThisCategory+' => 'Browse iTop Hub to find the extensions that will help you customize and adapt '.ITOP_APPLICATION_SHORT.' to your processes !~~',
	'JSOFT_SOLUTION_:ExtensionNotInstalled' => 'Not installed~~',
	'JSOFT_SOLUTION_:GetMoreExtensions' => 'Get extensions from iTop Hub...~~',

	'JSOFT_SOLUTION_:LandingWelcome' => 'Congratulations! The following extensions were downloaded from iTop Hub and deployed into your '.ITOP_APPLICATION_SHORT.'.~~',
	'JSOFT_SOLUTION_:GoBackToITopBtn' => 'Go Back to '.ITOP_APPLICATION_SHORT.'~~',
	'JSOFT_SOLUTION_:Uncompressing' => 'Uncompressing extensions...~~',
	'JSOFT_SOLUTION_:InstallationWelcome' => 'Installation of the extensions downloaded from iTop Hub~~',
	'JSOFT_SOLUTION_:DBBackupLabel' => 'Instance backup~~',
	'JSOFT_SOLUTION_:DBBackupSentence' => 'Do a backup of the database and '.ITOP_APPLICATION_SHORT.' configuration before updating~~',
	'JSOFT_SOLUTION_:DeployBtn' => 'Deploy !~~',
	'JSOFT_SOLUTION_:DatabaseBackupProgress' => 'Instance backup...~~',

	'JSOFT_SOLUTION_:InstallationEffect:Install' => 'Version: %1$s will be installed.~~',
	'JSOFT_SOLUTION_:InstallationEffect:NoChange' => 'Version: %1$s already installed. Nothing will change.~~',
	'JSOFT_SOLUTION_:InstallationEffect:Upgrade' => 'Will be <b>upgraded</b> from version %1$s to version %2$s.~~',
	'JSOFT_SOLUTION_:InstallationEffect:Downgrade' => 'Will be <b>DOWNGRADED</b> from version %1$s to version %2$s.~~',
	'JSOFT_SOLUTION_:InstallationProgress:DatabaseBackup' => ITOP_APPLICATION_SHORT.' Instance backup...~~',
	'JSOFT_SOLUTION_:InstallationProgress:ExtensionsInstallation' => 'Installation of the extensions~~',
	'JSOFT_SOLUTION_:InstallationEffect:MissingDependencies' => 'This extension cannot be installed because of unmet dependencies.~~',
	'JSOFT_SOLUTION_:InstallationEffect:MissingDependencies_Details' => 'The extension requires the module(s): %1$s~~',
	'JSOFT_SOLUTION_:InstallationProgress:InstallationSuccessful' => 'Installation successful!~~',

	'JSOFT_SOLUTION_:InstallationStatus:Installed_Version' => '%1$s version: %2$s.~~',
	'JSOFT_SOLUTION_:InstallationStatus:Installed' => 'Installed~~',
	'JSOFT_SOLUTION_:InstallationStatus:Version_NotInstalled' => 'Version %1$s <b>NOT</b> installed.~~',
));


