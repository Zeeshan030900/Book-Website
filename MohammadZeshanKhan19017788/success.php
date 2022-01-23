<html lang="eng">
<head>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<meta charset="utf-8"/>
<title>Khan's Libary success</title>
</head>

<img class="logo" alt="logo" src="images/book.jpg" width="10%" height="10%">
    <h1>Khan's Libary</h1> 
    <br>
    <h2 id="pageHeading">Success</h2>
<nav id="successPage">
    <ul>
        <li><a href="index.html"><b>Home</b></a></li>
        <li><a href="#"><b>About us</b></a></li>
        <li><a href="#"><b>Contact</b></a></li>
        </ul>	
 </nav>

 <main>
<?php $h = isset($_POST['h']) ? $_POST['h']: '';
if($h==1)
{
    $servername="localhost";
    $username="root";
    $password="";
    $databaseName="creditcard";

    $cardNumber=$_POST['ccNum'];
    $encryptedNum= str_pad(substr($cardNumber,-4), strlen($cardNumber), '*', STR_PAD_LEFT);
    echo "<h4> Your payment with</h4>". "<em> $encryptedNum </em>" . " has been successful.";


    $conn= mysqli_connect($servername,$username,$password,$databaseName);
    
    $ccNum=$_POST['ccNum'];
    $encrypt= md5('$ccNum');

    $cvv=$_POST['cvv'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $date= new datetime();
    $date->setDate($year,$month,1);
    $date-> modify ('+1 month -1 day');
    $expDate=$date-> format('yy-m-d');
    $sql="INSERT INTO card(ccnum, expdate, seccode)
    Values('$encrypt', '$expDate', '$cvv');";
    mysqli_query($conn, $sql);
    
}
if ($h==-1){
    header('Location: pay.php');
}
?>
</main>
</html>