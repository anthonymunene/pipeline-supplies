<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */


// Define Environments - may be a string or array of options for an environment
$environments = array(
	'local'       => array('.local', 'local.'),
	'staging'     => array('pipeline.', '.pipeline'),
	'preview'     => 'preview.',
);

// Get Server name
$server_name = $_SERVER['SERVER_NAME'];

foreach($environments AS $key => $env){

	if(is_array($env)){

		foreach ($env as $option){

			if(stristr($server_name, $option)){

				define('ENVIRONMENT', $key);

				break 2;
			}

		}

	} else {

		if(strstr($server_name, $env)){

			define('ENVIRONMENT', $key);

			break;

		}

	}

}

// If no environment is set default to production
if(!defined('ENVIRONMENT')) define('ENVIRONMENT', 'staging');

// Define different DB connection details depending on environment
switch(ENVIRONMENT){

	case 'local':

		define('DB_NAME', 'pipeline');
		define('DB_USER', 'root');
		define('DB_PASSWORD', 'makeshift82');
		define('DB_HOST', 'localhost:3306');
		define('WP_DEBUG', true);

		break;

	case 'staging':

		define('DB_NAME', 'anthonym_pipeline');
		define('DB_USER', 'anthonym_dbadmin');
		define('DB_PASSWORD', 'makeshift82');
		define('DB_HOST', 'localhost');

		break;

	case 'preview':

		define('DB_NAME', 'database_name_here');
		define('DB_USER', 'username_here');
		define('DB_PASSWORD', 'password_here');
		define('DB_HOST', 'localhost');

		break;

	case 'mobile':

		define('DB_NAME', 'database_name_here');
		define('DB_USER', 'username_here');
		define('DB_PASSWORD', 'password_here');
		define('DB_HOST', 'localhost');

		break;

}


if(!defined('DB_CHARSET'))
	define('DB_CHARSET', 'utf8');

if(!defined('DB_COLLATE'))
	define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V^~99IXM0Lo4QM$fzVw78UDZ34ng.wpH[%UT(kr3$I`s?[2gW*2Z1/Khn{/dPlv>');
define('SECURE_AUTH_KEY',  '==;}gH8)y=3Zegot )d x[NY/Sl];hB~N+SCZq.?D-AC^mMZ[UiYe5pT]WTbU]o,');
define('LOGGED_IN_KEY',    '$D(Ws|CRZ}2Zj-d5T~g?NefWPH9`^*Gz//|]PUD]/%S8nne}K$KG2L#-IM.:6PZQ');
define('NONCE_KEY',        'hgV_/!)lKjM&563am,WanD]Siw(Sz?XS_xO.I&pFn7Q<9!=Fm$TRx5YwJ*7VvLsO');
define('AUTH_SALT',        'e.1,ZA+_sfR_,haGbIaeHd#4OG/Dbo|<cThly[hp1Hcu}E5K1Z; d,(!(CiYHb% ');
define('SECURE_AUTH_SALT', '11X@LIEi&=#ymZxS/&.OmW(-y,JK7rk3tya1kAq_C$^UW)63>Oh>`ET}rbc@M~Jw');
define('LOGGED_IN_SALT',   '&u/^wzwO&?iZ,;Lq1]6?VQJ&hGTZWG:Fd{fD`l=:=T~ko6]Q6(Xs0H.ioJf_H$:R');
define('NONCE_SALT',       'ud: vz9>:MX&^ML{EI*BoY5GJOZz6Tl]BOP)kTy#PL<UErS`<iS^^*(r{thlE1,f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
