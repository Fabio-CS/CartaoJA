<?php
/**
 * Descrições gerais do Sistema
 *
 * @author Fabio-CS
 */
class Descricao {
    
    private $idDescricao;
    private $descricao;
    private $paginaDesc;
    
    function __construct() {
        
    }
    
    public function __toString() {
        return $this->descricao;
    }
    
    public function getIdDescricao() {
        return $this->idDescricao;
    }

    public function setIdDescricao($idDescricao) {
        $this->idDescricao = $idDescricao;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getPaginaDesc() {
        return $this->paginaDesc;
    }

    public function setPaginaDesc($paginaDesc) {
        $this->paginaDesc = $paginaDesc;
    }

}

?>
