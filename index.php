<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>kalkulator</title>
</head>
<body>
    <?php
        if(isset($_POST['hitung'])){
            $bilangan1 = $_POST['bilangan1'];
            $bilangan2 = $_POST['bilangan2'];
            $operasi = $_POST['operasi'];
            switch ($operasi) {
                case 'tambah':
                    $hasil = $bilangan1+$bilangan2;
                    break;
                case 'kurang':
                    $hasil = $bilangan1-$bilangan2;
                    break;
                case 'kali':
                    $hasil = $bilangan1*$bilangan2;
                    break;
                case 'bagi':
                    $hasil = $bilangan1/$bilangan2;
                    break;
            }
        }
    ?>
    <div class="kalkulator">
        <h2 class="judul">kalkulator</h2>
        <form method="post" action="index.php">
            <input type="text" name="bilangan1" class="bil" autocomplete="off" placeholder="masukkan bilangan pertama">
            <input type="text" name="bilangan2" class="bil" autocomplete="off" placeholder="masukkan bilangan kedua">
                <select class="opt" name="operasi">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
                    <option value="bagi">/</option>
                </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol">
        </form>
    <?php if(isset($_POST['hitung'])){ ?>
        <input type="text" value="<?php echo $hasil; ?>" class="bil">
    <?php }else{ ?>
        <input type="text" vale="0" class="bil">
    <?php } ?>
    </div>
</body>
</html>