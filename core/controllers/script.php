<?php
foreach ($this->AllData('produit') as $key => $value) {

    $param[0]['col']='image1';
    $param[0]['val']='images/shop/'.formaterNameFile($value->getNom()).'1.png';

    $this->updateParamById('produit',$param,$value->getId());

}


