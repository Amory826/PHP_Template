
 <!-- include() = sao chép nội dung của 1 file (php, html, text)
 đưa vào trong file php
 <?php 
    include("header.html");


?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- $_GET and $_POST in PHP -->

    <!-- <form action="index.php" method = "post">
        <label>Username: </label> <br>
        <input type="text" name ="username"> <br>
        <label>Password: </label> <br>
        <input type="password" name ="password">
        <br>
        <input type="submit" value="Log in">
    </form> -->

    <!-- <form action="index.php" method = "post"> 
        <label>Enter a number to count to:  </label> <br>
        <input type="text" name ="counter"> <br>
        <input type="submit" value="Start">
    </form> -->
    
    <!-- <form action="index.php" method = "post">
        <label>Enter a country:  </label> <br>
        <input type="text" name ="country"> <br>
        <input type="submit" value="Start">
    </form> -->

    <!-- <form action="index.php" method = "post"> isset() and empity()
        <label>Username:</label> <br>
        <input type="text" name ="username"> <br>
        <label>Password:</label> <br>
        <input type="password" name ="password"> <br>
        <input type="submit" name = "log_in"  value="Log in">
    </form> -->

    <!-- <form action="index.php" method = "post">  radio buttons
        <input type="radio" name="credit_card" id="" value = "Visa"> Visa 
        <br>
        <input type="radio" name="credit_card" id="" value = "Master_card "> Master card 
        <br>
        <input type="radio" name="credit_card" id="" value = "American_Express"> American Express 
        <br>
        <input type="submit" name = "confirm" value="Confirm">
    </form> -->

    <!-- <form action="index.php" method = "post"> //checkbox 
        //sử dụng [] để lấy tất cả các giá trị của checkbox 
        <input type="checkbox" name="maint[]" id="" value = "Pizza"> Pizza 
        <br>
        <input type="checkbox" name="maint[]" id="" value = "hamburger "> Hamburger 
        <br>
        <input type="checkbox" name="maint[]" id="" value = "hotdog"> Hotdog 
        <br>
        <input type="submit" name = "confirm" value="Confirm">
    </form> -->

    <!-- <form action="index.php" method="post"> // sanitize and validate input
        Age: <br>
        <input type="text" name="age" id=""> <br>
        <input type="submit" name = "login" value="login">

    </form> -->

    <!-- Include 
    <hr>
    This is the home page
    <br>
    Stuff about your home page can go here
    <br>-->

</body>
</html>

<!-- <?php // Post, Get if, else, for, while, array
    // // echo $_POST["username"]. "<br>";
    // // echo $_POST["password"];


    // // $item = "pizza";
    // // $price = 5.99;
    // // $quantity = $_GET["quantity"];

    // // $total = $quantity * $price;

    // // echo "You have order number:  {$quantity} x {$item}s <br>";
    // // echo "Your total is: \${$total}";

    // // $counter = $_POST["counter"];

    // // for( $i = 0; $i < $counter; $i++){
    // //     echo $i . "<br>";
    // // }
    // // $a = 0;
    // // while ($a <= 10) {
    // //     $a++;
    // //     echo $a . "<br>";
    // // }

    // $foods = array(1, 2, 3, 4, 5, 6);

    // // Muốn push phần tử vào cuối mảng
    // array_push($foods, 7);

    // // Muốn xóa phần tử vào cuối mảng
    // array_pop($foods);

    // // Muốn xóa phần tử ở đầu mảng
    // array_shift($foods);   

    // // Muốn đảo phần tử của mảng
    // array_reverse($foods);

    // foreach($foods as $food){
    //     echo $food . "<br>";
    // } 

?>-->

<!-- <?php // array Key_Value
    $capitals = array ("USA" => "Washington D.C",
                        "Japan" => "Tokyo",
                        "South Korea" => "Seoul",
                        "Viet Nam" => "Ha Noi");

    // // Sửa thông tin value của key:
    // $capitals["South Korea"] = "Busan";

    // // Thêm phần tử vào trong array key=>values;
    // $capitals["England"] = "ManChester";

    // // Đảo ngược key và value với nhau
    // //$capitals = array_flip($capitals);

    // // Loại bỏ phần tử cuối cùng:
    // array_pop($capitals);

    // // Loại bỏ phần tử đầu tiên:
    // array_shift($capitals);

    // // Lấy các giá trị của key;
    // $keys = array_keys($capitals);

    // // Lấy các giá trị của key;
    // $values = array_values($capitals);

    // // Đổi ngược vị trí các cặp key_values với nhau:
    // $capitals = array_reverse($capitals);


    // foreach($capitals as $key => $value){
    //     echo " ${key} : {$value} <br>";
    // }

    // echo "Lấy các giá trị của Key: <br>";
    // foreach($keys as $key){
    //     echo " ${key} <br>";
    // }

    // echo "Lấy các giá trị của value: <br>";
    // foreach($values as $value){
    //     echo " ${value} <br>";
    // }

    // // Hiển thị ra phần tử trong mảng:
    // echo count($capitals);

    //$capital = $capitals[$_POST["country"]];
    
    //echo "The capital is {$capital}";

