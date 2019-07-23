<?php

// 5-) * Form'dan dosya seçtirip yükletme işlemi yapalım. (Sadece zip ve rar yüklenmesine izin verilecek.)


if ($_POST) {
    $dosya = isset($_POST['dosya']) ? $_POST['dosya'] : '';
    $tip = $_FILES['dosya']['name'];
    if (strpos($tip, ".zip") || strpos($tip, ".rar")) {
        echo '<h1 style="color:red;">Sıkıştırılmış dosya yüklemeyiniz</h1>';
    } else {
        echo '<h1 style="color:green;">BAŞARILI</h1>';

        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';
    }


}


?>


<form class="" action="" enctype="multipart/form-data" method="post">


    Dosya seçin : <input type="file" name="dosya" value="">
    <button type="submit" name="button">Yükle</button>


</form>
