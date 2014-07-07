<?php

function my_header(){
echo <<<_Header
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="js/form_validate.js"> </script>


<title>LOl_engine</title>


</head>
_Header;
}

//add javascrpit here
function my_footer(){
echo <<<_Footer
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/ajax.js"> </script>
</html>
_Footer;
}
	
?>