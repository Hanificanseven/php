<?php
function yuzde($tamami, $eldeolan, $print = true)
{
    if ($print == true) {
        echo $x = (100 * $eldeolan) / $tamami;
    } else {
        return $x = (100 * $eldeolan) / $tamami;
    }
}
function yuzdeal($eski, $yeni, $print = true)
{
    if ($print == true) {
        $fark = $eski - $yeni;
        $x = (100 * $fark) / $eski;
        echo ceil($x);
    } else {
        $x = (100 * $fark) / $eski;
        return ceil($x);
    }
}
function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
}
function ilkharfbuyuk($par)
{
    $ilkHarf = $par[0];
    $dgrHarf = substr($par, 1);

    return strtoupper($ilkHarf) . strtolower($dgrHarf);
}
function u()
{
    return uniqid();
}
function resimyukle($yol, $post, $ad)
{
    $uploads_dir = $yol;
    @$tmp_name = $post["tmp_name"];
    @$name = $post["name"];
    @$type = $post["type"];
    if (empty($tmp_name)) {
        return 1;
    }

    $benzersizad = uniqid();
    $refimgyol = substr($uploads_dir, strlen($yol)) . $benzersizad . $name;

    $dizi = explode('.', $name);
    $eleman = count($dizi) - 1;
    $uzanti = $dizi["$eleman"];

    if (substr($type, 0, 5) == "image") {
        @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
        return $refimgyol;
    } else {
        return 2;
    }
}

function e($par, $ajax = false)
{
    if ($ajax == false) {
        if (empty($par)) {
            return true;
        } else {
            return false;
        }
    } else {
        if (strlen(str_replace($par, " ", "")) == 0) {
            return false;
        } else {
            return true;
        }
    }
}
function para($birim, $print = true)
{
    if ($print == false) {
        return number_format($birim, 2, ',', '.');
    } else {
        echo number_format($birim, 2, ',', '.') . " TL";
    }
}

function yaziKontrol($url, $path)
{
    $kontrol = substr($url, 0, 4);
    if ($kontrol == "http") {
        return $url;
    } else {
        return $path . "/" . $url;
    }
}

function Baglan($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    /*curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);*/
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    $cikti = curl_exec($curl);
    echo curl_error($curl);
    curl_close($curl);
    return str_replace(array("\n", "\t", "\r"), null, $cikti);
}

function varmi($url, $harfler)
{
    // _ ARALARINI DİZİYE AKTARDIM
    $harfDizi = explode('_', $harfler);

    foreach ($harfDizi as $key => $value) {
        if (strpos($url, $value) !== false) {
            return $result = true;
        } else {
            return $result = false;
        }
    }
}

function MYSQLtarihSaat()
{
    date_default_timezone_set('Europe/Istanbul');
    $tarihsaat = date('Y-m-d H:i:s');
    return $tarihsaat;
}

function MYSQLtarihSaatDuzelt($tarihsaat)
{
    $zaman = $tarihsaat;
    $tarih = substr($zaman, 0, 10);
    $saat = substr($zaman, 10);
    $tarihDizi = explode('-', $tarih);
    $donus = $tarihDizi[2] . '.' . $tarihDizi[1] . '.' . $tarihDizi[0];
    $getir = $donus . $saat;
    echo $getir;
}

function reCaptcha($response, $secret)
{
    $fields = [
        'secret' => $secret,
        'response' => $response,
    ];
    $ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($fields),
        CURLOPT_RETURNTRANSFER => true,
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result, true);
}

function ellipsis($str, $len = 50)
{
    return strlen($str) > $len ? substr($str, 0, $len) . '...' : $str;
}

function timeAgo($date)
{
    $timestamp = strtotime($date);
    $currentDate = new DateTime('@' . $timestamp);
    $nowDate = new DateTime('@' . time());
    $result = $currentDate->diff($nowDate)->format(" %y yıl %m ay %d gün  %h  saat  %i dakika  %s saniye önce");
    return $result;
}

function paraYazdir($para)
{
    $paratemizle = array(".", ",");
    $temizpara = array("", "");
    $indirimdeger = str_replace($paratemizle, $temizpara, $para);
}

