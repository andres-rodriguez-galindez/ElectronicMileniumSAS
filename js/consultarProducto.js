$(document).ready(function () {

    $("#submit").click(function () {

        var codProd = $("#codProd").val();

        if (codProd == '') {
            alert("Por favor complete todos los campos.");
            return false;
        }

        $.ajax({
            type: "POST",
            url: "../services/consultar_producto.php",
            data: {
                codProd: codProd
            },
            cache: false,
            dataType: "html",
            success: function (data) {
                $("#tabla").html(data);
                $("#tabla").css("margin", "5% 20% 20% 20%")
            },
            error: function (xhr, status, error) {
                console.error(xhr);
            }
        });
        return false;

    });

});