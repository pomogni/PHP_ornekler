<?php
header("Content-type:text/html;charset=utf8");
function ikinci_ve_sonuncu($yazi, $renk = "red")
{
    $harfleri_bul = str_split($yazi);  // CÃ¼mledeki harfleri ayÄ±rÄ±yoruz.
    $son_harf = count($harfleri_bul) - 1;  // Son harfin kaÃ§Ä±ncÄ± sÄ±rada olduÄŸunu buluyoruz. Ä°ndis deÄŸerleri 0'dan baÅŸladÄ±ÄŸÄ± iÃ§in 1 eksiÄŸini alÄ±yoruz.
    $index = 0;  // SayaÃ§ baÅŸlatÄ±yoruz.
    $cikti = "";  // Ã‡Ä±ktÄ±larÄ± depolayacaÄŸÄ±mÄ±z deÄŸiÅŸken
    foreach ($harfleri_bul as $harf) {  // CÃ¼mledeki kelimeleri foreach ile dÃ¶ndÃ¼rÃ¼yoruz.
        if($index == 1 || $index == $son_harf)  // eÄŸer sayaÃ§ 2.ve son harfin sÄ±rasÄ±na eÅŸitse
        {
            $cikti .= '<span style="color:'.$renk.'">'.$harf."</span>";  // Parametre olarak gÃ¶nderilen renk yap deÄŸiÅŸkene ekleme yap.
        }else{
            $cikti .= $harf.""; // deÄŸiÅŸkene normal olarak aktar
        }
        $index++;  // sayacÄ± her iÅŸlemde bir arttÄ±r.
    }
    return $cikti;  // Ã‡Ä±ktÄ±yÄ± dÃ¶ndÃ¼r
}




if ($_POST){
    $input_yazi = isset($_POST['input_yazi']) ? $_POST['input_yazi'] : '';
    $renk = isset($_POST['renk']) ? $_POST['renk'] : '';
   echo ikinci_ve_sonuncu($input_yazi,$renk);
}


?>
<form action="" method="post">

    Yazı : <input type="text" name="input_yazi">
    Renk: <select name="renk" id="">
        <option value="red">Red</option>
        <option value="blue">Blue</option>
        <option value="orange">Orange</option>
        <option value="yellow">yellow</option>
    </select>
    <button type="submit">Gönder</button>

</form>
