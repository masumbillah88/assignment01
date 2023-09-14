<!DOCTYPE html>
<html>
<title>Grade Calculator</title>

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
    <div class="container">
        <h1>Grade Calculator</h1>
        <form method="post" action="">
            <label>First Test</label> <input type="number" name="test01" placeholder="Enter the score of test one"
                required><br>
            <label>Second Test</label> <input type="number" name="test02" placeholder="Enter the score of test two"
                required><br>
            <label>Third Test</label> <input type="number" name="test03" placeholder="Enter the score of test Three"
                required><br>
            <button type="submit">See Grade</button>
            <button type="reset">Clear</button>
        </form>
        <div id="result">


        </div>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $first_test = $_POST['test01'];
            $second_test = $_POST['test02'];
            $third_test = $_POST['test03'];
            $average_score = ($first_test + $second_test + $third_test) / 3;
            
            echo "<h3>Average Score: $average_score</h3>";

            switch ($average_score) {
                case ($average_score >= 80 && $average_score <= 100):
                    echo "<h2> Grade: A</h2>";
                    break;
                case ($average_score >= 70 && $average_score < 80):
                    echo "<h2> Grade: B</h2>";
                    break;
                case ($average_score >= 60 && $average_score < 70):
                    echo "<h2> Grade: C</h2>";
                    break;
                case ($average_score >= 50 && $average_score < 60):
                    echo "<h2> Grade: D</h2>";
                    break;
                /*case ($average_score>=40 && $average_score<50):
                                    echo "<h2> Result: F</h2>";
                                    break;
                */
                default:
                    echo "<h2> Grade: F </h2>";
            }
        }
        ?>
</body>

</html>