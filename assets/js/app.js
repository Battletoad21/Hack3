//-------------------------- list commue -----------------------

$('#rechercheCommune').keyup(showCommune);



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

//-------------------------- list commune newsletter -----------------------

$('#rechercheCommuneNews').keyup(showCommuneNew);



function showCommuneNew() {
    var str = $('#rechercheCommuneNews').val();
    console.log('ok comu');
    if (str.length !== 0) {
        $.get( "http://localhost:8000/information/find/"+str, function( data ) {
            $("#insertCommuneNew").html("");
            $.each(data, function(key, value){
                $("#insertCommuneNew").append(
                    "<option value='"+ value['commune'] +"'>"+ value["commune"]  +"</option>");
            });

        });
    }



}
