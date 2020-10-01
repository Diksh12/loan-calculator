
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>STUDENT LOAN EMI CALCULATOR</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;500&display=swap");

@import url("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");


.selector-for-some-widget {
  box-sizing: content-box;
}

body{
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background-image: url('mat.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    text-align: inherit;
    font-size: 40px;
    font-weight: 500;
    font-color: black;
    /*padding-top: 40px;*/
    /*padding-bottom: 40px;
    margin-bottom: 40px;
    margin-top: 40px;*/
    
}

*{
    box-sizing: border-box; 
    margin: 0px;
    
}

/*
.home {
  min-height: 160vh;
  background-image: url('mat.jpg');
  background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    text-align: inherit;
    font-size: 40px;
    font-weight: 500;
    font-color: black;
    padding: 15px;
    padding-top: 40px;
}
*/

.first {
  color: whitesmoke;
  border-bottom: 1px solid white;
}

.menu {
  float:left;
  height: 2000px;
  width:20%;
  text-align:center;
  color: whitesmoke;
  margin-top: 190px;
  
}

.menu p {
  font-size: 36px;
  margin-bottom: 4px;
}
.menu a {

  background-color: black;
  padding:8px;
  margin-top:7px;
  display:block;
  width:100%;
  height: 200px;
  color:whitesmoke;
  opacity: 70%;
}
.main {
  float:left;
  width:60%;
  height: 60%;
  padding:0 40px;
  padding-right: 30%;
}

div .shadowbox {
    font-size: 40px;
    width: 20em;
  border: 8px solid white;
  box-shadow: 20px 20px 10px #444;
  padding: 8px 12px;
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6), rgba(0,0,0,0.6) 40%, rgba(0,0,0,0.6)), url(mat.jpg);
  opacity: 70%;
}

.main .shadowbox {
  background-color: #ffffff;
  color: whitesmoke;
    padding: 30px;
    flex: 0 0 calc(70% - 70px);
    max-width: calc(180% - 99px);
    margin-bottom: 30px;
    margin-top: 10%;
    margin-left: 15%;
    

    border: 0px solid #eeeeee;
    text-align: center;
    position: center;
    border-radius: 5px;
}

.main .shadowbox::before{
    content: '';
    height: 5px;
    background-color: whitesmoke;
    position: absolute;
    bottom: 5px;
    width: 50px;
    left: 0;
    right: 0;
    margin: auto;
    transition: all .5s ease;
}

.main .shadowbox:hover::before{
    width: 100%;

}

.main .shadowbox .icon {
  height: 80px;
    width: 80px;
    background-color: teal;
    margin: 20px auto 20px;
    
    border-radius: 50%;
    text-align: center;
}

.main .shadowbox .icon .fa{
    font-size: 25px;
    color: white;
    line-height: 60px;
}


form  h7{
    color: whitesmoke;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 35px;
    font-weight: 450;
    margin: 0;
    padding: 0;
    font-style: bold;
    text-align: start;

}

form .app-form-control {
    background-color: white;
    max-width: 100%;
}

form .app-form-button {
    flex: 0 0 100%;
    max-width: 100%;
    font-size: 20px;
    font-weight: bold;
    color: white;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-align: center;
    background-color: slateblue;
    text-transform: uppercase;

    border-radius: 4px;
    color: red;
    border: 1px solid #ffffff;
    padding: 12px 25px;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-weight: 600;
    transition: all .5s ease;
    background-color: transparent;
}

form .app-form-button:hover {
    background-color: #ffffff;
    color: whitesmoke;
}


.ans {
  font-size: 40px;
  font-weight: bold;
  color: whitesmoke;
  float:left;
  width:99%;
  height: 700px;
  padding:30px;
  margin-top:16%;
  margin-left: 40%;
  box-align: center;

  line-height: 80px;
  text-align: center;
  border: 2px solid white;
  box-shadow: 20px 20px 10px #444;
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6), rgba(0,0,0,0.6) 40%, rgba(0,0,0,0.6)), url(mat.jpg);
  opacity: 70%;
}


.quest1 {
  font-size: 40px;
  font-weight: bold;
  color: whitesmoke;
  float:left;
  width:50%;
  height: 500px;
  padding:30px;
  margin-top:16%;
  margin-left: 10%;
  box-align: center;

  line-height: 80px;
  text-align: center;
  border: 2px solid white;
  box-shadow: 20px 20px 10px #444;
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6), rgba(0,0,0,0.6) 40%, rgba(0,0,0,0.6)), url(mat.jpg);
  opacity: 70%;
}

