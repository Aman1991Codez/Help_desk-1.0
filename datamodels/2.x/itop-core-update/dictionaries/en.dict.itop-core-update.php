<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2021 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
 *
 * This file is part of iTop.
 *
 * JSOFT_SOLUTION_ is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * JSOFT_SOLUTION_ is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with JSOFT_SOLUTION_. If not, see <http://www.gnu.org/licenses/>
 */
Dict::Add('EN US', 'English', 'English', array(
	'JSOFT_SOLUTION_Update:UI:PageTitle' => 'Application Upgrade',
    'JSOFT_SOLUTION-core-update:UI:SelectUpdateFile' => 'Application Upgrade',
    'JSOFT_SOLUTION-core-update:UI:ConfirmUpdate' => 'Confirm Application Upgrade',
    'JSOFT_SOLUTION-core-update:UI:UpdateCoreFiles' => 'Application Upgrading',
	'JSOFT_SOLUTION_Update:UI:MaintenanceModeActive' => 'The application is currently under maintenance in read-only mode. You have to run a setup to return in normal mode.',
	'JSOFT_SOLUTION-core-update:UI:UpdateDone' => 'Application Upgrade',

	'JSOFT_SOLUTION-core-update/Operation:SelectUpdateFile/Title' => 'Application Upgrade',
	'JSOFT_SOLUTION-core-update/Operation:ConfirmUpdate/Title' => 'Confirm Application Upgrade',
	'JSOFT_SOLUTION-core-update/Operation:UpdateCoreFiles/Title' => 'Application Upgrading',
	'JSOFT_SOLUTION-core-update/Operation:UpdateDone/Title' => 'Application Upgrade Done',

	'JSOFT_SOLUTION_Update:UI:SelectUpdateFile' => 'Select an upgrade file to upload',
	'JSOFT_SOLUTION_Update:UI:CheckUpdate' => 'Verify upgrade file',
	'JSOFT_SOLUTION_Update:UI:ConfirmInstallFile' => 'You are about to install %1$s',
	'JSOFT_SOLUTION_Update:UI:DoUpdate' => 'Upgrade',
	'JSOFT_SOLUTION_Update:UI:CurrentVersion' => 'Current installed version',
	'JSOFT_SOLUTION_Update:UI:NewVersion' => 'Newly installed version',
    'JSOFT_SOLUTION_Update:UI:Back' => 'Back',
    'JSOFT_SOLUTION_Update:UI:Cancel' => 'Cancel',
    'JSOFT_SOLUTION_Update:UI:Continue' => 'Continue',
	'JSOFT_SOLUTION_Update:UI:RunSetup' => 'Run Setup',
    'JSOFT_SOLUTION_Update:UI:WithDBBackup' => 'Database backup',
    'JSOFT_SOLUTION_Update:UI:WithFilesBackup' => 'Application files backup',
    'JSOFT_SOLUTION_Update:UI:WithoutBackup' => 'No backup is planned',
    'JSOFT_SOLUTION_Update:UI:Backup' => 'Backup generated before update',
	'JSOFT_SOLUTION_Update:UI:DoFilesArchive' => 'Archive application files',
	'JSOFT_SOLUTION_Update:UI:UploadArchive' => 'Select a package to upload',
	'JSOFT_SOLUTION_Update:UI:ServerFile' => 'Path of a package already on the server',
	'JSOFT_SOLUTION_Update:UI:WarningReadOnlyDuringUpdate' => 'During the upgrade, the application will be read-only.',

    'JSOFT_SOLUTION_Update:UI:Status' => 'Status',
    'JSOFT_SOLUTION_Update:UI:Action' => 'Update',
    'JSOFT_SOLUTION_Update:UI:Setup' => ITOP_APPLICATION_SHORT.' Setup',
    'JSOFT_SOLUTION_Update:UI:History' => 'Versions History',
    'JSOFT_SOLUTION_Update:UI:Progress' => 'Progress of the upgrade',

    'JSOFT_SOLUTION_Update:UI:DoBackup:Label' => 'Backup files and database',
    'JSOFT_SOLUTION_Update:UI:DoBackup:Warning' => 'Backup is not recommended due to limited available disk space',

    'JSOFT_SOLUTION_Update:UI:DiskFreeSpace' => 'Disk free space',
    'JSOFT_SOLUTION_Update:UI:ItopDiskSpace' => ITOP_APPLICATION_SHORT.' disk space',
    'JSOFT_SOLUTION_Update:UI:DBDiskSpace' => 'Database disk space',
	'JSOFT_SOLUTION_Update:UI:FileUploadMaxSize' => 'File upload max size',

	'JSOFT_SOLUTION_Update:UI:PostMaxSize' => 'PHP ini value post_max_size: %1$s',
	'JSOFT_SOLUTION_Update:UI:UploadMaxFileSize' => 'PHP ini value upload_max_filesize: %1$s',

    'JSOFT_SOLUTION_Update:UI:CanCoreUpdate:Loading' => 'Checking files',
    'JSOFT_SOLUTION_Update:UI:CanCoreUpdate:Error' => 'Checking files failed (%1$s)',
    'JSOFT_SOLUTION_Update:UI:CanCoreUpdate:ErrorFileNotExist' => 'Checking files failed (File not exist %1$s)',
    'JSOFT_SOLUTION_Update:UI:CanCoreUpdate:Failed' => 'Checking files failed',
    'JSOFT_SOLUTION_Update:UI:CanCoreUpdate:Yes' => 'Application can be updated',
	'JSOFT_SOLUTION_Update:UI:CanCoreUpdate:No' => 'Application cannot be updated: %1$s',
	'JSOFT_SOLUTION_Update:UI:CanCoreUpdate:Warning' => 'Warning: application update can fail: %1$s',
	'JSOFT_SOLUTION_Update:UI:CannotUpdateUseSetup' => '<b>Some modified files were detected</b>, a partial update cannot be executed.</br>Follow the <a target="_blank" href="%2$s"> procedure</a> in order to manually upgrade your JSOFT_SOLUTION_. You must use the <a href="%1$s">setup</a> to update the application.',
	'JSOFT_SOLUTION_Update:UI:CheckInProgress'=>'Please wait during integrity check',



	'JSOFT_SOLUTION_Update:UI:SetupLaunch' => 'Launch '.ITOP_APPLICATION_SHORT.' Setup',
	'JSOFT_SOLUTION_Update:UI:SetupLaunchConfirm' => 'This will launch '.ITOP_APPLICATION_SHORT.' setup, are you sure?',

	// Setup Messages
    'JSOFT_SOLUTION_Update:UI:SetupMessage:Ready' => 'Ready to start',
	'JSOFT_SOLUTION_Update:UI:SetupMessage:EnterMaintenance' => 'Entering maintenance mode',
	'JSOFT_SOLUTION_Update:UI:SetupMessage:Backup' => 'Database backup',
	'JSOFT_SOLUTION_Update:UI:SetupMessage:FilesArchive' => 'Archive application files',
    'JSOFT_SOLUTION_Update:UI:SetupMessage:CopyFiles' => 'Copy new version files',
	'JSOFT_SOLUTION_Update:UI:SetupMessage:CheckCompile' => 'Check application upgrade',
	'JSOFT_SOLUTION_Update:UI:SetupMessage:Compile' => 'Upgrade application',
	'JSOFT_SOLUTION_Update:UI:SetupMessage:UpdateDatabase' => 'Upgrade database',
	'JSOFT_SOLUTION_Update:UI:SetupMessage:ExitMaintenance' => 'Exiting maintenance mode',
    'JSOFT_SOLUTION_Update:UI:SetupMessage:UpdateDone' => 'Upgrade completed',

	// Errors
	'JSOFT_SOLUTION_Update:Error:MissingFunction' => 'Impossible to start upgrade, missing function',
	'JSOFT_SOLUTION_Update:Error:MissingFile' => 'Missing file: %1$s',
	'JSOFT_SOLUTION_Update:Error:CorruptedFile' => 'File %1$s is corrupted',
    'JSOFT_SOLUTION_Update:Error:BadFileFormat' => 'Upgrade file is not a zip file',
    'JSOFT_SOLUTION_Update:Error:BadFileContent' => 'Upgrade file is not an application archive',
    'JSOFT_SOLUTION_Update:Error:BadItopProduct' => 'Upgrade file is not compatible with your application',
	'JSOFT_SOLUTION_Update:Error:Copy' => 'Error, cannot copy \'%1$s\' to \'%2$s\'',
    'JSOFT_SOLUTION_Update:Error:FileNotFound' => 'File not found',
    'JSOFT_SOLUTION_Update:Error:NoFile' => 'No file provided',
	'JSOFT_SOLUTION_Update:Error:InvalidToken' => 'Invalid token',
	'JSOFT_SOLUTION_Update:Error:UpdateFailed' => 'Upgrade failed ',
	'JSOFT_SOLUTION_Update:Error:FileUploadMaxSizeTooSmall' => 'The upload max size seems too small for update. Please change the PHP configuration.',

	'JSOFT_SOLUTION_Update:UI:RestoreArchive' => 'You can restore your application from the archive \'%1$s\'',
	'JSOFT_SOLUTION_Update:UI:RestoreBackup' => 'You can restore the database from \'%1$s\'',
	'JSOFT_SOLUTION_Update:UI:UpdateDone' => 'Upgrade successful',
	'Menu:JSOFT_SOLUTION_Update' => 'Application Upgrade',
	'Menu:JSOFT_SOLUTION_Update+' => 'Application Upgrade',

    // Missing itop entries
    'Class:ModuleInstallation/Attribute:installed' => 'Installed on',
    'Class:ModuleInstallation/Attribute:name' => 'Name',
    'Class:ModuleInstallation/Attribute:version' => 'Version',
    'Class:ModuleInstallation/Attribute:comment' => 'Comment',
));


