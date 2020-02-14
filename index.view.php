<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<style>


body{
    background: black;
    color:blue;
    font-family: "Courier new";
    color:red;
    font-size:25px;
    font-weight:bold;
    width:55%;
    margin:0 auto;

    
}
input, select, button {
    background: white;
    color:blue;
    font-size:25px;
    font-weight:bold;
    border-radius:10px;
    margin: 0 auto;
}
input{

}
label{
    
    color: white;
    font-size:25px;
    font-weight:bold;
    
}
button:hover{
    transition: 0.5s;
    border: 3px red solid;
}


</style>

</head>
<body>
    <form method="POST">
    
        <label for="name">Имя:</label> 
        <input type="text" name="name" value="<?=$name ?>"> <br> <?=$error[0];?> <br>
        <label for="number">Телефон:</label> 
        <input type="text" name="number" value="<?=$number ?>"> <br> <?=$error[1];?> <br>
        <label for="email">email:</label> 
        <input type="text" name="email" value="<?=$email ?>"> <br> <?=$error[2];?> <br>

<?php 
foreach($checkbox as $ch) :?>
        <label for="<?= $ch ?>"><?= $ch ?></label> <input type="checkbox" name="lang[]" value="<?= $ch ?>" id="<?= $ch ?>" <?= in_array($ch,$lang) ? "checked":""?>> <br> <br>
<?php endforeach;?>
<?=$error[3];
 echo"<br>" ?>
<label for="chb">Выбор:</label>
        <select name="chb">
        <?php 
foreach($select as $va) :?>
            <option value="<?= $va ?>" <?=($va==$chb)?"selected":"" ?>> <?= $va ?> </option>
            <?php endforeach;?>
        </select>
        <br> <br>
        <?php 
foreach($radio as $item) :?>
            <label for="<?= $item ?>"><?= $item ?></label> <input type="radio" name="radiobutton" value="<?= $item ?>" id="<?= $item ?>" <?= ($item==$radiobutton) ? "checked":""?>> <br> <br>
            <?php endforeach;?>
            <?=$error[4];
          echo "<br>" ?>
          <div class="but">
        <button>Ввод</button>
        <input  type="button" onclick="location.href='index.csv.php'" name="checkscv" id="checkcsv" value="Просмотр csv">
            <input  type="button" onclick="location.href='index.json.php'" name="checkjson" id="checkjson" value="Просмотр json">
            <input  type="button" onclick="location.href='index.txt.php'" name="checktxt" id="checktxt" value="Просмотр txt">
</div>
   
    </form>
</body>
</html>