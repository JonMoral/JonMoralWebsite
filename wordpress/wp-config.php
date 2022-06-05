<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<?nFSl|T%bvo;Zb*<j?+K)IL&J8322]J-CJ@aA{RT70J9;v2-,+7ux<FvEHA6bB;' );
define( 'SECURE_AUTH_KEY',  '+I<GV(va}r+B#++[xquuxRbn+rnPP?@WZ@hG4{#mk.uR:@bsP)mB?Re5]A/n$GYc' );
define( 'LOGGED_IN_KEY',    'fq M7)=mTP_jO]0Rid7Bi 3do#/PCYp%WEjIV~LLNl]ipW^ =WU8/RV3w,@N`>k:' );
define( 'NONCE_KEY',        'v3bG]^:!~f  fdGgbnCb2L=?&&A=_^4t|8tgQ(#+fpmr61%z8DkR{P+=X90ba;!:' );
define( 'AUTH_SALT',        'HGfe.j.)Lw{?WFX9&A#k5E&W?5]5EtP`(>(PN pE;:W_PmbKAc+`9A^FO0YsW38f' );
define( 'SECURE_AUTH_SALT', 'I1$fUER_%Ji?R`TbU,9/^0n/#1hS6A=A|?)!Yr31L9lU7mo9&z>em9{+waXoq:on' );
define( 'LOGGED_IN_SALT',   ':G5>H&YDE#Ah5jtR&u,G8]JIu)6T!%X%Q$~1P#}*h4)h[l7]rG-Oh*me~iO7QkCm' );
define( 'NONCE_SALT',       'L*?JbLo A)XI;<2C=;X?ArA3+Ih}Qs;)H?uW=xQJdUz8Z!!$n]<4?$*Ct{Yv%-W ' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
