<?php
/**
 * Um item de regulamento
 *
 * @author Fabio-CS
 */
class ItemRegulamento {
    
    private $idItemRegulamento;
    private $numeroItemRegulamento;
    private $descItemRegulamento;
    private $catRegulamento;
    
    function __construct() {
        
    }
    
    public function __toString() {
        return $this->descItemRegulamento;
    }
    
    public function getIdItemRegulamento() {
        return $this->idItemRegulamento;
    }

    public function setIdItemRegulamento($idItemRegulamento) {
        $this->idItemRegulamento = $idItemRegulamento;
    }

    public function getNumeroItemRegulamento() {
        return $this->numeroItemRegulamento;
    }

    public function setNumeroItemRegulamento($numeroItemRegulamento) {
        $this->numeroItemRegulamento = $numeroItemRegulamento;
    }

    public function getDescItemRegulamento() {
        return $this->descItemRegulamento;
    }

    public function setDescItemRegulamento($descItemRegulamento) {
        $this->descItemRegulamento = $descItemRegulamento;
    }

    public function getCatRegulamento() {
        return $this->catRegulamento;
    }

    public function setCatRegulamento($catRegulamento) {
        $this->catRegulamento = $catRegulamento;
    }



}

?>
