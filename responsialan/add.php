<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <br>
    <br>
    <form action="add_action.php" method="post">
        <center>
            <table>
                <tr>
                    <td style="background-color:#99CCFF" colspan="2">
                        <center>Add Inventory Data</center>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>Item Code </td>
                    <td><input type="text" placeholder="item code" name="item_code"></td>
                </tr>
                <tr>
                    <td>Name of Goods</td>
                    <td><input type="text" placeholder="Name of goods" name="item_name"></td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><input type="int" placeholder="Amount" name="amount"></td>
                </tr>
                <tr>
                    <td>Unit</td>
                    <td><input type="text" placeholder="Unit" name="unit"></td>
                </tr>
                <tr>
                    <td>Coming Date</td>
                    <td><input type="date" name="date"></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td><select name="category">
                            <option value="Building">Building</option>
                            <option value="Electronic">Electronic</option>
                            <option value="Vehicle">Vehicle</option>
                            <option value="Office stationery">Office Stationery</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type="radio" value="Well" name="status">Well <input type="radio" value="Maintenance" name="status">Maintenance <input
                            type="radio" value="Damaged" name="status">Damaged</td>
                </tr>
                <tr>
                    <td>Unit Price</td>
                    <td><input type="int" placeholder="Unit price" name="unit_price"></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="save" class="btn btn-primary">Save</button>
                        <a href="inventory_list.php" class="btn btn-primary">Cancel</a></th>
                    </td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>