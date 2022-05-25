<?php include "checkForSession.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Users list">
    <meta name="keywords" content="Users">
    <meta name="author" content="Alex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="icon" type="image/x-icon" href="./img/manioka.jpeg">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/users_list.css">
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">

    <script src="../js/users_list.js" defer></script>
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
            <h1 class="title">Users</h1>
    
            <section id="users">
            </section>
        </main>
    </section>
    
    <?php include './layout/footer.php'; ?>
</body>

</html>