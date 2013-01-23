<?php
/**
 * Dados do Estado
 *
 * @author Fabio-CS
 */
class Estado {
    
    private $idEstado;
    private $nomeEstado;
    private $siglaEstado;
    private $pais;
    
    function __construct() {
        
    }
    
    public function __toString() {
        return $this->nomeEstado;
    }
    
    public function getIdEstado() {
        return $this->idEstado;
    }

    public function setIdEstado($idEstado) {
        $this->idEstado = $idEstado;
    }

    public function getNomeEstado() {
        return $this->nomeEstado;
    }

    public function setNomeEstado($nomeEstado) {
        $this->nomeEstado = $nomeEstado;
    }

    public function getSiglaEstado() {
        return $this->siglaEstado;
    }

    public function setSiglaEstado($siglaEstado) {
        $this->siglaEstado = $siglaEstado;
    }

    public function getPais() {
        return $this->pais;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }

}

?>
