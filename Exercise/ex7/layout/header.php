<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #343a40; /* Dark background color */
            color: #ffffff; /* Light text color */
            text-align: center;
            padding: 10px 0;
        }
        .side-pane {
            background-color: #f8f9fa; /* Light background color */
            padding: 20px;
            min-height: 100vh;
            margin-top: 0; /* Remove margin at the top */
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand"  href="../ex7/read.php">CRUD APP - Exercise 7</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../ex1.php">Exercise 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../ex2.php">Exercise 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../ex3.php">Exercise 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../ex4.php">Exercise 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Exercise 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../ex7/index.php">Exercise 7</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Side Pane -->
            <div class="col-md-3 col-lg-2 p-0">
                <div class="side-pane d-flex flex-column">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="../ex7/index.php">Create</a></li>
                        <li class="list-group-item"><a href="../ex7/read.php">Read</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="col-md-9 col-lg-10">
                <div class="container">