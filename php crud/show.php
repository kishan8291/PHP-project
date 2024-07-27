

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
<header>
      <!-- place navbar here -->
      <nav
        class="navbar navbar-expand-sm navbar-dark bg-dark mb-0 py-3"
        style="background-color: rgba(0, 0, 0, 0.77); 
        font-family: 'Courier New', Courier, monospace; font-size: large;
        margin-left: 0%;"
      >
        <div class="container">
          <a 
            class="navbar-brand"
            href="#"
            > <img src="images\logo.png" alt="" srcset="" height="70" width="70"></a
          >
          <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse"
            id="collapsibleNavId"
          >
            <ul class="navbar-nav me-auto mt-2 mt-lg-0 "  style="justify-content: center;">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  href="#"
                  aria-current="page"
                  >Home <span class="visually-hidden">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="#"
                  >About Us</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="contact.html"
                  >Contact Us</a
                >
              </li>
            </ul>
           
              <button
                class="btn btn-outline-success my-2 my-sm-0"
                type="submit"
              >
                Register
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
  <main>

  <?php 
include "connection.php";

$sql = "SELECT * FROM `contact`";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
echo "<div class='container my-5'>
<h1 class='text-center my-5'>Contact dashboard</h1>
<div class='table-responsive'>
<table class='table table-primary'>
    <thead>
        <tr>
            <th scope='col'>Id</th>
            <th scope='col'>Name</th>
            <th scope='col'>Email</th>
            <th scope='col'>Username</th>
            <th scope='col'>Queries</th>
            <th scope='col'>Action</th>
        </tr>
    </thead>
    <tbody>";

    while ($rows = mysqli_fetch_assoc($result)) {
echo " <tr class=''>
<td scope='row'>{$rows['id']}</td>
<td>{$rows['name']}</td>
<td>{$rows['email']}</td>
<td>{$rows['contact']}</td>
<td>{$rows['queries']}</td>
<td>
    <a name='' id='' class='btn btn-warning' href='edit.php?id={$rows['id']}' role='button'>Edit</a>
    <a name='' id='' class='btn btn-danger'  href='delete.php?id={$rows['id']}' role='button'>Delete</a>
</td>
</tr>";
}
echo "</tbody></table></div></div>";

} else {
   echo "No records found";
}
?>
  </main>
  <footer
      class="py-3 my-4 mt-5"
      style="background-color: rgba(0, 0, 0, 0.77)"
    >
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item">
          <a
            href="#"
            class="nav-link px-2 text-light"
            >Home</a
          >
        </li>
        <li class="nav-item">
          <a
            href="#"
            class="nav-link px-2 text-light"
            >Features</a
          >
        </li>
        <li class="nav-item">
          <a
            href="#"
            class="nav-link px-2 text-light"
            >Pricing</a
          >
        </li>
        <li class="nav-item">
          <a
            href="#"
            class="nav-link px-2 text-light"
            >FAQs</a
          >
        </li>
        <li class="nav-item">
          <a
            href="#"
            class="nav-link px-2 text-light"
            >About</a
          >
        </li>
      </ul>
      <p class="text-center text-light">© 2021 Company, Inc</p>
    </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>





