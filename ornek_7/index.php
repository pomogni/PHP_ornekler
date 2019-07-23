<?php
// 7-) Get ile dışarıdan sayfa diye bir değer alalım. Eğer anasayfa yazarsa anasayfa.php, iletisim yazarsa iletisim.php, hakkımızda yazarsa hakkimizda.php çağırsın.

if ($_GET){
    $sayfa = $_GET['sayfa'] ? $_GET['sayfa'] : '';

    if ($sayfa == 'anasayfa'){
        header("Location:anasayfa.php");
        exit;
    }elseif($sayfa == 'iletisim'){
        header("Location:iletisim.php");
        exit;
    }elseif($sayfa == 'hakkimizda'){
        header("Location:hakkimizda.php");
        exit;
    }
}

?>
<form action="" method="get">

    <input type="text" name="sayfa">
    <button type="submit">Gönder</button>

</form>



