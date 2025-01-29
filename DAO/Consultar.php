<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function ConsultarClienteIndividual(Conexao $conexao, int $cpf)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from cliente where codigo = '$cpf'";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados['codigo' == $cpf])
                    {
                        echo "<br>CPF: ".$dados['codigo'].
                            "<br>Nome: ".$dados['nome'].
                            "<br>Telefone".$dados['telefone'].
                            "<br>Endereço:".$dados['endereco'].
                            "<br>Total: R$".$dados['total'];
                        return;
                    }
                    return "CPF inválido!";
                }//FIM DO WHILE

            }catch(Except $erro)
            {
                echo $erro;
            }
        }//Fim do consultar cliente individual

        function ConsultarFuncionarioIndividual(Conexao $conexao, int $cpf)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from funcionario where codigo = '$cpf'";
                $result = mysqli_query($conn, $sql);
                while($dados = mysqli_fetch_Array($result)){
                    if($dados['codigo' == $cpf])
                    {
                        echo "<br>CPF: ".$dados['codigo'].
                        "<br>Nome: ".$dados['nome'].
                        "<br>Telefone".$dados['telefone'].
                        "<br>Endereço:".$dados['endereco'].
                        "<br>Salário: R$".$dados['salario'];
                        return;
                    }
                    return "CPF inválido!";
                }
            }catch(Except $erro)
            {
                echo $erro;
            }
        }//Fim do consultar Funcionario individual

    }//Fim da Classe

?>