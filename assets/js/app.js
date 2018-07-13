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

$('#appbundle_newsletter_email').keyup(showCommuneNew);



function showCommuneNew() {
    var str = $('#appbundle_newsletter_email').val();
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
//------------------horloge--------------------
window.onload=function() {
    horloge('horloge');
};

function horloge(el) {
    if(typeof el=="string") { el = document.getElementById(el); }
    function actualiser() {
        var date = new Date();
        var str = "";
        str += "<div class='hoursandmin'><span class='hours'>" + date.getHours() + "</span>" + ":<span class='min'>" + (date.getMinutes()<10?'0':'')+date.getMinutes() + "</span>" + ":<span class='sec'>" + date.getSeconds() + "</span></div>";
        el.innerHTML = str;
    }
    actualiser();
    setInterval(actualiser,1000);
}