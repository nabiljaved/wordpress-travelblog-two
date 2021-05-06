<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'travelblogword2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '34u6nwBD&+Mp67/w`Eber=AA/RssQ@)74Z_F[:N1=P*qb/b9^I|lt9,<TPqEBJ!]' );
define( 'SECURE_AUTH_KEY',  '&^pnOHVGCAKujN7!jKq/,{F$cAR}oIO^vkf+UBRos/P%*B0fEiI5&h(dx$+zG{!;' );
define( 'LOGGED_IN_KEY',    'kJg_e9sy&xY?18m0L_(KI;Ood2$kd&+Cg@J5g5E-T7Rsoc1yMz}C<NaScmu7,0f#' );
define( 'NONCE_KEY',        '.nIg%Iy?e6!meF9.Dc{an]D}#tO0&TVA`P5*5%0c>*ycX%6846-cmPG#YZ=w;bN5' );
define( 'AUTH_SALT',        '5j[^_gY+M+pWoO$IjyCPu~5UcuLTlh`34F&!OU3+:mrfHgJm5K}.EyBr._0k#eUo' );
define( 'SECURE_AUTH_SALT', 'y<zpH)xzy(@YEqVn=BxnG]k2AJ(Jir0ZaT8n;<w,CEMZgM_Z2pnv>GBdnz}eTs+M' );
define( 'LOGGED_IN_SALT',   '3^JYutapMh.FKp>`h+6Ne/5fXKJs#TVYVL?^5]u?vE*&+6qiy4=OJXOl%lSZ8KwA' );
define( 'NONCE_SALT',       'Gr]g3O<`:3`)z{}*K-G]=5_XF2s;?AjQ?_Nw?-6mJ|:yu}:Ydd{4`eLIQ4:evY:8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
