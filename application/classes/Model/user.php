<?php

class Model_User extends Model{

  public function check()
  {
    if(empty(Session::Instance()->get('user_id')))
      {
        return false;
      }
  }
}
