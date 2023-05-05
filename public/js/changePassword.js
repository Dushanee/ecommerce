if (typeof window !== 'undefined') {

    document.getElementById("footer1").style.marginTop = "544px";
    
    function box(){
        document.getElementById("pwd1").style.boxShadow = "2px 3px 2px 3px rgba(3, 3, 3, 0.2)";
        //document.getElementById("pwd1").style.marginTop = "20px";
    }

    function showpwd(z){

      if(z == 'Eyebtn'){  
        var x = document.getElementById("pwd1");
 
        //console.log(x.type);
        
        if(x.type === "password") {
            x.type = "text";
          }else{
            x.type = "password";
          }
      }else if(z == 'ReEyebtn'){
        var x = document.getElementById("pwd2");
 
        //console.log(x.type);
        
        if(x.type === "password") {
            x.type = "text";
          }else{
            x.type = "password";
          }
      }
    }

   function sendData(event){
    
    //--------------------------------------------------------------------------------password front end validation start
    var flag = 0;
    var condition = false;

    var pwd1 = document.getElementById("pwd1").value;
    var pwd2 = document.getElementById("pwd2").value;

    var  password_format = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;

    var equal = pwd1.localeCompare(pwd2);

    if(equal != 0){
        alert("Re-entered password does not match");
        condition = true;
    }

    if(pwd1.match(password_format) && pwd2.match(password_format) && equal == 0){
        flag++;
    }else if(condition == false){
        event.preventDefault();
        alert("password must be minimum eight characters, at least one letter,one number and one special character"); 
     }
    //--------------------------------------------------------------------------------password front end validation end
    
    if(flag == 1){
    
       const url = new URL(window.location.href);
       const paramValue = url.searchParams.get('id');
       //document.getElementById("change_pwd").action = "./php/changePassword.php?"+"id="+paramValue;
      document.getElementById("change_pwd").action = "./php/changePassword.php";
   }
  }
}
