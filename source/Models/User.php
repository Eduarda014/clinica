<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        /**
         * DataLayer constructor.
        */
    parent::__construct("users", ["nome", "email", "senha", "rg", "cpf", "cep", "logradouro", "numero", "complemento", "bairro", "cidade", "estado", "tipo", "convenio", "conv_numero", "celular"], "id", true);
    }

    public function save(): bool
    {
        //verificar se o e-mail já existe se não.
        parent::save();
        return true;
    }

    public function schedules()
    {
        return (new Schedule())->find("paciente = :uid", "uid={$this->id}")->fetch(true);
    }

}