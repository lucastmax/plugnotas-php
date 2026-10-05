<?php

namespace TecnoSpeed\Plugnotas\Common;

use Respect\Validation\Validator as v;
use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Error\ValidationError;

class PisCofinsValorAliquota extends BuilderAbstract
{
    private $aliquota;
    private $valor;
    private $cst;
    private $baseCalculo;

    public function __construct($valor = 0, $aliquota = 0, $cst = 0)
    {
        $this->setAliquota($aliquota);
        $this->setValor($valor);
        $this->setCst($cst);
    }

    public function setValor($valor)
    {
        if (!v::numeric()->validate($valor)) {
            throw new ValidationError(
                'Valor deve ser um número.'
            );
        }
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setAliquota($aliquota)
    {
        if (!v::numeric()->validate($aliquota)) {
            throw new ValidationError(
                'Aliquota deve ser um número.'
            );
        }
        $this->aliquota = $aliquota;
    }

    public function getAliquota()
    {
        return $this->aliquota;
    }

    public function setCst($cst)
    {
        if (!v::numeric()->validate($cst)) {
            throw new ValidationError(
                'Aliquota deve ser um número.'
            );
        }
        $this->cst = $cst;
    }

    public function getCst()
    {
        return $this->cst;
    }

    public function setBaseCalculo($baseCalculo)
    {
        if (!v::numeric()->validate($baseCalculo)) {
            throw new ValidationError(
                'Base de cálculo deve ser um número.'
            );
        }
        $this->baseCalculo = $baseCalculo;
    }

    public function getBaseCalculo()
    {
        return $this->baseCalculo;
    }
}
