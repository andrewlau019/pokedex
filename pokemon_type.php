<!-- Tab for the Search by Pokemon Name -->
<!-- user are able to click on the pokemon name that they are looking for in order to get the information of the selected pokemon -->
<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gen 1 Pokedex</title>
        <!-- Stylesheet -->
        <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Pokedex</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php">Home
                                <span class="visually-hidden"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pokemon_name.php">Pokemon Name</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="pokemon_type.php">Pokemon Type</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pokemon_stats.php">Pokemon Stats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pokemon_category.php">Pokemon Category</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end of the navigation bar -->
        <div class="jumbotron">
            <p class="lead">Types of pokemon<p>
            <hr class="my-4">
            <form method="GET" action="pokemon_type.php">
                <select name="emp" onchange='this.form.submit()'>
                    <option selected>Choose a type</option>

                    <?php
                    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
                    if ( mysqli_connect_errno() )
                    {
                        die( mysqli_connect_error() );
                    }
                    $sql = "SELECT ID, Tname FROM POKEMON_TYPE ";
                    if ($result = mysqli_query($connection, $sql))
                    {
                        // loop through the data
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo '<option value="' . $row['ID'] . '">';
                            echo $row['Tname'];
                            echo "</option>";
                        }
                        // release the memory used by the result set
                        mysqli_free_result($result);
                    }
                    ?>
                </select>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET")
                {
                    if (isset($_GET['emp']) )
                    {
                ?>
                <p>&nbsp;</p>
                <table class="table table-hover">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">Pokemon Image</th>
                            <th scope="col">Pokemon Name</th>
                            <th scope="col">Pokemon Type</th>
                            <th scope="col">Pokemon Type Image</th>

                        </tr>
                    </thead>
                    <?php
                        if ( mysqli_connect_errno() )
                        {
                            die( mysqli_connect_error() );
                        }
                        $sql = "  SELECT ImageURL, Pname, Tname, TYPE_IMAGE
                            FROM POKEMON, POKEMON_TYPE
                            WHERE POKEMON_TYPE.ID = {$_GET['emp']} AND
                                  (POKEMON.TYPEID = POKEMON_TYPE.ID OR POKEMON.TYPEID2 = POKEMON_TYPE.ID)";

                        if ($result = mysqli_query($connection, $sql))
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                    ?>
                    <tr>
                        <td><img class="pokemon_image" src="<?php echo $row['ImageURL'] ?>" alt="image"></td>
                        <td><?php echo $row['Pname'] ?></td>
                        <td><?php echo $row['Tname'] ?></td>
                        <td><img src="<?php echo $row['TYPE_IMAGE'] ?>" alt="image"></td>

                    </tr>
                    <?php
                            }
                            // release the memory used by the result set
                            mysqli_free_result($result);
                        }
                    } // end if (isset)
                } // end if ($_SERVER)
                    ?>
                </table>
            </form>
        </div>


    </body>
</html>
