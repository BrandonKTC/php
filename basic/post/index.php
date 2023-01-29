<!-- POST -->

<form action="index.php" method="POST">
    Password:<br><input type="password" name="password"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['password']) && !empty($_POST['password'])) {
    if ($_POST['password'] == "password") {
        echo "correct";
    } else {
        echo "incorrect";
    }
}
