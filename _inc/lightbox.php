
<section id="modal-form-login" style="display: none;">
    <article>
        <header>
			<h1><span></span>Login</h1>
		</header>


        <form class="form_login" name="form_login" method="post" enctype="multipart/form-data">

            <input type="text" name="email" placeholder="E-mail" value="" id="email" class="validatxt email" />

            <div class="clear"></div>

            <input type="password" name="senha_login" placeholder="Senha" value="" id="senha_login" class="validatxt senha_login" />

            <div class="clear"></div>

            <a href="">Esqueceu a senha?</a>

            <input type="submit" name="logar" value="logar" class="btn btn-logar" />

            <div class="error_invalido none">
                <p>Os campos acima em destaque são necessários</p>
            </div><!-- error_invalido -->

            <img src="images/loading.gif" class="loading none" />

            <!-- conteudo gerado via sendcontato php -->
            <div class="box-success none"></div><!-- box-success -->
        </form>
    </article>
</section><!-- end modal-form-login -->

