<?php

namespace Source\Controllers;

use Source\Core\Controller;
use Source\Core\Session;
use Source\Models\Login;
use Source\Models\User;

class Web extends Controller
{
    public function __construct()
    {
        parent::__construct(CONF_VIEW_PATH);
    }

    public function login()
    {
        $data = [
            'title' => "Entra - " . CONF_SITE_NAME,
            'description' => CONF_SITE_DESC,
            'url' => "/"
        ];
        echo $this->objView->render('login', ["data" => $data]);
    }

    public function register(array $form): void
    {
        $msg = "";

        if ($form) {

            $user = Login::user();

            if(!$user) {
              $user = new User();
            }

            $user->nome = $form['nome'];
            $user->email = $form['email'];
            if($user->senha != $form['senha'])
            $user->senha = password_hash($form['senha'], CONF_PASSWD_ALGO, CONF_PASSWD_OPTION);
            $user->rg = $form['rg'];
            $user->cpf = $form['cpf'];
            $user->cep = $form['cep'];
            $user->logradouro = $form['logradouro'];
            $user->numero = $form['numero'];
            $user->complemento = $form['complemento'];
            $user->bairro = $form['bairro'];
            $user->cidade = $form['cidade'];
            $user->estado = $form['estado'];
            $user->celular = $form['celular'];
            $user->convenio = $form['convenio'];
            $user->conv_numero = $form['nconvenio'];
            $result = $user->save();

            if ($result) {
                if(!Login::user())
                    $msg = "Cadastro realizado com sucesso. Clique acima em fazer login para se autenticar.";
                else
                    $msg = "Cadastro atualizado com sucesso.";
            } else {
                $msg = "Erro ao realizar cadastro.";
            }
        }

        $data = [
            'title' => "Cadastrar - " . CONF_SITE_NAME,
            'description' => CONF_SITE_DESC,
            'url' => "/cadastro",
            'msg' => $msg
        ];
        echo $this->objView->render('register', ["data" => $data]);
    }

    public function entrar(array $form): void
    {
        if(!$form){
            return;
        }

        if(empty($form['email']) || empty($form['password'])){
            return;
        }
        $user = new Login();
        $result = $user->logar($form['email'],$form['password']);
        if(!$result){
            redirect("/");
        }
        redirect("/home");
    }


    /**
     * Site Nav Error
     * @param array $data
     */
    public function error(array $data):void
    {
        $data = [
        'title'=> $data['errcode']." Ooooops. Conteúdo indisponível :/",
        'description'=> "Sentimos muito, mas o conteúdo que você tentou acessar não existe, está indisponível no momento ou foi removido :/",
        'code'=> $data['errcode'],
        'url'=> "/error",
        'linkTitle' => 'Continue navegando'
        ];
        echo $this->objView->render('error', ["data"=> $data]);
    }

}