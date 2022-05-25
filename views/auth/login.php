<?php 
    session_start();

    // if (isset($_SESSION['logged_in'])) {
    //     header('Location: tables.php');
    //     exit();
    // }
    
    if (isset($_POST['login-form'])) {
        $db = new mysqli('localhost', 'root', '', 'online_bookstore');

        $email = $db->real_escape_string($_POST['email']);
        $password = md5($db->real_escape_string($_POST['password']));

        $data = $db->query("SELECT * FROM users WHERE email = '$email' AND password = '$password' ");
        
        if ($data->num_rows > 0) {
            $_SESSION['logged_in'] = '1';
            $_SESSION['email'] = $email;
            exit('success');
        } else {
            exit($db->error);
        }
    }

    echo 
        '<section id="login">
            <h1>Log in</h1>
            <form method="POST" action="login.php" id="login-form">
                <article class="input-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email">
                </article>

                <article class="input-group">
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password">
                </article>

                <article class="input-group">
                    <input type="submit" value="Log In">
                </article>
            </form>
        </section>';
?>