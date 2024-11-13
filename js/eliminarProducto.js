$(document).ready(function () {

    $("#submit").click(function () {

        var codProd = $("#codProd").val();

        if (codProd == '') {
            alert("Por favor complete todos los campos.");
            return false;
        }

        $.ajax({
            type: "POST",
            url: "../services/eliminar_producto.php",
            data: {
                codProd: codProd
            },
            cache: false,
            success: function (data) {
                alert(data);
                $("#codProd").val("");
            },
            error: function (xhr, status, error) {
                console.error(xhr);
            }
        });
        return false;

    });

});