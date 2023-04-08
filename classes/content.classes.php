<?php

class Content extends Dbhphone {

    protected function setUser($uid, $number, $address) {
        $stmt = $this->connect()->prepare('INSERT INTO users (fullname, userPhone, userAddress) VALUES (?, ?, ?);');


        if(!$stmt->execute(array($uid, $number, $address))) {
            $stmt = null;
            header("location: ../content.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    public function getTable() {
        $stmt = $this->connect()->prepare ('SELECT idUsers, fullname, userPhone, userAddress FROM users');
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    public function getSingle($idUser) {
        $stmt = $this->connect()->prepare ('SELECT fullname, userPhone, userAddress FROM users WHERE idUsers = ?');
        $stmt->execute(array($idUser));
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        return $results;
    }

    public function updateSingle($idUser,$fullname,$userPhone,$userAddress) {
        $stmt = $this->connect()->prepare ('UPDATE users SET fullname=?, userPhone=?, userAddress=? WHERE idUsers = ?');
        return $stmt->execute(array($fullname,$userPhone,$userAddress,$idUser));
    }


    public function deleteSingle($idUser) {
        $stmt = $this->connect()->prepare ('DELETE FROM users WHERE idUsers = ?');
        return $stmt->execute(array($idUser));
    }

}