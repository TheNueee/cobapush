<html>
    <head>
        <h>latihan php</P>
    </head>
    <body>
        <form method="post">
            Nilai 1 = <input type="text" name="a" placeholder="masukkan angka" value="<?php echo $_POST["a"] ?>"required><br>
            Nilai 2 = <input type="text" name="b" placeholder="masukkan angka" value="<?php echo $_POST["b"] ?>"required><br>
            
            <input type="submit" name="kirim">
        </form>

    <?php
    $a=$_POST["a"];
    $b=$_POST["b"];
    $jumlah = $a+$b;
    echo "HASIL = $jumlah";
    
    ?>
    
    </body>
</html>