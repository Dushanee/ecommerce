if (typeof window !== 'undefined') { 

     //document.getElementById('footer1').style.marginTop = "200px";
     //document.getElementById("footer1").style.marginTop = "780px";
      
     function marginTop() {
        //var height = document.getElementById('sideMenuBar').offsetHeight;
        var height = document.getElementById('sideMenuBar').getBoundingClientRect().bottom;
        var op1 = document.getElementById('op1').getBoundingClientRect().bottom;
        var op2 = document.getElementById('op2').getBoundingClientRect().bottom;
        var op3 = document.getElementById('op3').getBoundingClientRect().bottom;
        var op4 = document.getElementById('op4').getBoundingClientRect().bottom;

        var profilepic = document.getElementById('profilepic').getBoundingClientRect().bottom;
        //var border     = document.getElementById('border').getBoundingClientRect().top;
        //console.log(profilepic);
        //console.log(op1.getBoundingClientRect().top);
        //var curr_height = height.offsetHeight;

        if(height>op1){
            document.getElementById('op1').style.visibility = 'visible';
        }else if(height<op1){
            document.getElementById('op1').style.visibility = 'hidden';
        }

        if(height>op2){
            document.getElementById('op2').style.visibility = 'visible';
        }else if(height<op2){
            document.getElementById('op2').style.visibility = 'hidden';
        }

        if(height>op3){
            document.getElementById('op3').style.visibility = 'visible';
        }else if(height<op3){
            document.getElementById('op3').style.visibility = 'hidden';
        }

        if(height>op4){
            document.getElementById('op4').style.visibility = 'visible';
        }else if(height<op4){
            document.getElementById('op4').style.visibility = 'hidden';
        }

        if(height>profilepic){
            document.getElementById('profilepic').style.visibility = 'visible';
        }else if(height<profilepic){
            document.getElementById('profilepic').style.visibility = 'hidden';
        }

        setTimeout(marginTop, 30);
    }
    marginTop();

    function dropdown(){

        
        var height = document.getElementById('sideMenuBar').offsetHeight;

        if(height == 0){
            document.getElementById('sideMenuBar').style.height = "79vh";
            document.getElementById('userMenu').style.rotate    = "-90deg";
        }else{
            document.getElementById('sideMenuBar').style.height = "0vh";
            document.getElementById('userMenu').style.rotate    = "0deg";
        }
        
    }
    function showProfileDetails(){
        window.location='http://localhost:80/chandula6/FrontUi/php/customerProfile.php';
    }
    window.onscroll = function() {scrollFunction()};

   function scrollFunction() {
     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("navBar").style.top = "1px";
     } else {
      document.getElementById("navBar").style.top = "0px";
     }
   }
}