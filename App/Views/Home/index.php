<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home</title>
</head>

<body>
    <h1>Home</h1>
    <p>Hello from the Home Directory</p>

    <ul>
        <?php foreach ($colours as $coulour) : ?>
            <li><?php echo htmlspecialchars($colour); ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>