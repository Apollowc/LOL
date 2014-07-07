<?php

//$curl=new curl("https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/KelvinD?api_key=81a9f77d-eb19-4581-a58e-afc46b10ed0b");
//$curl->api_conn_summoner();
//$curl->json_print();
class curl{
    public $url,$summoner,$games,$retval;
    const API_GAME="https://na.api.pvp.net/api/lol/na/v1.3/game/by-summoner/";
    const API_KEY="81a9f77d-eb19-4581-a58e-afc46b10ed0b";
    function __construct($url){
        $this->url=$url;
        
        }
    function api_conn_summoner(){
        $curl=curl_init($this->url);
        if(!$curl) die("url has something worng!");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
        $response=curl_exec($curl);
        curl_close($curl);
        $response_decode=json_decode($response,true);
     foreach ($response_decode as $name => $info) {
        foreach ($info as $entry => $val) {
            $this->summoner[$entry]=$val;
            }
        }
          $this->retval=$this->summoner;
        
        $curl=curl_init(self::API_GAME.$this->summoner['id']."/recent?api_key=".self::API_KEY);
        if(!$curl) die("url has something worng!");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
        $response=curl_exec($curl);
        curl_close($curl);
        $response_decode=json_decode($response,true);
        $this->games=$response_decode['games'];
        $this->retval['games']=$this->games;
        }

        
    function json_format_print(){
         $this->response=json_decode($this->response,true);
            echo "<pre>";
       echo ($this->response);
        echo "</pre>";
        }
    function json_print(){
        

          header('Content-type: application/json',true);
            echo json_encode($this->retval);

        }
    
    }
    ?>