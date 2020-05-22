<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projektowanie</title>
    <link rel="stylesheet" href="styleProjektowanie.css">
</head>
<body>
    <header>
        <div class="a">
            <h1>Projektowanie Stron</h1>
        </div>
        <div class="b">

            <!-- <table class="tabelka">
                <th>Nazwa</th>
                <th>Plik</th>
                <th>Data</th>

                <tr>
                    <td>Grid</td>
                    <td>Aktulnie brak</td>
                    <td>18.05.2020</td>
                </tr>

                <tr>
                    <td>Menu</td>
                    <td>Aktulnie brak</td>
                    <td>18.05.2020</td>
                </tr>

                <tr>
                    <td>Przyciski</td>
                    <td>Aktulnie brak</td>
                    <td>18.05.2020</td>
                </tr> -->
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
                ?>

            


            </table>
        </div>


    </header>
</body>
</html>