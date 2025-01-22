<?php
    namespace PHP\Modelo;

    class Pessoa{
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected string $endereco;

        public function __construct(string $cpf, string $nome, string $telefone, string $endereco)
        {
            //Instanciar
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }// Fim do construtor (que serve para instanciar as variaveis)

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
            return "<br>CPF: ".$this->cpf.
                "<br>NOME: ".$this->nome.
                "<br>TELEFONE: ".$this->telefone.
                "<br>ENDEREÇO: ".$this->endereco;
        }//Fim do Método

    }// Fim classe pessoa





?>