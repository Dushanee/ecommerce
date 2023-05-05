

document.getElementById("footer1").style.marginTop = "0px";

var j = 2;

function positionFinder(){

 var slider_image_y = document.getElementById("img").getBoundingClientRect().top;
 var slider_image_x = document.getElementById("img").getBoundingClientRect().left;
 //var slider_image_x1 = document.getElementById("img1").getBoundingClientRect().left;

   //console.log(slider_image_y);
   //console.log(slider_image_x);

 var img = document.getElementById("img");
  
  //console.log(img);
  //console.log(j);
  
  //console.log(typeof(slider_image_x));

  if(slider_image_x <= -1280){
  //console.log("True");
  //img.src = "images1/img"+j+".jpg";
  //img.src = "../FrontUi/images/img/event"+j+".jpg";
    img.src = "http://localhost:80/chandula6/FrontUi/images/img/event"+j+".jpg";
    //console.log("image changed = ",slider_image_x1 )
    //document.getElementById("img").style.marginLeft = "1500px";
    //document.getElementById("img").style.animationPlayState = "paused";
  j++;
  }else{
    //console.log("False");
  }
   


 

  //console.log(j);
  const time = 50; 

   setTimeout("positionFinder()",time);

   if(j == 7){
    j = 1;
   }


}

positionFinder();




