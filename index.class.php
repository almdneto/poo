<?php 


class funcionario {
    function __construct(
        protected string $nome, 
        protected float $salarioBase
    ){}

    function getNome($nome) {
        return $this->nome;
    }
    
    function calcularSalario() {
        return $this->salarioBase;
    }


}

class gerente extends funcionario {
    function __construct (
        string $nome, 
        float $salarioBase, 
        private float $bonus) {
        parent::__construct($nome, $salarioBase);
    }

    function calcularSalario() {
        return parent::calcularSalario() + $this->bonus;
    }
} 