<?php include "checkForSession.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Animations page">
    <meta name="keywords" content="Animations">
    <meta name="author" content="Alex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animations</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="../js/navbar.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <?php include './layout/header.php';?>

    <section class="content-wrapper">
        <aside>
            <nav id="side-nav">
                <ul>
                    <button class="close-btn">X</button>
                    <li><a href="./index.php">Home </a></li>
                    <li><a href="./tables.php">Tables </a></li>
                    <li><a href="./lists.php">Lists</a></li>
                    <li><a href="./forms.php">Forms </a></li>
                    <li><a href="./game.php">Game</a></li>
                    <li><a href="./users_list.php">Users</a></li>
                </ul>
            </nav>
        </aside>
    
    
        <main>
            <section class="row">
                <div class="change-color"></div>
                <div class="change-size"></div>
            </section>
    
            <section class="row">
                <div class="side-to-side text-square">Side to Side</div>
            </section>
    
            <section class="row">
                <div class="rotate rotate-x text-square">Rotate X</div>
                <div class="rotate rotate-y text-square">Rotate Y</div>
                <div class="rotate rotate-z text-square">Rotate Z</div>
            </section>
    
            <section class="row">
                <div class="square text-square">I go round a square</div>
            </section>
    
            <section class="row">
                <div class="zoom text-square">Hover Me to zoom</div>
                <div class="flip text-square">Flip</div>
                <div class="circle text-square"><span id="circle-text">Hover me to turn into a circle</span></div>
            </section>
        </main>
    </section>
    
    <?php include './layout/footer.php'; ?>
</body>
</html>