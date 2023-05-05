if (typeof window !== 'undefined') {


  document.getElementById("footer1").style.marginTop = "50px";

function showpwd(){

var x = document.getElementById("pwd1");
//console.log(x.type);

if(x.type === "password") {
    x.type = "text";
  }else{
    x.type = "password";
  }
 }

function showRePwd(){

var x = document.getElementById("pwd2");
//console.log(x.type);

if(x.type === "password") {
    x.type = "text";
  }else{
    x.type = "password";
  }
 }

 function hideErrorMsg(){
  document.getElementById("errorMessage").style.display = "none";
 }


 function sendData(event){
    
  var flag = 0;

  //--------------------------------------------------form1 front end validation start.

  //email validation start
    var email = document.getElementById("email").value;
    //console.log(email);

    var mailFormat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if(email.match(mailFormat)){
      flag++;
    }else{
      //console.log("email is not a valid email");
      event.preventDefault();
      alert("not a valid email");
    }
  //email validation end

  //Front and Second name validation start
     
     var FirstName   = document.getElementById("Fname").value;
     //console.log(FirstName);
     var SecondName  = document.getElementById("Sname").value;
     //console.log(SecondName);
     
     //FirstName = FirstName.replace(/[^A-Z0-9]/ig,'');

     var nameFormat  = /^[a-zA-Z]+$/;
     
     if(FirstName.match(nameFormat) && SecondName.match(nameFormat) && FirstName != null && SecondName != null){
      flag++;
     }else{
      event.preventDefault();
      alert("First and Second Name should not be empty or contain numbers or Special characters");
     }
     
  //Front and Second name validation end

  //password validation start
    
     var pwd1 = document.getElementById("pwd1").value;
     var pwd2 = document.getElementById("pwd2").value;
     
     console.log(pwd1);

     //var password_format = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
     var  password_format = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    
    var equal = pwd1.localeCompare(pwd2);
    console.log(equal);

    if(equal != 0){
      alert("Re-entered password does not match");
    } 

    if(pwd1.match(password_format) && pwd2.match(password_format) && equal == 0) {
      flag++;
    }else{
      event.preventDefault();
      alert("password must be minimum eight characters, at least one letter,one number and one special character"); 
    }  
      //flag++;   

  //password validation end
   
  //agreement validation start
    
    if(agreementChkbox.checked == 1){
      flag++;
    }else{
      event.preventDefault();
      alert("Please check the agreement to proceed");
    }
  //agreement validation end

  //--------------------------------------------------form1 front end validation end.

  if(flag == 4){
    //document.getElementById("signup1").action = "./php/SignupForm1.php"
    document.getElementById("signup1").action = "../php/SignupForm1.php";
    //var form1 = document.getElementById("signup1");
    //form1.action = "./php/SignupForm1.php";
   } 


  }
}

