<?php



if ($_POST) {
    $eposta = isset($_POST['e_posta']) ? $_POST['e_posta'] : '';
    $sifre = isset($_POST['sifre']) ? $_POST['sifre'] : '';
    if (filter_var($eposta, FILTER_VALIDATE_EMAIL) && strlen($sifre) > 6) {
        echo '<span style="color:green;">Başarılı!</span>';
    } else {
        echo '<span style="color:red;">Eposta veya şifreyi kontrol edin!</span>';
    }
}



 ?>


 <form class="" action="" method="post">
   E-posta : <input type="text" name="e_posta" value="">
   Şifre : <input type="text" name="sifre" value="">
   <button type="submit" name="button">Gönder</button>
 </form>
