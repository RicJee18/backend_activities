<?php

function is_lowercase($str){
   if(ctype_lower($str)){
       return "$str  is consist of all lowercase.<br>";
   }else{
       return "$str does not have all lowercase.<br>";
   }
}

echo is_lowercase('gwapo');
echo is_lowercase('GwapaKO');

?>