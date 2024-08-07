<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditer's bot</title>
    <link rel="stylesheet" href="site-settings/style.css">
    
</head>
<body>
    <header>
        <div class="header-text">
            Снэп бэк это кондитерский бот свег
        </div>
    </header>
    <div class="buttons">

        <button class="btn" onclick="cliick(1)">
            1
        </button>
        <button class="btn" onclick="cliick(2)">
            2
        </button>
        <button class="btn" onclick="cliick(3)">
            3
        </button>
        <div>
            <button class="btn" onclick="send()">
                Подтвердить
            </button>
        </div>
    </div>
    <?php
    $connection = pg_connect("host=localhost dbname=test user=postgres password=12345");

    $result = pg_query($connection,"SELECT * FROM tconditers");
    while( $row = pg_fetch_array($result)){
        echo "
        <tr>
            <td>$row[fuserid]</td>
            <td>$row[fcreatingtime]</td>
            <td>$row[fname]</td>
            <td>$row[fexp]</td>
            <td>$row[fabout]</td>
            <td>$row[finstagram]</td>
            <td>$row[fvk]</td>
            <td>$row[fyoutube]</td>
            <br>
        </tr>
        
        ";
    }
    ?>

    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <script src="site-settings/main.js"></script>
</body>
</html>