<?php

/**
 * Categorias dos cartões
 *
 * @author Fabio-CS
 */
class CategoriaCartao {
    
    private $idCatCartao;
    private $nomeCatCartao;
    private $descricaoCatCartao;
    private $preRequisitos;
    
    function __construct() {
        
    }
    
    public function __toString() {
        return $this->nomeCatCartao;
    }
    
    public function getIdCatCartao() {
        return $this->idCatCartao;
    }

    public function setIdCatCartao($idCatCartao) {
        $this->idCatCartao = $idCatCartao;
    }

    public function getNomeCatCartao() {
        return $this->nomeCatCartao;
    }

    public function setNomeCatCartao($nomeCatCartao) {
        $this->nomeCatCartao = $nomeCatCartao;
    }

    public function getDescricaoCatCartao() {
        return $this->descricaoCatCartao;
    }

    public function setDescricaoCatCartao($descricaoCatCartao) {
        $this->descricaoCatCartao = $descricaoCatCartao;
    }

    public function getPreRequisitos() {
        return $this->preRequisitos;
    }

    public function setPreRequisitos($preRequisitos) {
        $this->preRequisitos = $preRequisitos;
    }

}

?>
