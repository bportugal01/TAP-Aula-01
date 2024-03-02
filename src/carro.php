<?php
// namespace é usado para organizar as classes em grupos
namespace App;


// Classe que representa  carro.
class Carro
{
    //Visibilidade de propriedades
    // public, private, protected
    // public: A propriedade ou método pode ser acessado de fora da classe.
    // private: A propriedade ou método só pode ser acessado de dentro da classe.
    // protected: A propriedade ou método só pode ser acessado de dentro da classe e de classes filhas.

    // Atributos da classe  
    protected string $modelo;
    public string $cor;
    public string $tipo;
    public string $ano;


    // Método construtor da classe
    //    public function __construct($cor, $tipo, $ano)
    //     {
    //         // Inicializa os atributos da classe
    //         $this->cor = $cor;
    //         $this->tipo = $tipo;
    //         $this->ano = $ano;
    //     }

    public function exibirInformacoes()
    {
        // Exibe informações sobre o carro
        // this é uma palavra reservada que se refere ao objeto atual

        return "Cor: $this->cor, Tipo: $this->tipo, Ano: $this->ano, Modelo $this->modelo";
    }

    /**
     * Get the value of cor
     */
    public function getCor(): string
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor(string $cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno(): string
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno(string $ano): self
    {
        $this->ano = $ano;

        return $this;
    }
}






// // Cria um objeto do tipo carro
// $meuCarro = new Carro();
// $meuCarro->setCor("Preto");
// $meuCarro->setTipo("Sedan");
// $meuCarro->setAno("2021");
// echo $meuCarro->exibirInformacoes();
