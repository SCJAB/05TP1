<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<div id="header">
        <h1>Juan Dela Cruz</h1>
    </div>

    <div class="container">
        <div id="s_info">
            <ul>
                <i class="icon material-icons">person</i>
                <?php
                echo "<p>Name: Juan Dela Cruz</p>";
                $s_info = ["Home", "Subject", "Assignments", "Quiz", "About"];
                foreach ($s_info as $item) {
                    echo "<li>$item</li>";
                }
                ?>
            </ul>
        </div>

        <div id="s_webprog">
            <ul>
                <i class="icon material-icons">web</i>
                <?php
                echo "<h2>Web Programming</h2>";
                $s_webprog = ["HTML, CSS, and Javascript", "PHP", "ASP.NET"];
                foreach ($s_webprog as $item) {
                    echo "<li>$item</li>";
                }
                ?>
            </ul>
        </div>

        <div id="s_mobprog">
            <ul>
                <i class="icon material-icons">developer_mode</i>   
                <?php
                echo "<h2>Mobile Programming</h2>";
                $s_mobprog = ["Android", "iOS", "Windows"];
                foreach ($s_mobprog as $item) {
                    echo "<li>$item</li>";
                }
                ?>
            </ul>
        </div>

        <div id="s_deskprog">
            <ul>
                <i class="icon material-icons">desktop_windows</i> 
                <?php
                echo "<h2>Desktop Programming</h2>";
                $s_deskprog = ["Java", "C#", "Python"];
                foreach ($s_deskprog as $item) {
                    echo "<li>$item</li>";
                }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>