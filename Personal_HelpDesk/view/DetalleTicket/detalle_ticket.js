function init(){


}



$(document).ready(function(){
    var ticket_id = getUrlParameter('ID');
    console.log(id);

    $.post("../../controller/ticket.php?op=listar_detalle", { ticked_id : ticked_id }, function (data) {
        console.log(data);

});

});


var getUrlParameter =function getUrlParameter(sParam){

}

$(document).on("click","#btncerrarticket", function(){
    swal({
        title: "HelpDesk",
        text: "Esta seguro de Cerrar el Ticket?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-warning",
        confirmButtonText: "Si",
        cancelButtonText: "No",
        closeOnConfirm: false
    })
});

init();