?> -->


<!-- <?php // isset and empty
    // $usename = "AmoryTuan";
    // if(isset($usename)){
    //     echo "This varible is set";
    // } else{
    //     echo "This varible is NOT set";
    // }

    // if(empty($usename)){
    //     echo "This varible is emtipy";
    // }else{
    //     echo "This varible is not empity";
    // }

    // foreach($_POST as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    if(isset($_POST["log_in"])){
        $userName = $_POST["username"];
        $password = $_POST["password"];
        if(empty($password)|| empty($userName)){
            echo "User name or password is missing <br>";
        } else{
            echo "Hello {$userName}, password is: {$password} <br>";
        }
    }

    foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";
    }

?> -->


<!-- <?php //radio buttons
    if(isset($_POST["confirm"])){
        if(isset($_POST["credit_card"]))
        {
            $credit_card = $_POST["credit_card"];
             
        }else{
            echo "Plesa make delection <br>";
        }

        //if()
    }

?> -->


<!-- <?php // checkbox in php
    if(isset($_POST["confirm"])){
        // if(isset($_POST["pizza"])){
        //     echo "I Like pizza! <br>";
        // }
        // if(isset($_POST["hamburger"])){
        //     echo "I Like hamburger! <br>";
        // }
        // if(isset($_POST["hotdog"])){
        //     echo "I Like hotdog! <br>";
        // }
        $maints = $_POST["maint"];
        foreach($maints as $maint){
            echo $maint . "<br>";
        }
    }else{
        echo "No selection";
    }
        
?> -->

<!-- <?php // function
    function number(){
        echo "Munber 1";
    }

    number(); 
?> -->

<!-- <?php // function string
    $userName = "Bro The Code";
    $phone = "123-456-7890";
    $arrayUserName = array("Bro", "The", "Code");

    // Biến tất cả chữ thành chữ thường.
    $example = strtolower($userName);
    
    // Biến tất cả chữ thành chữ hoa.
    $example = strtoupper($userName);

    // Cắt chuỗi thừa trong một chuỗi
    $example = trim($userName);

    // Đệm chuỗi ký tự lên một khoảng str_pad($bien,khoang_can_dem, KyTuCanDem);
    $example = str_pad($userName, 20 ,",");

    // str_replace: thay thế ký tự này thành kí tự khác trong chuỗi
    $example = str_replace("-", " ", $phone);

    // Hàm đảo ngược chuỗi
    $example = strrev($userName);

    // Hàm trộn chuỗi
    $example = str_shuffle($userName);

    // Hàm so sánh chuỗi (= 0 nếu 2 chuổi bằng nhau, =/ 0 thì 2 chuỗi không bằng nhau)
    $equal = strcmp($userName, "Bro Code");

    //strlen kiểm tra độ dài của chuỗi
    $example = strlen($userName);

    //strpos($tenBien, kiTuCanTim) trả về vị trí của 
    $index = strpos($userName, " ");

    //substr($tenBien, viTriDau, viTriCuoi): cắt 1 chỗi ở vị trí mong muốn
    //Nếu muốn cắt vị trí cuối thì chỉ cần truyền vào tên biến và 1 đối số bắt đầu cắt
    $example = substr($userName, 0, 4);

    //explode(kí tự nhận dạng cần tách, tên biến): tách tên ra từng bộ phần riêng
    $fullName = explode(" ",$userName);

    // implode(Kí tự nối, tenBien): nối một mảng chuỗi thành 1 chuỗi.
    $useName = implode("-", $arrayUserName);


    echo $example . "<br>";
    echo $index . "<br>";
    echo $equal. "<br>";
    echo $userName . "<br>";

    foreach($fullName as $name){
        echo $name . "<br>";
    }


?> -->


<!-- <?php //sanitize and validate input vệ sinh và xác thực đầu vào trong PHP
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST, "age", 
                                FILTER_SANITIZE_INT); // Loại bỏ các kí tự đặc biệt khi nhập vào từ bàn phím
        
        $username = filter_input(INPUT_POST, "age",
                                FILTER_VALIDATE_INT); // có chứa các kí tự không hợp lệ thì không gán vào chuỗi
        
        echo "Hello {$username}";


    }
?> -->


<!-- <?php  // include() function footer
    include("footer.html");
?> -->


<?php
    // cookie
    //setcookie("", "", "")
    setcookie("");
?>
