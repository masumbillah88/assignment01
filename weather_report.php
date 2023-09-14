<!DOCTYPE html>
<html>
<title>Weather Report</title>

<head>
    <style>
        .container {

            margin: 50px auto;
            width: 400px;
            border: 1px solid #ccc;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

        }

        h1 {
            text-align: center;
            color: green;
            font-weight: bold;
            font-family: Arial sans-serif;
            margin-bottom: -30px;
        }

        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            font-weight: bold;
            letter-spacing: 0.1em;
        }

        h3 {
            color: red;
            font-size: 25px;

        }

        #result {
            margin-top: 20px;

        }
    </style>
</head>

<body>
    <h1>Weather Report</h1>
    <div class="container">
        <form method="POST" action="">
            <input type="number" name="temperature" placeholder="Enter temperature" required>
            <button type="submit">Know the weather</button>
        </form>
        <div id="result">

        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST['temperature'];
            /**
             * Summary of check
             * @param mixed $temperature
             * @return void
             */
            function check($temperature){
                if ($temperature <= 0) {
                    echo "<h3> It's freezing!</h3>";
                } else if($temperature>=0 && $temperature<=20){
                    echo "<h3>It's cold.</h3>";
                } else if($temperature>=20 && $temperature<=25){
                    echo "<h3>It's warm.</h3>";   
                }else if($temperature>=25 && $temperature<=30){
                    echo "<h3>It's more than warm.</h3>";
                }else if($temperature>=31 && $temperature<=35){
                    echo "<h3>It's hot weather.</h3>";

                }else{
                    echo "<h3>We live in Kingdom of Saudi Arabia.</h3>";
                }
            }
        }
        check($temperature);
        ?>
    </div>
</body>

</html>