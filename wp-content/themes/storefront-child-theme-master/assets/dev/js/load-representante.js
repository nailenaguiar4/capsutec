$(document).ready(function () {
    let estado = '';
    let actionAjax = "filter_estados";
    let urlAction = '/wp-admin/admin-ajax.php';

    var ajaxEstado = function (estado, actionAjax, urlAction) {
        $.ajax({
            cache: false,
            url: urlAction,
            data: {
                "action": actionAjax,
                "estado": estado,
            },
            type: 'POST',
            beforeSend: function () {

            },
            success: function (data) {
                $('#cidade').html(data);
            }
        })
        return false;
    };

    $('#estado').change(function () {
        
        estado = $(this).val();
        ajaxEstado(estado, actionAjax, urlAction);
    });

})