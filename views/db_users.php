<?php
    $db = new mysqli('localhost', 'root', '', 'online_bookstore');

    $data = $db->query("SELECT * FROM users");
    if ($data->num_rows > 0) {
        $users = array();

        while($row = $data->fetch_assoc()) {
            $user = array("first_name"=>$row["first_name"], "last_name"=>$row["last_name"], "email"=>$row["email"], "phone"=>$row["phone"], "register_date"=>$row["register_date"]);
            array_push($users, $user);
        }
    }
    

    echo '<table id="users-table">';
    echo '
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Submission time</th>
                </tr>
            </thead>';

    for ($i = 0; $i < sizeof($users); $i++)
    {   
        echo '<tr>';
        echo "<td>{$users[$i]["first_name"]}</td>";
        echo "<td>{$users[$i]["last_name"]}</td>";
        echo "<td>{$users[$i]["email"]}</td>";
        echo "<td>{$users[$i]["phone"]}</td>";
        echo "<td>{$users[$i]["register_date"]}</td>";
        echo '</tr>';
    }
    echo '</table>';
?>