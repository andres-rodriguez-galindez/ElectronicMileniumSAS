$(document).ready(function () {

    $("#submitConsultar").click(function () {

        var codProd = $("#codProducto").val();

        if (codProd == '') {
            alert("Por favor complete todos los campos.");
            return false;
        }

        $.ajax({
            type: "POST",
            url: "../services/obtener_producto.php",
            data: {
                codProd: codProd
            },
            cache: false,
            dataType: "html",
            success: function (data) {
                var response = JSON.parse(data);
            console.log(response);
                $("#codProd").val(response[0][0]);
                $("#nomProd").val(response[0][1]);
                $("#marcProd").val(response[0][2]);
                $("#precProd").val(response[0][3]);
                $("#cantProd").val(response[0][4]);
            },
            error: function (xhr, status, error) {
                console.error(xhr);
            }
        });
        return false;

    });

});
