<?php

/**
 * Description of Arquivo
 *
 * @author Fabio-CS
 */

class Arquivo {
    
    private $idArquivo;
    private $nomeArquivo;
    private $extensaoArquivo;
    
    function __construct() {
        
    }
    
    public function __toString() {
        return $this->nomeArquivo;
    }
    
    public function getIdArquivo() {
        return $this->idArquivo;
    }

    public function setIdArquivo($idArquivo) {
        $this->idArquivo = $idArquivo;
    }

    public function getNomeArquivo() {
        return $this->nomeArquivo;
    }

    public function setNomeArquivo($nomeArquivo) {
        $this->nomeArquivo = $nomeArquivo;
    }

    public function getExtensaoArquivo() {
        return $this->extensaoArquivo;
    }

    public function setExtensaoArquivo($extensaoArquivo) {
        $this->extensaoArquivo = $extensaoArquivo;
    }
    
}

?>