function p($par, $st = false)
{
    if ($st) {
        $q = htmlspecialchars(addslashes(trim($_POST[$par])));
        $q = str_replace("script", "blocked", $q);

        $q = str_replace("'", " ", $q);
        $q = str_replace("(", " ", $q);
        $q = str_replace(")", " ", $q);
        $q = str_replace(";", " ", $q);
        $q = str_replace(":", " ", $q);
        $q = str_replace("<", " ", $q);
        $q = str_replace("'", " ", $q);
        $q = str_replace("(", " ", $q);
        $q = str_replace(")", " ", $q);
        $q = str_replace(";", " ", $q);
        $q = str_replace(":", " ", $q);
        $q = str_replace("<", " ", $q);

        return $q;
    } else {

        return addslashes(trim($_POST[$par]));
    }
}

function s($post, $secure = true)
{
    if ($secure == true) {
        return htmlspecialchars($_POST[$post]);
    } else {
        return $_POST[$post];
    }
}

function guvenlik($par)
{

    $q = htmlspecialchars(addslashes(trim($par)));
    $q = str_replace("script", "blocked", $q);

    $q = str_replace("'", "", $q);
    $q = str_replace("(", "", $q);
    $q = str_replace(")", "", $q);
    $q = str_replace(";", "", $q);
    $q = str_replace(":", "", $q);
    $q = str_replace("<", "", $q);
    $q = str_replace("'", "", $q);
    $q = str_replace("(", "", $q);
    $q = str_replace(")", "", $q);
    $q = str_replace(";", "", $q);
    $q = str_replace(":", "", $q);
    $q = str_replace("<", "", $q);

    return $q;
}

function genislikAyarla($ifade)
{
    $ifade = str_replace("<img", "<img style='max-width:100%'", $ifade);
    return $ifade;
}

function etiketTemizle($ifade)
{

    $ac = strpos($ifade, "<");
    $kapa = strpos($ifade, ">");

    while ($ac >= 0 && $kapa > $ac) {

        $kapa++;
        $ifade = substr_replace($ifade, ' ', $ac, ($kapa - $ac));
        $ac = strpos($ifade, "<");
        $kapa = strpos($ifade, ">");
    }
    return $ifade;
}

function g($par)
{
    return strip_tags(trim(addslashes($_GET[$par])));
}

function kisalt($par, $uzunluk = 50)
{
    if (strlen($par) > $uzunluk) {
        $par = mb_substr($par, 0, $uzunluk, "UTF-8") . "..";
    }
    return $par;
}

function session($par)
{
    if ($_SESSION[$par]) {
        return $_SESSION[$par];
    } else {
        return false;
    }
}

function session_olustur($par)
{
    foreach ($par as $anahtar => $deger) {
        $_SESSION[$anahtar] = $deger;
    }
}

function ss($par)
{
    return stripslashes($par);
}

function sef_link($baslik)
{
    $bul = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '-', ':');
    $yap = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', ' ', '');
    $perma = strtolower(str_replace($bul, $yap, $baslik));
    $perma = preg_replace("@[^A-Za-z0-9\-_]@i", ' ', $perma);
    $perma = trim(preg_replace('/\s+/', ' ', $perma));
    $perma = str_replace(' ', '-', $perma);
    return $perma;
}

function query($query)
{
    return mysql_query($query);
}

function row($query)
{
    return mysql_fetch_array($query);
}

function rows($query)
{
    return mysql_num_rows($query);
}

function go($par, $time = 0)
{
    if ($time == 0) {
        header("Location: {$par}");
    } else {
        header("Refresh: {$time}; url={$par}");
    }
}

function isimDuzelt($deger)
{
    $turkce = array("ş", "Ş", "ı", "(", ")", "'", "ü", "Ü", "ö", "Ö", "ç", "Ç", " ", "/", "*", "?", "ş", "Ş", "ı", "ğ", "Ğ", "İ", "ö", "Ö", "Ç", "ç", "ü", "Ü");
    $duzgun = array("s", "S", "i", "", "", "", "u", "U", "o", "O", "c", "C", "-", "-", "-", "", "s", "S", "i", "g", "G", "I", "o", "O", "C", "c", "u", "U");
    $deger = str_replace($turkce, $duzgun, $deger);
    //$deger = preg_replace("@[^A-Za-z0-9\-_]+@i","",$deger);
    return $deger;
}

