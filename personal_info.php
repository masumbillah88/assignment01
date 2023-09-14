<!DOCTYPE html>
<html>
<title>Personal Information</title>

<head>
    <style>
        body {
        font-family: Arial, sans-serif;
        text-align: center;
        }
        .container {
               
            margin: 50px auto;
            width: 960px;
            border: 1px solid #ccc;
            padding: 20px 30px 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top:5px;
            margin-bottom:2px;
            color:green;
            font-family: 'Courier New', Courier, monospace;
            font-size:20px;

        }
        .container01 {
               
               margin: 50px auto;
               width: 960px;
               border: 1px solid #ccc;
               padding: 20px 30px 10px;
               border-radius: 5px;
               box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
               margin-top:5px;
               color:green;
               font-family: 'Courier New', Courier, monospace;
               font-size:20px;
   
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
            color:black;
            font-size: 16px;
            text-align: justify;
            opacity:70%;
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
        td{
            border:none;
            padding:5px;
            
        }
        table{margin-left:20px;}
        .table{
            width: 450px;
            background-color: #f6f6f6;
            color:black;
            
        }
    </style>
</head>

<body>
    
    <div class="container">
        <h1>Personal Information</h1>
        
        <?php
            $name = "Muhammad Masum Billah";
            $age =  36;
            $country = "Bangladesh";
            $brief_intro = "";
        ?>
        <table>
            <tr>
                <td class = "table">Name</td>
                
                <td class = "table"><?php echo $name?></td>
            </tr>
            <tr>
            <td class = "table">Age</td>
            
            <td class = "table"><?php echo $age?></td>
            </tr>
            <tr>
            <td class = "table">Country</td>
            
            <td class = "table"><?php echo $country?></td>
            </tr>
        </table>

    </div>
    <div class="container01">
        <h1>Brief Introduction</h1>
        
        <?php
            
            $brief_intro = "<p>This is Muhammad Masum Billah known also as Shahriar Masum as a writer from Barishal City renowned for rice, river and canals. Born in 1988 at a village named Narakathi in the bank of Bighai River which is also situated at Barishal Sadar Upazila. I have Graduated from Jagannath University in the discipline of Zoology. I love programming and writing poem, rhymes and humor also. In Ekushey Book Fair 2022, my first book of humor named 'Ghum Bhenge Dekhi Kaschchop Hoye Gechi' was published from Chotoder Somoy Publication. The first edition of the book ran out and the publisher is ready to print the second one.</p>
            
            <p>
            My second book named 'Sabuj Patar Kaner Dul' was published in 2023 book fair and it covers poem for kids. I have started my career as a Sub-Editor (News) in the Daily Jaijaidin and Manabkantha. Now I am working in a renowned Private Bank.
            </p>
            
            ";
        ?>
        <p><?php echo $brief_intro ?></p>

    </div>

</body>

</html>