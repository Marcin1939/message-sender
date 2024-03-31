<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl11.css">
    <title>Document</title>
</head>
<body> 
    <div class= 'chat'>
        <div class="user"><!-- z kim piszesz zrob thx ;) --></div>
        <?php
            $open = fopen("plik.txt", "r");
            while(feof($open) == false){
                echo fgets($open);
            }
            fclose($open)         
        ?>      
    </div>
    <div class= 'box'>
        <br>
        <form action="user1.php" method="POST">
            <input class="text" type="textarea" name="tekst" placeholder="Wpisz wiadomość...">
            <input type="submit" value="Send">
        </form>
        <?php
            if(isset($_POST["tekst"]) && $_POST["tekst"] != ""){
                $text = PHP_EOL.$_POST["tekst"];
                $date = "<div class=\"user1 message\">".
                "<div class=\"message\">".$text."</div>".
                "</div>";
                $openW = fopen("plik.txt", "a");
                fwrite($openW, $date);
                fclose($openW);
                header("Refresh:0");
            }    
        ?>      
    </div>
</body>
</html>