<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->

 <html>
<head>
    <style>
        .output{
            border: 2px solid black;
            background-color: #e0e0e0;
            width: 250px;
            padding: 10px 10px;
            text-align: center;
            border-radius: 20px;
            margin: auto;
            align-items: center;
        }
        form{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 250px;
        }
    </style>
</head>

    <body>
    <form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="post">
        Enter a numbers: <input type="text" name="nums" style="margin-left: 10px">
        <input value="SUBMIT" type="submit" name="submit" style="margin-left: 10px">
    </form>
    </body>
</html>

<?php
if(isset($_POST['submit'])){

    $sum = 0;
    for ($i = 0; $i < strlen($_POST['nums']); $i++){
        $sum += intval($_POST['nums'][$i]);
    }
    echo '<div class="output">Sum of Digits: <strong>' . $sum . '</strong></div>';
}

?>