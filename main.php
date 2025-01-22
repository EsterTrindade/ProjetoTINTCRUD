<?php
    namespace PHP\Modelo;
    require_once('Cliente.php');
    require_once('Funcionario.php');
    use PHP\Modelo\Cliente;
    use PHP\Modelo\Funcionario;


    //Criando o Objeto
    $cliente1 = new Cliente("12345678910","João Carlos","119999-6558","Rua Jipa, 15", "100");

    $funcionario1 = new Funcionario("12345678910","João Carlos","119999-6558","Rua Jipa, 15", 1500);

    //Visualizar os dados
    echo $cliente1->imprimir()."<br>";
    echo $funcionario1->imprimir()."<br>";

?>