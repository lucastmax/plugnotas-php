<?php

namespace TecnoSpeed\Plugnotas\Nfse\Servico;

use Respect\Validation\Validator as v;
use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Error\ValidationError;

class Tributacao extends BuilderAbstract
{
    private $cst;
    private $cct;
    private $diferimento;

    public function setCst($cst)
    {
        $this->cst = $cst;
    }

    public function getCst()
    {
        return $this->cst;
    }   

    public function setCct($cct)
    {
        $this->cct = $cct;
    }

    public function getCct()
    {
        return $this->cct;
    }

    public function setDiferimento(Diferimento $diferimento)
    {
        $this->diferimento = $diferimento;
    }

    public function getDiferimento()
    {
        return $this->diferimento;
    }
}
