<?php

namespace Webjump252\PhpUnit\Model;

Class Colaborador
{
/** @var Colaborador[] */
    private array $todosColaboradores;
    private int $numerocolaboradores = 0;

    public function adicionaColaborador(Cadastro $funcionario)
    {
        $this->todosColaboradores[$this->numerocolaboradores] = $funcionario;
        $this->numerocolaboradores++;
    }

    public function getTodosColaboradores()
    {
        return $this->todosColaboradores;
    }
}


