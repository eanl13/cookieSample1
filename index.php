<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <body>
    <?php

    //Daha önce ziyaret sayısı cookiesi oluşturulmuş mu?
    //Eğer daha önce ziyaret sayısı cookiesi oluşturulmuşsa
    //demek ki ziyaretçi daha önce sitemizi ziyaret etmiş demektir.
    //Eğer daha önce ziyaret sayısı cookiesi oluşturulmamışsa
    //ziyaretçi sitemize ilk kez girmiş demektir.

    //Ziyaretçi daha önce sitemize girmiş mi?
    if(isset($_COOKIE['ziyaretSayisi'])){
        //önceki ziyaret sayısını bir değişkene aktardım
        $oncekiZiyaretSayisi = $_COOKIE['ziyaretSayisi'];

        //ziyaret sayısını bir arttırdım
        $yeniZiyaretSayisi = $oncekiZiyaretSayisi +1;

        //ziyaretçinin bilgisayarına 1 yıl süreyle yeni ziyaret sayısı değerini saklıyoruz
        setcookie('ziyaretSayisi', $yeniZiyaretSayisi, time()+60*60*24*30*12);
    }else{
        setcookie('ziyaretSayisi', 1, time()+60*60*24*30*12);
    }

    echo 'Toplam ziyaret sayınız:'. ((int)$_COOKIE['ziyaretSayisi']+1);

    ?>

    </body>
</head>
</html>