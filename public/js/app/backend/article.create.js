/**
 * Created by Kron on 15/6/18.
 */
define(function (require, exports, module) {
    require('plugins/form/jquery.form.min');

    $(function () {
        $('#article-create').ajaxForm({
            dataType: 'text',
            beforeSubmit: function(formData, jqForm, options) {
                // console.log(formData);
                // console.log(jqForm);
                // console.log(options);
            },
            success: function(res) {
                console.log(res);
                if (res > 0) {
                    swal('Article Updated!', '', 'success');
                    $('.save-and-post').addClass('disabled');
                } else {
                    swal('Error occured!', '', 'error');
                }
            }
        });
        
        $('.discard').on('click', function () {
            location.reload();
        });
    })
});
