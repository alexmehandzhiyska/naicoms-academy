<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Profile form page">
    <meta name="keywords" content="Form, profile">
    <meta name="author" content="Alex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register/Login Form</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/forms.css">
    <link rel="stylesheet" href="../../css/font-awesome-4.7.0/css/font-awesome.min.css">

    <script src="../../js/forms.js" defer></script>
    <script src="../../js/register.js" defer></script>
    <script src="../../js/login.js" defer></script>
    <script src="../../js/navbar.js" defer></script>
    <script src="../js/db_users.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <?php include '../layout/header.php';?>

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
            <section id="forms-wrapper">
                <nav id="form-nav">
                    <ul>
                        <li id="login-btn">Login</li>
                        <li id="register-btn">Register</li>
                    </ul>
                </nav>

                <?php include('login.php') ?>
    
                <?php include('register.php') ?>
            </section>
    
            <section id="users">
                <?php include('../db_users.php') ?> 
            </section>
    
        </main>
    </section>
    
    <?php include '../layout/footer.php'; ?>
</body>

</html>