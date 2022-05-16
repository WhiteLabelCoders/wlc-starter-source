<?php
/**
 * FH Starter
 *
 * @package FH-theme
 * @author  Mateusz Major
 * @link    https://frontend.house/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
};

require_once __DIR__ . '/inc/Core/Helpers.php';
require_once __DIR__ . '/vendor/autoload.php';

$setup = new FH\Core\Theme();
$setup->hooks();
$setup->class_loader(
	array(
		'FH\Blocks\BlockFAQ',
		'FH\Components\Header',
		'FH\Components\Footer',
		'FH\Components\LoopPosts',
		'FH\Views\Page',
		'FH\Views\Blog',
		'FH\Views\SinglePost',
		'FH\Views\HomePage',
	)
);
