<?php
/**
 * Database configuration class.
 *
 * Fill in your own credentials. The `ldap` datasource is used by the
 * CakeLdap plugin for Active Directory authentication (optional; use
 * local database authentication only if you do not configure it).
 *
 * @package app.Config
 */
class DATABASE_CONFIG {

	public $default = [
		'datasource' => 'Database/Mysql',
		'persistent' => true,
		'host' => 'localhost',
		'port' => '',
		'login' => '',
		'password' => '',
		'database' => 'wpkg',
		'schema' => '',
		'prefix' => '',
		'encoding' => 'utf8',
	];

	/**
	 * LDAP / Active Directory datasource (CakeLdap plugin).
	 */
	public $ldap = [
		'datasource' => 'CakeLdap.LdapExtSource',
		'persistent' => false,
		'host' => '',
		'port' => 389,
		'login' => '',
		'password' => '',
		'database' => '',
		'basedn' => '',
		'type' => 'ActiveDirectory',
		'tls' => false,
		'version' => 3,
	];
}
