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
define('DB_NAME', 'mjdevelopz');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
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
define('AUTH_KEY',         '(o~Tl{ }{L;1 ++kSg nC;~aw2[sBSy3T%[=><j5|UHZ-D-hNVNn-wDov]7W#Lh6');
define('SECURE_AUTH_KEY',  '?8wM%gu9-|mvLmq<%&YZ~?tKny+le^_,5ie;p-Y3A+EU:XK7]VNOe@,+_(z5S8ga');
define('LOGGED_IN_KEY',    '@};<V^Ek-ne+;fEGA!js9Z;on#Lxc/Mg7WE7Nj`ehFa0fA;=XbOjg;^p3XS L7K-');
define('NONCE_KEY',        '/w^Wy*:NR&%wOxSF^aI<2aDwiRsp$-27cb2Z{B0W`r-6;$@^Cx[`(LpH PZ%js,X');
define('AUTH_SALT',        '(Y5g|{G!1=TvY,#,09*wTP`d+@s~gk3*#.pElnTnU|3V|8)|mv0uSWeyV|583bs3');
define('SECURE_AUTH_SALT', 'L!P+F?pc2 Bc/zi[n=S74rB9Jt~W`l9$nCvVJ4r={{#y,=gwE-HBjlj04%P!HZr7');
define('LOGGED_IN_SALT',   'YBUSGpj`WS]Us@@([-(K4*@v(Io<&z3e2UqF[COLeeGhsf vm]n[fnOs^}<Y=Ba_');
define('NONCE_SALT',       'yU](v7[X0AsWWD!aiVziS/v`6%~zn]>]!GR#.Faga?!Zn]e(1t`~.ot 3e+%/Ds|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
