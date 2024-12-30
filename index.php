<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header Example</title>
  <link rel="stylesheet" href="style1.css">
</head>
<body>

  <div class="header">
    <div class="logo">
        <a href="index.php">Account</a>
    </div>
    <div class="nav">
      <a href="savingAccount.php">Savings Account</a>
      <a href="CurrentAccount.php">Current Account</a>
      <a href="BusinessAccount.php">Business Account</a>
    </div>
  </div>

  
  <h1>Account Details</h1>
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Account Number</th>
          <th>Balance</th>
        </tr>
      </thead>
      <tbody>
      <?php
        include 'cnx_DB.php';
        $query = "SELECT Numero_de_compte, Solde FROM account";
        $stmt = $pdo->query($query);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" .$row['Numero_de_compte']. "</td>";
            echo "<td>$" .$row['Solde']."</td>";
            echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

</body>
</html>
