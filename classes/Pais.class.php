<?php

/**
 * Dados do País
 *
 * @author Fabio-CS
 */
class Pais {
    
    private $idPais;
    private $nomePais;
    private $nacionalidade;
    
    function __construct() {
        
    }

    public function __toString() {
        return $this->nomePais;
    }
    
    public function getIdPais() {
        return $this->idPais;
    }

    public function setIdPais($idPais) {
        $this->idPais = $idPais;
    }

    public function getNomePais() {
        return $this->nomePais;
    }

    public function setNomePais($nomePais) {
        $this->nomePais = $nomePais;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

}

?>
