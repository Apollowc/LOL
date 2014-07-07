<?php
    function sanitizeString($var){
        $var=stripslashes($var);
        $var=htmlentities($var);
        $var=strip_tags($var);
        return $var;
        }
    function sanitizeMysql($connect,$var){
        $var=$connct->real_escape_string($var);
        $var=sanitizeString($var);
        return $var;
        }
?>