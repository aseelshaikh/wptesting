<?php
define( 'WP_CACHE', false ); 
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
define( 'DB_NAME', 'testdb' );
/** MySQL database username */
define( 'DB_USER', 'munim' );
/** MySQL database password */
define( 'DB_PASSWORD', 'gaditek1' );
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
define( 'AUTH_KEY',          'G^A|$E(s#)F&sy?[s|3.D7<Q#k+8<8,JML2zcrV?s.&T3SR@o^~<4H@d9%^za[6=' );
define( 'SECURE_AUTH_KEY',   'B*/@L3toym`0U-7:n?J7Pz,$voV_6$lOu~ ^F8dgBU}Yjqw>T:6$`3FRu4Y:W},S' );
define( 'LOGGED_IN_KEY',     '27IQ7UNLEi)ke#[g=e;hadBD<>4Sz#VJ-? t2bX3jR [WISX}Ewz4F@{&Jr:ZCDk' );
define( 'NONCE_KEY',         ':;^PJ *Bz6Y:IFua&7v&e$u`h:Pa2PfQD/FXJz0q]?%URxr/ oQpi/YDx;VeSq4Q' );
define( 'AUTH_SALT',         'gnQ?z.j{J%Q0/fgJW,KWSS_gEoikJX{aSi*lldFBlRibkgjm#uLq>HENJdz5pq*1' );
define( 'SECURE_AUTH_SALT',  'wviL@-}`s1h]_r8xT#[Ipch[}SU8b/NDj1n C3X@}x[*cuO?GipV0roWdK[2(GL:' );
define( 'LOGGED_IN_SALT',    'fUd]cRzsgL:dM5XZlv=,dXR&4Z<_,yfZ}a=y^>|aF{=ue(J)A=!^xT<e%h62RuN;' );
define( 'NONCE_SALT',        '[Ck|nM6Jq/yO[59L?$6y#KbR4UPVTrq<c8ZBStuUH]vAM=7vm%4Cr3e]D{-S$2D5' );
define( 'WP_CACHE_KEY_SALT', ' ]*ngz&rb_8wut*qR7KzC_|eD:d,y%*P,AY$D.Y2CZg(jqh7z3jW|$3?f0!Ti9:0' );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/** Allow Direct Updating Without FTP*/
define('FS_METHOD', 'direct');
/** Disable Editing of Themes and Plugins Using the Built In Editor */
define('DISALLOW_FILE_EDIT', true);
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/**
 * adding this line for varnish for https
 */
define('FORCE_SSL_ADMIN', true);
$_SERVER['HTTPS']='on';
#define( ‘WPCACHEHOME’, ‘/var/www/munim/wp-content/plugins/wp-super-cache/’ );
#define('WPCACHEHOME', true);
#define(‘WPCACHEHOME’, ‘/wp-content/plugins/wp-super-cache/’);
#define('WPCACHEHOME', true);
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');