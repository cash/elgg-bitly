<?php
/**
 * Display the URL shortener input box
 */

elgg_require_js('bitly/shortener');

$text_input = elgg_view('input/text', array(
	'name' => 'bitly_url',
	'id' => 'bitly-url',
	'data-username' => elgg_get_plugin_setting('username', 'bitly'),
	'data-apikey' => elgg_get_plugin_setting('api_key', 'bitly')
));

$button = elgg_view('input/submit', array(
	'value' => elgg_echo('bitly:shorten'),
	'class' => 'elgg-button-submit mlm',
	'id' => 'bitly-submit',
));

echo '<div class="mam bitly-wrapper">';
echo elgg_view('output/url', array(
	'href' => '#bitly-form',
	'text' => elgg_echo('bitly:shorten:label'),
	'rel' => 'toggle',
));

echo elgg_view_image_block('', $text_input, array(
	'image_alt' => $button,
	'class' => 'hidden',
	'id' => 'bitly-form',
));
echo '</div>';
