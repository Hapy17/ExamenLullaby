<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'examen_lullaby' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>@A5*41i)t|yJ[TeG-Z2|h4}1$1{.a`0,`Q+6=8kckgMlAhUd}S}Iqr G|0:1`HY' );
define( 'SECURE_AUTH_KEY',  '`v!V<D5 UgVn-|V?YA*E`7:004z%-d@ d/-tX+Z|v_Rr|aEGhbMUm2SIQVX-r{))' );
define( 'LOGGED_IN_KEY',    '$$5{rV0#GFU*<kePz]5|af<4~C6 h+=WY?#DR5Cc<spA6oeDIoql )+YK,PKyQu+' );
define( 'NONCE_KEY',        '& H3&c;1o[OX4?%MmEE?nNb@CuQ&b+o):dePG6DR.z>Nf6Q5|k}GjoV2,I.bz9dh' );
define( 'AUTH_SALT',        'idtm|#r{R&!k]:HWh$&f4o,e+NB20ttl,6<Qju@Nx[2(?90x1@T0@1vdysDYHu46' );
define( 'SECURE_AUTH_SALT', ':yH_jc<wRzfPYZYTwWsSZuLDHq4@C}sbwT_^p9=D4?/l.>poBiV{]_Nv1ek$Kjh}' );
define( 'LOGGED_IN_SALT',   ')$UMuurRX@:Yhxln8J<RIhp3rPhgm!{sgJBnT5BNqD|4f5)OnZA<2]=8U[qgq`2[' );
define( 'NONCE_SALT',       'Tp=>&;,];fm#B;i5I1]RHvWdY]%/03{Ir yr*DC?>rN]B7I%=n:Mr}_ql.&7G -K' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
