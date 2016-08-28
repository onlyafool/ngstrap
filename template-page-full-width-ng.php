<?php
/**
 * Template Name: Full Width Page with Angular
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ngstrap
 */

get_header('ng'); ?>

	<div ng-app="wistoba" id="primary" class="content-area content-area-full">

	<div ng-view></div>

	</div><!-- #primary -->

<?php
app_scripts();
get_footer('ng');
