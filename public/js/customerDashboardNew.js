if (typeof window !== 'undefined') { 

    //document.getElementById('wrapper7').style.marginTop = "120px";
    document.getElementById('footer1').style.marginTop = "0px";

    function marginTop() {
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

    function showProfileDetails(){
        window.location='http://localhost:80/EventsLab/src/php/customer/new_profile.php';
    }
    
    function dropdown(){
        //document.getElementById('sideMenuBar').style.height = "75vh";
        //document.getElementById('userMenu').style.rotate    = "-90deg";

        //var radius = document.getElementById('userMenu');
        //var cal  = window.getComputedStyle(radius, null);
        //var cone = cal.getPropertyValue("transform");
        //console.log(cone);
        
        var height = document.getElementById('sideMenuBar').offsetHeight;

        if(height == 0){
            document.getElementById('sideMenuBar').style.height = "80vh";
            document.getElementById('userMenu').style.rotate    = "-90deg";
        }else{
            document.getElementById('sideMenuBar').style.height = "0vh";
            document.getElementById('userMenu').style.rotate    = "0deg";
        }
        
    }
    



    function cardHover_In1(){
    
        var card1 = document.getElementById("card1");
        var card2 = document.getElementById("card2");
        var card3 = document.getElementById("card3");
        var card4 = document.getElementById("card4");
        var card5 = document.getElementById("card5");
        var card6 = document.getElementById("card6");
        
        card1.style.padding = "5px";
        card1.style.backgroundSize = "360px 360px";
    
        card2.style.opacity ="0.5";
        card3.style.opacity ="0.5";
        card4.style.opacity ="0.5";
        card5.style.opacity ="0.5";
        card6.style.opacity ="0.5";
        
     }
     function cardHover_Out1(){
    
      var card1 = document.getElementById("card1");
      var card2 = document.getElementById("card2");
      var card3 = document.getElementById("card3");
      var card4 = document.getElementById("card4");
      var card5 = document.getElementById("card5");
      var card6 = document.getElementById("card6");
      
      card1.style.padding = "0px";
      card1.style.backgroundSize = "350px 350px";
    
    
      card2.style.opacity ="1";
      card3.style.opacity ="1";
      card4.style.opacity ="1";
      card5.style.opacity ="1";
      card6.style.opacity ="1";
     }
    
     function cardHover_In2(){
        
      var card1 = document.getElementById("card1");
      var card2 = document.getElementById("card2");
      var card3 = document.getElementById("card3");
      var card4 = document.getElementById("card4");
      var card5 = document.getElementById("card5");
      var card6 = document.getElementById("card6");
      
      card2.style.padding = "5px";
      card2.style.backgroundSize = "360px 365px";
    
      card1.style.opacity ="0.5";
      card3.style.opacity ="0.5";
      card4.style.opacity ="0.5";
      card5.style.opacity ="0.5";
      card6.style.opacity ="0.5";
    
      
    }
    function cardHover_Out2(){
    
    var card1 = document.getElementById("card1");
    var card2 = document.getElementById("card2");
    var card3 = document.getElementById("card3");
    var card4 = document.getElementById("card4");
    var card5 = document.getElementById("card5");
    var card6 = document.getElementById("card6");
    
    card2.style.padding = "0px";
    card2.style.backgroundSize = "360px 360px";
    
    
    card1.style.opacity ="1";
    card3.style.opacity ="1";
    card4.style.opacity ="1";
    card5.style.opacity ="1";
    card6.style.opacity ="1";
    }
    
    function cardHover_In3(){
        
      var card1 = document.getElementById("card1");
      var card2 = document.getElementById("card2");
      var card3 = document.getElementById("card3");
      var card4 = document.getElementById("card4");
      var card5 = document.getElementById("card5");
      var card6 = document.getElementById("card6");
      
      card3.style.padding = "5px";
      card3.style.backgroundSize = "360px 365px";
    
      card1.style.opacity ="0.5";
      card2.style.opacity ="0.5";
      card4.style.opacity ="0.5";
      card5.style.opacity ="0.5";
      card6.style.opacity ="0.5";
    
      
    }
    function cardHover_Out3(){
    
    var card1 = document.getElementById("card1");
    var card2 = document.getElementById("card2");
    var card3 = document.getElementById("card3");
    var card4 = document.getElementById("card4");
    var card5 = document.getElementById("card5");
    var card6 = document.getElementById("card6");
    
    card3.style.padding = "0px";
    card3.style.backgroundSize = "360px 360px";
    
    
    card1.style.opacity ="1";
    card2.style.opacity ="1";
    card4.style.opacity ="1";
    card5.style.opacity ="1";
    card6.style.opacity ="1";
    }
    
    function cardHover_In4(){
        
      var card1 = document.getElementById("card1");
      var card2 = document.getElementById("card2");
      var card3 = document.getElementById("card3");
      var card4 = document.getElementById("card4");
      var card5 = document.getElementById("card5");
      var card6 = document.getElementById("card6");
      
      card4.style.padding = "5px";
      card4.style.backgroundSize = "360px 365px";
    
      card1.style.opacity ="0.5";
      card2.style.opacity ="0.5";
      card3.style.opacity ="0.5";
      card5.style.opacity ="0.5";
      card6.style.opacity ="0.5";
    
      
    }
    function cardHover_Out4(){
    
    var card1 = document.getElementById("card1");
    var card2 = document.getElementById("card2");
    var card3 = document.getElementById("card3");
    var card4 = document.getElementById("card4");
    var card5 = document.getElementById("card5");
    var card6 = document.getElementById("card6");
    
    card4.style.padding = "0px";
    card4.style.backgroundSize = "360px 360px";
    
    
    card1.style.opacity ="1";
    card2.style.opacity ="1";
    card3.style.opacity ="1";
    card5.style.opacity ="1";
    card6.style.opacity ="1";
    }
    
    
    function cardHover_In5(){
        
      var card1 = document.getElementById("card1");
      var card2 = document.getElementById("card2");
      var card3 = document.getElementById("card3");
      var card4 = document.getElementById("card4");
      var card5 = document.getElementById("card5");
      var card6 = document.getElementById("card6");
      
      card5.style.padding = "5px";
      card5.style.backgroundSize = "360px 365px";
    
      card1.style.opacity ="0.5";
      card2.style.opacity ="0.5";
      card3.style.opacity ="0.5";
      card4.style.opacity ="0.5";
      card6.style.opacity ="0.5";
    
      
    }
    function cardHover_Out5(){
    
    var card1 = document.getElementById("card1");
    var card2 = document.getElementById("card2");
    var card3 = document.getElementById("card3");
    var card4 = document.getElementById("card4");
    var card5 = document.getElementById("card5");
    var card6 = document.getElementById("card6");
    
    card5.style.padding = "0px";
    card5.style.backgroundSize = "360px 360px";
    
    
    card1.style.opacity ="1";
    card2.style.opacity ="1";
    card3.style.opacity ="1";
    card4.style.opacity ="1";
    card6.style.opacity ="1";
    }
    
    
    
    function cardHover_In6(){
        
      var card1 = document.getElementById("card1");
      var card2 = document.getElementById("card2");
      var card3 = document.getElementById("card3");
      var card4 = document.getElementById("card4");
      var card5 = document.getElementById("card5");
      var card6 = document.getElementById("card6");
      
      card6.style.padding = "5px";
      card6.style.backgroundSize = "360px 365px";
    
      card1.style.opacity ="0.5";
      card2.style.opacity ="0.5";
      card3.style.opacity ="0.5";
      card4.style.opacity ="0.5";
      card5.style.opacity ="0.5";
    
      
    }
    function cardHover_Out6(){
    
    var card1 = document.getElementById("card1");
    var card2 = document.getElementById("card2");
    var card3 = document.getElementById("card3");
    var card4 = document.getElementById("card4");
    var card5 = document.getElementById("card5");
    var card6 = document.getElementById("card6");
    
    card6.style.padding = "0px";
    card6.style.backgroundSize = "360px 360px";
    
    
    card1.style.opacity ="1";
    card2.style.opacity ="1";
    card3.style.opacity ="1";
    card4.style.opacity ="1";
    card5.style.opacity ="1";
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