if (typeof window !== 'undefined') {

// let slides = document.getElementsByClassName("b");
// let ball = document.getElementsByClassName("ball");

// let ballcount = ball.length;
// let i = slides.length;

// var posL = 0;
// var picL = 4;

// var posR = 0;
// var picR = 1;

// var enableL = true;
// var enableR = true;

// var click_left = false;
// var click_right = false;

// function btnleft(){
   
//    if(posL<3 && enableL == true){   
//    for(var j= posL; j< slides.length; j++){
//       // slides[j].style.backgroundImage = "url(images1/img"+(picL)+".jpg)";
//       slides[j].style.backgroundImage = "url(images/img/img"+(picL)+".jpg)";
//       //slides[j].style = "50";
//       picL++;
//       console.log(picL+"\n");
//   }
//   ball[0].style.backgroundImage = "url(images1/camera_30px.png)";
//   ball[1].style.backgroundImage = "url(images1/payment_30px.png)";
//   ball[1].style.backgroundSize = "45px";
//   ball[2].style.backgroundImage = "url(images1/Comments_30px.png)";
//   ball[2].style.backgroundPosition = "50% 50%";
//  }

//   if(picL == 7){
//    console.log("enter if");
//    enableL = false;
//    enableR = true;

//    posL = 0;
//    picL = 4;
//   }
//  }


// function btnright(){
      
//    if(posR<3 && enableR == true){
//      for(var j = posR; j < slides.length; j++){
//       slides[j].style.backgroundImage = "url(images/img/img"+(picR)+".jpg)";
//       picR++;
//     }
//     ball[0].style.backgroundImage = "url(images1/location_30px.png)";
//     ball[1].style.backgroundImage = "url(images1/food_30px.png)";
//     ball[1].style.backgroundSize  = "25px"
//     ball[2].style.backgroundImage = "url(images1/festival_30px.png),url(images1/balloons_25px.png)";
//     ball[2].style.backgroundPosition = "50% 2%,50% 60%";  
//    }
//    if(picR == 4){
//     enableR = false;
//     enableL = true;

//     posR = 0;
//     picR = 1;

//    }
//  }
 
//  var p1 = 0;
//  var p2 = 0;
//  var p3 = 0;
//  var p4 = 0;
//  var p5 = 0;

//  document.getElementById("wrap5").onclick = function() {alldown()};

//  function alldown(){
//   console.log("p1 value: " + p1);
//   if(p1 == 1){
//     console.log("Enter p1 condition grey");
//     document.getElementById("demo").style.marginTop = "90px";
//   }if(p2 == 1){
//     document.getElementById("demo1").style.marginTop = "85px";
//   }
//   if(p3 == 1){
//     document.getElementById("demo2").style.marginTop = "85px";
//   }
//   if(p4 == 1){
//     document.getElementById("demo3").style.marginTop = "85px";
//   }
//   if(p5 == 1){
//     document.getElementById("demo4").style.marginTop = "85px";
//   }
//   if(p5 == 1){
//     document.getElementById("demo4").style.marginTop = "85px";
//   }
//  }


//  document.getElementById("demo").onclick = function() {myfunc()};
 
//  function myfunc(){
//   p1 = 1;

//   if(p1 == 1){
//    document.getElementById("demo").style.marginTop = "-65px";
//   }
//   if(p2 == 1){
//    document.getElementById("demo1").style.marginTop = "85px";
//     p2 = 0;
//   }if(p3 == 1){
//     document.getElementById("demo2").style.marginTop = "85px";
//     p3 = 0;
//   }
//   if(p4 == 1){
//     document.getElementById("demo3").style.marginTop = "85px";
//     p4 = 0;
//   }
//   if(p5 == 1){
//     document.getElementById("demo4").style.marginTop = "85px";
//   }
//  }

//  document.getElementById("demo1").onclick = function() {myfunc1()};
 

//  function myfunc1(){
  
//   p2 = 1;
  
//   if(p2 == 1){
//   document.getElementById("demo1").style.marginTop = "-65px";
//   }
//   if(p1 == 1){
//    document.getElementById("demo").style.marginTop = "90px";
//    p1 = 0;
//   }
//   if(p3 == 1){
//     document.getElementById("demo2").style.marginTop = "80px";
//     p3 = 0;
//   }
//   if(p4 == 1){
//     document.getElementById("demo3").style.marginTop = "85px";
//     p4 = 0;
//   }
//   if(p5 == 1){
//     document.getElementById("demo4").style.marginTop = "85px";
//   }
//  }

//  document.getElementById("demo2").onclick = function() {myfunc2()};

//  function myfunc2(){
  
//   p3 = 1;
  
//   if(p3 == 1){
//   document.getElementById("demo2").style.marginTop = "-60px";
//   }
//   if(p1 == 1){
//    document.getElementById("demo").style.marginTop = "90px";
//    p1 = 0;
//   }
//   if(p2 == 1){ 
//    document.getElementById("demo1").style.marginTop = "85px";
//     p2 = 0;
//   }
//   if(p4 == 1){
//     document.getElementById("demo3").style.marginTop = "85px";
//     p4 = 0;
//   }
//   if(p5 == 1){
//     document.getElementById("demo4").style.marginTop = "85px";
//   }
//  }

//  document.getElementById("demo3").onclick = function() {myfunc3()};

//  function myfunc3(){

//   p4 = 1;

//   if(p4 == 1){
//     document.getElementById("demo3").style.marginTop = "-65px";
//  }
//   if(p1 == 1){
//     document.getElementById("demo").style.marginTop = "90px";
//     p1 = 0;
//  }
//   if(p2 == 1){
//     document.getElementById("demo1").style.marginTop = "85px";
//     p2 = 0;
//  }
//   if(p3 == 1){
//     document.getElementById("demo2").style.marginTop = "85px";
//     p3 = 0;
//   }
//   if(p5 == 1){
//     document.getElementById("demo4").style.marginTop = "85px";
//   }
//  }

//  document.getElementById("demo4").onclick = function() {myfunc4()};

//  function myfunc4(){
  
//   p5 = 1;

//   if(p5 == 1){
//     document.getElementById("demo4").style.marginTop = "-65px";
//   }
//   if(p1 == 1){
//     document.getElementById("demo").style.marginTop = "90px";
//     p1 = 0;
//    }
//   if(p2 == 1){ 
//     document.getElementById("demo1").style.marginTop = "85px";
//      p2 = 0;
//    }
//   if(p3 == 1){
//     document.getElementById("demo2").style.marginTop = "80px";
//     p3 = 0;
//   }
//   if(p4 == 1){
//     document.getElementById("demo3").style.marginTop = "85px";
//     p4 = 0;
//   }
//  }


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
    document.getElementById("navBar").style.top = "0px";
  } else {
    document.getElementById("navBar").style.top = "2px";
  }
}
}


