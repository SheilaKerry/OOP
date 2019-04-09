<?php


class user extends DBCon {
    public function getAllUsers() {
        $stmt = $this->connect()->query("SELECT * memberFirstName FROM members");
        while ($row = $stmt->fetch()) {
            $mid = $row['memberFirstName'];
            return $mid;
        }
    }
    
    public function getUsersWithCountCheck() {
        $id = 501;
        $mid = "Kim";
        
        $stmt = $this->connect()->prepare("SELECT * FROM members WHERE memberId=? AND memberFirstName=?");
                $stmt->execute([$id, $mid]);
                
                if ($stmt->rowCount()) {
                    while ($row = $stmt->fetch()) {
                        return $row['memberFirstName'];
                    }
                }
    }
}

