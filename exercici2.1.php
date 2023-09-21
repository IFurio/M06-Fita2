<h2>Login</h2>

<form method="POST">
    <input type="text" name="user" placeholder="name">
    <br>
    <input type="password" name="pass" placeholder="password">
    <br>
    <input type="submit">
</form>

<?php
$users = array(
    "Pedro" => "123",
    "Manuel" => "321",
    "Jose" => "321"
);
if ( isset($_POST["user"])) {
    $correct = false;
    foreach ($users as $name => $pass){
        if ($_POST["user"] == $name && $_POST["pass"] == $pass) {
            echo "<h3>Login correcte!!</h3>\n";
            $correct = true;
            break;
        }
    }
    if (!$correct) {
        echo "<h3>The password or the user is wrong.</h3>";
    }
    
}
?>