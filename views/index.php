<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Home page">
    <meta name="keywords" content="Home, index">
    <meta name="author" content="Alex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="../js/calculator.js" defer></script>
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
            <section>
                <picture>
                    <source media="(min-width: 768px)" srcset="../../img/sunset.jpeg">
                    <source media="(min-width: 465px)" srcset="../../img/sunrise.jpeg">
                    <img src="../../../img/sunset.jpeg">
                </picture>
            </section>
    
            <section>
                <h1>Our story</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse modi magni laboriosam expedita minus tempore. Illum amet culpa sequi maxime nemo cumque ut velit nisi, sapiente, perspiciatis doloribus a doloremque!</p>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum nulla, laborum vitae atque ipsum cumque! Enim sed delectus quasi nesciunt exercitationem voluptatum, magnam in numquam tempore at vel tempora veniam!</span>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dolores deleniti atque quo quia ab, quasi animi minima cumque, exercitationem totam obcaecati officia magnam sapiente veritatis alias incidunt laborum! Labore?</span>
            </section>
    
            <section>
                <h1>Our values</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, laudantium neque sit recusandae aliquid delectus. Vero nemo magni non ipsam at quidem cum impedit aperiam. Praesentium, neque impedit? Saepe, ab!</p>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum nulla, laborum vitae atque ipsum cumque! Enim sed delectus quasi nesciunt exercitationem voluptatum, magnam in numquam tempore at vel tempora veniam!</span>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dolores deleniti atque quo quia ab, quasi animi minima cumque, exercitationem totam obcaecati officia magnam sapiente veritatis alias incidunt laborum! Labore?</span>
            </section>
    
            <section class="parallax">
                <article class="parallax-01"></article>
                <article class="parallax-02"></article>
                <article class="parallax-03"></article>
                <article class="parallax-04"></article>
            </section>
    
            <section id="calculator">
                <article>
                    <p id="result">0</p>
                </article>
                <table id="operation-btns">
                    <tr>
                        <td class="operator">%</td>
                        <td class="operation-btn">CE</td>
                        <td class="operation-btn">C</td>
                        <td class="operation-btn">X</td>
                    </tr>
    
                    <tr>
                        <td class="operator">1/x</td>
                        <td class="operator">x²</td>
                        <td class="operator">√x</td>
                        <td class="operator">/</td>
                    </tr>
    
                    <tr>
                        <td class="num result-btn">7</td>
                        <td class="num result-btn">8</td>
                        <td class="num result-btn">9</td>
                        <td class="operator">x</td>
                    </tr>
    
                    <tr>
                        <td class="num result-btn">4</td>
                        <td class="num result-btn">5</td>
                        <td class="num result-btn">6</td>
                        <td class="operator">-</td>
                    </tr>
    
                    <tr>
                        <td class="num result-btn">1</td>
                        <td class="num result-btn">2</td>
                        <td class="num result-btn">3</td>
                        <td class="operator">+</td>
                    </tr>
    
                    <tr>
                        <td class="operator">+/-</td>
                        <td class="num result-btn">0</td>
                        <td class="operator">.</td>
                        <td id="equals">=</td>
                    </tr>
                </table>
            </section>
        </main>
    </section>
    
    <?php include './layout/footer.php'; ?>
</body>

</html>