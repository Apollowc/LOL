<?php
require_once("class.php");
require_once("php_func.php");
require_once("global_var.php");
//$url_summoner="https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/RiotSchmick?api_key=81a9f77d-eb19-4581-a58e-afc46b10ed0b";
//    $curl=new curl($url_summoner);
//    $curl->api_conn();
//    $response=$curl->response;
//        $curl->json_print();
if(isset($_POST['submit']) && isset($_POST['summoner']) && isset($_POST['region']) && isset($_POST['url'])){
    $url_summoner=sanitizeString($_POST['url'])."?api_key=".$api_key;
    $curl=new curl($url_summoner);
    $curl->api_conn_summoner();
    
//    $summonerId=$response[strtolower(sanitizeString($_POST['summoner']))]['id'];
//    $summonerLevel=$response[strtolower(sanitizeString($_POST['summoner']))]['summonerLevel'];
//    $url_game=$api_game.$summonerId."/recent"."?api_key=".$api_key;
//    $curl_game=new curl($url_game);
//    $curl_game->api_conn();
//    echo $summonerId;
//    echo $summonerLevel;
    $curl->json_print();
   }
    ?>