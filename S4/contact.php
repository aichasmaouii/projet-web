<!DOCTYPE html>
<html>
<head>
  <title>Form Data</title>
</head>
<body>
  <?php
  if (empty($_GET['nom']) || empty($_GET['prenom']) || empty($_GET['email']) || empty($_GET['telephone']) || empty($_GET['adresse']) || empty($_GET['codepostal'])) {
    echo "<h1>Champs manquants</h1>";
  } else {
    echo "<h1>Form Data</h1>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Prenom</th>";
    echo "<th>Email</th>";
    echo "<th>Telephone</th>";
    echo "<th>Adresse</th>";
    echo "<th>Code Postal</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$_GET['nom']."</td>";
    echo "<td>".$_GET['prenom']."</td>";
    echo "<td>".$_GET['email']."</td>";
    echo "<td>".$_GET['telephone']."</td>";
    echo "<td>".$_GET['adresse']."</td>";
    echo "<td>".$_GET['codepostal']."</td>";
    echo "</tr>";
    echo "</table>";
  }
  ?>
</body>
</html>