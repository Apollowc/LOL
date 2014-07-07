<?php
require_once("html_hf.php");
require_once("global_var.php");
require_once("php_func.php");

require_once("class.php");
require_once("php_func.php");
//header starts here
my_header();

//body starts here

echo <<<_Body
<body>

<div align="left" >
<img border="10" src="image/images.jpeg" width="1024" height="200">
</div>
<br>
<div align="left" id="form">
<form name="search" onsubmit="return validate(this)" >
<div style="vertical-align: middle;" > 
<input type="text" name="summoner">
 <select name='region'>
  <option value="na">na</option>
  <option value="eu">eu</option>
  <option value="br">br</option>
</select>
<input type="hidden" name="url">
 <input type="submit" name="submit" value="Submit">
 </div>


</form>

<div id="output" style="display:none">
 <div id="summonerName" ></div>
 <div id="summonerLevel"></div>

</div>
_Body;
echo "<hr>";
echo "<div id='match_history' style='display:none'>";
for($i=1;$i<=10;$i++){
$id="Game_".$i;
$kills=$id."_kills";
$golds=$id."_golds";
$assists=$id."_assists";
$death=$id."_death";
$KDA=$id."_KDA";
echo "<div id=$id>Game_$i";
echo "<div id=$kills></div>";
echo "<div id=$assists></div>";
echo "<div id=$death></div>";
echo "<div id=$golds></div>";
echo "<div id=$KDA></div>";
echo "</div>";
echo "<hr>" ;   

}
echo "</div>";
echo "</body>";

    



//footer starts here
my_footer();
?>