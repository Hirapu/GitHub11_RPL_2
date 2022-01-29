<form method="POST" action="">
    Jumlah bintang yang diinginkan <input type="text" name="bintang"><br><br>
    <input type="submit" value="Proses">
</form>
<?php
$v = $_POST[bintang];
$i=1;
while ($i <= $v)
{
    $a=1;
    while ($a <= $i)
    {
        echo  $i;
        $a++;
    }
    $i++;
    echo "<br>";
}
?>