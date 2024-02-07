<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=AR+One+Sans&display=swap">
    <link rel="stylesheet" href="styles/styles.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <header class="header">
                    <a href="" class="logo"><img src="assets/images/logo/logo.png" alt="LankanMatka"></a>
                    <nav class="navbar navbar-expand-md">
                        <ul>
                        <li><a href="ex1.php">Exercise01</a></li>
                        <li><a href="ex2.php">Exercise02</a></li>
                        <li><a href="ex3.php">Exercise03</a></li>
                        <li><a href="ex4.php">Exercise04</a></li>
                        <li><a href="#">Exercise05</a></li>
                        <li><a href="ex7/index.php">Exercise07</a></li>
                        </ul>
                    </nav>
                </header>
            </div>
        </div>
        <section id="home">
            <div class="section text-center">
                <div class="row">
                    <div class="textOnVideo col">
                        <h1>Web Programming</h1>
                        <h2><?php echo $h1 ?></h2>
                    </div>
                    <div class="video-container col embed-responsive embed-responsive-16by9">
                        <video autoplay muted loop class="video-bg embed-responsive-item">
                            <source src="assets/video/ambuluwawa.mp4">
                        </video>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tour Plan -->