<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
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
    <h1>Seznam objednávek</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Číslo objednávky</th>
            <th>Jméno zákazníka</th>
            <th>Datum vytvoření objednávky</th>
            <th>Celková cena</th>
        </tr>
        </thead>

        <?php
        $handle = fopen('objednavky.csv', 'r');

        if ($handle) {
            while (($line = fgets($handle, 4096)) !== false) {
                $row = explode(';', $line);
                ?>
                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[1]; ?> Kč</td>
                </tr>
                <?php
            }
        }
        ?>

    </table>
</div>
</body>
</html>
