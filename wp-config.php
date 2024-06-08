<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '?f7w O5v*`:ureT% ?)Bd3&$,c?-ja=TdPja&C!n+G&U;w9S@fW q%GQpicX(:J]' );
define( 'SECURE_AUTH_KEY',  '+5Jx~jvs?*ltXW;~lle6Y6)2El^|-5uoUsi@a)9:4W;MZ [JYR~p <fma8an,<{}' );
define( 'LOGGED_IN_KEY',    'Y4eMrS s*~#AFcxtTGh ?S~z7-mf$;M,![s4(EDQdCF@?y%`w2$Y)r?2:gmq1yt.' );
define( 'NONCE_KEY',        '*J$^b ~aru7>M{^jfSwP^2Eq)T<}>OkPBS@ai+Q&ObScl2[XyF$KhzAxM|ELMqMy' );
define( 'AUTH_SALT',        'P4kF=)]sw~^TT>j2bvMzRCYJHhr$)k6_s;YBs3hK|0IplMZ2RdTM3<6/m,CHiG^W' );
define( 'SECURE_AUTH_SALT', 'L>5~v}5b:;.^]U[#a}AU%No]:Zr3tmKUt+&[_u[A)TYY[KL4C6P+hbUl6,=06-6J' );
define( 'LOGGED_IN_SALT',   'C.$Hc~Aw%2?<<]ke08~,S5nyS9.3~3-R7G8065_c=ka`LASX4R4=dfl2w1lyN-(v' );
define( 'NONCE_SALT',       'Im^NObJJ$wDxxw]76bz94rN]+LDTGlY%48~~k&=vz!4b@N5FsO?,;Xd@_}>|N*!g' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);


/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