function rrmdir($dir)
{
    foreach (glob($dir . '/*') as $file) {
        if (is_dir($file)) {
            rrmdir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dir);
}

function tarihDuzelt($tarih)
{
    $tarihDizi = explode('-', $tarih);
    $donus = $tarihDizi[2] . '.' . $tarihDizi[1] . '.' . $tarihDizi[0];
    return $donus;
}

function gunaytarih($tarih, $time = false, $print = true)
{

    if ($time == false) {
        if ($print == true) {
            $tarihDizi = explode('-', $tarih);
            $donus = $tarihDizi[2] . '.' . $tarihDizi[1] . '.' . $tarihDizi[0];
            $aylar = array("", "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık");
            if ($tarihDizi[1] < 10) {
                $tarihDizi[1] = substr($tarihDizi[1], 1, 2);
            }
            echo $tarihDizi[2] . " " . $aylar[$tarihDizi[1]] . " " . $tarihDizi[0];
        } else {
            $tarihDizi = explode('-', $tarih);
            $donus = $tarihDizi[2] . '.' . $tarihDizi[1] . '.' . $tarihDizi[0];
            $aylar = array("", "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık");
            if ($tarihDizi[1] < 10) {
                $tarihDizi[1] = substr($tarihDizi[1], 1, 2);
            }
            return $tarihDizi[2] . " " . $aylar[$tarihDizi[1]] . " " . $tarihDizi[0];
        }
    } else {

        if ($print == true) {

            $gelentarih = substr($tarih, 0, 10);
            $saat = substr($tarih, 10);

            $tarihDizi = explode('-', $gelentarih);
            $donus = $tarihDizi[2] . '.' . $tarihDizi[1] . '.' . $tarihDizi[0];
            $aylar = array("", "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık");
            if ($tarihDizi[1] < 10) {
                $tarihDizi[1] = substr($tarihDizi[1], 1, 2);
            }
            echo $tarihDizi[2] . " " . $aylar[$tarihDizi[1]] . " " . $tarihDizi[0] . " " . $saat;
        } else {

            $gelentarih = substr($tarih, 0, 10);
            $saat = substr($tarih, 10);

            $tarihDizi = explode('-', $gelentarih);
            $donus = $tarihDizi[2] . '.' . $tarihDizi[1] . '.' . $tarihDizi[0];
            $aylar = array("", "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık");
            if ($tarihDizi[1] < 10) {
                $tarihDizi[1] = substr($tarihDizi[1], 1, 2);
            }
            return $tarihDizi[2] . " " . $aylar[$tarihDizi[1]] . " " . $tarihDizi[0] . " " . $saat;
        }
    }
}

function tarihAyGetir($ay)
{
    $aylar = array("", "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık");
    return $aylar[$ay];
}

function seo($s)
{
    $tr = array('ş', 'Ş', 'ı', 'I', 'İ', 'ğ', 'Ğ', 'ü', 'Ü', 'ö', 'Ö', 'Ç', 'ç', '(', ')', '/', ' ', ',', '?');
    $eng = array('s', 's', 'i', 'i', 'i', 'g', 'g', 'u', 'u', 'o', 'o', 'c', 'c', '', '', '-', '-', '', '');
    $s = str_replace($tr, $eng, $s);
    $s = strtolower($s);
    $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
    $s = preg_replace('/\s+/', '-', $s);
    $s = preg_replace('|-+|', '-', $s);
    $s = preg_replace('/#/', '', $s);
    $s = str_replace('.', '', $s);
    $s = trim($s, '-');
    return $s;
}

function macAdresi()
{
    $komut = 'getmac';
    $medya_list = '';
    exec($komut, $medya_list);

    foreach ($medya_list as $goster) {
        echo $goster . '<br>';
    }
}

function cevir($sayi, $separator)
{
    $sayarr = explode($separator, $sayi);

    $str = "";
    $items = array(
        array("", ""),
        array("BIR", "ON"),
        array("IKI", "YIRMI"),
        array("UC", "OTUZ"),
        array("DORT", "KIRK"),
        array("BES", "ELLI"),
        array("ALTI", "ALTMIS"),
        array("YEDI", "YETMIS"),
        array("SEKIZ", "SEKSEN"),
        array("DOKUZ", "DOKSAN"),
    );

    for ($eleman = 0; $eleman < count($sayarr); $eleman++) {

        for ($basamak = 1; $basamak <= strlen($sayarr[$eleman]); $basamak++) {
            $basamakd = 1 + (strlen($sayarr[$eleman]) - $basamak);

            try {
                switch ($basamakd) {
                    case 6:
                        $str = $str . " " . $items[substr($sayarr[$eleman], $basamak - 1, 1)][0] . " YUZ";
                        break;
                    case 5:
                        $str = $str . " " . $items[substr($sayarr[$eleman], $basamak - 1, 1)][1];
                        break;
                    case 4:
                        if ($items[substr($sayarr[$eleman], $basamak - 1, 1)][0] != "BIR") {
                            $str = $str . " " . $items[substr($sayarr[$eleman], $basamak - 1, 1)][0] . " BIN";
                        } else {
                            $str = $str . " BIN";
                        }

                        break;
                    case 3:
                        if ($items[substr($sayarr[$eleman], $basamak - 1, 1)][0] == "") {
                            $str .= " ";
                        } elseif ($items[substr($sayarr[$eleman], $basamak - 1, 1)][0] != "BIR") {
                            $str = $str . " " . $items[substr($sayarr[$eleman], $basamak - 1, 1)][0] . " YUZ";
                        } else {
                            $str = $str . " YUZ";
                        }

                        break;
                    case 2:
                        $str = $str . " " . $items[substr($sayarr[$eleman], $basamak - 1, 1)][1];
                        break;
                    default:
                        $str = $str . " " . $items[substr($sayarr[$eleman], $basamak - 1, 1)][0];
                        break;
                }
            } catch (Exception $err) {
                echo $err->getMessage();
                break;
            }
        }
        if ($eleman < 1) {
            $str = $str . " TL";
        } else {
            if ($sayarr[1] != "00") {
                $str = $str . " KRS";
            }
        }
    }
    return $str;
}

// KARGO ENTEGRASYON BAŞLANGIÇ
function curlAl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_REFERER, 'http://www.google.com.tr');
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1');
    $exec = curl_exec($ch);
    curl_close($ch);
    return $exec;
}

