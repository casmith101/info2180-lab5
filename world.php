<?php
$country = $_GET['country'];
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%';");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Continent</th>
      <th>Independence</th>
      <th>Head of State</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($results as $d): ?>
    <tr>
        <td><?= $d['name']; ?></td>
        <td><?= $d['continent']; ?></td>
        <td><?= $d['independence_year']; ?></td>
        <td><?= $d['head_of_state']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>  
</table>


