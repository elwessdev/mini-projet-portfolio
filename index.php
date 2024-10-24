<?php 
    include_once("./config/db.php");
    $db = new DB();
    $projects = $db->SQLSelect("SELECT * FROM projects");
    // print_r($projects);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Osama Benali</title>
    <!-- CSS files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <!-- Header -->
    <header class="bg-dark text-white">
        <div class="container text-center">
            <h1>Osama Benali</h1>
            <nav class="mt-3">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#about">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#projects">Projects</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- About -->
    <section id="about">
        <div class="container">
            <h2 class="text-center">About Me</h2>
            <p class="text-center mt-4">Hi! I'm an IT student passionate about web development. <br /> I love learning new technologies and building web applications.</p>
        </div>
    </section>
    <!-- Skills -->
    <section id="skills" class="bg-light">
        <div class="container">
            <h2 class="text-center">Skills</h2>
            <div class="row text-center mt-4">
                <div class="col-md-3 col-sm-6">
                    <p>HTML</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <p>CSS</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <p>JavaScript</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <p>PHP</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <p>MySQL</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <p>ReactJs</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <p>NodeJs</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <p>MongoDB</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects -->
    <section id="projects">
        <div class="container">
            <h2 class="text-center">Projects</h2>
            <div class="row mt-4">
                <?php foreach($projects as $project): ?>
                    
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title"><?= $project["title"] ?></h3>
                                <p class="card-text"><?= $project["description"] ?></p>
                                <a target="_blank" href="<?= $project["link"] ?>" class="btn btn-primary">Click here</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="text-center addP">
            <a href="./add.php" class="btn btn-success">Add project</a>
        </div>
    </section>
    <!-- Download PDF button -->
    <div class="container text-center">
        <a id="downloadBtn" download href="cv.pdf" class="btn btn-success">Download CV</a>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center">
        <p>&copy; 2024 Osama Benali</p>
    </footer>
    <!-- JS files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
