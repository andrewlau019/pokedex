<!-- TCSS 445: Project Phase III -->
<!-- Group 5: Andrew ,Khoi, Kian, Micheal -->
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gen 1 Pokedex</title>
        <!-- Stylesheet -->
        <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <style>
            table {
                border-collapse: collapse;
                margin: auto;
                width: 80%;
            }
            th, td {
                border: 1px solid black;
                padding: 10px;
                text-align: center;
            }
            th {
                background-color: lightgray;
            }
        </style>
    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Pokedex</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home
                                <span class="visually-hidden"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="pokemon_name.php">Pokemon Name</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pokemon_type.php">Pokemon Type</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pokemon_stats.php">Pokemon Stats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pokemon_category.php">Pokemon Category</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="about.php">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end of the navigation bar -->
        <h2>
            Here are our members information
        </h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Andrew Lau</td>
                    <td>hlau4@uw.edu</td>
                </tr>
                <tr>
                    <td>Khoi Nguyen</td>
                    <td>khoin4@uw.edu</td>
                </tr>
                <tr>
                    <td>Michael Doan</td>
                    <td>masa88@uw.edu</td>
                </tr>
                <tr>
                    <td>Kian Rivera</td>
                    <td>kianr@uw.edu</td>
                </tr>
            </tbody>
        </table>


    </body>
</html>
