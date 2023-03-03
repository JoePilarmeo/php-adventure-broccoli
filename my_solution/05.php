<!-- 
    Write a program that takes an array of numbers as input and outputs the sum of the numbers.
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
        Enter a numbers separated by space: <input type="text" name="nums" style="margin-left: 10px">
        <input value="SUBMIT" type="submit" name="submit" style="margin-left: 10px">
    </form>
    </body>
</html>

<?php
if(isset($_POST['submit'])){

    $num_arr = explode(' ', $_POST['nums']);
    $sum = 0;

    foreach ($num_arr as $cur_num) {
        $sum += intval($cur_num);
    }
    echo '<div class="output">Sum of Numbers: <strong>' . $sum . '</strong></div>';
}

?>