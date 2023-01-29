<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    if (!empty($name)) {
        $sentence = $name . " woke up, and made a PHP tutorial";
    } else {
        echo 'Please enter a name.';
    }
}
?>
<html>

<head></head>

<body>

    <form action="index.php" method="post">
        Type your name:<br><input type="text" name="name" value="<?php echo $name; ?>"><br>
        <input type="submit" value="Submit">
    </form>
    <textarea cols="30" rows="10"><?php echo $sentence; ?></textarea>
</body>

</html>