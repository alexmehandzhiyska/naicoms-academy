<?php include "checkForSession.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="My favourite books">
    <meta name="keywords" content="Books, Reading">
    <meta name="author" content="Alex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lists</title>
    <link rel="icon" type="image/x-icon" href="./img/manioka.jpeg">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/lists.css">
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
            <h1 class="title">Lists</h1>
            <section>
                <p><a href="https://www.w3schools.com/html/html_lists_unordered.asp ">Unordered Lists</a></p>
                <ul>
                    <li>The book thief</li>
                    <li>Man in search of meaning</li>
                    <li>Wonder</li>
                    <li>Harry Potter</li>
                    <li>The teenage brain</li>
                </ul>
            </section>
    
            <section>
                <p><a href="https://www.w3schools.com/html/html_lists_ordered.asp">Ordered lists</a></p>
                <ol>
                    <li>Sing heart
                        <ol>
                            <li>Singer: Georgi Hristov</li>
                            <li>Genre: Pop</li>
                        </ol>
                    </li>
    
                    <li>Caruso
                        <ol>
                            <li>Singer: Lara Fabian</li>
                            <li>Genre: Pop</li>
                        </ol>
                    </li>
    
                    <li>Adagio
                        <ol>
                            <li>Singer: Lara Fabian</li>
                            <li>Genre: Pop</li>
                        </ol>
                    </li>
    
                    <li>I Tried
                        <ol>
                            <li>Singer: Camilo Green</li>
                            <li>Genre: Pop</li>
                        </ol>
                    </li>
    
                    <li>Summertime
                        <ol>
                            <li>Singer: Ella Fitzgerald</li>
                            <li>Genre: Jazz</li>
                        </ol>
                    </li>
                </ol>
            </section>
    
            <section>
                <p> <a href="https://www.w3schools.com/html/html_lists_other.asp">Description lists</a></p>
    
                <dl>
                    <dt>Moussaka</dt>
                    <dd>- potatoes, ground meat</dd>
    
                    <dt>Tarator</dt>
                    <dd>- yogurt, cucumber</dd>
    
                    <dt>Stuffed peppers</dt>
                    <dd>- ground meat, rice</dd>
                </dl>
            </section>
        </main>
    </section>

    <?php include './layout/footer.php'; ?>
</body>

</html>