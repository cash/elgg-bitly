define(['require', 'jquery', 'elgg'], function(require, $, elgg) {

    $(document).on('click', "#bitly-submit", function(e) {

        e.preventDefault();
        
        var url = encodeURI($("#bitly-url").val());
        var username = $('#bitly-url').attr('data-username');
        var api_key = $('#bitly-url').attr('data-apikey');
        console.log(url); console.log(username); console.log(api_key);
        
        $.ajax({
            url: "https://api-ssl.bitly.com/v3/shorten",
            dataType: "jsonp",
            data: {
                login: username,
                apiKey: api_key,
                longURL: url,
                format: "json"
            },
            success: function(data) {
                $("#bitly-url").val(data.data['url']);
                $("#bitly-url").focus();
                $("#bitly-url").select();
            }
        });

    });
});