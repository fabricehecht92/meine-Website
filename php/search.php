<?php
$servername = "localhost";
$username = "username";
$password = "password";
dbname = "dbname";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Datenbankverbindung fehlgeschlagen."]));
}

$query = isset($_GET['q']) ? $_GET['q'] : '';

if (!empty($query)) {
    $stmt = $conn->prepare("SELECT title, hyperlink FROM menulinks WHERE title LIKE CONCAT('%', ?, '%') LIMIT 10");
    $stmt->bind_param("s", $query);

    $stmt->execute();
    $result = $stmt->get_result();

    $suggestions = [];
    while ($row = $result->fetch_assoc()) {
        $suggestions[] = $row;
    }

    echo json_encode($suggestions);
    $stmt->close();
} else {
    echo json_encode([]);
}

$conn->close();
?>
