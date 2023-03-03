<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
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
        Enter a strings separated by space: <input type="text" name="chars" style="margin-left: 10px">
        <input value="SUBMIT" type="submit" name="submit" style="margin-left: 10px">
    </form>
    </body>
</html>

<?php

if (isset($_POST['submit'])) {

    $str_arr = explode(' ', $_POST['chars']);
    $longstr = '';    
    
    foreach ($str_arr as $str) {
        if (strlen($str) > strlen($longstr)) {
            $longstr = $str;
        }    
    }
    echo '<div class="output"> Longest string: <strong>' . $longstr . '</strong> </div>';
}
?>