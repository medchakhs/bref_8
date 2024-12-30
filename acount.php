<?php
   // class account{
   //  protected $N_compte;
   //  protected $solde;
   // }

   include_once 'cnx_DB.php';
   class account {
      protected $N_compte;
      protected $solde;
  
      public function __construct($N_compte, $solde) {
          $this->N_compte = $N_compte;
          $this->solde = $solde;
      }
  }


?>