function kargoTakip($firma, $kod)
{
    $durum = 0;
    if ($firma == 1) {
        //yurtici kargo takip kontrol
        $durum = yurtici($kod);
    } else if ($firma == 2) {
        //surat kargo takip kontrol
        $durum = surat($kod);
    } else if ($firma == 3) {
        //aras kargo takip kontrol
        $durum = aras($kod);
    } else if ($firma == 4) {
        //mng kargo takip kontrol
        $durum = mng($kod);
    } else if ($firma == 5) {
        //ups kargo takip kontrol
        $durum = ups($kod);
    }
    return $durum;
}

function yurtici($kod)
{
    $durum = 0; //0 = teslim edilmedi
    $link = 'https://selfservis.yurticikargo.com/reports/SSWDocumentDetail.aspx?DocId=' . $kod;
    $veri = curlAl($link);
    if (preg_match('~Teslim Alan\<\/label\>\<\/td\>[\r\n].*?\<td\>(.*?)\<\/td\>~is', $veri)) {
        $durum = 1;
    }
    //teslim alan olmus
    return $durum;
}

function surat($kod)
{
    $durum = 0;
    $link = 'http://www.suratkargo.com.tr/kargoweb/bireysel.aspx?no=' . $kod;
    $veri = curlAl($link);
    if (preg_match('~Teslim Edildi~is', $veri)) {
        $durum = 1;
    }
    //teslim alan olmus
    return $durum;
}

function aras($kod)
{
    $durum = 0;
    $link = 'https://kargotakip.araskargo.com.tr/mainpage.aspx?code=' . $kod;
    $veri = curlAl($link);
    if (preg_match('~Teslim alan~is', $veri)) {
        $durum = 1;
    }
    //teslim alan olmus
    return $durum;
}

function mng($kod)
{
    $durum = 0;
    $link = 'http://service.mngkargo.com.tr/iactive/popup/KargoTakip/link1.asp?k=' . $kod;
    $veri = curlAl($link);
    if (preg_match('~Teslim Alan~is', $veri)) {
        $durum = 1;
    }
    //teslim alan olmus
    return $durum;
}

function ups($kod)
{
    $durum = 0;
    $link = 'http://www.ups.com.tr/WaybillSorgu.aspx?Waybill=' . $kod;
    $veri = curlAl($link);
    if (preg_match('~Paketiniz teslim edilmi~is', $veri)) {
        $durum = 1;
    }
    //teslim alan olmus
    return $durum;
}

// ÖRNEK KOD
// echo kargoTakip(1, 190514441828);

// KARGO ENTEGRASYON BİTİŞ
