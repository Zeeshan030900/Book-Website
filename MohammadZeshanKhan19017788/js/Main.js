btn.addEventListener('click', checkCard);
function checkCard()
{
let cardNumber=document.getElementById("ccNum").value;
let cvv=document.getElementById("cvv").value;

let patt1 = /^(?:5[1-5][0-9]{14})$/;
let patt2 = /^(?:[0-9]{3,4})$/;

let validCardNum=false;
let validCvv=false;

let month=document.getElementById("months").value;
let year=document.getElementById("years").value;
let today = new Date ();
let someDay= new Date();
let validDate=false;
someDay.setFullYear(year,month);

if(patt1.test(cardNumber)) {
  validCardNum=true;
}
else{
  alert("Invalid card number");
}
if(patt2.test(cvv)) {
  validCvv=true;
}
else{
  alert("Invalid CVV");
}
if(someDay< today) {
  alert("Invalid Date")
}
else{
  validDate=true;
}

if(validCardNum==true && validDate==true && validCvv==true){
  document.getElementById("h").value = 1;
}
else{
  document.getElementById("h").value= -1;
}
}