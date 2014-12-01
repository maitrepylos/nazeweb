<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'gaillarde');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WAAB$m49?6;I-[i/]S8E5DULHgX4o&4H+%5vRZ`giat9?8OzH0+rJ?$jV4U$2a|M');
define('SECURE_AUTH_KEY',  'dh+^hL{La~P!5=FLl[bl-D66wcrOS-GmPg|UE}S-AS&0$Spf}6 4?cF8KJ|^+;lW');
define('LOGGED_IN_KEY',    ']74sg8/X:O-U]G2LsK%F]|+YtV+loA|F8r,`sM<8{$l;oebxbC/jpTaB.yIi.mrg');
define('NONCE_KEY',        'skzA&jxJu;95z&O0BqHIGs^w5{rTYg`$=+X1~`0o*gvNUO_my/QvW=-![0hReLir');
define('AUTH_SALT',        'r{.&n54t|,MG]n&NwB#*OXxz0Zj!CV7%oy+c1YzODYU#vO&;|DPGds91gv)Xqzyt');
define('SECURE_AUTH_SALT', 'VzJ/mD*:9B_u|(:=(J]@<9.}5i.EMppr0[iz-)VvP{EJX&FVQQQx>vf3@e6,Scb!');
define('LOGGED_IN_SALT',   'LYhI,MB7h;+8jQ~>,SM}<4gSX$|9LCB96t9#&~`2MRK2Y:W7kT*#>/JC3EBZ*Ml-');
define('NONCE_SALT',       'dU]PPTzh~YdjF 6jHUn=VSGzdp9{<,W:Vscj4+|$r3CgGdz8PmR#Lb!dnj8ed|^.');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');