<?=
    $this->layout('base', $data);

    use Source\Models\Login;

    $msg = $data['msg']; 

    if(isset($_POST['btn']) && empty($msg)){

        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        $objLogin = new Login();
        $list = $objLogin->logar($email, $senha);
    
        if($list == "ok"){
            $msg = "Login realizado com sucesso";
            header('Location:home');
        } else {
            $msg = "Usuário ou senha incorretos";
        }
    }
?>

    <main>
        <section id="login">
            <div id="imagem">
                <img src="/clinica/views/assets/images/foto logo.png" alt="" class="logologin">
                <!-- Aqui vai a imagem nas CSS -->
            </div>
            <div id="formulario">
                <h1> Bem vindo ao Shark's vet</h1>
            
                <p>Seja bem-vindo(a) novamente. Faça login para acessar sua conta e poder fazer as configurações no seu ambiente.</p>
                <form action="" method="post" autocomplete="on">
                    <div class="campo">
                        <i class="material-icons">person</i>
                        <input type="cpf" name="email" id="ilogin" placeholder="Digite seu Email" autocomplete="email" required maxlength="30">
                        <label for="ilogin">Login</label>
                    </div>
                    <div class="campo">
                        <i class="material-icons">vpn_key</i>
                        <input type="password" name="senha" id="isenha" placeholder="Digite sua Senha" autocomplete="current-password" required minlength="8" maxlength="20">
                        <label for="isenha">Digite sua senha</label>
                    </div>
                    <br>
                    <input type="submit" value="Entrar" name="btn">
                    <?=$msg?>
                    <br>
                    <p>É novo por aqui? <a href="/clinica/cadastro">Cadastrar</a></p>
                    </a>
                </form>
                <?=$msg?>
            </div>
        </section>
        
    </main>

    
