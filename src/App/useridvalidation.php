<?php

namespace Src\App;

use Exception;
use Src\Core\Userid;
use Src\Core\User;

class Useridvalidation implements Userid
{
  private Userid $userid;


  public function __construct(Userid $userid)
  {
    $this->userid = $userid;
    $this->validateUser();

  }
  public function validateUser()
  {
    if (is_numeric($this->userid)) {
      throw new Exception("must contain only letters");
    }
    if (strlen($this->userid < 15)) {
      throw new Exception("must be 15 or less caracters long");
    }
  }
  public function getUserId()
  {
    return $this->userid;
  }

}

