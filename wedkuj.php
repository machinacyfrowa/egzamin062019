<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <main>
     <div id="lewy">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
            <?php
                $db = new mysqli('localhost','root','','wedkowanie');
                $sql = "SELECT `nazwa`,`wystepowanie` FROM `ryby` WHERE styl_zycia = 1";
                $result = $db->query($sql);
                while($row = $result->fetch_assoc()) {
                    echo "<li>";
                    echo "nazwa: ".$row['nazwa'].", ";
                    echo "występowanie: ".$row['wystepowanie'];
                    echo "</li>";
                }
                $db->close();
            ?>
        </ul>
     </div>
     <div id="prawy">
        <img src="ryba1.jpg" alt="Sum">
        <br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
     </div>
    </main>
    <footer>
    <p>Stronę wykonał: Józek z bagien 00000000000</p>
    </footer>
</body>
</html>