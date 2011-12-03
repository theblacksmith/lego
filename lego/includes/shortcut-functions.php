<?php

/**
 * Create haml alternatives for the get_* functions
 */
function use_layout($name)
{
	Lego::setLayout($name);
}

function render_partial($name, array $variables = array(), $return = false)
{
	Lego::renderPartial($name, $variables, $return);
}

function yield($name = null)
{
	echo Lego::getContentFor($name);
}

function content_for($name, $content)
{
	Lego::addNamedContent($name, $content);
}

function get_template_module( $module ) {
	Lego::getTemplateModule($module);
}

function composition($name, $variables = array()) {
	echo render_partial("compositions/$name");
}

function brick($name) {
	echo render_partial("bricks/$name");
}

function begin_content_for($name)
{
	Lego::beginContentFor($name);
}

function end_content()
{
	Lego::endContent();
}