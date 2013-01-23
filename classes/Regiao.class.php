<?php

/**
 * Dados da região;
 *
 * @author Fabio-CS
 */
class Regiao {
    
    private $idRegiao;
    private $nomeRegiao;
    
    function __construct() {
        
    }

    public function __toString() {
        return $this->nomeRegiao;
    }
    
    public function getIdRegiao() {
        return $this->idRegiao;
    }

    public function setIdRegiao($idRegiao) {
        $this->idRegiao = $idRegiao;
    }

    public function getNomeRegiao() {
        return $this->nomeRegiao;
    }

    public function setNomeRegiao($nomeRegiao) {
        $this->nomeRegiao = $nomeRegiao;
    }

}

?>
