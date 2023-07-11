<?php
ob_start();
include "include/authority_session.php";
  include 'db.php';

  	$id=$_REQUEST['id'];
  	$hid=$_REQUEST['hid'];
  	$status=$_REQUEST['status'];

  	if($status==1){
  		function generateRandomString($length = 20) {
			    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			    $charactersLength = strlen($characters);
			    $randomString = '';
			    for ($i = 0; $i < $length; $i++) {
			        $randomString .= $characters[rand(0, $charactersLength - 1)];
			    }
			    return $randomString;
			}
			$sec_key= generateRandomString();

  		 $update=mysqli_query($conn,"update request set status=1,sec='$sec_key' where id=$id");
  		  if ($update) {
  			 $gprovide=mysqli_query($conn,"SELECT * FROM `health_car_provider` where id=$hid");
                $provide=mysqli_fetch_array($gprovide);

                $name=$provide['name'];
                $email=$provide['email'];

  			
			include "mailer/mail.php";
               $msg=$sec_key;                 
    /* user mail */
         $from ='MEENA<drmeenapsk7@gmail.com>';
        $to = $email; 
        $bcc='drmeenapsk7@gmail.com@gmail.com';
       $subject=strtoupper($name).',Your cloud Service Secret key Mail ';            
              
        $mail=mail($from,$to,$bcc,$subject,$msg);  

        echo "<script>alert('Success!');
        		window.location.href='ta_home.php';
        	</script>";
            
        	
        }else{
        	echo "<script>alert('Failed!');
        		window.location.href='ta_home.php';
        	</script>";
        }  

  	
  	}else{
  		$update=mysqli_query($conn,"update request set status=2 where id=$id");

  		if ($update) {
  			echo "<script>alert('Rejected!');
        		window.location.href='ta_home.php';
        	</script>";
  		}else{
  			echo "<script>alert('Failed!');
        		window.location.href='ta_home.php';
        	</script>";
  		}
  	}