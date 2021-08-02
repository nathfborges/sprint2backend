<?php

namespace Webjump252\PhpUnit\Test;

use PHPUnit\Framework\TestCase;

Class CadastroTest extends TestCase 
{
    //Arange - Given
    $cadastro1 = new Cadastro();
    $cadastro1-> setNomeCompleto('Nathália Ferreira Borges');
    $cadastro1-> setMatricula('456456');
    $cadastro1-> setCargo('Desenvolvedor Junior');
    $cadastro1-> setSalarioBase(4800);
    
    $cadastro2 = new Cadastro();
    $cadastro2-> setNomeCompleto('Linco Lindo');
    $cadastro2-> setMatricula('458946');
    $cadastro2-> setCargo('Desenvolvedor Pleno');
    $cadastro2-> setSalarioBase(9000);

    $cadastro3 = new Cadastro();
    $cadastro3-> setNomeCompleto('Gut Lindo');
    $cadastro3-> setMatricula('458977');
    $cadastro3-> setCargo('Desenvolvedor Senior');
    $cadastro3-> setSalarioBase(20000);

    //Act - When
    
    $colaboradoresFilial1 = new Colaborador($cadastro1);
    $colaboradoresFilial1 = new Colaborador($cadastro2);
    $colaboradoresFilial1 = new Colaborador($cadastro3);
    $arrayColaboradores = $colaboradoresFilial1->getColaboradores();

    // Assert - When
    self::assertCount(3, $arrayColaboradores);

}

Class CalculadoraTest extends TestCase
{
    //Arange - Given
    $cadastro1 = new Cadastro();
    $cadastro1-> setNomeCompleto('Nathália Ferreira Borges');
    $cadastro1-> setMatricula('456456');
    $cadastro1-> setCargo('Desenvolvedor Junior');
    $cadastro1-> setSalarioBase(4800);
    
    $cadastro2 = new Cadastro();
    $cadastro2-> setNomeCompleto('Linco Lindo');
    $cadastro2-> setMatricula('458946');
    $cadastro2-> setCargo('Gerente');
    $cadastro2-> setSalarioBase(9000);

    $cadastro3 = new Cadastro();
    $cadastro3-> setNomeCompleto('Gut Lindo');
    $cadastro3-> setMatricula('458977');
    $cadastro3-> setCargo('Squad leader');
    $cadastro3-> setSalarioBase(20000);


    //Act - When
    $colaboradoresFilial1 = new Colaborador($cadastro1);
    $colaboradoresFilial1 = new Colaborador($cadastro2);
    $colaboradoresFilial1 = new Colaborador($cadastro3);

    $cadastro1SalarioLiquido = $cadastro1->getSalarioLiquido();


}