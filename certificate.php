<?php
    session_start();
    header ("Content-type: image/png");
    $im = imagecreate(960, 350)
    or die ("Ошибка при создании изображения");
    $colorBg = imagecolorallocate($im, 154, 199, 212);
    $col = imagecolorallocate ($im, 219, 26, 103);
    $font = 'font/arial.ttf';
    $reiting = '';
    if($_SESSION['rightQuestion'] == $_SESSION['allQuestion']){
        $reiting = 'Гений';
    }elseif($_SESSION['rightQuestion'] > ($_SESSION['allQuestion'] / 2) && $_SESSION['rightQuestion'] < $_SESSION['allQuestion']){
        $reiting = 'Не геный но пойдет)))';
    }else{
        $reiting = 'тут двойкой пахнет';
    }
    imagettftext ($im , 18 , 0 , 100 , 100 , $col , $font , $_SESSION['name'] . ' вы прошли тест');
    imagettftext ($im , 18 , 0 , 100 , 150 , $col , $font , 'Из ' . '"' . $_SESSION['allQuestion'] . '"' . ' вопросов');
    imagettftext ($im , 18 , 0 , 100 , 200 , $col , $font , 'ответили правильно на ' . '"' . $_SESSION['rightQuestion'] . '"' . ' вопросов');
    imagettftext ($im , 18 , 0 , 100 , 250 , $col , $font , 'ваша оценка: ' . '"' . $reiting . '"');
    imagepng($im);
