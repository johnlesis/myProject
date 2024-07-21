<?php
namespace Src\Core;

use Src\Core\Userid;

class User implements Userid
{
  private string $userid;
  private string $name;
  private string $email;
  private string $payment;

  public function getUserid()
  {
    return $this->userid;

  }
  public function getName()
  {
    return $this->name;
  }
}
