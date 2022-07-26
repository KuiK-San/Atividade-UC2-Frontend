<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/61b248fb6c.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <div class="container">
        <nav>
            <a href="#"><span>Home</span></a>
            <a href="#"><span>Hitória</span></a>
            <a href="#">Agende uma Reunião</a>
        </nav>
        <header>
            <h1>Seja Bem-vindo</h1>
            <h2>Dê uma olhada em nosso site</h2>
        </header>
        <main>
            <h1>Linguagens Utilizadas</h1>
            <section class="iconhtm">
                <p class="icon"><i class="fa-brands fa-html5"></i></p>
                <h1>HTML 5</h1>
                <p>
                    HTML5 é a linguagem de marcação mais utilizada na criação de sites possibilitando as marcações do conteudo dos sites de forma organizada e semantica, oferecendo uma ótima posição na classificação do google 
                </p>
            </section>
            <section class="iconcss">
                <p class="icon"><i class="fa-brands fa-css3-alt"></i></p>
                <h1>CSS3</h1>
                <p>
                    CSS3 é a linguagem de marcação que conversa com o HTML e serve para estilizar a pagina da forma que o designer faz no wireframe assinado posteriormente pelo cliente
                </p>
            </section>
            <section class="iconphp">
                <p class="icon"><i class="fa-brands fa-php"></i></p>
                <h1>PHP</h1>
                <p>
                    PHP é a linguagem de programação que dá interatividade na página e faz o back-end junto a parte de servidor, dados e design do
                </p>
            </section>
        </main>
        <article>
            <h2>Utilizando a Tecnologia de Versionamento Mais utilizada no mercado</h2>
            <div>
                <p class="icon"><i class="fa-brands fa-git-alt"></i></p>
                <p class="icon"><i class="fa-brands fa-github"></i></p>
            </div>
        </article>
        <footer>
            Guilherme Casagrande - Desenvolvedor WEB - <?=date('Y')?>
        </footer>
    </div>

</body>
</html>