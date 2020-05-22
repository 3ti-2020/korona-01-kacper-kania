<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Java</title>
    <link rel="stylesheet" href="kol1.css">
</head>
<body>
    <header>
        <div class="a">
            <h1>JAVA SCRIPT</h1>
        </div>
        <div class="b">

            <!-- <table class="tabelka">
                <th>Nazwa</th>
                <th>Plik</th>
                <th>Data</th>

                <tr>
                    <td>Kalkulator</td>
                    <td>Aktulnie brak</td>
                    <td>18.05.2020</td>
                </tr>

                <tr>
                    <td>Średnia Ocen</td>
                    <td>Aktulnie brak</td>
                    <td>18.05.2020</td>
                </tr>

                <tr>
                    <td>Przelicznik</td>
                    <td>Aktulnie brak</td>
                    <td>18.05.2020</td>
                </tr>
                

            </table> -->

            <?php  
                 $servername = "127.0.0.1";
                 $username = "root";
                 $password = "";
                 $dbname = "kania";
             
                 $conn = new mysqli($servername, $username, $password, $dbname);
             
                $result1 = $conn->query("SELECT * FROM systemy_baz_danych");
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


        </div>


    </header>
</body>
</html>