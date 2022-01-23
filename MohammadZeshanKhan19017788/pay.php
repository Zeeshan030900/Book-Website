<html lang="eng">
<head>
    <title>Khan's libary Pay</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>

<header>
<img class="logo" alt="logo" src="images/book.jpg" width="10%" height="10%">
          <h1>Khan's Libary</h1>  
</header>
<br>
<h2 id="pageHeading">Payment</h2>
<nav id="payPage">
    <ul>
        <li><a href="index.html"><b>Home</b></a></li>
        <li><a href="#"><b>About us</b></a></li>
        <li><a href="#"><b>Contact</b></a></li>
    </ul>	
</nav>

<main>
    <label><b>Payment options:</b></label>
    <img id="mastercard" alt= "mastercard" src="images/mastercard.png" width=10% height=10%>

    <form action="success.php" method="POST">
    <br>

    <label for="ccnum">Credit card number (16 digit)</label>
    <input type="number" id="ccNum" name="ccNum" placeholder="Enter your card number"/>
    <br>

    <label for="cvv">Security Code</label>
    <input type="number" id="cvv" name= "cvv" placeholder="Enter the cvv"/>
    <br>

    <label for="Expiry date">Credit card expiry date</label><select id="months" name="month" title="select a month">
        <option value="0">Enter month</option>
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select>

    <select id="years" name="year" title="select a year">
        <option value="0">Enter year</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
    </select>
    <br>


    <input type="submit" name="submit" id="btn"/>
    <input type="hidden" id="h" name="h" value=''>

</form>
<script src="js/Main.js"></script>
</main>
</html>