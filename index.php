<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="content-language" content="pt-br" />
        <meta http-equiv="cache-control" content="no-cache" />

        <title>titulo do projeto</title>

        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- META TAGS -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="apple-touch-fullscreen" content="yes" />
        <meta name="HandheldFriendly" content="true" />
        <meta name="format-detection" content="telephone=yes" />
        <meta name="DC.title" content="titulo do projeto" />
        <meta name="DC.publisher" content="nome do desenvolvedor" />
        <meta name="DC.creator.address" content="dev_name@gmail.com" />
        <meta name="robots" content="Index" />
        <meta name="author" content="nome do desenvolvedor" />
        <meta name="rating" content="general" />
        <meta name="distribution" content="global" />
        <meta name="copyright" content="titulo do projeto - Todos os direitos reservados" />

        <!-- Team -->
        <link rel="author" type="text/plain" href="humans.txt" />

        <!-- Favicons -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico?v=2">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png">
        <link rel="apple-touch-icon" sizes="120x120" href="touch-icon@2x.png">
        <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad@2x.png">

        <!-- Facebook Tags -->
        <meta property="og:description" content="Descricao.">
        <meta property="og:image" content="http://www.meusite.com.br/images/thumbnail-share.jpg">
        <meta property="og:site_name" content="titulo do site">
        <meta property="og:title" content="titulo do site">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://www.meusite.com.br/index.php">

        <!-- Twitter tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="http://www.meusite.com.br">
        <meta name="twitter:creator" content="@rudrigufelipe">
        <meta name="twitter:title" content="tirulo do site">
        <meta name="twitter:description" content="descricao.">
        <meta name="twitter:image" content="http://www.meusite.com.br/images/thumbnail-share.jpg">

        <!-- Styles -->
        <link rel="stylesheet" href="assets/css/normalize.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="screen" />

        <!-- Scripts -->
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>


    <body class="home">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="all">

            <?php include_once "_inc/lightbox.php"; ?>

            <?php include_once "_inc/header.php"; ?>


            <div class="main">
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

        <!-- jQuery online -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

        <!-- Google Analytics -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
