<?php
include '../../public/admin/connection.php';
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit();
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
  <title>Kelola Banner</title>
</head>

<body>
  <?php include 'navbarAdmin.php' ?>
  <div class="container mx-auto max-w-screen-xl px-4 py-4 lg:flex lg:h-screen lg:items-center flex flex-col">
    <?php
    $sql = "SELECT * FROM header ORDER BY id=1";
    $result = $conn->query($sql);
    $query = mysqli_query($conn, $sql);
    while ($data = mysqli_fetch_assoc($query)):
    ?>
      <div class="mx-auto max-w-3xl text-center mb-5">
        <img
          src="../../src/assets/img/<?= $data['image_path'] ?>"
          alt=""
          class="rounded-full mx-auto p-5 h-40 w-40" />
        <h1
          class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
          <?= $data['title'] ?>
        </h1>

        <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
          <?= $data['subtitle'] ?>
        </p>

        <div class="mx-auto">
          <a href="headerUpdate.php?id=<?= $data['id'] ?>" type="submit" name="submit" class="btn btn-sm btn-warning">Edit</a>
        </div>
      </div>
    <?php endwhile; ?>
    <div class="container mx-auto max-w-4xl flex justify-between flex-col space-x-4 space-y-4">
      <?php
      $sql = "SELECT * FROM button ORDER BY created_at ASC";
      $result = $conn->query($sql);
      $query = mysqli_query($conn, $sql);
      while ($data = mysqli_fetch_assoc($query)):
      ?>
        <div class="flex flex-row items-center">
          <a
            class="group relative inline-block w-full text-sm font-medium text-white focus:outline-none focus:ring active:text-white rounded-md"
            href="buttonUpdate.php?id=<?= $data['id'] ?>">
            <span class="absolute inset-0 border border-current rounded-md"></span>
            <span
              class="flex items-center justify-center w-full border border-current bg-blue-950 px-12 py-3 transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1 hover:bg-blue-500 rounded-md">
              <!-- SVG Icon -->
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-5 w-5 mr-2">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
              </svg>
              <?= $data['text'] ?>
            </span>
          </a>
          <a href="delete.php?id=<?= $data['id'] ?>" type="submit" name="submit" class="btn btn-sm btn-error">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
              <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
            </svg>
          </a>
        </div>
      <?php endwhile; ?>
    </div>
    <div class="container flex justify-center p-5">
      <a href="buttonCreate.php" type="submit" name="submit" class="btn btn-sm btn-success">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
      </a>
    </div>



  </div>
</body>

</html>