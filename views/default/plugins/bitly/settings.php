<?php
/**
 * bitly plugin settings
 */

// set default values
if (!isset($vars['entity']->username)) {
	$vars['entity']->username = '';
}
// set default values
if (!isset($vars['entity']->api_key)) {
	$vars['entity']->api_key = '';
}

echo '<p class="mtm">';
echo parse_urls(elgg_echo('bitly:settings:instructs'));
echo '</p>';

echo '<div>';
echo elgg_echo('bitly:settings:username');
echo elgg_view('input/text', array(
	'name' => 'params[username]',
	'value' => $vars['entity']->username,
));
echo '</div>';

echo '<div>';
echo elgg_echo('bitly:settings:api_key');
echo elgg_view('input/text', array(
	'name' => 'params[api_key]',
	'value' => $vars['entity']->api_key,
));
echo '</div>';

