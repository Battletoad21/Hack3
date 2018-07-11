//-------------------------- list copro -----------------------

$('#rechercheCommune').keyup(showCommune);

//commune List
console.log('ok');
function showCommune() {
    var str = $('#rechercheCommune').val();
    if (str.length !== 0) {
        $.get( "http://localhost:8000/information/find/"+str, function( data ) {
            $("#insertCommune").html("");
            $.each(data, function(key, value){
                $("#insertCommune").append(
                    "<option value='"+ value['commune'] +"'>"+ value["commune"]  +"</option>");
            });

        });
    }



}