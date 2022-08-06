$(document).ready(function () {
    let ciudad = '';
    let actionAjax = "filter_representantes";
    let urlAction = '/wp-admin/admin-ajax.php';

    var ajaxRepresentante = function (ciudad, actionAjax, urlAction) {
        $.ajax({
            cache: false,
            url: urlAction,
            data: {
                "action": actionAjax,
                "id": ciudad,
            },
            type: 'POST',
            beforeSend: function () {

            },
            success: function (data) {
                $('#representates').html(data);
            }
        })
        return false;
    };

    $('#buscar-representante').click(function () {        
        ciudad = $('#cidade').val();
        ajaxRepresentante(ciudad, actionAjax, urlAction);
    });

})