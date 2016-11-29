<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp-responsive');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bd!t0~^qhy{.r=YA{T{[D8Eel[~WqTbdj^wU}g)dD=KO[_{6!;a/`1TB|Gb!>}9V');
define('SECURE_AUTH_KEY',  '@j,XXc%Y*s4?rNV/K.(gZnk88QFf X}FbH6_TJ <t_aE/gd<`af[9qV)~F+ &b#7');
define('LOGGED_IN_KEY',    '%;1_1q8/58Vim?pNMbGa;Aw-cT}#xyk7Y>!td~:2/)4|[Yfes(yHh3x2/=7oe!<7');
define('NONCE_KEY',        'k(>X!Nfu(``IBa.Iz |y>rSvqNf|RJw8$Rn/uBa.%r/O#Q*Ppn+|(-rSt7]Okp5h');
define('AUTH_SALT',        '|!z$K9s6E==QrXmVlKu)zRP{8sdjrf1|8|Cp>8c9=+1Z=g]Z/o{haSV@A[BN(PtM');
define('SECURE_AUTH_SALT', 'v]NwHYUGu,g e4&JBOG|1Fd2}vzCG^[4}gUS*bM#!tCP`@kS`N,^W-N6;qj7K,8u');
define('LOGGED_IN_SALT',   '}h{KTS|kGE5TDUI*IVm0:fxjYw3}f64~0o?o?U|x1+ RTF#]|~J**!Th|;@+73mw');
define('NONCE_SALT',       ']([X:mguiCQEnrF1HyR26rq%p nW;Wa}c?tnxD{d=<3hP~5)lZO6<=vW_P-r`+TV');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
