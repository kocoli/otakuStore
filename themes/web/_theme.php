<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Otakus Store ::..</title>
    <!--Fonts awesone: https://cdnjs.com/libraries/font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= url("assets/css/web/styles.css"); ?>">
    <link rel="stylesheet" href="<?= url("assets/css/web/home.css"); ?>">
    <script type="module" src="<?= url("assets/js/web/theme.js"); ?>" async></script>
<?php if ($this->section("specific-script")): ?>
    <?= $this->section("specific-script"); ?>
<?php endif; ?>
</head>
<body>
    <header>
        <img src="/trabalho-pw/assets/img/pikachu.png">

        <nav id="sidebar">
            <a href="/trabalho-pw/api">HOME</a>
            <a href="/trabalho-pw/api/sobre">ABOUT</a>
            <a href="/trabalho-pw/api/contato">CONTACT</a>
            <a href="/trabalho-pw/api/faq">FAQ</a>
        </nav>
    </header>
    <main>
        <?= $this->section('content') ?>
    </main>
    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-about">
                <h3>Sobre Nós</h3>
                <p>Somos apaixonados por transformar ideias em soluções. Acompanhe nosso trabalho e fique por dentro das    novidades!</p>
            </div>

            <div class="footer-links">
                <h3>Links Rápidos</h3>
                <ul>
                    <li><a href="/trabalho-pw/api">Início</a></li>
                    <li><a href="/trabalho-pw/api/sobre">Produtos</a></li>
                    <li><a href="/trabalho-pw/api/contato">Contato</a></li>
                    <li><a href="/trabalho-pw/api/faq">Privacidade</a></li>
                </ul>
            </div>

            <div class="footer-social">
                <h3>Redes Sociais</h3>
                <div class="social-icons">
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook"></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Instagram"></a>
                    <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Todos os direitos reservados | Feito com ❤️</p>
        </div>
    </footer>
</body>
</html>