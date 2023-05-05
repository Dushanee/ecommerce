//if(typeof window !== 'undefined'){

    // var mintues_flag = 0;
    //  console.log(time);

    // if(time == 60){
    //     mintues_flag++;
    // }
    // console.log(mintues_flag);

    if(typeof window !== 'undefined'){

    //var today = new Date();
    var mintue_flag = 0;
    var time1 = 0;

     function sendData(){
        
      var today = new Date();
      var time  = today.getSeconds();
        
        if(time != time1){
          //console.log(time);
          if(time == 59){
            mintue_flag++;
            console.log(mintue_flag);  
          }
        }
        time1 = time;

        // if(time == 59){
        //   mintue_flag++;
        //   console.log(mintue_flag);  
        // }
        //console.log(mintue_flag);  
        
        if(mintue_flag < 5){
          //console.log("hi");
          document.getElementById("verification").action = "../FrontUi/php/verification.php";
        }else if(mintue_flag >= 1){
          document.getElementById("expired_statment").style.display = "block";
          document.getElementById("verification").action = "";
          document.getElementById("verification").style.display = "none";
        }
        setTimeout("sendData()",100); 
    }
     sendData();    

}