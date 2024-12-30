<?php
include_once 'acount.php';
require 'cnx_DB.php';
class CurrentAccount extends account{
    private $Retraits;
    private $pdo;
    public function __construct($N_compte, $solde, $Retraits, $pdo) {
        $this->N_compte = $N_compte;
        $this->solde = $solde;
        $this->pdo = $pdo;
        parent::__construct($N_compte, $solde);
        $this->Retraits = $Retraits;
    }

    public function ajouterCompt() {
        $queryaj = "INSERT INTO account (Numero_de_compte, Solde) VALUES (:Numero_de_compte, :Solde)";
        $stmt = $this->pdo->prepare($queryaj);
        $stmt->execute([
            ':Numero_de_compte' => $this->N_compte,
            ':Solde' => $this->solde
        ]);
        $lastId = $this->pdo->lastInsertId();
        $querysaving = "INSERT INTO currentaccount (Retrait, Account_id) VALUES (:Retrait, :Account_id)";
        $stmt = $this->pdo->prepare($querysaving);
        $stmt->execute([
            ':Retrait' => $this->Retraits,
            ':Account_id' => $lastId
        ]);
    }
}
?>