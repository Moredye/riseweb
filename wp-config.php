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
define( 'DB_NAME', 'rise_db' );

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
define( 'AUTH_KEY',         'O<iRE%3O|_.Whq ~igIy)9RO1?6_%O|l}7,1pLQE6CI^?X&.F(/[B=.cwa^LTP }' );
define( 'SECURE_AUTH_KEY',  '%_&jJRoH=k}dY,0o21rY,lX{{bb#fDFfwLsX6-j$xP.0#oDnzVz[/k}rH!cU`w%)' );
define( 'LOGGED_IN_KEY',    'NTa{(, .){7D FU66t+~qP>0Iry_LNr>nGlxO3Uh2f^G4`T`Y+QylA}F7j>v6qD/' );
define( 'NONCE_KEY',        '&.:HUble]Zuo@Oe3orGy#o?t=~|hBz}$,~|YS3r.;?WfT#O5/_p<[+R=:AbdLo%V' );
define( 'AUTH_SALT',        'GLLNe^D=zmTe$HY]g@{4B}/7oS$~)+.e=+!/|dh`:;q+#dr,`p!:@F/xVgPCoh~!' );
define( 'SECURE_AUTH_SALT', ',DC2FArbaL[jgDM5lDe-{w/=045ypi*&vOWh5@x [IE8u~[RoW.ll20_ctiK>bhn' );
define( 'LOGGED_IN_SALT',   '8D=B#o7?Q%*Amt_2h3N|{JA6nQGCaw&Rm%({O$1H/_pa,R: &-#H{W?gF7[fsy,r' );
define( 'NONCE_SALT',       'X{T&<3=edku$~Y=-9JAZBUc.rS}yplH49^=SyVbmd3C+xigrJh/H?O</]c:@|tRd' );

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
