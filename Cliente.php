<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php');
    use PHP\Modelo\Pessoa;

    Class Cliente extends Pessoa{
        protected float $totalDeCompras;

        public function __construct(string $cpf, string $nome, string $telefone, string $endereco, 
        float $totalDeCompras)

        {
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->totalDeCompras = $totalDeCompras;
        }

        public function __get(string $variavel):mixed
        {
            return $this->variavel;
        }//Fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//Fim do Set

        public function imprimir():string
        {
            return parent::imprimir().
                   "<br>TOTAL: R$".$this->totalDeCompras;
        }//Fim do método

    }//Fim da classe cliente




?>