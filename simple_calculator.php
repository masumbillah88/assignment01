<!DOCTYPE html>
<html>
<title>Simple Calculator</title>

<head>
    <style>
        body {
        font-family: Arial, sans-serif;
        text-align: center;
        }
        .container {

            margin: 50px auto;
            width: 400px;
            border: 1px solid #ccc;
            padding: 20px 30px 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

        }
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        p{
            color:red;
            font-size: 20px;
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
        <h1>Simple Calculator</h1>
        <form method="post" action="">
            <input type="number" name="number01" placeholder="Enter Number" required><br>
            <input type="number" name="number02" placeholder="Enter Number" required><br>
            
            <select name="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select>
            <br>
            <button type="submit">See Result</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number01 = $_POST['number01'];
            $number02 = $_POST['number02'];
            $operation = filter_input(INPUT_POST, 'operation', FILTER_SANITIZE_STRING);
            if ($operation == "add") {
                $result = $number01+$number02;
                echo "<h2> $result</h2>";
            } else if ($operation == "subtract") {
                $result = $number01-$number02;
                echo "<h2> $result</h2>";
            }else if ($operation == "multiply") {
                $result = $number01*$number02;
                echo "<h2> $result</h2>";
            }else if ($operation == "divide") {
                if($number01 != 0 || $number02 !=0){
                    $result = $number01/$number02;
                    echo "<h2> $result</h2>";
                   
                }else{
                    echo "<p>The Number Can not be divided by Zero<p>";   
                }
                
                
            }
        }
        ?>

    </div>

</body>

</html>