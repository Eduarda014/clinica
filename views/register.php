<?php
    $this->layout('base', $data);

    use Source\Models\User;

    $msg = $data['msg'];

    if(isset($_POST['btn']) && empty($msg)){
        
        //Dados do usuário
        $nome = $_POST['nome'];
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $crm = $_POST['crm'];
        $tipo = '1';
        $convenio = $_POST['convenio'];
        $conv_numero = $_POST['conv_numero'];
        $complemento = $_POST['complemento'];
      
        //Enviando dados para o construtor
        $user = new User();
        $user->nome = $nome;
        $user->cep = $cep;
        $user->logradouro = $logradouro;
        $user->numero = $numero;
        $user->bairro = $bairro;
        $user->cidade = $cidade;
        $user->estado = $estado;
        $user->rg = $rg;
        $user->cpf = $cpf;
        $user->email = $email;
        $user->senha = password_hash($senha,CONF_PASSWD_ALGO, CONF_PASSWD_OPTION);

        $user->crm = $crm;
        $user->tipo = $tipo;
        $user->convenio = $convenio;
        $user->conv_numero = $conv_numero;
        $user->complemento = $complemento;

        //usa metodo save para salvar esse usuário no banco de dados
        $user->save();
        $userId = $user->id;

        if(!empty($userId)){
            $msg = "Cadastro realizado com sucesso!";
        }
        else{
            $msg = "Erro ao cadastrar usuário, tente novamente.";
        }
    }

?>

