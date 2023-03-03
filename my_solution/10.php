<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
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
        Enter numbers separated by space: <input type="text" name="nums" style="margin-left: 10px">
        <input value="SUBMIT" type="submit" name="submit" style="margin-left: 10px">
    </form>
    </body>
</html>

<?php

if (isset($_POST['submit']) ) {
     
    function median($input_arr)
    {
        sort($input_arr);
        $count = count($input_arr);
        $mid = floor($count / 2);
        if ($count % 2 == 0) {
            return ($input_arr[$mid - 1] + $input_arr[$mid]) / 2;
        }
        else {
            return $input_arr[$mid];
        }
    }
    
    $num_arr = explode(' ', $_POST['nums']);
    $median_num = median($num_arr);

    echo '<div class="output">Median: ' . $median_num . '</div>';
}

?>