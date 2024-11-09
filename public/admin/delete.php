<?php
include '../../public/admin/connection.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  try {
    $sql = "DELETE FROM button WHERE id = $id";

    if ($conn->query($sql)) {
      echo "<script>alert('Button Deleted successfully.'); window.location.href='index.php';</script>";
    } else {
      echo "Error deleting.";
    }
  } catch (mysqli_sql_exception) {
    echo "Error deleting.";
  }

  $conn->close();
} else {
  echo "Invalid ID.";
}
