<?php

namespace Webjump252\PhpUnit\Test;

use DomainException;
use PhpParser\Builder\Class_;
use PHPUnit\Framework\TestCase;
use Webjump252\PhpUnit\Model\{Cadastro, Colaborador};

Class CadastroTest extends TestCase 
{
    /**
     * @dataProvider provedorDados
     */
    public function testCount(array $dados)
    {

    //Act - When
    
    $colaboradoresFilial1 = new Colaborador();
    $colaboradoresFilial1->adicionaColaborador($dados[0]);
    $colaboradoresFilial1->adicionaColaborador($dados[1]);
    $colaboradoresFilial1->adicionaColaborador($dados[2]);
    $arrayColaboradores = $colaboradoresFilial1->getTodosColaboradores();

    // Assert - When
    self::assertCount(3, $arrayColaboradores);
    }

    public function testSalario()
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('Cargo inválido');
        //Arange - Given
        $cadastro1 = new Cadastro('Nathália', '456456', 'Desenvolvedor Junior');

        $cadastro2 = new Cadastro('Linco Lindo','458946','Desenvolvedor Junior');

        //Act - When

        $colaboradoresFilial1 = new Colaborador();
        $colaboradoresFilial1->adicionaColaborador($cadastro1);
        $colaboradoresFilial1->adicionaColaborador($cadastro2);
        $arrayColaboradores = $colaboradoresFilial1->getTodosColaboradores();

    }

    public function provedorDados() : array
    {
        $cadastro1 = new Cadastro('Nathália', '456456', 'Desenvolvedor Junior');

        $cadastro2 = new Cadastro('Linco Lindo','458946','Desenvolvedor Pleno');

        $cadastro3 = new Cadastro('Manoel','789646','Desenvolvedor Pleno');

        return [
             ['dados'=> [ 
                $cadastro1,
                $cadastro2,
                $cadastro3
             ]
                ]
             ];
    }
}