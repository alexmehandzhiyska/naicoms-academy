<?php
    // if (isset($_SESSION['logged_in'])) {
    //     header('Location: index.php');
    //     exit();
    // }
    
    if (isset($_POST['login'])) {
        $db = new mysqli('localhost', 'root', '', 'online_bookstore');

        $first_name = $db->real_escape_string($_POST['first_name']);
        $last_name = $db->real_escape_string($_POST['last_name']);
        $email = $db->real_escape_string($_POST['email']);
        $password = md5($db->real_escape_string($_POST['password']));
        $phone = $db->real_escape_string($_POST['phone']);

        $data = $db->query("SELECT * FROM users WHERE email = '$email' AND password = '$password' ");
        
        if ($data->num_rows == 0) {
            $sql_query = "INSERT INTO users (first_name, last_name, email, password, phone) VALUES ('$first_name', '$last_name', '$email', '$password', '$phone')";

            if ($db->query($sql_query) === true) {
                $_SESSION['logged_in'] = '1';
                $_SESSION['email'] = $email;
                exit('Success');
            }

            exit($db->error);
        }

        exit($email . $password);
    }
    echo '
        <section id="register">
            <h1>Register</h1>

            <form method="POST" action="register.php" id="register-form">
                <article class="input-group">
                    <label for="first_name">First name: </label>
                    <input type="text" name="first_name" id="first_name">
                </article>

                <article class="input-group">
                    <label for="last_name">Last Name: </label>
                    <input type="text" name="last_name" id="last_name">
                </article>

                <article class="input-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email">
                </article>

                <article class="input-group">
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password">
                </article>

                <article class="input-group">
                    <label for="phone">Phone number: </label>
                    <input type="text" name="phone" id="phone">
                </article>

                <article class="input-group">
                    <input type="submit" value="Register">
                </article>
            </form>
        </section>
    '
?>