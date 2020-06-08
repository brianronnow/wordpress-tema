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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'brianronnow' );

/** MySQL database password */
define( 'DB_PASSWORD', '@Hejmeddig2night!' );

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
define( 'AUTH_KEY',         'it[)4=`{&T!^4|P.@A>XtYA%sV:B+mF$`zB=ao(QL sP Q6q/&aMR0,0)x.SblZ@' );
define( 'SECURE_AUTH_KEY',  '7/.70Kx7Yk4S2U$F_U|cR@OPt3B20K(LEeVAmambQy`VE7LwU_dJ>fL&3kh9eEU)' );
define( 'LOGGED_IN_KEY',    '!j9%ufnU_*OIr&Fw{<WZD>hlq*IizE7K<o_*=Nv=:}q`gq/|Uh~DK,TM(R7@mR%2' );
define( 'NONCE_KEY',        '-rWY6{R?HAsO*iqy1(lpZCRbt/ZMD{R(,9Bp}wocEzi;}V:h}{wppmkj9Cm)lt&a' );
define( 'AUTH_SALT',        '[6QTkD(r:Z1QiOgk[4<*z8_4|5>]u :>tatn+)FmIYq,Ejy5XGd0lv=TK+jXoah2' );
define( 'SECURE_AUTH_SALT', 'DB52v|ANI{[7Q5dwF^*G7s4?:WKJ)V`.i2[K.K^M7BMx5D)np%p~EUl=u{Wis=1>' );
define( 'LOGGED_IN_SALT',   'dlLl vgd`(IknB0kdlTP0Ly*Wv&7m 7eC7XSh}0`8)LsUmEFKj`Eu!xsMNu>z8<`' );
define( 'NONCE_SALT',       '$9:=i6Sut(KCv7<h1~2=;/PxS`EWQA|_2Y{Zgc5(6)k?@0+oeQ$l}>mgFI#%?|6!' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
