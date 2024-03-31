<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $comment = $_POST["comment"];
  $name = $_POST["name"];
  $email = $_POST["email"];

  // Save comment to database (You need to implement this part)
  // Example: mysqli_query($conn, "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')");

  // Redirect back to index.html after submitting comment
  header("Location: index.html");
  exit();
}
?>


