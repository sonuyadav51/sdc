<?php include "../connection/connect.php"; ?>
<?php 

/*getting values from form*/
$subject = $_POST['subject'];
$msg     = $_POST['msg'];
$allEmail = array();

/*getting email of all user*/
  if(isset($_POST['all'])){
      
      $query = "SELECT * FROM `sdc_user` WHERE `user_role` = 0";
      $fire = mysqli_query($connection,$query);
      while($data = mysqli_fetch_array($fire)){
          $allEmail[] = $data['user_email'];
      }
    }

/*getting  email of all project manager*/
if(isset($_POST['manager'])){
    
   $query = "SELECT * FROM `sdc_user` WHERE `user_role` = 2";
      $fire = mysqli_query($connection,$query);
      while($data = mysqli_fetch_array($fire)){
          $allEmail[] = $data['user_email'];
      }
}
 $number = count($allEmail);
 echo $number;
/*sending mail*/
foreach($allEmail as $email){
    //sending mail code goes here
    
    
    
    
    $number--;
    if($number == 0){
        header('Location:./mail.php?n='.$_GET['n'].'&status=send');
    }
}

?>