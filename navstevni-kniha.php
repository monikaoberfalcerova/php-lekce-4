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

    <form method="POST" action="vlozit.php">
        <div class="form-group">
            <label for="jmeno">Jméno:</label>
            <input type="text" class="form-control" name="jmeno">
        </div>
        <div class="form-group">
            <label for="vzkaz">Vzkaz</label>
            <textarea class="form-control is-invalid" id="validationTextarea" required></textarea>

        </div>
        <button type="submit" class="btn btn-primary">Přidat vzkaz</button>
    </form>
    <br>

    <?php
    if (file_exists('prispevky.txt')) {

    $handle = fopen('prispevky.txt', 'r');
    if ($handle === false) {echo 'Soubor se nepodařilo otevřít!';}
    else
    { if($handle){$array = explode ("\n",fread($handle,4096 ));}
    $serazene = array_reverse($array);
    foreach ($serazene as $komentar)
        {echo $komentar;}
    }
    if (!file_exists('prispevky.txt')) {
    echo "<hr><p>Žádné příspěvky!</p>";
    } else {
    $handle = fopen('prispevky.txt', 'r');
    $contents = fread($handle, 10000);
    echo $serazene($komentar, "<hr>");
    fclose($handle);
    }

    }
    ?>

</div>
</body>
</html>

