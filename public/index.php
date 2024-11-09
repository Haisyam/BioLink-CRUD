<?php
include '../public/admin/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/logo.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../src/styles/output.css" />
  <title>My BioLink - Japar Sulaiman</title>
</head>

<body>
  <section class="bg-gray-900 text-white h-screen w-full">
    <div
      class="container mx-auto max-w-screen-xl px-4 py-4 lg:flex lg:h-screen lg:items-center flex flex-col">
      <?php
      $sql = "SELECT * FROM header ORDER BY id=1";
      $result = $conn->query($sql);
      $query = mysqli_query($conn, $sql);
      while ($data = mysqli_fetch_assoc($query)):
      ?>
        <div class="mx-auto max-w-3xl text-center mb-5">
          <img
            src="../src/assets/img/<?= $data['image_path'] ?>"
            alt=""
            class="rounded-full mx-auto p-5 h-40 w-40" />
          <h1
            class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
            <?= $data['title'] ?>
          </h1>

          <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
            <?= $data['subtitle'] ?>
          </p>
        </div>
      <?php endwhile; ?>
      <div class="mx-auto max-w-3xl w-full space-y-4">
        <?php
        $sql = "SELECT * FROM button ORDER BY created_at ASC";
        $result = $conn->query($sql);
        $query = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_assoc($query)):
        ?>
          <a
            class="group relative inline-block text-sm font-medium text-white focus:outline-none focus:ring active:text-white rounded-md w-full"
            href="<?= $data['link'] ?>"
            target="_blank">
            <span
              class="absolute inset-0 border border-current rounded-md"></span>
            <span
              class="flex items-center justify-center border border-current bg-blue-950 px-12 py-3 transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1 hover:bg-blue-500 rounded-md">
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
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <!-- Simple Footer -->
  <footer class="bg-gray-900 text-sm text-center text-gray-400 py-4">
    <?php
    $sql = "SELECT * FROM header ORDER BY id=1";
    $result = $conn->query($sql);
    $query = mysqli_query($conn, $sql);
    while ($data = mysqli_fetch_assoc($query)):
    ?>
      <p>&copy; 2024 <?= $data['title'] ?>. All rights reserved.</p>
    <?php endwhile; ?>
  </footer>
</body>

</html>