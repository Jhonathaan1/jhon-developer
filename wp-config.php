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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'mXUZ-ks>dv< !b@|x9]8(j{!kS7>6,wt|noy*0/[4D,$.JQhhg0P[pwBau~xm8Q3' );
define( 'SECURE_AUTH_KEY',  '4k.)UdOrsV(Jcr4s;u7Pmp51G[~#.G+{8;`XVld$PR]OVgj6&J-kfh%c4c{=d3kR' );
define( 'LOGGED_IN_KEY',    '@5GfwMoKLfzb6l_xkf)z[(>0d<x0T[YnMeCk73V(`q> 2}R>aIJd|9CSSTUTsO7}' );
define( 'NONCE_KEY',        'na=Km7Jjh9;@rR{7>,<$e2 ;!{dU4a(QG}2S(2w:A7WbyM}:rL#vF01f!bjTbU#z' );
define( 'AUTH_SALT',        'z4s o*pz*ndDvbri%4^jCJZq-02^1X:U<lHl8PXz*RsA#Zh/@U|moMSn[pQ$5u:R' );
define( 'SECURE_AUTH_SALT', '?{1O|gLgt<{ko953(3h_=&/hjIhvms>j|Q<gP;HQ,WUe+u{5+`:$OE_V4kc4 @K#' );
define( 'LOGGED_IN_SALT',   'N^ytFwNn_1,ox9><CpV-mMoGYoNJ%Jwiz(WMrYlh9`ki%n%LaX(`PH$Z8dqK:`E#' );
define( 'NONCE_SALT',       '-#{^M!b`!2P}>3gr>oG9?|R4$$*8D^Zn!sbx>uSL=U+NUK;2`4~~toOjtPVVQT5B' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
