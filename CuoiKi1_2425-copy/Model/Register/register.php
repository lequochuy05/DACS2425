<?php
    class db_register{
      #Insert Data
      public function Insert($user, $pass){
        $db = new Database();
        $conn = $db->connect();
        $sql = "INSERT INTO danhsachtaikhoannguoidung(username, password) VALUES(?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $user, $pass); 
        $password = password_hash($pass, PASSWORD_DEFAULT);
        $stmt->execute();
        return $stmt->affected_rows;

        #Close connect
        mysqli_close($conn);
      }
        
      #Update Data
      public function Update($user, $pass){
        $db= new Database();
        $conn = $db->connect();
        $sql = "UPDATE danhsachtaikhoannguoidung SET password = '$pass'
                WHERE username ='$user'";
        return $db->execute($sql);
        mysqli_close($conn);
    }
    }

    function checkPass_input($pass, $re_pass){
            return $pass == $re_pass;
      
  }
?>
