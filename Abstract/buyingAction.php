<?php
require 'abstract-classes.php';

class buyingAction extends moyenPaiement
{
    public function getPayment()
    {
        $this->MTNMomo();
    }
}

$buyingAction = new buyingAction;
$buyingAction->getPayment();
