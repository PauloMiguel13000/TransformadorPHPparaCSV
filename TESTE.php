<?php
$handle=fopen("./files/ArquivoCSV.csv","r");
while(($data = fgetcsv($handle)) !== FALSE){
    var_dump($data);

}





?>