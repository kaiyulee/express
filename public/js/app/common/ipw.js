define(function(require, exports, module) {
    $(function(){
        var timer;
        $(document).ajaxStart(function(){
            var loadingHtml = '';
            loadingHtml += '<div class="loading">';
            loadingHtml += '    <img src="/svg/flickr.svg">';
            loadingHtml += '</div>';
            timer && clearTimeout(timer);
            timer = setTimeout(function(){
                $('.top-navbar-inner').append(loadingHtml);
            }, 100); // if ajax call takes more than .6 seconds, show loading...
        });
        $(document).ajaxStop(function(){
            clearTimeout(timer);
            $(document).find('.loading').remove();
        });
    });

    module.exports = {
        ajax: function(type, url, data, callback, options){
            var cfg = {};
            $.extend(cfg, options);
            $.ajax({
                url: url,
                type: type,
                data: data,
                dataType: 'json'
            })
            .done(function(data, textStatus, jqXHR) {
                callback.call(this, data, textStatus, jqXHR);
            })
            .fail(function( jqXHR, textStatus, errorThrown){
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);

            })
            .always(function() {
                console.log('Request Finished!');
            });
        },
        get: function(url, data, callback, options){
            this.ajax('get', url, data, callback, options);
        },
        post: function(url, data, callback, options){
            this.ajax('post', url, data, callback, options);
        },
        asweet: function(type, title, body, callback, cfg) {
            var options = {
                title: title,
                text: body,
                type: type,
                showCancelButton: false,
                confirmButtonColor: '#dd6b55',
                confirmButtonText: 'Yes, do it!',
                cancelButtonText: 'Cancel',
                closeOnConfirm: true,
                closeOnCancel: true,
                html: true
            };
            swal($.extend(options, cfg), function(isConfirm) {
                if(isConfirm){
                    if (callback != undefined)
                        callback.call(this);
                } else {
                    swal('Cancelled!', '', 'error');
                } 
            });
        }
    }  
});
