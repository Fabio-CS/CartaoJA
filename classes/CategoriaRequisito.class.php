<?php

/**
 * Nomes das Categorias de requisitos
 *
 * @author Fabio-CS
 */
class CategoriaRequisito {
    
    private $idCatRequisito;
    private $nomeCatRequisito;
    private $numeroCatRequisito;
    
    function __construct() {
        
    }
    
    public function __toString() {
        return $this->nomeCatRequisito;
    }
    
    public function getIdCatRequisito() {
        return $this->idCatRequisito;
    }

    public function setIdCatRequisito($idCatRequisito) {
        $this->idCatRequisito = $idCatRequisito;
    }

    public function getNomeCatRequisito() {
        return $this->nomeCatRequisito;
    }

    public function setNomeCatRequisito($nomeCatRequisito) {
        $this->nomeCatRequisito = $nomeCatRequisito;
    }

    public function getNumeroCatRequisito() {
        return $this->numeroCatRequisito;
    }

    public function setNumeroCatRequisito($numeroCatRequisito) {
        $this->numeroCatRequisito = $numeroCatRequisito;
    }

}

?>
