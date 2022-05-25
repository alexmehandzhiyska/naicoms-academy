<?php include "checkForSession.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tables">
    <meta name="keywords" content="Tables,">
    <meta name="author" content="Alex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tables</title>
    <link rel="icon" type="image/x-icon" href="./img/manioka.jpeg">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/tables.css">
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/crypto.js" defer></script>
    <script src="../js/navbar.js" defer></script>
</head>

<body>
    <?php include 'header.php';?>

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
            <a href="https://www.tutorialrepublic.com/html-tutorial/html-tables.php">Tables</a>
    
            <table class="table-01">
                <thead>
                    <tr>
                        <th></th>
                        <th>Knocky</th>
                        <th>Flor</th>
                        <th>Ella</th>
                        <th>Juan</th>
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                        <td>Breed</td>
                        <td>Jack Russel</td>
                        <td>Poodle</td>
                        <td>Streetdog</td>
                        <td>Cocker Spaniel</td>
                    </tr>
    
                    <tr>
                        <td>Age</td>
                        <td>16</td>
                        <td>9</td>
                        <td>10</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Owner</td>
                        <td>Mother-in-law</td>
                        <td>Me</td>
                        <td>Me</td>
                        <td>Sister-in-law</td>
                    </tr>
                    <tr>
                        <td>Eating Habits</td>
                        <td>Eats everyone's leftovers</td>
                        <td>Nibbles at food</td>
                        <td>Hearty eater</td>
                        <td>Will eat till he explodes</td>
                    </tr>
                </tbody>
            </table>
    
            <br>
    
            <table class="table-02">
                <thead>
                    <tr>
                        <th><br>Day/Period</th>
                        <th>I<br>9:30-10:20</th>
                        <th>II<br>10:20-11:10</th>
                        <th>III<br>11:10-12:00</th>
                        <th>12:00-12:40</th>
                        <th>IV<br>12:40-1:30</th>
                        <th>V<br>1:30-2:20</th>
                        <th>VI<br>2:20-3:10</th>
                        <th>VII<br>3:10-4:00</th>
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>Eng</td>
                        <td>Mat</td>
                        <td>Che</td>
                        <td rowspan="6" style="writing-mode: vertical-rl; text-orientation: upright;">LUNCH</td>
                        <td colspan="3">LAB</td>
                        <td>Phy</td>
                    </tr>
    
                    <tr>
                        <td>Tuesday</td>
                        <td colspan="3">LAB</td>
                        <td>Eng</td>
                        <td>Che</td>
                        <td>Mat</td>
                        <td>SPORTS</td>
                    </tr>
    
                    <tr>
                        <td>Wednesday</td>
                        <td>Mat</td>
                        <td>phy</td>
                        <td>Eng</td>
                        <td>Che</td>
                        <td colspan="3">LIBRARY</td>
                    </tr>
    
                    <tr>
                        <td>Thursday</td>
                        <td>Phy</td>
                        <td>Eng</td>
                        <td>Che</td>
                        <td colspan="3">LAB</td>
                        <td>Mat</td>
                    </tr>
    
                    <tr>
                        <td>Friday</td>
                        <td colspan="3">LAB</td>
                        <td>Mat</td>
                        <td>Che</td>
                        <td>Eng</td>
                        <td>Phy</td>
                    </tr>
    
                    <tr>
                        <td>Saturday</td>
                        <td>Eng</td>
                        <td>Che</td>
                        <td>Mat</td>
                        <td colspan="3">SEMINAR</td>
                        <td>SPORTS</td>
                    </tr>
                </tbody>
            </table>
    
            <table class="crypto-table">
                <thead>
                    <tr>
                        <td>Uid</td>
                        <td>Coin name</td>
                        <td>Acronym</td>
                        <td>Logo</td>
                    </tr>
                </thead>
    
                <tbody class="crypto-table-body">
                </tbody>
            </table>
        </main>
    </section>
    
    <?php include 'footer.php'; ?>
</body>

</html>