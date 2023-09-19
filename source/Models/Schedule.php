<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Schedule extends DataLayer{
    
    public function __construct()
    {
        parent::__construct("schedule", ["data", "hora", "medico", "paciente", "convenio"], "id", false);
    }

    public function patients()
    {

       return((new User())->find("id = :uid", "uid={$this->paciente}")->fetch());

    }

    public function doctors()
    {
        return (new User())->find("id = :uid", "uid={$this->medico}")->fetch();
    }

    public function agreements()
    {
        return (new Agreement())->find("id = :cid", "cid={$this->convenio}")->fetch();
    }
}