<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reuniao.css">
    <title>Reunião</title>
</head>
<body>
    <nav>
        <a href="index.php"><span>Home</span></a>
        <a href="historia.php"><span>História</span></a>
        <a href="reuniao.php?dir=arq&file=default.php">Agende uma Reunião</a>
    </nav>
    <main>
        <section class="botoes">
            <a href="reuniao.php?dir=arq&file=online.php">Reunião Online</a>
            <a href="reuniao.php?dir=arq&file=presencial.php">Reunião presencial</a>
        </section>
        <section class="agenda">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}");
            ?>
        </section>
    </main>
    <footer>
        Guilherme Casagrande - Desenvolvedor WEB - <?=date('Y')?>
    </footer>
</body>
</html>