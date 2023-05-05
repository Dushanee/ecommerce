
function test(){
    var x = document.getElementById('language');
    //var y = document.querySelectorAll("op").style.visibility = "hidden";
    var y = document.getElementsByClassName("op")
    
    for(var i = 0; i < y.length; i++){
       y[i].style.display = "none";
    }

    
}
//test();
  //setInterval(test,1000);

function show(){
  var y = document.getElementsByClassName("op");
  //var x = document.getElementById('language');
  //var z = document.getElementById('show');
  //console.log(x);
  
  for(var i = 0; i < y.length; i++){
    if(y[i].style.display === "none" || y[i].style.display === ""){
      y[i].style.display = "block";
      //y[0].selected = true;
      y[2].click();
    }else{
      y[i].style.display = "none";
    }
  }
  
}

