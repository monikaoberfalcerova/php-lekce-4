<!DOCTYPE html>
<html lang="en">
<head>
    <title>Domaci ukol</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">

  <?php
$handle = fopen('prispevky.txt', 'a');
if ($handle === false)
{
    echo "Soubor se nepodařilo otevřít.";


} else {
  if (isset($_POST['jmeno']) && isset($_POST['vzkaz']))
  {
    $jmeno = $_POST['jmeno'];
    $vzkaz = $_POST['vzkaz'];
    $komentar = "<b>$jmeno </b>: <br> $vzkaz <br><hr>"."\n";

  if (fwrite($handle, $komentar)) {
    echo 'Vzkaz byl vložen.';
    echo '<a href="navstevni-kniha.php">Zpět na návštěvní knihu.</a>';
} else {
      echo "<p>Chyba při ukládání příspěvku!</p>";
  }
  echo '<a href="navstevni-kniha.php">Zpět na návštěvní knihu.</a>';
  }
  fclose($handle);
}
?>

</div>
</body>
</html>
