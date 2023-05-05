if (typeof window !== 'undefined') {
   
//--------------------------------------------------form2 front end validation start.

function SendData(event){

 var flag = 0;

 //Phone number validation start

  var phone_number = document.getElementById("phone_number").value;
  var phone_number_length = phone_number.toString().length;
  
  if(phone_number_length == 10){
    flag++
  }else{
    event.preventDefault();
    alert("Not a valid phone number")
  }
 //phone number validation end

 //street address validation start

  var StreetAddress  = document.getElementById("StreetAddress").value;


  var street_address_format  = /^[a-zA-Z0-9_ -/,]*$/;
  var street_address_format1 = /^[a-zA-Z]/;
  
  if(StreetAddress.match(street_address_format)) {
    flag++;
  }else{
    event.preventDefault();
    alert("Dont include special characters in address");
  }
 //street address validation end

 //city address validation start
   
   var city = document.getElementById("city").value;

   var city_address_format = /^[a-zA-Z]*$/;

   if(city.match(city_address_format)){
      flag++;
   }else{
      alert("Dont enter numbers or special characters");
   }

 //city address validation end
 

//--------------------------------------------------form2 front end validation end.
 if(flag == 3){
    document.getElementById("signup2").action = "./php/SignupForm2.php"
    //var form1 = document.getElementById("signup1");
    //form1.action = "./php/SignupForm1.php";
   }
  }
}