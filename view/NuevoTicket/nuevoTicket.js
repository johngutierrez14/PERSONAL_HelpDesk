
function init(){
   
    $("#ticket_form").on("submit",function(e){
        guardaryeditar(e);	
    });
    
}

$(document).ready(() => {
    $('.summernote').summernote({
        height: 150,
        placeholder: 'Escribe aquí...'
    });
    $.post("../../controller/categoria.php?op=combo", (data, status) => {
        $('#id_categoria').html(data);
    });
});

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#ticket_form")[0]);
        $.ajax({
            url: "../../controller/ticket.php?op=insert",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(datos){  
                console.log(datos);
            }  
        }); 
}

init();


