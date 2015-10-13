<?php
/**
 * bit.ly URL shortener plugin
 *
 * @author Cash Costello
 * @license GPL2
 */

elgg_register_event_handler('init', 'system', 'bitly_init');

function bitly_init() {
	//elgg_register_js('urlshortener', 'js/bitly/shortener.js', 'footer');

	elgg_extend_view('css/elgg', 'css/bitly');
}
