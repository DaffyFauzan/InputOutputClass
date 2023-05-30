<!-- Input dan output menggunakan class -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input output</title>
</head>

<body>
    
    <form action="" method="post">
    <center>
    <h1>Nama</h1> 
    <input type="text" name="txNama" id="">
    <h1>umur</h1> 
    <input type="text" name="txUmur" id="">
    <h1>rombel</h1> 
    <input type="text" name="txRombel" id="">

    <input type="submit" value="simpan" name="btnSimpan">
    

    </form>
</body>
</html>

<?php

    class Biodata
    {
        public $nama; 
        public $umur; 
        public $rombel; 
        
        public function setNama($nama)
        {
           $this->nama = $nama; 
            if ($this->nama != "") {
                echo "Nama Saya Adalah : ";
                return $nama;
            }
            else {
                return "Data butuh diisi!";
            }
        }
          
        public function setUmur($umur)
        {
           $this->umur = $umur; 
            if ($this->umur != "") {
                echo "Umur Saya Adalah : ";
                return $umur;
            }
            else {
                return "Data butuh diisi!";
            }
        }
          
        public function setRombel($rombel)
        {
           $this->rombel = $rombel; 
            if ($this->rombel != "") {
                echo "Rombel Saya Adalah : ";
                return $rombel;
            }
            else {
                return "Data butuh diisi!";
            }
        }
    }
    
    $biodata = new Biodata;
    echo "<br><br>";
    if (isset($_POST['btnSimpan'])) {
        echo $biodata->setNama($_POST['txNama']). "<br>";
        echo $biodata->setUmur($_POST['txUmur']). "<br>";
        echo $biodata->setRombel($_POST['txRombel']). "<br>";
    }
?>

    </center>

