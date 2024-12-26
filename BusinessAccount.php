<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Savings Account Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f9;
    }
    /* Barre d'en-tête */
    .header {
    background-color: #4CAF50;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .header .logo {
    font-size: 1.5em;
    font-weight: bold;
  }
  .header .nav {
    display: flex;
    gap: 15px;
  }
  .header .nav a {
    color: white;
    text-decoration: none;
    font-size: 1em;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }
  .header .logo a {
    color: white;
    text-decoration: none;
    font-size: 1em;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }
  .header .logo a:hover {
    background-color: #45a049;
  }

  .header .nav a:hover {
    background-color: #45a049;
  }
    /* Conteneur principal */
    .container {
      max-width: 600px;
      margin: 50px auto;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    /* Style des champs de formulaire */
    form {
      display: flex;
      flex-direction: column;
    }
    fieldset {
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 20px;
      padding: 15px;
    }
    legend {
      font-weight: bold;
      padding: 0 10px;
    }
    label {
      margin-bottom: 8px;
      font-weight: bold;
    }
    input, select, button {
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1em;
    }
    button {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
      border: none;
    }
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <!-- Barre d'en-tête -->
   <div class="header">
    <div class="logo">
        <a href="index.html">Account</a>
    </div>
    <div class="nav">
      <a href="savingAccount.html">Savings Account</a>
      <a href="CurrentAccount.html">Current Account</a>
      <a href="BusinessAccount.html">Business Account</a>
    </div>
  </div>

  <!-- Formulaire -->
  <div class="container">
    <form>
      <fieldset>
        <legend>Account Information</legend>
        <label for="account-number">Account Number</label>
        <input type="text" id="account-number" name="account-number" placeholder="Enter account number" required>
        <div>
        <label for="balance">Solde</label>
        <input type="number" id="balance" name="balance" placeholder="Enter le solde" required>
        </div>
        <label for="interest-rate">Frais</label>
        <input type="number" id="interest-rate" name="interest-rate" placeholder="Enter Frais" step="0.01" required>
      </fieldset>

      <!-- Bouton de soumission -->
      <fieldset>
        <legend>Submit</legend>
        <button type="submit">Submit</button>
      </fieldset>
    </form>
  </div>
</body>
</html>
