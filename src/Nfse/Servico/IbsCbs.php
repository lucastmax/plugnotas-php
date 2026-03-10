<?php

namespace TecnoSpeed\Plugnotas\Nfse\Servico;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Error\ValidationError;

class IbsCbs extends BuilderAbstract
{
    private $codigoOperacao;
    private $tipoOperacao;
    private $finalidadeNFSe;
    private $OperacaoPessoal;
    private $pagamentoParceladoAntecipado;
    private $valores;

    public function setCodigoOperacao($codigoOperacao)
    {
        $this->codigoOperacao = $codigoOperacao;
    }   

    public function getCodigoOperacao()
    {
        return $this->codigoOperacao;
    }   

    public function setTipoOperacao($tipoOperacao)
    {
        $this->tipoOperacao = $tipoOperacao;
    }

    public function getTipoOperacao()
    {
        return $this->tipoOperacao;
    }

    public function setFinalidadeNFSe($finalidadeNFSe)
    {
        $this->finalidadeNFSe = $finalidadeNFSe;
    }

    public function getFinalidadeNFSe()
    {
        return $this->finalidadeNFSe;
    }

    public function setOperacaoPessoal($operacaoPessoal)
    {
        $this->OperacaoPessoal = $operacaoPessoal;
    }

    public function getOperacaoPessoal()
    {
        return $this->OperacaoPessoal;
    }

    public function setValores(Valores $valores)
    {
        $this->valores = $valores;
    }

    public function getValores()
    {
        return $this->valores;
    }

    public function setPagamentoParceladoAntecipado($pagamentoParceladoAntecipado)
    {
        $this->pagamentoParceladoAntecipado = $pagamentoParceladoAntecipado;
    }

    public function getPagamentoParceladoAntecipado()
    {
        return $this->pagamentoParceladoAntecipado;
    }
}