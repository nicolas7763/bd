<?php
$pdo = new PDO("mysql:host=localhost;dbname=global", "zhukov", "neto0626");
$pdo->query('SET NAMES UTF8');
$sql = "SELECT name, author, year, isbn, genre FROM books";

echo '<table cellpadding="5" cellspacing="0" border="1">';
echo "<tr>";
foreach ($pdo->query($sql) as $row) {
    echo "<td>".$row['author']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['year']."</td>";
    echo "<td>".$row['isbn']."</td>";
    echo "<td>". $row['genre']."</td>";
     echo "</tr>";  
}
echo "</table>";
?>

