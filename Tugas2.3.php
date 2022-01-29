<form method="POST" action="">
    Jumlah bintang yang diinginkan <input type="text" name="bintang"><br><br>
    <input type="submit" value="Proses">
</form>
<?php
$i = $_POST[bintang];
while ($i >= 1)
{
    $a=$i;
    while ($a >= 1)
    {
        echo  $a;
        $a--;
    }
    $i--;
    echo "<br>";
}
?>