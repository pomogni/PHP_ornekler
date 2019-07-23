<?php

// Form'dan 3 tane sayı alalım. Aritmetik ortalamasını bulalım. Eğer ortalaması 50'den büyükse yeşil yazıyla geçti yazsın.
// Tam 50 ise turuncu yazıyla Koşullu geçti yazsın. 50'den düşük ise kırmızı yazıyla kaldı yazsın.

if ($_POST) {
    $sayi_1 = isset($_POST['birinci_sayi']) ? $_POST['birinci_sayi'] : '';
    $sayi_2 = isset($_POST['ikinci_sayi']) ? $_POST['ikinci_sayi'] : '';
    $sayi_3 = isset($_POST['ucuncu_sayi']) ? $_POST['ucuncu_sayi'] : '';

    $ortalama =   ($sayi_1 + $sayi_2 + $sayi_3) / 3;

    if ($ortalama > 50) {
        echo '<span style="color:green;">Geçti!</span>';
    } elseif ($ortalama == 50) {
        echo '<span style="color:orange;">Koşullu geçti!</span>';
    } else {
        echo '<span style="color:red;">Kaldı!</span>';
    }
}


 ?>


 <form class="" action="" method="post">
   1. Sayı : <input type="text" name="birinci_sayi" value="">
   2. Sayı : <input type="text" name="ikinci_sayi" value="">
   3. Sayı : <input type="text" name="ucuncu_sayi" value="">
   <button type="submit" name="button">Gönder</button>
 </form>
