<?php

/*
 * Below is the default config structure, uncomment and change to fit your system
 *
 */

class Config extends Core
{
	static protected $DB_USERNAME = "username";
	static protected $DB_PASSWORD = "password";
	static protected $DB_HOSTNAME = "localhost:3309";
	static protected $DB_DATABASE = "courtBooking";

	static protected $SESSION_EXPIRE_LIMIT = 300;

	static protected $ADMIN_EMAIL = "you@yourdomain.com";
	static protected $SITE_NAME = "Site name";
    
	static protected $SMTP_HOST = 'localhost';

	static protected $PEAR_DIR = '/usr/local/var/www/htdocs/courtbooking/pear/PEAR';

	static protected $SITE_ROOT_URL = 'http://yourdomain.com/courtbooking/';

	static protected $PHP_TIMEZONE = 'Europe/London';

	static protected $ENABLE_DEBUGGING = false;
}
?>