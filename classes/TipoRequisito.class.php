<?php
/**
 * Dados de tipo de requisitos
 *
 * @author Fabio-CS
 */
class TipoRequisito {
    
    private $idTipoRequisito;
    private $descTipoRequisito;
    
    function __construct() {
        
    }

    public function __toString() {
        return $this->descTipoRequisito;
    }
    
    public function getIdTipoRequisito() {
        return $this->idTipoRequisito;
    }

    public function setIdTipoRequisito($idTipoRequisito) {
        $this->idTipoRequisito = $idTipoRequisito;
    }

    public function getDescTipoRequisito() {
        return $this->descTipoRequisito;
    }

    public function setDescTipoRequisito($descTipoRequisito) {
        $this->descTipoRequisito = $descTipoRequisito;
    }

}

?>
