<?php

class memberLogin extends DBCon{
    
    public function memberLogin(){
        if (!empty(filter_input(INPUT_POST, 'username'))) {
              try {  
             $checkLogin = $this->connect()->prepare("Call checkLogin (:userEmail)");
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
          
                try {
                    $checkLogin->execute([':userEmail' => FILTER_input(INPUT_POST, 'username')]);
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
            
          
                try {
                    $loginSuccess = $checkLogin->fetch();
                    if(empty($loginSuccess)){ 
                    echo "There seems to be a problem with that username, please try again";}
//                    var_dump($loginSuccess);
                    return $loginSuccess;
                    } catch (PDOException $e) {
                    echo $e->getMessage(); 
                }                
                }
          
    }
   
}
