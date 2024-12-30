<?php
include_once 'acount.php';
require 'cnx_DB.php';
class BusninessAccount extends account{
    private $Fraix;
    private $pdo;
    public function __construct($N_compte, $solde, $Fraix, $pdo) {
        $this->N_compte = $N_compte;
        $this->solde = $solde;
        $this->pdo = $pdo;
        parent::__construct($N_compte, $solde);
        $this->Fraix = $Fraix;
    }

    public function ajouterCompte() {
        $query = "INSERT INTO account (Numero_de_compte, Solde) VALUES (:Numero_de_compte, :Solde)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            ':Numero_de_compte' => $this->N_compte,
            ':Solde' => $this->solde
        ]);
        $lastId = $this->pdo->lastInsertId();
        $querysaving = "INSERT INTO besinnessaccount (Fraix, Account_id) VALUES (:Fraix, :Account_id)";
        $stmt = $this->pdo->prepare($querysaving);
        $stmt->execute([
            ':Fraix' => $this->Fraix,
            ':Account_id' => $lastId
        ]);
    }
}
?>