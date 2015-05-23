<?php include_once "_inc/headlines.php"; ?>


    <body class="home">
        <!--[if lt IE 10]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="all">

            <?php include_once "_inc/header.php"; ?>


            <nav class="mapa-template">
                <h2>ELEMENTOS</h2>

                <ul>
                    <li><a href="elements/botoes.php">Botões</a></li>
                    <li><a href="elements/breadcrumb.php">Breadcrumb</a></li> <!-- ver semantic -->
                    <li><a href="elements/tabelas.php">Tabelas</a></li>
                    <li><a href="elements/paginacao.php">Paginação</a></li>
                </ul>


                <h2>MÓDULOS</h2>

                <ul>
                    <li><a href="modulos/header-responsivo.php">Header Responsivo</a></li>
                    <li><a href="modulos/lightbox-fancybox.php">Lightbox Fancybox</a></li>
                    <li><a href="modulos/social-links.php">Social Links</a></li>
                    <li><a href="modulos/abas.php">Abas</a></li>
                </ul>
            </nav><!-- mapa-template -->


            <div class="main">
                <article class="left">
                    <header>
                        <h1>article header h1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.</p>
                    </header>

                    <section>
                        <h2>article section h2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
                    </section>

                    <footer>
                        <h3>article footer h3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor.</p>
                    </footer>
                </article>


                <aside class="right">
                    LATERAL DO SITE
                </aside>
            </div><!-- main -->


            <?php include_once "_inc/footer.php"; ?>

        </div><!-- end all -->

        <?php include_once "_inc/scripts.php"; ?>
    </body>
</html>
