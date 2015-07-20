define(function(require, exports, module) {
    var ipw = require('common/ipw');
    $(function() {
        $(document).on('click', '.article-preview', function(event) {
            event.preventDefault();
            /* Act on the event */
            var articleId = $(this).parent('li').attr('article-id');
            var url = '/article/' + articleId;
            ipw.get(url, {}, function(res, st, xhr) {
                console.log(res);
                $('#article-assist-modal .modal-title').text(res.title);
                $('#article-assist-modal .modal-body').html(res.content);
            });
        });
        $(document).on('click', '.article-del-warn', function(event) {
            event.preventDefault();
            var delBtn = $(this);
            var c = delBtn.parent().prev('span').text();
            var articleId = delBtn.parent().parent('li').attr('article-id');
            ipw.asweet('warning', 'Are you sure to delete?', c, function(){
                var url = '/backend/article/del/' + articleId;
                var token = delBtn.next('input').val();
                ipw.post(url, {_token: token}, function(res, st, xhr) {
                    console.log(res);
                    if (res) {
                        $('li[article-id="' + articleId + '"]').remove();
                        swal('Article Deleted!', '', 'success');
                    };
                });
            }, {
                showCancelButton: true
            });
            
        });

        // reset bootstrap modal
        $(document).on('hidden.bs.modal', '#article-assist-modal', function () {
            $('#article-assist-modal .modal-title').html('');
            $('#article-assist-modal .modal-body').html('');
        });
    });
});
