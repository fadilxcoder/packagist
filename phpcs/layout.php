<html>
    <head>
        <title>PHPCS</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
        <style>
            body{
                margin: 25px;
                font-family: 'Source Code Pro', monospace;
            }
            header h1{
                text-align: center;
                font-weight: bold;
                font-size: 40px;
            }
            pre{
                font-family: 'Source Code Pro';
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>PHPCS Report</h1>
        </header>
        <main>
            <pre>
                <?php
                    $content = file_get_contents(getcwd() . '/phpcs/report.txt');
                    echo htmlspecialchars($content);
                ?>
            </pre>
        </main>
    </body>
</html>