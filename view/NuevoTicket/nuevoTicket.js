function init() {
    $("#ticketForm").on("submit", function(e) {
        guardarEditar(e);
    });
}

$(document).ready(function() {
    $('.ticketDescription').summernote({
        height: 150
    });

    $.post("../../controllers/categoria.php?op=combo", function(data, status) {
        $('#ca_id').html(data);
    });
});

function guardarEditar(e) {
    e.preventDefault();
    let formData = new FormData( $("#ticketForm")[0] );
    $.ajax({
        url: "../../controllers/ticket.php?op=insertar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos) {
            $('#ti_titulo').val('');
            $('#ti_descripcion').summernote('reset');
            swal({
                title: "Correcto",
                text: "Ticket Ingresado",
                type: "success",
                confirmButtonClass: "btn-success",
                confirmButtonText: "Success"
            });
        }
    });
}

init();