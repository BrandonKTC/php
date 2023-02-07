<?php
$weather = "";
$error = "";

if (array_key_exists('city', $_GET)) {
    $city = str_replace(' ', '', $_GET['city']);

    $file_headers = @get_headers("https://weather-forecast.com/locations/" . $city . "/forecasts/latest");

    if ($file_headers[0] == "HTTP/1.1 404 Not Found") {
        $error = "That city could not be found.";
    } else {
        $forecastPage = file_get_contents("https://weather-forecast.com/locations/" . $city . "/forecasts/latest");

        $pageArray = explode(
            'Weather Today</h2> (1&ndash;3 days)</div><p class="b-forecast__table-description-content"><span class="phrase">',
            $forecastPage
        );

        if (sizeof($pageArray) > 1) {
            $secondPageArray = explode('</span></p></td>', $pageArray[1]);

            if (sizeof($secondPageArray) > 1) {
                $weather = $secondPageArray[0];
            } else {
                $error = "That city could not be found. 3";
            }
        } else {
            $error = "That city could not be found. 2";
        }
    }
} else {
    $error = "That city could not be found. 1";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Scraper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<style type="text/css">
    html {
        background: url("./background.jpg") no-repeat center center fixed;
        background-size: cover;
    }

    body {
        background: none;
    }

    .container {
        text-align: center;
        margin-top: 100px;
        width: 450px;
    }

    input {
        margin: 20px 0;
    }

    #weather {
        margin-top: 15px;
    }
</style>

<body>
    <div class="container">
        <h1>What's the Weather?</h1>
        <form>
            <fieldset class="form-group">
                <label for="city">Enter a city name.</label>
                <input type="text" class="form-control" id="city" placeholder="E.g., London, Tokyo" name="city" value="<?php if (array_key_exists('city', $_GET)) echo $_GET['city'] ?>">
            </fieldset>

            <button class="btn btn-primary" type="submit">Submit</button>
        </form>

        <div id="weather">
            <?php

            if ($weather) {
                echo '<div class="alert alert-success" role="alert">' . $weather . '</div>';
            } else if ($error) {
                echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
            }

            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>