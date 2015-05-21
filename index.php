<?php include_once "_inc/headlines.php"; ?>


    <body class="home">
        <!--[if lt IE 10]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="all">

            <?php include_once "_inc/lightbox.php"; ?>

            <?php include_once "_inc/header.php"; ?>


            <div class="main">
                <nav class="mapa-template">
                    <h2>ELEMENTOS</h2>

                    <ul>
                        <li><a href="elements/botoes.php">Botões</a></li>
                    </ul>
                </nav><!-- mapa-template -->




                <ul class="breadcrumb">
                  <li><a href="#">Home</a> <span class="divider">/</span></li>
                  <li><a href="#">Library</a> <span class="divider">/</span></li>
                  <li class="active">Data</li>
                </ul>

                <article>
                    <header>
                        <h1>article header h1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.</p>
                    </header>

                    <section>
                        <h2>article section h2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
                    </section>

                    <section class="teste">
                        <h2>article section h2</h2>
                        <p><a href="#modal-form-login" class="fancybox">Lightbox</a> dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
                        <img src="images/chaves.jpg" />
                        <a href="" class="link_bg sumir block">link com imagem</a>
                    </section>

                    <footer>
                        <h3>article footer h3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor.</p>
                    </footer>
                </article>

                <article>
                    <header>
                        <h1>botoes</h1>
                    </header>

                    <section>
                        <button class="btn">botao default</button>
                        <button class="btn btn-success">botao success</button>
                        <button class="btn btn-warning">botao warning</button>
                        <button class="btn btn-error">botao error</button>
                        <button class="btn btn-info">botao info</button>
                        <button class="btn btn-round">botao round</button>
                        <button class="btn btn-radius">botao radius</button>

                        <button class="btn close">&times;</button>
                        <a class="close" href="#">&times;</a>
                    </section>
                </article>

                <article>
                    <header>
                        <h1>tabelas</h1>
                    </header>

                    <section>
                        <table>
                            <caption>estrutura de uma tabela básica</caption>

                            <thead>
                                <tr>
                                    <th>element 01 header</th>
                                    <th>element 02 header</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>element 01 body</td>
                                    <td>element 02 body</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </article>


                <aside>
                    <ul class="social-list">
                        <li class="social-item"><a target="_blank" href="http://www.facebook.com" class="social-link">Facebook</a></li>
                        <li class="social-item"><a target="_blank" href="http://www.twitter.com" class="social-link">Twiiter</a></li>
                        <li class="social-item"><a target="_blank" href="http://www.github.com" class="social-link">Github</a></li>
                    </ul>
                </aside>


                <div class="pagination">
                  <ul>
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next</a></li>
                  </ul>
                </div>
            </div><!-- main -->



            <?php include_once "_inc/abas.php"; ?>



            <?php include_once "_inc/footer.php"; ?>

        </div><!-- end all -->

        <?php include_once "_inc/scripts.php"; ?>
    </body>
</html>
