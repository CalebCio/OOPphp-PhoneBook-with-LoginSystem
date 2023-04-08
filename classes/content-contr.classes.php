<?php

class ContentContr extends Content {
   private $uid;
   private $phone;
   private $address;

   public function __construct($uid, $phone, $address) {
        $this->uid = $uid;
        $this->phone = $phone;
        $this->address = $address;
   }

   public function contentUser() {
        if($this->emptyInput() == false) {
            //echo empty input!;
            header("location: ../content.php?error=emptyinput");
            exit();
        }

        $this->setUser($this->uid, $this->phone, $this->address);
    }

   private function emptyInput() {
        $result;
        if(empty($this->uid) || empty($this->phone) || empty($this->address)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
   }
}