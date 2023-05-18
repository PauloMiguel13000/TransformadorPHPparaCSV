<?php
$file=fopen("arquivo-escrita","r");
while(!feof($file)){
$content=fgetcsv($file);
$count=count($content);
for ($i=0; $i<$count; $i++){
echo $content[$i]."\t";
 

}

}



?>