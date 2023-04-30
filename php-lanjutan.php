<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lanjutan</title>
</head>
<body>
    <h1>Halo Dunia</h1>
    <?php
        $tipe_data = "Santai Saja"; //tipe data string
        $tipe_data = 5; //tipe data integer

        echo $tipe_data
    ?>

    <h2><?=$tipe_data?></h2>

    <?php
        $pecahan = 3.57; //tipe data float/pecahan
    ?>

    <h2>Saya akan menampilkan nilai <?=$pecahan?></h2>

    <?php
        $perbandingan = true; //tipe data boolean

       // echo $perbandingan;
        echo "<br/>";
    ?>
    
    <?php
    /*
        $provinsi[0] = "Jawa Timur"; //tipe data float/pecahan
        $provinsi[1] = "DKI Jakarta";
        $provinsi[2] = "Maluku Utara";
    */
       /*   $provinsi= array("Jawa Timur", "DKI Jakarta", "Maluku Utara");

        echo $provinsi[1];
        echo "<br/>"; */

        $jumlah = 5+16;
        echo $jumlah;
        echo "<br/>";
        $nilai = 21*11;
        echo $nilai;
        echo "<br/>";
        $bagi = 81/3;
        echo $bagi;
        echo "<br/>";
        $per = 85%3;
        echo $per;
        echo "<br/>";
        $pang = 5**3;
        echo $pang;
        echo "<br/>";
        $hasil = 81;
        echo ++$hasil;
        echo "<br/>";

        define("SATU", 1);
        echo SATU;

        echo "<br/>";
        /*$if($perbandingan == true) {
            echo "ucapkan selamat hari raya";
        } else {
            echo "ucapkan selamat berpuasa";
        }
        */
        /* switch($perbandingan) { //percabangan
            case true:
                $pesan = "Rawon";
            break;
            case false:
                $pesan = "Sate ayam";
            break;
            default:
            $pesan = "enggak dulu deh";
        }

        echo $pesan; */

        $pesan =($hasil == 2) ? "santai aja": "waduh";

        echo $pesan;
        echo "<br/>";

        $provinsi= array("Jawa Timur", "DKI Jakarta", "Maluku Utara", "Sumatera Utara");

        foreach($provinsi as $key) {
            echo $key;
            echo "<br/>";
        }

        $i=1;
        while($i<5) {
            echo "topi bundar <br/>";
            $i++;
        }
    ?>
    <!--
    <?php for ($i=0; $i<100; $i++) { ?>
    <h2>Hello World</h2>
    <?php } ?>
    -->
</body>
</html>