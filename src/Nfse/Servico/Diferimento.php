<?php

namespace TecnoSpeed\Plugnotas\Nfse\Servico;

use Respect\Validation\Validator as v;
use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Error\ValidationError;

class Diferimento extends BuilderAbstract
{

    private $percentualCBS;
    private $percentualEstadual;
    private $percentualMunicipal;

    public function setPercentualCBS($percentualCBS)
    {
        $this->percentualCBS = $percentualCBS;
    }   

    public function getPercentualCBS()
    {
        return $this->percentualCBS;
    }   

    public function setPercentualEstadual($percentualEstadual)
    {
        $this->percentualEstadual = $percentualEstadual;
    }

    public function getPercentualEstadual()
    {
        return $this->percentualEstadual;
    }

    public function setPercentualMunicipal($percentualMunicipal)
    {
        $this->percentualMunicipal = $percentualMunicipal;
    }

    public function getPercentualMunicipal()
    {
        return $this->percentualMunicipal;
    }
}
