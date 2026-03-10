<?php

namespace TecnoSpeed\Plugnotas\Nfse\Servico;

use Respect\Validation\Validator as v;
use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Error\ValidationError;

class Valores extends BuilderAbstract
{

    private $tributacao;

    public function setTributacao(Tributacao $tributacao)
    {
        $this->tributacao = $tributacao;
    }   

    public function getTributacao()
    {
        return $this->tributacao;
    }
}
