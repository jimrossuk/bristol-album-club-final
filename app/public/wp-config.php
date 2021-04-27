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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v4Gc5Ogif7Q5Kq1kDwuCDKwS5skHpJyDr8B6BJoD9Cu5q8WJS/Xzl8ApXXPuLRQIDhFYALniAom76Ywwdtlvrw==');
define('SECURE_AUTH_KEY',  'cjQWmEAwLxPKVSl/AMruLc3b/TooslYGnvVk4YvCaFJAMQbCtOhQ1kZigKAqsH3jupC9yokBIUz+SMezUpT0yw==');
define('LOGGED_IN_KEY',    '7tAiWZaFvKmV2bA0EkHnD1MDrXJnCXWw1+H+3j2lAYuxBo+IVDC6ed9jYwovovTtksqT/7wH5RF7PaCKZ3CTtQ==');
define('NONCE_KEY',        'b2/56A6+gzsP0o/aB1PVt6wpQxG8S2ssm486IcngyuBVQSZ1xRniXq42uSF8xAyLqEcb35xO7jWbz9ztCB6XgA==');
define('AUTH_SALT',        'SjlIt0s0HfwkSPSg4rT2Myok37wcE/WIg24GC8H6wrxuYUlq3IAqj5HGm9GcCaSgA0VfmIf3KuJ4d8kb7xtb0Q==');
define('SECURE_AUTH_SALT', '85K5k18s74BcGci2Dd08tvPJo0ktrvzWFuN9Yoc5Fb91oVSzEuLQNYfHVfHdq1cW9bnI29NS8BcZT2ku9ZpVww==');
define('LOGGED_IN_SALT',   'l30M2DPVcfSivfJYWKkC07qDq2oH6UBAUtoqMrE8bCi3C+KY52zfivU2xA3LM+7tphEW2/Qst2KfMxv/k1mNRA==');
define('NONCE_SALT',       'BlnOMfScE1e0ojqH74ko9T3U/hC7uKl4CpQBOp6Zf9dQDQwNQL8T2B/VgKyUGrsr8P6aD4H+I/o+EuMHrQplqw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
