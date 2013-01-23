<?php
/**
 * Dados de status dos requisitos
 *
 * @author Fabio-CS
 */

class StatusRequisitos {    
    
    private $idStatus;
    private $status;
    
    function __construct() {
        
    }

    public function __toString() {
        return $this->status;
    }
    
    public function getIdStatus() {
        return $this->idStatus;
    }

    public function setIdStatus($idStatus) {
        $this->idStatus = $idStatus;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

}

?>
