$(document).ready(function() {
    $('.ticketDescription').summernote({
        height: 150
    });

    $.post("../../controllers/categoria.php?op=combo", function(data, status) {
        $('#ca_id').html(data);
    });
});