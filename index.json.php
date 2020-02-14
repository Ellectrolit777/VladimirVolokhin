<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Json</title>
    <link rel="stylesheet" href="style.css">
    <style>
body{
    background: black;
    color:blue;
    font-family: "Courier new";
    font-size:20px;
    font-weight:bold;  
}input, select, button {
    background: white;
    color:blue;
    font-size:20px;
    font-weight:bold;
    border-radius:10px;
    margin: 0 auto;
}
button:hover{
    transition: 0.5s;
    border: 3px red solid;
}
td,th{
 padding:10px;
           
}
    </style>
</head>
<body>
<?
    require_once "function.php";
    $filejson = file_get_contents('files/file.json');
    $readFileJson = json_decode($filejson,TRUE);
?>
    <table border="1px">
    <tr>
    <th>Имя:</th>
    <th>Телефон:</th>
    <th>Выбор:</th>
    <th>Email:</th>
    <th>Язык(и):</th>
    <th>Навык:</th>
    </tr>
    <tr>
    <?
    foreach($readFileJson as $key => $item):?>
    <td><?=$item?></td>
    <?endforeach;?>
    </tr>
    </table>
    <input  type="button" onclick="location.href='index.php'" name="exitjson" id="exitjson" value="Назад">
</body>
</html>