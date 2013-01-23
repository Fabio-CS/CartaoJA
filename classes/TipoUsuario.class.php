<?php
/**
 * Dados de tipos de Usuario
 *
 * @author Fabio-CS
 */
class TipoUsuario {
    
    private $idTipoUsuario;
    private $descTipoUsuario;
    
    function __construct() {
        
    }
    
    public function __toString() {
        return $this->descTipoUsuario;
    }
    
    public function getIdTipoUsuario() {
        return $this->idTipoUsuario;
    }

    public function setIdTipoUsuario($idTipoUsuario) {
        $this->idTipoUsuario = $idTipoUsuario;
    }

    public function getDescTipoUsuario() {
        return $this->descTipoUsuario;
    }

    public function setDescTipoUsuario($descTipoUsuario) {
        $this->descTipoUsuario = $descTipoUsuario;
    }

}

?>