.quest2 {
  font-size: 20px;
  font-weight: bold;
  color: whitesmoke;
  float:left;
  width:50%;
  height: 700px;
  padding:30px;
  margin-top:16%;
  margin-left: 10%;
  box-align: center;

  line-height: 80px;
  text-align: center;
  border: 2px solid white;
  box-shadow: 20px 20px 10px #444;
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6), rgba(0,0,0,0.6) 40%, rgba(0,0,0,0.6)), url(mat.jpg);
  opacity: 70%;
}

.quest3 {
  font-size: 20px;
  font-weight: bold;
  color: whitesmoke;
  float:left;
  width:50%;
  height: 700px;
  padding:30px;
  margin-top:16%;
  margin-left: 10%;
  box-align: center;

  line-height: 80px;
  text-align: center;
  border: 2px solid white;
  box-shadow: 20px 20px 10px #444;
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6), rgba(0,0,0,0.6) 40%, rgba(0,0,0,0.6)), url(mat.jpg);
  opacity: 70%;
}
/*
.right {
  background-color:#e5e5e5;
  float:left;
  width:20%;
  height: 800px;
  padding:15px;
  margin-top:7px;
  text-align:center;
}
*/

.right {

  /*

    padding: 30px;
    flex: 0 0 calc(33.33% - 20px);
    max-width: calc(33.33% - 20px);
    margin-bottom: 30px;
    border: 1px solid #eeeeee;
    text-align: center;
    position: relative;
    border-radius: 5px;
*/

  font-size: 40px;
  color: whitesmoke;
  float:left;
  width:20%;
  height: 500px;
  padding:15px;
  margin-top:15%;

  line-height: 70px;
  text-align: center;
  border: 2px solid white;
  box-shadow: 20px 20px 10px #444;
  background-image: linear-gradient(180deg, rgba(0,0,0,0.6), rgba(0,0,0,0.6) 40%, rgba(0,0,0,0.6)), url(mat.jpg);
  opacity: 90%;
}

.right .span {
  text-align: center;
  padding: 80px 50px;
  padding: 7px 0px;
}

.right .second {
  text-align: center;
}
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 30%;
  background-color: green;
  color: whitesmoke;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 8px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #454545;
}

div {
    background-color: transparent;
    font-size: 20px;
    font-weight: 20px;
    font-size: 40px;
    font-color: red;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    padding-top: 0%;
    padding-bottom: 0%;
    text-align: start;
}

div.double {
    border-style: double;
     
    color: whitesmoke;
}

div.round1 {
    border: 6px solid blue;
    border-radius: 25px;
}

p {
    color: whitesmoke;
    margin: 0 0 12px;
}

h6 {
    color: whitesmoke;
    font-style: italic;
    margin: 0 0 40px;
}
.container-fluid{
    border-left: 10px solid red;
    /*background-image: url('studnt.png');*/
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    text-align: center;
    font-size: 10px;
    font-weight: 500;
    font-color: black;
    padding-bottom: 20px;
  border-radius: 5px;
  background-color: transparent;
  padding: 40px;
  padding-right: 40px;
  padding-left: 40px;
}





div .shadowbox .icon .fa {
  font-size: 25px;
    color: #ffffff;
    line-height: 60px;
}
/*
.container-fluid{
    background-image: url('bnk.jpg');
    background-repeat: no-repeat;
    background-size: contain;
    text-align: center;
    flex-wrap: wrap;
    margin-bottom: 80px;
    margin-left: 60px;
    margin-right:60px;
    padding: 100px 0px;
    background-color: firebrick;

}
*/

/*
.container-fluid p{
    font-size: 50px;
    font-weight: 1000;
    margin: 0 0 5px;
    color: #000000;
}


.container {
    background-color: transparent;
    text-align: center;
    flex-wrap: wrap;
    margin-bottom: 0px;
    padding: 100px 0px;
}
*/
form {
    background-color: transparent;
    max-width: 2000px;
    margin: auto;
    flex-wrap: wrap;
    text-align: start;
    margin-bottom: 20px;
    margin-top: 50px;
    position: relative;
    padding: 500px 0px;
    flex: 0 0 100%;
    

}

/*
form .container{
background-color: red;
text-align: start;
margin-left: 30px;
margin-right: 5px;
margin: auto;
margin-top: 5px;
flex-wrap: wrap;
background-color: none;
padding-left: 500px 0px;
text-align: start;
}
*/



