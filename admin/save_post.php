<?php
include "connect.php";

// Set the user ID to 1
$userId = 1;

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $title = htmlspecialchars($_POST['title']);
    $Content = htmlspecialchars($_POST['Content']);
    $categoryId = $_POST['category']; // Assuming the category ID is submitted from the form

    // Get the image data
    $coverData = file_get_contents($_FILES['cover']['tmp_name']);

    // Insert data into database
    $sql = "INSERT INTO article (title, Content, image, iduser, IdCategorie) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $title);
    $stmt->bindParam(2, $Content);
    $stmt->bindParam(3, $coverData, PDO::PARAM_LOB);
    $stmt->bindParam(4, $userId);
    $stmt->bindParam(5, $categoryId);

    if ($stmt->execute()) {
        echo "Post created successfully.";
    } else {
        $errorInfo = $stmt->errorInfo();
        echo "Error: " . $errorInfo[2];
    }

    $stmt->closeCursor();
}

// Close database connection
$conn = null;
?>
