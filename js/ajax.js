
    
function ajaxCall_summoner(form){    
// Using the core $.ajax() method

$.ajax({
    
// the URL for the request
url: "apiPost.php",
// the data to send (will be converted to a query string)
data: {
submit:form.submit.value,
summoner:form.summoner.value,
region:form.region.value,
url:form.url.value
},
//statusCode
statusCode:{
 404:function(){
        alert("404:Page not found!");
    },
      200: function (response) {
         alert('1');
      }
},
// whether this is a POST or GET request
type: "POST",
// the type of data we expect back
dataType : "json",
// code to run if the request succeeds;
// the response is passed to the function
success: function( data ) {
    //alert('SUCCESS exemple return respone'); 
    //alert(response
            console.log(data);
            //s$("#form").hide();
            $("#output").show();
            $("#content").html(data);

            $("#summonerName").html("Summoner: "+data['name']);
            $("#summonerLevel").html("Level: "+data['summonerLevel']);
            history_show(data);
            
            
},
// code to run if the request fails; the raw request and
// status codes are passed to the function
error: function( xhr, status, errorThrown) {
    
alert( "Sorry, there was a problem!" );
console.log( "Error: " + errorThrown );
console.log( "Status: " + status );
console.dir( xhr );
history(-1);
},
// code to run regardless of success or failure

complete: function( xhr, status ) {
//alert( "The request is complete!" );
    
}

})

}

function history_show(data){
$("#match_history").show();
for(var i=1;i<=10;i++){
  var kills="#Game_"+i+"_kills";
var death="#Game_"+i+"_death";
var assists="#Game_"+i+"_assists";
var golds="#Game_"+i+"_golds";
var KDA="#Game_"+i+"_KDA";

var kill_num=data['games'][i-1]['stats']['championsKilled'];
var death_num=data['games'][i-1]['stats']['numDeaths'];
var assist_num=data['games'][i-1]['stats']['assists'];
var gold_num=data['games'][i-1]['stats']['goldEarned'];
var kda_num=((kill_num+assist_num)/death_num).toFixed(2);
  $(kills).html("Kills:"+kill_num);
$(death).html("Deaths:"+death_num);
$(assists).html("Assists:"+assist_num);
$(golds).html("Gold earned:"+gold_num);
$(KDA).html("KDA:"+kda_num);
}
}