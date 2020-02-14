<?php
function getCsv($name,$number,$radiobutton,$email,$lang,$chb){
    $file = fopen('files/file.csv','wr+');
    $l=[$name,$number,$radiobutton,$email,implode(';',$lang),$chb];
    fputcsv($file,$l,';');   
    fclose($file);
}

function checkCsvTable(){
    $file_read = fopen('files/file.csv','r');
    while(($fileCsv = fgetcsv($file_read, 1000, ";")) !== FALSE){
               
        foreach($fileCsv as $item){
            
            echo "<td>$item</td>";
        }
    }
    fclose($file_read);
}

function getJson($name,$number,$radiobutton,$email,$lang,$chb){
    $fileJson = file_get_contents('files/file.json');
    $listJson = json_decode($fileJson,TRUE);
    unset($fileJson);
    $listJson = [
        "name"=>$name,
        "phone"=>$number,
        "radiobutton"=>$radiobutton,
        "email"=>$email,
        "languages"=>implode(';',$lang),
        "item"=>$chb
    ];
        
    file_put_contents('files/file.json',json_encode($listJson, JSON_UNESCAPED_UNICODE));
    unset($listJson);
}

function getTxt($name,$number,$radiobutton,$email,$lang,$chb){
    $filetxt = fopen('files/file.txt','wr+');
    $text3=[$name,$number,$radiobutton,$email,implode(',',$lang),$chb];
    foreach($text3 as $item){
        fputs($filetxt,$item.';');
    }
    fclose($filetxt);
}





