<?php
if(isset($_POST['addcar']) ){
    require_once('connection.php');
   echo "<prev>";
   print_r($_FILES['image']);
   echo "</prev>";
   

                $carname=mysqli_real_escape_string($con,$_POST['carname']);

                $ftype=mysqli_real_escape_string($con,$_POST['ftype']);
                $capacity=mysqli_real_escape_string($con,$_POST['capacity']);
                $price=mysqli_real_escape_string($con,$_POST['price']);
                $available="Y";
                $img_name= $_FILES['image']['name'];
                $tmp_name= $_FILES['image']['tmp_name'];
                $query="INSERT INTO cars(CAR_NAME,FUEL_TYPE,CAPACITY,PRICE,CAR_IMG,AVAILABLE) values('$carname','$ftype',$capacity,$price,'$img_name','$available')";
                $res=mysqli_query($con,$query);
                if($res){
                    $target_dir="img/";
                    $target_file=$target_dir.basename($img_name);
                    move_uploaded_file($tmp_name,$target_file);
                    echo '<script>alert("New Car Added Successfully!!")</script>';
                    echo '<script> window.location.href = "vehicle.php";</script>'; 
                }
                else{
                        echo '<script>alert("Cant upload this type of image")</script>';
                        echo '<script> window.location.href = "addcar.php";</script>';   
                    }               

        }
        else{
        $em="unknown error occured";
        header("Location: addcar.php?error=$em");
        }

?>
