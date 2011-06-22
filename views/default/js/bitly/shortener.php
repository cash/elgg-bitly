<?php
/**
 * JavaScript library for bit.ly shortener
 */

$username = elgg_get_plugin_setting('username', 'bitly');
$api_key = elgg_get_plugin_setting('api_key', 'bitly');

?>

elgg.provide('elgg.bitly');

elgg.bitly.init = function() {
	$("#bitly-submit").live('click', elgg.bitly.submit);
}

/**
 * Submits the URL to
 *
 * @param {Object} event
 * @return void
 */
elgg.bitly.submit = function(event) {

	var url = encodeURI($("#bitly-url").val());

	$.ajax({
		url: "http://api.bitly.com/v3/shorten",
		dataType: "json",
		data: {
			login : "<?php echo $username; ?>",
			apiKey : "<?php echo $api_key; ?>",
			longURL : url,
			format : "json"
		},
		success: function(data) {
			$("#bitly-url").val(data.data['url']);
			$("#bitly-url").focus();
			$("#bitly-url").select();
		}
	});

	event.preventDefault();
}

elgg.register_hook_handler('init', 'system', elgg.bitly.init);
