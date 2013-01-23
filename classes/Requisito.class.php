<?php
/**
 * Dados dos requisitos
 *
 * @author Fabio-CS
 */
class Requisito {
    
    private $idRequisito;
    private $descRequisito;
    private $tipoRequisito;
    private $catRequisito;
    private $catCartao;
    
    function __construct() {
        
    }

    public function __toString() {
        return $this->descRequisito;
    }
    
    public function getIdRequisito() {
        return $this->idRequisito;
    }

    public function setIdRequisito($idRequisito) {
        $this->idRequisito = $idRequisito;
    }

    public function getDescRequisito() {
        return $this->descRequisito;
    }

    public function setDescRequisito($descRequisito) {
        $this->descRequisito = $descRequisito;
    }

    public function getTipoRequisito() {
        return $this->tipoRequisito;
    }

    public function setTipoRequisito($tipoRequisito) {
        $this->tipoRequisito = $tipoRequisito;
    }

    public function getCatRequisito() {
        return $this->catRequisito;
    }

    public function setCatRequisito($catRequisito) {
        $this->catRequisito = $catRequisito;
    }

    public function getCatCartao() {
        return $this->catCartao;
    }

    public function setCatCartao($catCartao) {
        $this->catCartao = $catCartao;
    }

}

?>
