<?php
  
    class db_login{        
        public function checkUserExistence($user, $pass){
            $db = new Database();
            $conn = $db->connect();
            $sql = "SELECT * FROM danhsachtaikhoannguoidung WHERE username = ? AND password = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $user, $pass);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows > 0){
                return true;
            }else{
                return false;
            }

            mysqli_close($conn);
        }
       

    }

?>