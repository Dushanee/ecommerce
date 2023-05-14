<?php

  require 'connection.php';

     if(isset($_POST['addpackage'])){

        session_start();
         $sp_id = $_SESSION['sp_id']; 

         $data = array(); 
         $data_pos  = 0;

         $optionTypearray = array();
         $opType_pos = 0;
           
         
         
          
         $pack_name        = $_POST['pack_name'];
         $pack_location    = $_POST['pack_location'];
         $pack_address     = $_POST['pack_address'];
         $pack_description = $_POST['pack_description'];  //data to package table

        $option_name        = $_POST['option_name'];//option
        $type               = $_POST['type']; //option_type
        $capacity           = $_POST['capacity']; //venue_pack_option
        $option_description = $_POST['option_description'];//option
        $option_rate        = $_POST['option_rate'];//option

        $num_of_options  =  $_POST['num_of_options'];
        //echo $num_of_options;
        
      

         $optionTypearray[$opType_pos] = $type;
         $opType_pos++;

        //------------------------------------------------------------------------ 
        
        // $numRows = $num_of_options+1;
        // $numCols = 4;

        // $optionPicArr = array(); 
        // $optionPicPos = 0; 

        // for ($i = 0; $i < $numRows; $i++) {
        //   $newRow = array();
        //   for ($j = 0; $j < $numCols; $j++) {
        //     $newRow[] = 0;
        //   }
        //   $optionPicArr[] = $newRow;
        // }

        //  $target_dir = "../../../public/image/SPOptionImage/";

        //  foreach($_FILES["file"]["name"] as $key => $value){
        //         $imageName = $_FILES["file"]["name"][$key];
        //         //echo $imageName."<br>";
        //         $imageFileType = strtolower(pathinfo($imageName,PATHINFO_EXTENSION));
        //         $target_file = $target_dir.basename($imageName);
        //         //echo $target_file."<br>";
                
        //        $optionPicArr[$optionPicPos] = $imageName;
        //        $optionPicPos++;
               
        // }
        
        
        $target_dir = "../../../public/image/packageImage/";

        $packageImg   = $_FILES["packageImg"]["name"];
        $packImgCheck = getimagesize($_FILES["packageImg"]["tmp_name"]);
        $packImgType  = strtolower(pathinfo($packageImg,PATHINFO_EXTENSION));
        $target_path  = $target_dir.basename($packageImg);

        if($packImgCheck == true){
          if($_FILES["packageImg"]["size"] < 50000000){
            if($packImgType == 'jpg' || $packImgType == 'jpeg' || $packImgType == 'png'){
              $result = move_uploaded_file($_FILES["packageImg"]["tmp_name"],$target_path);
            }
          }
        }
  
        $target_dir = "../../../public/image/SPOptionImage/";

        $imageName1 = $_FILES["file1"]["name"];
        $imageName2 = $_FILES["file2"]["name"];
        $imageName3 = $_FILES["file3"]["name"];
        $imageName4 = $_FILES["file4"]["name"];

        $check1 = getimagesize($_FILES["file1"]["tmp_name"]);
        $check2 = getimagesize($_FILES["file2"]["tmp_name"]);
        $check3 = getimagesize($_FILES["file3"]["tmp_name"]);
        $check4 = getimagesize($_FILES["file4"]["tmp_name"]);

        $imageType1 = strtolower(pathinfo($imageName1,PATHINFO_EXTENSION));
        $imageType2 = strtolower(pathinfo($imageName2,PATHINFO_EXTENSION));
        $imageType3 = strtolower(pathinfo($imageName3,PATHINFO_EXTENSION));
        $imageType4 = strtolower(pathinfo($imageName4,PATHINFO_EXTENSION));

        $target_path1 = $target_dir.basename($imageName1);
        $target_path2 = $target_dir.basename($imageName2);
        $target_path3 = $target_dir.basename($imageName3);
        $target_path4 = $target_dir.basename($imageName4);

        if($check1 == true && $check2 == true && $check3 == true && $check4 == true){
          if($_FILES["file1"]["size"] < 50000000 && $_FILES["file2"]["size"] < 50000000 && $_FILES["file3"]["size"] < 50000000 && $_FILES["file4"]["size"] < 50000000){
            if(($imageType1 == "jpg" || $imageType1 == "png" || $imageType1 == "jpeg") && ($imageType2 == "jpg" || $imageType2 == "png" || $imageType2 == "jpeg") && ($imageType3 == "jpg" || $imageType3 == "png" || $imageType3 == "jpeg") && ($imageType4 == "jpg" || $imageType4 == "png" || $imageType4 == "jpeg")){
              $result1 = move_uploaded_file($_FILES["file1"]["tmp_name"],$target_path1);
              $result2 = move_uploaded_file($_FILES["file2"]["tmp_name"],$target_path2);
              $result3 = move_uploaded_file($_FILES["file3"]["tmp_name"],$target_path3);
              $result4 = move_uploaded_file($_FILES["file4"]["tmp_name"],$target_path4);
              //echo $result1; 
            }else{
            
            }
          }
        }

        //------------------------------------------------------------------------- 
        
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

              $optionTypearray[$opType_pos] = $optionType;
              $opType_pos++;

              $description = $_POST['description'.$var_pos];
              $data[$data_pos] = $description;
              $data_pos++;

              $price       = $_POST['optionPrice'.$var_pos];
              $data[$data_pos] = $price;
              $data_pos++;

              $data[$data_pos] = $_FILES["file".$var_pos."1"]["name"];
              $target_path = $target_dir.basename($_FILES["file".$var_pos."1"]["name"]);
              $result5 = move_uploaded_file($_FILES["file".$var_pos."1"]["tmp_name"],$target_path);
              echo $result5."<br>";
              $data_pos++;

              $data[$data_pos] = $_FILES["file".$var_pos."2"]["name"];
              $target_path = $target_dir.basename($_FILES["file".$var_pos."2"]["name"]);
              $result6 = move_uploaded_file($_FILES["file".$var_pos."2"]["tmp_name"],$target_path);
              $data_pos++;

              $data[$data_pos] = $_FILES["file".$var_pos."3"]["name"];
              $target_path = $target_dir.basename($_FILES["file".$var_pos."3"]["name"]);
              $result7 = move_uploaded_file($_FILES["file".$var_pos."3"]["tmp_name"],$target_path);
              $data_pos++;

              $data[$data_pos] = $_FILES["file".$var_pos."4"]["name"];
              $target_path = $target_dir.basename($_FILES["file".$var_pos."4"]["name"]);
              $result8 = move_uploaded_file($_FILES["file".$var_pos."4"]["tmp_name"],$target_path);
              $data_pos++;

              $var_pos++;
          } 

          
        }
  
            
       
         $sql = "INSERT INTO packages(sp_id,pack_name, pack_location, pack_address, pack_description,packImage) VALUES ('$sp_id','$pack_name', '$pack_location', '$pack_address', '$pack_description','$packageImg')";
         $result = mysqli_query($connection,$sql);

         $sql1 = "SELECT pack_id FROM packages WHERE sp_id = '$sp_id'";
         $result = mysqli_query($connection,$sql1);
         if($result == true){
             if(mysqli_num_rows($result)>0){
                 while($row = mysqli_fetch_assoc($result)){
                     $pack_id = $row['pack_id'];
                 }
             }
         }
         
         $sql2 = "INSERT INTO options(pack_id,option_name,option_description,option_rate,optionPic1,optionPic2,optionPic3,optionPic4) VALUES ('$pack_id','$option_name','$option_description','$option_rate','$imageName1','$imageName2','$imageName3','$imageName4')";
         $result = mysqli_query($connection,$sql2);

         
          $opNm       = 0;
          $opType     = 1;
          $opDescrip  = 2;
          $opPrice    = 3;
          $optionPic1 = 4;
          $optionPic2 = 5;
          $optionPic3 = 6;
          $optionPic4 = 7;

          $num_of_options = $_POST['num_of_options'];
        
          //echo $num_of_options;

          if($num_of_options != ""){
          
               while($num_of_options >= 0){

                // echo $data[$opNm]."<br>";
                // echo $data[$opType]."<br>";
                // echo $data[$opDescrip]."<br>";
                // echo $data[$opPrice]."<br>";
                // echo $data[$opcapacity]."<br>";
                // echo "<br>";

                 $sql = "INSERT INTO options(pack_id,option_name,option_description,option_rate,optionPic1,optionPic2,optionPic3,optionPic4) VALUES ('$pack_id','$data[$opNm]','$data[$opDescrip]','$data[$opPrice]','$data[$optionPic1]','$data[$optionPic2]','$data[$optionPic3]','$data[$optionPic4]')";
                 $result = mysqli_query($connection,$sql);
    

                 $opNm = $opNm + 9;
                 $opType = $opType + 9;
                 $opDescrip = $opDescrip + 9;
                 $opPrice = $opPrice + 9;
                 $optionPic1 = $optionPic1 + 9;
                 $optionPic2 = $optionPic2 + 9;
                 $optionPic3 = $optionPic3 + 9;
                 $optionPic4 = $optionPic4 + 9;

                 $num_of_options--;
               }
               
               foreach($data as $value){
                  //echo $value."<br>";
               }

  //header("Location: my_packages.php");
    
          }


        //   foreach($capacityArray as $a){
        //     echo $a."<br>";
        //  }
           
         $sql1 = "SELECT option_id FROM options WHERE pack_id = $pack_id";
         $result1 = mysqli_query($connection, $sql1);

         if($result1 == true) {
           if(mysqli_num_rows($result1)>0){
            $capacity_pos = 0;
            $opType_pos   = 0;

            while($row = mysqli_fetch_assoc($result1)){
              

                $sql3 = "INSERT INTO option_type(option_id,type) VALUES ('$row[option_id]', '$optionTypearray[$opType_pos]')";
                $result3 = mysqli_query($connection, $sql3);
                var_dump($result3);
                print_r($sql3);
                $opType_pos++;
            }
           }
         }
        
         header("location:my_packages.php");
        }
    
     
?>

