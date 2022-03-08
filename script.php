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
                // j pends la valeur de la requête (soit 128512)
                for ($i = 1; $i <= 256; $i++) {
                    echo '<td>&#'.$j . '</td>'; //pour chaque emojis, on crée un <td>EMOJI</td> (entrée dans le tableau)
                    $j++;
                    if ($i % 16 == 0 && $i != 0) {
                        echo '</tr> <tr>'; //quand on arrive à 16 caractères, on change de ligne
                    }
                    elseif ($i == 256) {
                        echo "</tr>";
                        break; //on ferme le tableau à 256 emojis
                    }
                }
                echo '</tbody>
                    </table>
                    <div class="center">
                        <form method="post">
                            <button class="button-30" name="nav" value="'.($j-512).'"type="submit">Previous page</button>
                            <button class="button-30" name="nav" value="' . ($j).'"type="submit">Next page</button>';
                //les boutons
                ?>
                </div>
                <div class="center">
                    <button type="submit" class="button-30" name="nav" value="128512">Home Page</button>
                </div>
                </form>


</body>

</html>