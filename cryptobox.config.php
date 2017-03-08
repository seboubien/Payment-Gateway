<?php
/**
 *  ... Please MODIFY this file ... 
 *
 *
 *  YOUR MYSQL DATABASE DETAILS
 *
 */

 define("DB_HOST", 	"lbqm.myd.infomaniak.com");				// hostname
 define("DB_USER", 	"lbqm_BTC1");		// database username
 define("DB_PASSWORD", 	"n9Mv7rLL7xxqgTFH6BX");		// database password
 define("DB_NAME", 	"lbqm_BTC");	// database name




/**
 *  ARRAY OF ALL YOUR CRYPTOBOX PRIVATE KEYS
 *  Place values from your gourl.io signup page
 *  array("your_privatekey_for_box1", "your_privatekey_for_box2 (otional), etc...");
 */
 
 $cryptobox_private_keys = array(9138AAowi9RBitcoin77BTCPRVSDOgAmm5W3yX5x0HnZWf0my4);




 define("CRYPTOBOX_PRIVATE_KEYS", implode("^", $cryptobox_private_keys));
 unset($cryptobox_private_keys); 

?>
