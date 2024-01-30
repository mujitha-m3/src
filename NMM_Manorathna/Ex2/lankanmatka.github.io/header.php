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
                        <li class="hideOnMobile"><a href="ex1.php">Exercise01</a></li>
                        <li class="hideOnMobile"><a href="ex2.php">Exercise02</a></li>
                        <li onclick="showSidebar()" class="menu-button"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" fill="#fff"/></svg></a></li>
                        </ul>
                    </nav>

                    <script>
                        function showSidebar() {
                            const sidebar = document.querySelector('.sidebar');
                            sidebar.style.display = 'flex';
                        }
                    
                        function hideSidebar() {
                            const sidebar = document.querySelector('.sidebar');
                            sidebar.style.display = 'none';
                        }
                        
                    </script>
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