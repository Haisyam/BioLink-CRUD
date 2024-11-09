<?php
include '../../public/admin/connection.php';
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit();
}

if (isset($_POST["submit"])) {
  $text = $_POST["text"];
  $link = $_POST["text"];

  try {
    $sql = "INSERT INTO button (text, link) VALUES ('$text', '$link')";

    if ($conn->query($sql)) {
      echo "<script>alert('Button add successfully.'); window.location.href='index.php';</script>";
    } else {
      echo "Error uploading.";
    }
  } catch (mysqli_sql_exception) {
    echo "Error uploading.";
  }
  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="../../src/styles/output.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css"
    rel="stylesheet"
    type="text/css" />
  <title>Tambah Button</title>
</head>

<body>
  <?php include 'navbarAdmin.php' ?>
  <div class="container text-center">
    <h1 class="text-white font-jkt font-semibold text-3xl pb-5">Tambah Button</h1>
  </div>
  <div class="container mx-auto">
    <form method="POST">
      <div class="pb-5">
        <label for="text" class="block">Text</label>
        <input type="text" name="text" id="text" class="input input-bordered w-full max-w-x" />
      </div>
      <div class="pb-5">
        <label for="link">Link</label>
        <input type="text" name="link" id="link" class="input input-bordered w-full max-w-xs" />
      </div>
      <div class="">
        <button type="submit" name="submit" class="btn btn-success">Create</button>
        <a href="index.php" class="btn btn-warning">Back</a>
      </div>
    </form>
  </div>
</body>

</html>