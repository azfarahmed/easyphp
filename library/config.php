<?php 
/**
 * Configuration page
 *
 * @author Azfar Ahmed
 * @version 1.0
 * @date November 02, 2015
 * @EasyPhp MVC Framework
 * @website www.tutbuzz.com
 */

//Basic Settings
$GLOBALS['ep_base_url'] = ""; //Base URL
//Dynamic URL changs as per seourl set value
$GLOBALS['ep_dynamic_url'] = ""; //Dynamic URL
$GLOBALS['seourl'] = "true"; //Set true if your server supports htaccess, else if your developing in local environment set it false. 
$GLOBALS['ep_first_page'] = "home"; //Default landing page 

//Database Settings
$GLOBALS['ep_hostname'] = ""; //Database Hostname
$GLOBALS['ep_username'] = ""; //Database Username
$GLOBALS['ep_password'] = ""; //Database Password
$GLOBALS['ep_database'] = ""; //Database Name

//Mailer Settings (In case if you integrate email library)
$GLOBALS['ep_smpt_server'] = ""; //SMPT Server Name
$GLOBALS['ep_smpt_port'] = ""; //SMPT Port
$GLOBALS['ep_smpt_username'] = ""; //SMPT Username
$GLOBALS['ep_smpt_password'] = ""; //SMPT Password

//Comman Views
$GLOBALS['ep_header'] = "header.php"; //Header Template
$GLOBALS['ep_footer'] = "footer.php"; // Footer Template


?>

