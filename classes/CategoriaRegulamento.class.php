<?php
/**
 * Nome das Categorias de Regulamento
 *
 * @author Fabio-CS
 */
class CategoriaRegulamento {
    
    private $idCatRegulamento;
    private $nomeCatRegulamento;
    
    function __construct() {
        
    }
    
    public function __toString() {
        return $this->nomeCatRegulamento;
    }
    
    public function getIdCatRegulamento() {
        return $this->idCatRegulamento;
    }

    public function setIdCatRegulamento($idCatRegulamento) {
        $this->idCatRegulamento = $idCatRegulamento;
    }

    public function getNomeCatRegulamento() {
        return $this->nomeCatRegulamento;
    }

    public function setNomeCatRegulamento($nomeCatRegulamento) {
        $this->nomeCatRegulamento = $nomeCatRegulamento;
    }

}

?>
