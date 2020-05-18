<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dane.php</title>
</head>
<body>
    <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "kania";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $result = $conn->query("SELECT * FROM java");
    $result1 = $conn->query("SELECT * FROM systemy_baz_danych");

    echo("<table border='1'>");
    echo("<tr>
    <th>ID</th>
    <th>Przedmiot</th>
    <th>Nazwa</th>
    <th>Ocena</th>
    <th>Data</th>
    </tr>");
    while($wiersz = $result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['ID']."</td>"."<td>".$wiersz['Przedmiot']."</td>"."<td>".$wiersz['Nazwa']."</td>"."<td>".$wiersz['Ocena']."</td>"."<td>".$wiersz['Data']."</td>");
        echo("</tr>");
    }
   

    echo("<table border='1'>");
    echo("<tr>
    <th>ID</th>
    <th>Przedmiot</th>
    <th>Nazwa</th>
    <th>Ocena</th>
    <th>Data</th>
    </tr>");
    while($wiersz1 = $result1->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz1['ID']."</td>"."<td>".$wiersz1['Przedmiot']."</td>"."<td>".$wiersz1['Nazwa']."</td>"."<td>".$wiersz1['Ocena']."</td>"."<td>".$wiersz1['Data']."</td>");
        echo("</tr>");
    }
    ?>
</body>
</html>