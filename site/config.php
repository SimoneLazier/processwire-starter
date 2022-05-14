<?php namespace ProcessWire;

/**
 * ProcessWire Configuration File
 *
 * Site-specific configuration for ProcessWire
 *
 * Please see the file /wire/config.php which contains all configuration options you may
 * specify here. Simply copy any of the configuration options from that file and paste
 * them into this file in order to modify them.
 *
 * SECURITY NOTICE
 * In non-dedicated environments, you should lock down the permissions of this file so
 * that it cannot be seen by other users on the system. For more information, please
 * see the config.php section at: https://processwire.com/docs/security/file-permissions/
 *
 * This file is licensed under the MIT license
 * https://processwire.com/about/license/mit/
 *
 * ProcessWire 3.x, Copyright 2019 by Ryan Cramer
 * https://processwire.com
 *
 */

if (!defined('PROCESSWIRE')) {
  die();
}

/*** SITE CONFIG *************************************************************************/

/** @var Config $config */

/**
 * Allow core API variables to also be accessed as functions?
 *
 * Recommended. This enables API varibles like $pages to also be accessed as pages(),
 * as an example. And so on for most other core variables.
 *
 * Benefits are better type hinting, always in scope, and potentially shorter API calls.
 * See the file /wire/core/FunctionsAPI.php for details on these functions.
 *
 * @var bool
 *
 */
$config->useFunctionsAPI = true;

/*** INSTALLER CONFIG ********************************************************************/

/**
 * Installer: Database Configuration
 *
 */
$config->dbHost = 'localhost';
$config->dbName = 'processwire';
$config->dbUser = 'root';
$config->dbPass = 'root';
$config->dbPort = '3306';
$config->dbEngine = 'InnoDB';

/**
 * Installer: User Authentication Salt
 *
 * This value was randomly generated for your system on 2022/05/13.
 * This should be kept as private as a password and never stored in the database.
 * Must be retained if you migrate your site from one server to another.
 * Do not change this value, or user passwords will no longer work.
 *
 */
$config->userAuthSalt = '9a9110517a7583a94a2313b24ed3d5da89905c27';

/**
 * Installer: Table Salt (General Purpose)
 *
 * Use this rather than userAuthSalt when a hashing salt is needed for non user
 * authentication purposes. Like with userAuthSalt, you should never change
 * this value or it may break internal system comparisons that use it.
 *
 */
$config->tableSalt = '03e751038457bab3308ce534012d5e7a2e8f7938';

/**
 * Installer: File Permission Configuration
 *
 */
$config->chmodDir = '0755'; // permission for directories created by ProcessWire
$config->chmodFile = '0644'; // permission for files created by ProcessWire

/**
 * Installer: Time zone setting
 *
 */
$config->timezone = 'UTC';

/**
 * Installer: Admin theme
 *
 */
$config->defaultAdminTheme = 'AdminThemeUikit';

/**
 * Installer: Unix timestamp of date/time installed
 *
 * This is used to detect which when certain behaviors must be backwards compatible.
 * Please leave this value as-is.
 *
 */
$config->installed = 1652468914;

/**
 * Installer: HTTP Hosts Whitelist
 *
 */
$config->httpHosts = ['localhost:8080', 'localhost'];

/**
 * Installer: Debug mode?
 *
 * When debug mode is true, errors and exceptions are visible.
 * When false, they are not visible except to superuser and in logs.
 * Should be true for development sites and false for live/production sites.
 *
 */
$config->debug = true;
