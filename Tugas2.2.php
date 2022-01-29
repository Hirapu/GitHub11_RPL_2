<form method="POST" action="">
    Jumlah bintang yang diinginkan <input type="text" name="bintang"><br><br>
    <input type="submit" value="Proses">
</form>
<?php
$v = $_POST[bintang];
for($a=1; $a<=$v; $a++){
    for($b=1; $b<=$a; $b++){
        echo '&nbsp';
    }
    for($c=$v; $c>=$a; $c-=1){
        echo $c;
    }
    echo "<br/>";
}