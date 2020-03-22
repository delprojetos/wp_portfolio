<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpportfolio' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H>>m4J@Qu{mbHtAfV)<i[zO*/7B:M`@hRZ0YxZ,O**q:%A#=/VTEe[h:j%/;u$XV' );
define( 'SECURE_AUTH_KEY',  'AF)`.L_vaQr?,,x,l6)gy<h3lc#L2C)|5oXM%YuLra|%eJAtx=O,UO$J]1lxvw^z' );
define( 'LOGGED_IN_KEY',    'S?b)]VX^Jpupu~7{)bHxdHa4/Yf[a`>ucm0DJZV,?|(5^rB/}rW@jbr)=*QaW#-J' );
define( 'NONCE_KEY',        'S]U~u?LcPtZ9_<xBer!S>rAII1acbeN?*=`P^9J_aR|cUkj~?PxUMSEsWR9}dTru' );
define( 'AUTH_SALT',        '*HO=8=XG|^B4!] LDHN>1!vnw.ov :c/ImUHTgv`cz86#IC$$:(P,_y#s]abg;Wp' );
define( 'SECURE_AUTH_SALT', '<Y37iA]x]5jC$R3~tZ,;`OC}E,VP7jH,fJv&j0nZ)TS<!-=h<k{TKz1kD&i&R7s;' );
define( 'LOGGED_IN_SALT',   'V(ii!w&|GQ_#!NOkmx7eC]DkmC.Y5!u=z1H0A_s6y3_6REB%/c.CF,v2O+&a(&.D' );
define( 'NONCE_SALT',       'd;/KB+}]KrlM9l_?(8X:U*U$y+d4uV_h&EGju8}Z,u)0X:s`,~2:H6GQhK*t+5eQ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpcrs_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
