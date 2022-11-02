<?php

/* 
Uygulama-1

1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. constract metodunda 3 tane değişken alarak bu değişkenleri sınıf içerisindeki değişkenlere atayınız.
3. sınıf içerisine public 2 tane metot yazınız.
4. Birinci metotta  girilen sayının karesi ekrana yazdırılsın.
5. İkinci metotta  girilen sayıya kadar tüm sayıların karesi alt alta ekrana yazdırılsın.

Uygulama-2

1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. Construct metodunda bir karşılama mesajını ekrana yazdırınız.
3. Destruct metodunu yazınız ve çalıştığını gösteren bir metni ekrana yazdırınız.
4. sınıf içerisine public 2 tane metot yazınız.
5. Birinci metoda parametre olarak gönderilen vize ve final notlarını alarak, ortalama hesabı yaptırıp 50'nin üzerindeyse geçtiğini ekrana yazdırınız.
6. İkinci metotda  parametre olarak gelen sayının faktöryel hesabını yaptırarak ekrana sonucunu yazdırınız. 

*/

//Uygulama 1


class Sinif1{
    public $sayi1;
    public $sayi2;
    public $sayi3;

    public function __construct($sayi1,$sayi2,$sayi3)
    {
        $this->sayi1 = $sayi1;
        $this->sayi2 = $sayi2;
        $this->sayi3 = $sayi3;
echo "Construct metodundaki nesneler = ",$sayi1 ," - ", $sayi2 ," - ", $sayi3;
echo "<br>";
        
    }

    public function sayininkaresi($var)
    {
        echo "$var Karesi : ".($var*$var);
    }

    public function sayininkaresi2($var)
    {
        echo"$var kare Dizisi:";
        echo "<br>";

       for ($i=0; $i <$var ; $i++) { 
        echo ($i*$i);
        echo "<br>";
       }
    }




}

$nesne1 = new Sinif1(10,11,20);
$nesne1 -> sayininkaresi(8);
echo "<br>";
$nesne1 -> sayininkaresi2(7);
echo "<br>";
echo "<br>";

//Uygulama 2

class Sinif2{
    public function __construct()
    {
        echo "Sınıf2 Construct Çalıştı";
        echo "<br>";
    }
    

    public function Ortalama($vize,$final)
    {
        $ortalama = (($vize*0.3)+($final*0.7));

        if ($ortalama > 50) {
            echo "Tebrikler Geçtiniz";
        }
        else {
            echo "Üzgünüm kaldınız";
        }
    }

    public function faktoriyel($sayi,$sonuc)
    {
        
        for ($i=2; $i<=$sayi; $i++) { 
            $sonuc = ($sonuc * $i);
        }
        echo $sayi," Faktöriyel = $sonuc";
    }



    function __destruct()
    {
        echo "Sınıf2 Destruct Çalıştı";
    }

}



$nesne2 = new Sinif2;
$nesne2 -> Ortalama(80,90);
echo "<br>";
$nesne2 -> faktoriyel(6,1);
echo "<br>"


?>