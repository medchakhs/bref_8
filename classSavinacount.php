<?php
include_once 'acount.php';
require 'cnx_DB.php';
class SavingsAccount extends account{
    private $tauxInteret;
    private $pdo;
    public function __construct($N_compte, $solde, $tauxInteret, $pdo) {
        $this->N_compte = $N_compte;
        $this->solde = $solde;
        $this->pdo = $pdo;
        parent::__construct($N_compte, $solde);
        $this->tauxInteret = $tauxInteret;
    }

    public function ajouterCompte() {
        $query = "INSERT INTO account (Numero_de_compte, Solde) VALUES (:Numero_de_compte, :Solde)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            ':Numero_de_compte' => $this->N_compte,
            ':Solde' => $this->solde
        ]);
        $lastId = $this->pdo->lastInsertId();
        $querysaving = "INSERT INTO savingsaccount (Taux_d_Interet, account_id) VALUES (:Taux_d_Interet, :account_id)";
        $stmt = $this->pdo->prepare($querysaving);
        $stmt->execute([
            ':Taux_d_Interet' => $this->tauxInteret,
            ':account_id' => $lastId
        ]);
    }
}
?>