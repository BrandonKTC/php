 <!-- GET -->

 <form action="index.php">
     Name:<br><input type="text" name="name"><br>
     Age:<br><input type="text" name="age"><br><br>
     <input type="submit" value="Submit">
 </form>

 <?php
    $name = $_GET['name'];
    $age = $_GET['age'];

    if (isset($name) && isset($age)) {
        if (!empty($name) && !empty($age)) {
            echo 'My name is ' . $name . ' and I\'ve ' . $age . ' years old';
        } else {
            echo 'Nothing has been enter';
        }
    }