<!-- [Inicio da Sessão: Bloco de Design] -->
<section class="background-radial-gradient overflow-hidden" style="background-color: #4F0B72;">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass" style="width: 100%;">
                    <div class="card-body px-4 py-5 px-md-5">
                        <div class="text-center">
                            <img src="/clinica/views/assets/images/foto logo.png" style="width: 185px"
                                alt="logo" />
                            <h4 class="mt-1 mb-3 pb-1"></h4>
                        </div>

                        <p class="mb-4">Bem vindo(a) a tela de cadastro!</p>

                        <form id="register-form" action="" method="post">
                            <!-- [Grade de 2 colunas com entradas de texto para o nome e sobrenome] -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline half-box spacing">
                                        <label class="form-label" for="nome">Nome completo</label>
                                        <input type="text" name="nome" id="name" class="form-control"
                                            placeholder="Digite seu nome" data-required data-min-length="3"
                                            data-max-length="16" onfocusout="verificarCampo('name')"
                                            required="required" />

                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-outline half-box">
                                        <label class="form-label" for="cpf">CPF</label>
                                        <input type="text" name="cpf" id="lastname" class="form-control" placeholder="CPF"
                                            data-required data-only-letters onfocusout="verificarCampo('lastname')"
                                            required />
                                    </div>
                                </div>
                            </div>

                            <!-- [Entrada do e-mail] -->

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline half-box spacing">
                                        <label class="form-label" for="rg">RG</label>
                                        <input type="text" name="rg" id="idade" class="form-control" data-required
                                            onfocusout="verificarCampo('idade')" required="required" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-outline half-box spacing">
                                        <label class="form-label" for="cep">CEP</label>
                                        <input type="tel" name="cep" id="cep" class="form-control"
                                            placeholder="" maxlength="15" data-required
                                            onfocusout="verificarCampo('telefone')" required="required" />
                                    </div>
                                </div>
                            </div>

                            <div class="end" style="display: flex;">
                                <div class="form-outline half-box" style="width: 47%;">
                                    <label class="form-label" for="cidade">Cidade</label>
                                    <input type="text" id="cidade" class="form-control" name="cidade"
                                        placeholder="Digite sua cidade" data-required data-only-letters
                                        onfocusout="verificarCampo('lastname')" required />
                                </div> 
                                <label class="form-label" for="cidade">Estado</label>
                                <div class="estados">
                                    <select id="estado" name="estado" required>
                                        <option value="">Estado</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapa</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceara</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espirito Santo</option>
                                        <option value="GO">Goias</option>
                                        <option value="MA">Maranhuo</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Para</option>
                                        <option value="PB">Paraiba</option>
                                        <option value="PR">Parana</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="SP">Sao Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RO">Rondonia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="PI">Piaui</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                    </select>
                                </div>
                            </div>

                            <br>
                            <div class="form-outline half-box">
                                <label class="form-label" for="logradouro">Logradouro</label>
                                <input type="text" id="logradouro" class="form-control" placeholder="Digite sua rua"  name="logradouro"
                                    data-required data-only-letters onfocusout="verificarCampo('lastname')" required />
                            </div>
                            <br>
                            <div class="form-outline half-box">
                                <label class="form-label" for="complemento">Complemento</label>
                                <input type="text" id="lastname" class="form-control" placeholder="Digite sua rua"  name="complemento"
                                    data-required data-only-letters onfocusout="verificarCampo('lastname')" required />
                            </div>
                            <br>
                            <div class="bairroNumero" style="display: flex; justify-content: space-between;">
                                <div class="form-outline half-box" style="width: 48%;">
                                    <label class="form-label" for="bairro">Bairro</label>
                                    <input type="text" id="bairro" class="form-control" name="bairro"
                                        placeholder="Digite seu bairro" data-required data-only-letters
                                        onfocusout="verificarCampo('lastname')" required />
                                </div>
                                <div class="form-outline half-box" style="width: 48%;">
                                    <label class="form-label" for="numero">Numero</label>
                                    <input type="text" id="numero" class="form-control" placeholder="Nº da casa" name="numero"
                                        data-required data-only-letters onfocusout="verificarCampo('lastname')"
                                        required />
                                </div>
                            </div>
                            <br>
                            <div class="bairroNumero" style="display: flex; justify-content: space-between;">
                                <div class="form-outline half-box" style="width: 33%;">
                                    <label class="form-label" for="crm">CRM</label>
                                    <input type="text" id="lastname" class="form-control" name="crm"
                                        placeholder="Digite seu CRM" data-required data-only-letters
                                        onfocusout="verificarCampo('lastname')" required />
                                </div>
                                <div class="form-outline half-box" style="width: 33%;">
                                    <label class="form-label" for="convenio">Convenio</label>
                                    <input type="text" id="lastname" class="form-control" placeholder="Convenio" name="convenio"
                                        data-required data-only-letters onfocusout="verificarCampo('lastname')"
                                        required />
                                </div>
                                <div class="form-outline half-box" style="width: 33%;">
                                    <label class="form-label" for="conv_numero">Numero convenio</label>
                                    <input type="text" id="lastname" class="form-control" placeholder="Nº do convenio" name="conv_numero"
                                        data-required data-only-letters onfocusout="verificarCampo('lastname')"
                                        required />
                                </div>
                            </div>
                            <br>

                            <div class="form-outline full-box mb-4">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Digite seu e-mail" data-min-length="2" data-email-validate
                                    onfocusout="verificarCampo('email')"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required />
                            </div>

                            <!-- [Entrada da senhas] -->
                            <div class="form-outline half-box spacing mb-4">
                                <label class="form-label" for="senha">Senha</label>
                                <input type="password" id="password" name="senha" class="form-control text-danger"
                                    placeholder="Digite sua senha" data-password-validate data-required
                                    onfocusout="verificarCampo('password')" required />
                            </div>

                            <div class="form-outline half-box mb-4">
                                <label class="form-label" for="passwordconfirmation">
                                    Confirmar senha
                                </label>
                                <input type="password" id="passwordconfirmation" name="passwordconfirmation"
                                    class="form-control text-danger" placeholder="Confirme sua senha"
                                    data-equal="password" onfocusout="verificarCampo('password')" required />
                            </div>
                            <!-- [Botão de registro] -->
                            <input type="submit" name="btn" class="btn btn-primary btn-block mb-4" value="Registrar">
                            <?=$msg?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>