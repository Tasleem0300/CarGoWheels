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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'CarGoWheels' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '} ^xqkM>l&<f]Z2{FKOf?(^/XV*_`?kX{Phac0}|Gb4(4(imi{M2<rZKd:RA6d8k' );
define( 'SECURE_AUTH_KEY',  'A$z5P,LV-oDyFF4V#8:hKrB73TS8bCD|gq_maf1k-lv@unCeqw#8qO/0w:IN419 ' );
define( 'LOGGED_IN_KEY',    'zI]f=3b/qL:!)]K]6s.0H|jlbVQ0fjGQVYZf>7J)J*AuPxs9nN[5<c0q /H+p2|,' );
define( 'NONCE_KEY',        '?T&*e,;+_YsZN~E45sNNHOPBH8f<7R!(Rk.XDA<Xem4j~uLX&%K^Cuq)ncuuBYpW' );
define( 'AUTH_SALT',        'C!X~~rpJlA.p<K4>Ue@L//iv[kqb>NHiHfO}u{A$rf=?5/EK6qs88>9vh;Bav_lr' );
define( 'SECURE_AUTH_SALT', 'oUC}S115iZd/0$)OGrgjB=G+5^5aCGH3P78Gbm2f]>w1L-b&~fpvzu_E(>AQ`Z;&' );
define( 'LOGGED_IN_SALT',   '?brWrFq_$-;GbF6/lJqDg&KGysPa^]b]bXFW{$>pHl3zs#1f[`4l4389E_P^] hU' );
define( 'NONCE_SALT',       '1{ %qzQk7@ke Q(,:N?Yvfmk3$WH8N*66]L83}[lv%5Z^]a%VB^:DF(y2lB4;gYq' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
