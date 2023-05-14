<?php

  require 'connection.php';

     if(isset($_POST['addpackage'])){

        session_start();
         $sp_id = $_SESSION['sp_id'];  
        

         $pack_name        = $_POST['pack_name'];
         $pack_location    = $_POST['pack_location'];
         $pack_address     = $_POST['pack_address'];
         $pack_description = $_POST['pack_description'];  //data to package table

        $option_name        = $_POST['option_name'];//option
        $type               = $_POST['meal_option_type']; //option_type
       // $capacity           = $_POST['capacity']; //venue_pack_option
        $option_description = $_POST['option_description'];//option
        $option_rate        = $_POST['option_price'];//option

        $num_of_options  =  $_POST['num_of_options'];
        //echo $num_of_options;

        
        
        $data = array(); 
        $data_pos  = 0;

       
        // if($num_of_options != ""){
        //   while($num_of_options >= 0){
        //       $option      = $_POST['option'.$num_of_options];
        //       $data[$data_pos] = $option;
        //       $data_pos++;

        //       $optionType  = $_POST['optionType'.$num_of_options];
        //       $data[$data_pos] = $optionType;
        //       $data_pos++;

        //       $description = $_POST['description'.$num_of_options];
        //       $data[$data_pos] = $description;
        //       $data_pos++;

        //       $price       = $_POST['price'.$num_of_options];
        //       $data[$data_pos] = $price;
        //       $data_pos++;
               
        //       $num_of_options--;
        //   } 
        // }
  
        $pos = $num_of_options;
        $var_pos = 0;

        if($num_of_options != ""){
          while($var_pos <= $num_of_options){
           
            $option      = $_POST['option'.$var_pos];
              $data[$data_pos] = $option;
              $data_pos++;

              $optionType  = $_POST['optionType'.$var_pos];
              $data[$data_pos] = $optionType;
              $data_pos++;

              $description = $_POST['description'.$var_pos];
              $data[$data_pos] = $description;
              $data_pos++;

              $price       = $_POST['price'.$var_pos];
              $data[$data_pos] = $price;
              $data_pos++;

            $var_pos++;
        } 
      }    
          
       
         $sql = "INSERT INTO packages(sp_id,pack_name, pack_location, pack_address, pack_description) VALUES ('$sp_id','$pack_name', '$pack_location', '$pack_address', '$pack_description')";
         $result = mysqli_query($connection,$sql);

         $sql1 = "SELECT pack_id FROM packages WHERE sp_id = '$sp_id'";
         $result1 = mysqli_query($connection,$sql1);
         if($result1 == true){
             if(mysqli_num_rows($result1)>0){
                 while($row = mysqli_fetch_assoc($result1)){
                     $pack_id = $row['pack_id'];
                 }
             }
         }
         
         $sql2 = "INSERT INTO options(pack_id,option_name,option_description,option_rate) VALUES ('$pack_id','$option_name','$option_description','$option_rate')";
         $result2 = mysqli_query($connection,$sql2);
        
        

        echo "<br>";
                 
          $opNm      = 0;
          $opType    = 1;
          $opDescrip = 2;
          $opPrice   = 3;

          $num_of_options  =  $_POST['num_of_options'];
        
          //echo $num_of_options;

          if($num_of_options != ""){
          
               while($num_of_options >= 0){

                // echo $data[$opNm]."<br>";
                // echo $data[$opType]."<br>";
                // echo $data[$opDescrip]."<br>";
                // echo $data[$opPrice]."<br>";


                 $sql2 = "INSERT INTO options(pack_id,option_name,option_description,option_rate) VALUES ('$pack_id','$data[$opNm]','$data[$opDescrip]','$data[$opPrice]')";
                 $result2 = mysqli_query($connection,$sql2);
                 //var_dump($result2);

                 $opNm = $opNm + 4;
                 $opType = $opType + 4;
                 $opDescrip = $opDescrip + 4;
                 $opPrice = $opPrice + 4;

                 $num_of_options--;
            }
        }

        $sql3 = "SELECT * FROM options WHERE pack_id = $pack_id";
        $result3 = mysqli_query($connection,$sql3);
        
        $opType = 1;
        $selector = 0;
        $num_of_options  =  $_POST['num_of_options'];

        if(mysqli_num_rows($result3)>0){
            while($row = mysqli_fetch_array($result3)){
                 $option_id = $row['option_id'];
                 //echo $option_id."<br>";

               if($selector == 0){  
                $sql4 = "INSERT INTO option_type(option_id,type) VALUES ('$option_id','$type')"; 
                $result4 = mysqli_query($connection,$sql4);
                echo"hi<br>";

                $selector++;
                
               } 
               else if($selector >0 && $num_of_options >=0){
                echo"bye<br>";
                $sql4 = "INSERT INTO option_type(option_id,type) VALUES ('$option_id','$data[$opType]')"; 
                $result4 = mysqli_query($connection,$sql4);
                                   
                echo $data[$opType]."<br>";
                
                echo $option_id."<br>";
                $opType = $opType + 4;
                $num_of_options--;
            }
                
          }
        }

         //$sql2 = "INSERT INTO options(pack_id,option_name,option_description,option_rate) VALUES ('$pack_id','$option_name','$option_description','$option_rate')";
         //$result2 = mysqli_query($connection,$sql2);
    
        
     //header("Location: my_packages.php");
    

    // $sql1 = "SELECT option_id FROM options WHERE pack_id = '$pack_id'";
    //     $result1 = mysqli_query($connection,$sql1);
    //     if($result1 == true){
    //         if(mysqli_num_rows($result1)>0){
    //             while($row = mysqli_fetch_assoc($result1)){
    //                 $pack_id = $row['option_id'];
    //             }
    //         }
    //     }

        // $sql3 = "INSERT INTO option_type(option_id,type) VALUES ('$option_id','$type')";
        // $result2 = mysqli_query($connection,$sql3);
     }
?>