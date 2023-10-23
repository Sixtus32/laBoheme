<?php
  class UserInfo{
    private $user_profile_info_id;
    private $user_name;
    private $photo;
    private $description;
  }

  public function __construct($user_profile_info_id){
    $this->user_profile_info_id=$user_profile_info_id;
  }
  public function getUserProfileInfoId(){
    return $this->user_profile_info_id;
  }
  public function getUserName(){
    return $this->user_name;
  }
  public function getUserPhoto(){
    return $this->photo;
  }
  public function getUserDescription(){
    return $this->user_profile_info_id;
  }

  public function generateInitialPhoto(){
    return "";
  }
?>
