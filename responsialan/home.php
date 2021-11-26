<?php
include 'db.php';
session_start();
?>

<html>
<head>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>123200072</title>
</head>
<body>
    <header class="col text-white" style="background-color: #17184F">
        <div class="container">
            <div class="row pt-3">
                <div class="col text-center">
                    <h1>LIST OF INVENTORY</h1>
                    <h1>EVERYTHING OFFICE</h1>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="inventory_list.php">Inventory List</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            List per Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="building.php">Buildings</a></li>
                            <li><a class="dropdown-item" href="vehicle,php">Vehicles</a></li>
                            <li><a class="dropdown-item" href="office.php">Office Inventory</a></li>
                            <li><a class="dropdown-item" href="electronic.php">Electronic</a></li>
                        </ul>
                    </li>
                    </li>
                </ul>
            </div>
            <a class="btn btn-primary fixed-right" href="logout.php" role="button">Logout</a>
        </div>
    </nav>
    <br><br><br>
    <center>
        <h3>Welcome</h3>
        <br>
        <h2 style="color: blue; text-align: center;"><?= $_SESSION['full_name']?></h2>
    </center>
</body>

</html>