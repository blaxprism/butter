 <?php
$servername = "localhost";
$username = "loren";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Falha na coneccao: " . $conn->connect_error);
}
echo "Conectado com sucesso";

?> 