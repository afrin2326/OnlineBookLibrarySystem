<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = trim($_POST["fullname"] ?? "");
    $adminID = trim($_POST["ID"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = trim($_POST["password"] ?? "");
    $dob = $_POST["DOB"] ?? "";
    $gender = $_POST["gender"] ?? "";
    $religion = $_POST["religion"] ?? [];

    if ($fullname === "") $errors[] = "Full Name is required.";
    if ($adminID === "") $errors[] = "Admin ID is required.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email address.";
    if (strlen($password) < 6) $errors[] = "Password must be at least 6 characters.";
    if (empty($dob)) $errors[] = "Date of Birth is required.";
    if (empty($gender)) $errors[] = "Gender is required.";
    if (empty($religion)) $errors[] = "At least one religion must be selected.";

    if (empty($errors)) {
        header("Location: adminNext.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Form Errors</title>
  <link rel="stylesheet" href="registrationStyle.css" />
</head>
<body>
  <div class="container">
    <h1>Form Submission Failed</h1>
    <ul style="text-align: left; color: red;">
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
    <a href="registrationAdmin.html" class="back-btn">Go Back</a>
  </div>
</body>
</html>
