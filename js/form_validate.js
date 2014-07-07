onerror=errorHandler
function errorHandler(message,url,line){
    out="Sorry,an error was encountered.\n\n";
    out+="Error: "+message+"\n";
        out+="Error: "+message+"\n";
            out+="URL: "+url+"\n";
            out+="Line: "+line+"\n\n";
            out+="Click OK to contine.\n\n"
            alert(out)
            return true
    }
//document.writ("what");
function validate(form){
    try{
        fail=validateForSummoner(form.summoner.value)
        fail+=validateForRegion(form.region.value)
        if(fail==""){
            url_gen(form)
            ajaxCall_summoner(form)
            //return false so that the page will not refresh
                return false
            }
        else{
                alert(fail)
                return false
            }
        }catch(err){
                print(err);
            }
    }

function validateForSummoner(field){
    return ((field=="") ? "No summoner name has been entered.\n" : "")
  }  
    function validateForRegion(field){
        switch (field){
         case "na":
         case "br":
         case "eu":
         break;
         }
         return "";
        }
        
function url_gen(form){
        url="https://na.api.pvp.net/api/lol/"+form.region.value+"/v1.4/summoner/by-name/"+form.summoner.value;
        
        form.url.value=url
    }
    