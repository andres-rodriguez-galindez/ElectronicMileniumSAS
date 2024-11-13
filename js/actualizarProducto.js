$(document).ready(function () {

    $("#submitActualizar").click(function () {

        var codProd = $("#codProd").val();
        var nomProd = $("#nomProd").val();
        var marcProd = $("#marcProd").val();
        var precProd = $("#precProd").val();
        var cantProd = $("#cantProd").val();

        if (codProd == '' || nomProd == '' || marcProd == '' || precProd == '' || cantProd == '') {
            alert("Por favor complete todos los campos.");
            return false;
        }

        $.ajax({
            type: "POST",
            url: "../services/actualizar_producto.php",
            data: {
                codProd: codProd,
                nomProd: nomProd,
                marcProd: marcProd,
                precProd: precProd,
                cantProd: cantProd
            },
            cache: false,
            success: function (data) {
                alert(data);
                $("#codProd").val("");
                $("#nomProd").val("");
                $("#marcProd").val("");
                $("#precProd").val("");
                $("#cantProd").val("");
            },
            error: function (xhr, status, error) {
                console.error(xhr);
            }
        });

    });

});