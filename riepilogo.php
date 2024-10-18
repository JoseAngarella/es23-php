<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <table>
        <tr>
            <th>
                nome
            </th>
            <th>
                cognome
            
            <th>
                indirizzo
            </th>
        </tr>
    <?php
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $indirizzo = $_POST["indirizzo"];
        echo "<tr>
        <td>$nome</td>
        <td>$cognome</td>
        <td>$indirizzo</td>
          </tr>"



    ?>
    </table>

    

    
    
</body>
</html>