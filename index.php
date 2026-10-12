<html>
<head>
   <title>Penjumlahan Matriks</title>
</head>
<body>

<h3>Program Penjumlahan Dua Matriks</h3>

<form method="post">
Matriks 1<br>
Baris : <input type="number" name="b1" min="1" required>
Kolom : <input type="number" name="k1" min="1" required>
<br><br>

Matriks 2<br>
Baris : <input type="number" name="b2" min="1" required>
Kolom : <input type="number" name="k2" min="1" required>
<br><br>

<input type="submit" name="ukuran" value="Proses">
</form>

<?php
if(isset($_POST['ukuran'])){

$b1 = (int)$_POST['b1'];
$k1 = (int)$_POST['k1'];
$b2 = (int)$_POST['b2'];
$k2 = (int)$_POST['k2'];

if($b1==$b2 && $k1==$k2){

$nb = $b1;
$nk = $k1;

echo "<form method='post'>";
echo "<input type='hidden' name='b1' value='$b1'>";
echo "<input type='hidden' name='k1' value='$k1'>";

echo "<h4>Input Matriks 1</h4>";
for($i=0;$i<$nb;$i++){
    for($j=0;$j<$nk;$j++){
        echo "M1[$i][$j] ";
        echo "<input type='number' name='m1[$i][$j]' required>";
    }
    echo "<br>";
}

echo "<h4>Input Matriks 2</h4>";
for($i=0;$i<$nb;$i++){
    for($j=0;$j<$nk;$j++){
        echo "M2[$i][$j] ";
        echo "<input type='number' name='m2[$i][$j]' required>";
    }
    echo "<br>";
}

echo "<br><input type='submit' name='hitung' value='Hitung'>";
echo "</form>";

}else{
echo "Ukuran kedua matriks harus sama!";
}
}

if(isset($_POST['hitung'])){

$nb = (int)$_POST['b1'];
$nk = (int)$_POST['k1'];

$m1 = $_POST['m1'];
$m2 = $_POST['m2'];

$i = 0;

while($i < $nb){

    $j = 0;

    while($j < $nk){
        $mh[$i][$j] = $m1[$i][$j] + $m2[$i][$j];
        echo $mh[$i][$j]." ";
        $j = $j + 1;
    }

    echo "<br>";
    $i = $i + 1;
}

echo "<h3>Hasil Penjumlahan Matriks</h3>";
echo "<pre>";
for($i=0;$i<$nb;$i++){
    for($j=0;$j<$nk;$j++){
        echo $mh[$i][$j]." ";
    }
    echo "\n";
}
echo "</pre>";

}
?>
</body>
</html>