<!DOCTYPE html>
<html>
<title>Even and Odd Checker</title>

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
    <h1>Even and Odd number Checker</h1>
    <div class="container">
        <form method="POST" action="">
            <input type="number" name="number" placeholder="Enter Number only" required>
            <button type="submit">Check the number</button>
        </form>
        <div id="result">

        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST['number'];
            function check($number)
            {
                if ($number % 2 == 0) {
                    echo "<h3>The number is Even</h3>";
                } else {
                    echo "<h3>The number is Odd</h3>";
                }

            }
        }
        check($number);
        ?>
    </div>
</body>

</html>