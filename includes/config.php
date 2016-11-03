<?php 

//This file contains configuration settings, like database settings
//For security reasons, this file should be placed in webroot

// Define project status
define('PROJECT_STATUS','development');

// Language settings (Dutch)
setlocale(LC_ALL, 'nl_NL');

// Database settings
define('DB_HOST','localhost');
define('DB_NAME','21319_myband');
define('DB_USERNAME','willemElfring');
define('DB_PASSWORD','12345');




//define('DB_HOST','localhost');
//define('DB_NAME','ingrid');
//define('DB_USERNAME','root');
//define('DB_PASSWORD','');

define('NR_ITEMS_PER_PAGE',2);
?>
