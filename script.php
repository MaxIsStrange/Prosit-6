<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

</body>

</html>
<html>


<header center>
    <h1>Mettons des émojis</h1>
</header>

<body>
    <table>
        <thead>
            <tr>
                <th colspan="16">Emojis</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $j = $_POST["nav"];
                for ($i = 1; $i <= 256; $i++) {
                    echo "<td>&#";
                    echo $j . "</td>";
                    $j++;
                    if ($i % 16 == 0 && $i != 0) {
                        echo "</tr> <tr>";
                    }
                    if ($i == 256) {
                        echo "</tr>";
                        break;
                    }
                }
                echo '</tbody></table><div class="center"><form method="post">
                        <button class="button-30" name="nav" value="' . $j;
                echo '"type="submit">Previous page</button>
                        <button class="button-30" name="nav" value="' . $j - 512
                    . '"type="submit">Next page</button>';
                ?>
                </div>
                <div class="center">
                    <button type="submit" class="button-30" name="nav" value="128512">Home Page</button>
                </div>
                </form>


</body>

</html>