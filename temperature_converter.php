<!DOCTYPE html>
<html>
<title>Temperature Converter</title>

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

        h2 {
            color: red;
            font-size: 25px;

        }

        #result {
            margin-top: 20px;

        }
    </style>
</head>

<body>
    <h1>Temperature Converter</h1>
    <div class="container">
        <form method="post" action="">
            <input type="number" name="userInput" placeholder="Enter your temperature Value" required><br>
            <label>Select conversion option</label><br>
            <select name="operation">
                <option value="fahrenheit">Fahrenheit to Celsius</option>
                <option value="Celsius">Celsius to Fahrenheit</option>
            </select>
            <br>
            <button type="submit">See Result</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userInput = $_POST['userInput'];
            $operation = filter_input(INPUT_POST, 'operation', FILTER_SANITIZE_STRING);
            if ($operation == "fahrenheit") {
                $result = ($userInput - 32) / 1.8;
                echo "<h2>Temperature in Celsius: $result</h2>";
            } else if ($operation == "Celsius") {
                $result = ($userInput * 1.8) + 32;
                echo "<h2>Temperature in Farenheit: $result</h2>";
            }

        }
        ?>

    </div>

</body>

</html>