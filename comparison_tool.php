<!DOCTYPE html>
<html>
<title>Comparision Tool</title>

<head>
    <style>
        .container{

            margin: 50px auto;
            width: 400px;
            border: 1px solid #ccc;
            padding: 30px;
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
    
    <div class="container">
    <h1>Comparison Tool</h1>
        <form method="POST" action="">
            <input type="number" name="number01" placeholder="Enter First Number" required><br>
            <input type="number" name="number02" placeholder="Enter Second Number" required><br>
            <button type="submit">See Result</button>
        </form>
        <div id="result">

        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number01 = $_POST['number01'];
            $number02 = $_POST['number02'];
            $largNumber = ($number01>$number02)?"The First Number is Large":"The Second Number is Large";
            echo "<h3>$largNumber</h3";
            
                
        }
        
        ?>
    </div>
</body>

</html>