<?php
/**
 * Um item de requisito
 *
 * @author Fabio-CS
 */
class ItemRequisito {
    
    private $idItemRequisito;
    private $numItemRequisito;
    private $textoItem;
    private $requisito;
    
    function __construct() {
        
    }

    public function __toString() {
        return $this->textoItem;
    }
    
    public function getIdItemRequisito() {
        return $this->idItemRequisito;
    }

    public function setIdItemRequisito($idItemRequisito) {
        $this->idItemRequisito = $idItemRequisito;
    }

    public function getNumItemRequisito() {
        return $this->numItemRequisito;
    }

    public function setNumItemRequisito($numItemRequisito) {
        $this->numItemRequisito = $numItemRequisito;
    }

    public function getTextoItem() {
        return $this->textoItem;
    }

    public function setTextoItem($textoItem) {
        $this->textoItem = $textoItem;
    }

    public function getRequisito() {
        return $this->requisito;
    }

    public function setRequisito($requisito) {
        $this->requisito = $requisito;
    }
    
}

?>
