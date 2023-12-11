<!doctype html>
<html lang="nl">
    <head>
        <meta name="author" content="Anjo Eijeriks">
        <meta charset="UTF-8">
        <title><gar-delete-klant3 class="php"></title>
            <style type="text/css">
                body{
                background: url(https://images2.alphacoders.com/774/774372.jpg); background-size: 100%,100% ;">
            }
            </style>
    </head>
    <body><center>
        <h1>garage delete auto 3</h1>
        <p>
            Op klantid gegevens zoeken uit de 
            tabel "auto" van de database "garage"
            zodat ze verwijderd kunnen worden. 
        
        </p>
        <?php
            $klantid        = $_POST["klantidvak"];
            $verwijderen    = $_POST["verwijdervak"];

            if($verwijderen)
            {
                 require_once "gar-connect.php";

                 $sql = $conn->prepare(" 
                                            delete from auto
                                            where klantid = :klantid
                                       ");
                 $sql->execute(["klantid" => $klantid]);

                 echo "De gegevens zijn verwijderd. <br />";
            }
            else
            {
                echo" De gegevens zijn niet verwijderd. <br />";
            }
                 
            echo "<a href='index.html'>Terug naar het menu. </a>";
        ?>
    </center>
    </body>
</html>