.calc-op {
    background-color: red;
    font-size: 20px;
    font-weight: 20px;
    font-size: 60px;
    font-color: whitesmoke;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    padding-top: 6%;
    padding-bottom: 6%;
    text-align: start;
}



@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}
   </style>
    </head>

    <body style="font-family:Verdana;color:#aaaaaa;">

    <table>

<div class="first" style="background-color: transparent;padding:40px;margin-bottom: 40px;text-align:center;">
  <h1>Personal Loan EMI Calculator</h1>
</div>


<div style="overflow:auto">
  <div class="menu">
  <p>Frequently asked Question ?</p>
    <a href="#">What is Personal Loan ?</a>
    <a href="#">How is my Personal Loan EMI calculated?</a>
    <a href="#">How to use an EMI calculator?</a>
  </div>


  <div class="main">
        <form method="POST">

<div class="shadowbox" style = "position:absolute; left: 500px; top:20px;">

<div class="icon">
<i class="fa fa-calculator"></i>
</div>

<label for="lamount">
            <h7>Loan Amount : </h7>
</label>
            <input type="text" id="lamount" name="num1" class="app-form-control" onfocus="this.value=''" placeholder="Loan in RS.">
            <br/><br/>

            <label for="iloan">
            <h7>
            Intrest on Loan:
            </h7>
            </label>

            <input type="text" id="iloan" name="num2" class="app-form-control" placeholder="in %">
            <br/><br/>

            <label for="month">
            <h7>
            Month:
            </h7>
            </label>

            <input type="text" id="month" name="num3" class="app-form-control" placeholder="Month">
            <br/><br/>
            
            <input type="submit" name="submit" value="Calculate" onClick="" class="app-form-button">
            <br/><br/>
<strong> Calculate Your EMI </strong>
</div>


<div class="ans">
            <?php  


if(isset($_POST['submit']))
{


    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

          echo nl2br("Required Loan Amount:");
          echo nl2br("\n").$_POST['num1'];
          echo nl2br("\n");

          echo nl2br("Total intrest payable:");
          echo nl2br("\n").$_POST['num2'];
          echo nl2br("\n");

          echo nl2br("Months required:");
          echo nl2br("\n").$_POST['num3'];
}
            ?>

</div>
</form>

</div>




<div class="right">

<span> EMI </span>
<p>(Equated Monthly EMI is)</p><br>
<i class="fa fa-inr" aria-hidden="true"></i>

<div class="second">

<p>
<?php

if(isset($_POST['submit']))
{

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    function emi_calculator($p, $r, $t) 
{ 
$emi; 

// one month interest 
$r = $r / (12 * 100); 

// one month period 
$t = $t * 12;  

$emi = ($p * $r * pow(1 + $r, $t)) /  
          (pow(1 + $r, $t) - 1); 
        
return ($emi); 


} 

$emi = emi_calculator($num1, $num2, $num3); 
echo " " .$emi; 
return ($num1>10);


}   

?>
</P>

 </div>   
</div>
</div>


<div class="quest1">

<strong>What is Personal Loan</strong><br/>
<p>A personal loan is a fixed amount of money borrowed at a fixed rate and repaid over a fixed amount of time.</p><br/>

</div>

<div class="quest2">
<strong>How is my Personal Loan EMI calculated?</strong>
<p>Your personal loan EMI can be calculated with an online personal loan calculator. <br/>
The EMI for the loan is calculated using the formula,</br>

EMI = [P x R x (1+R)^N]/[(1+R)^N-1]<br/>
Where,<br/>
P = Principal loaned amount<br/>
R = Rate of Interest<br/>
N = Tenure (in months)<br/>

</p>

<br/>
</div>

<div class="quest3">
<strong>How to use an EMI calculator?</strong>

<p>
Follow this simple 3-step process to use the online personal loan EMI calculator:<br/><br/>

Enter the principal amount: Choose between the minimum and maximum principal amount and enter it in the calculator.<br/>
Enter the intrest : Enter the rate of interest that you can afford against the loan. Banks assign a minimum interest rate against personal loans.<br/>
Enter the tenure/ Month: Enter the Months by choosing between the minimum and maximum months to repay the loan<br/>
Once you enter all the above mentioned figures, the personal loan calculator will compute the payable EMI amount.
</p>
</div>





<div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">
© copyright w3schools</div>
</div>

       
</table>
</body>
</html>