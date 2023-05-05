if (typeof window !== 'undefined') {

  document.getElementById("footer1").style.marginTop = "120px"; 
  document.getElementById("contactus").style.marginLeft = "132px";
  document.getElementById("phone").style.marginLeft = "122px";
  document.getElementById("email").style.marginLeft = "173px";
  document.getElementById("address").style.marginLeft = "300px";

 
  function showpwd(){
    var password = document.getElementById("pwd");
    if(password.type === "password") {
        password.type = "text";
      }else{
        password.type = "password";
      }
    }

  // function sendData(event){
  //   var username = document.getElementById("userName").value;
  //   var password = document.getElementById("pwd").value;
    
  //   if(username != "" && password != ""){
  //      document.getElementById("loginForm").action = "../customer/login.php";
  //   }
  // }
  
  function hideErrorMsg(){
    document.getElementById("errorMessage").style.display = "none";
  }
  

  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
      document.getElementById("navBar").style.top = "10px";
    } else {
      document.getElementById("navBar").style.top = "10px";
    }
  }
}