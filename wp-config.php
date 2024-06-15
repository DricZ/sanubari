<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'sanubari' );

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
define( 'AUTH_KEY',         '_Pf|H)Ug$/H,Hz/nJsa}#[^^(>uRJymTXc!T1+F*RyNR@t_UY~`:nQX1w]{P)B>x' );
define( 'SECURE_AUTH_KEY',  'p[noys-Vs4Yxqpkgb!?%t1rwJLOKXtJS?EW,*8xy9oy!L1Gn]($VQ3J.a[pR85P]' );
define( 'LOGGED_IN_KEY',    '1@.IpE}dAaUU>eg%#^KQ%!6TWeza,Ycq:$vhq!$[_MGirUJPJ^Z VIg8}@&yNH)S' );
define( 'NONCE_KEY',        '=8d1(>b&J)gWr,/sxL EG0?+pC$}|Thqx5*#P!;<D?5U~_;8?MOZuF4YQM.0eod0' );
define( 'AUTH_SALT',        ',e`i>)z=QoYK[.5W2V-t|,n7YCW+`gVZS_G!x7gJjyo-?uoylpU{W2&qx4YIy#a|' );
define( 'SECURE_AUTH_SALT', '>e+h|RVK4%60+oy^D&ECvt%`M9q3A];4^_~:%9YE`cmd+cVbeL P3R@qA_<.[1[k' );
define( 'LOGGED_IN_SALT',   'm=H$:jgWw8%]O<Q--*1F<t.>~}Z{c[an+~h>4#?Z#Ze2c;;(-sVr%H80!g/WP{^,' );
define( 'NONCE_SALT',       '&B9!1p&?1{CB:65Q-@}~L+-W5BX=2|<:h/ cl)x`G`<,eXg,4g4+pf|5Xp1iYsm%' );

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
