<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class inserir{
        function cadastrarCliente(Conexao $conexao, string $cpf, string $nome, string $endereco, string $telefone, float $total)
        {
            try{
                $conn = $conexao->conectar();//Abrir banco de dados.
                $sql = "insert into cliente(codigo, nome, telefone, endereco, total)
                values('$cpf', '$nome', '$telefone', '$endereco', '$total')";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                //Verificar o resultado
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }
            catch(Except $erro)
            {
                return "<br><br>Algo deu errado".$erro;
            }

        }//Fim do método
        
        function cadastrarFuncionario(Conexao $conexao, string $cpf, string $nome, string $endereco, string $telefone, float $salario)
        {
            try{
                $conn = $conexao->conectar();//Abrir banco de dados.
                $sql = "insert into funcionario(codigo, nome, telefone, endereco, salario)
                values('$cpf', '$nome', '$telefone', '$endereco', '$salario')";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                //Verificar o resultado
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }
            catch(Except $erro)
            {
                return "<br><br>Algo deu errado".$erro;
            }

        }//Fim do método 

    }//Fim classe inserir



?>