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
 * @link    https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// Project root path
$root = dirname(__DIR__);

// Composer autoloader
require_once $root.'/../vendor/autoload.php';

// dotenv
$dotenv = new Dotenv\Dotenv($root.'/../');
$dotenv->load();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_SERVER'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', getenv('SITE_URL'));
define('WP_SITEURL', getenv('SITE_URL').'/wordpress');

define('DISALLOW_FILE_EDIT', true);

define('WP_AUTO_UPDATE_CORE', true);

define('DISABLE_WP_CRON', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't6t9a#-~BB<kdk`6X0K0+Fh8F6L|B<VV*h axktC1_|r;.7q5uq^vTlrd`yH]/l<');
define('SECURE_AUTH_KEY',  '1WuQD[!aauuIBH#j|8dq0ms7<_Oo6:W)[.=ffY5 *eNp51d4;x|N[S]@@Z|>b-2p');
define('LOGGED_IN_KEY',    '0DJi$zq?M->V$A_8}#XWrAPT&+;IRu9}6[_,kq#XahMYXOTr8IWt5i:%9YdPsquQ');
define('NONCE_KEY',        '};F|D-[jRK|Le~m~HwL&&V5r+jOk=FEuD+=nS{U8xBWlcW!X?EIx|>xoN[JUTd.:');
define('AUTH_SALT',        'n|Q=OFJnHb-~k3ex|~ftj%HQ*yI9:k0(&00jCfr)607.X<`R&p/Pi<5.YhuB/cFw');
define('SECURE_AUTH_SALT', '2?$ok>=98ltL+;.tM)vVlD{Tqo<YfCyB&2`8@!UoDYmkS_8C}m/Ez_zLA`hi~V_v');
define('LOGGED_IN_SALT',   '^nKN>2Hx4r{q4L-+]fQMi9$90j>WR_>{|&|P$e}jB#W|_Z<,@JL&QP<~X6R8o^7l');
define('NONCE_SALT',       'g G9*7![Z#87+?mMI+ip^:-~?rmCRJv*@-``-{/m|$PZ v79D@.n3@h#m+We6~71');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_TABLE_PREFIX');

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
define('WP_DEBUG', filter_var(getenv('DEV_MODE'), FILTER_VALIDATE_BOOLEAN));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH.'wp-settings.php');
