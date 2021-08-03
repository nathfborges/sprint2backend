<?php
namespace Webjump252\PhpUnit\Model;

use DomainException;

Class Cadastro
{
    private string $nomeCompleto;
    private string $matricula;
    private string $cargo;
    private int $salarioBase;

    public function __construct(string $nomeCompleto, string $matricula, string $cargo)
    {
        $this->nomeCompleto = $nomeCompleto;
        $this->matricula = $matricula;
        try {
            $this->calculaSalario($cargo);
        } catch (DomainException $e) {
            throw $e;
        }
        $this->cargo = $cargo;
    }

    public function calculaSalario(string $cargo)
    {
        if ($cargo == 'Desenvolvedor Junior') 
        {
            $this->salarioBase = 4800;
        } else if ($cargo == 'Desenvolvedor Senior') 
        {
            $this->salarioBase = 9000;
        } else {
            throw new DomainException('Cargo inválido');
        }
    }

    public function getNomeCompleto()
    {
        return $this->nomeCompleto;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function getSalarioBase()
    {
        return $this->salarioBase;
    }

    public function getCadastros()
    {
        return $this->cadastros;
    }
}