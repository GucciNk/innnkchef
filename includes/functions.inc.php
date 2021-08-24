<?php
function emptyInputSignup($user_name,$username,$user_email,$user_password,$user_pwdr,$user_gender,$user_telephone,$user_date){
$result;
 if(empty($user_name) || empty($user_email) ||
  empty($username) || empty($user_password) ||
   empty($user_pwdr) || empty($user_gender) || 
   empty($user_telephone) || empty($user_date)){
  $result = true;
}else{
     $result = false;
}
return $result;
}

function invalidUid($username){
    $result;
     if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
      $result = true;
    }else{
         $result = false;
    }
    return $result;
    }

    function invalidEmail($user_email){
        $result;
         if(!filter_var($user_email,FILTER_VALIDATE_EMAIL)){
          $result = true;
        }else{
             $result = false;
        }
        return $result;
        }  

        function passwordMatch($user_password,$user_pwdr){
            $result;
             if($user_password !== $user_pwdr){
              $result = true;
            }else{
                 $result = false;
            }
            return $result;
            }  

            function uidExists($conn,$username,$user_email){
               $sql = "SELECT * FROM innnkers WHERE username = ? OR user_email = ?;";
               $stmt = mysqli_stmt_init($conn);
               if(!mysqli_stmt_prepare($stmt,$sql)){
                header("location: ../pages(New User)/index.php?error=stmtfailed");
                exit();  
               }
               mysqli_stmt_bind_param($stmt,"ss",$username,$user_email);
               mysqli_stmt_execute($stmt);

               $resultData = mysqli_stmt_get_result($stmt);
               if($row = mysqli_fetch_assoc($resultData)){
                  return $row;
               }else{
                   $result = false;
                   return $result;
               }
          mysqli_stmt_close($stmt);
                }  

              function  createUser($conn,$user_name,$user_email,$username,$user_password,$user_gender,$user_telephone,$user_date){
                $sql = "INSERT INTO innnkers (user_name,user_email, username,user_password,user_gender,user_telephone, user_date) VALUES (?,?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn); 
                if(!mysqli_stmt_prepare($stmt,$sql)){
                 header("location: ../pages(New User)/index.php?error=stmtfailed");
                 exit();  
                }
             
                $hashedPass =password_hash($user_password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt,"sssssss",$user_name,$user_email,$username,$hashedPass,$user_gender,$user_telephone,$user_date);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
                header("location: ../pages(New User)/index.php?error=none");
                exit();  }

                //emptyInputLogin 

            function emptyInputLogin($username,$user_password){
                if(empty($username) || empty($user_password)){
                $result = true;
            }else{
                 $result = false;
            }
            return $result;

            }    
            function loginUser($conn,$username,$user_password){
                $uidExists = uidExists($conn,$username,$username);

                if(!$uidExists == false){
                    header("location: ../pages(New User)/index.php?error=wronglogin");
        exit(); 
                }
                $pwdHashed = $uidExists["user_password"];
                $checkPwd = password_verify($user_password,$pwdHashed);
                if($checkPwd === false){
                    header("location: ../pages(New User)/index.php?error=wronglogin");
                    exit(); 
                }else if($checkPwd === true){
                    session_start();
                     
                    header("location: ../pages(New User)/index.php");
                    exit();
                }

            }