<!doctype html>
<html lang="nl">
    <head>
        <meta name="author" content="Anjo Eijeriks">
        <meta charset="UTF-8">
        <title>gar-delete-auto2.php</title>
        <style type="text/css">
            body{
                background: url(https://images2.alphacoders.com/774/774372.jpg); background-size: 100%,100% ;">
            }
        </style>
    </head>
    <body><center>
        <h1>garage delete auto 2</h1>
        <p> 
            Op klantid gegevens zoeken uit de 
            tabel "auto" van de database "garage"
            zodat ze verwijderd kunnen worden.
        </p>
        <?php
            $klantid = $_POST["klantidvak"];

            require_once "gar-connect.php";

            $klanten = $conn->prepare("
                                        select  klantid,
                                                autokenteken,
                                                automerk, 
                                                autotype,
                                                autokmstand
                                        from    auto
                                        where   klantid = :klantid
                                      ");
            $klanten->execute(["klantid" => $klantid]);

            echo "<table>";
            foreach($klanten as $auto)
                {
                    echo "<tr>";
                        echo "<td>" . $auto["klantid"]       . "</td>";
                        echo "<td>" . $auto["autokenteken"]     . "</td>";
                        echo "<td>" . $auto["automerk"]    . "</td>";
                        echo "<td>" . $auto["autotype"] . "</td>";
                        echo "<td>" . $auto["autokmstand"]   . "</td>";
                    echo "</tr>";
                }
            echo "</table><br />";

            echo "<form action='gar-delete-auto3.php' method='post'>";

                echo "<input type='hidden' name='klantidvak' value=$klantid>";

                echo "<input type='hidden' name='verwijdervak' value='0'>";
                echo "<input type='checkbox' name='verwijdervak' value='1'>";
                echo "Verwijder deze auto. <br />";
                echo "<input type='submit'>";
            echo "</form>";
        ?>
    </center>
    </body>
</html>