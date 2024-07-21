<?php

namespace Src\Core;

class Bank
{
  private string $account;
  private string $owner;
  private float $balance;
  private string $userid;

  public function __construct(string $account, string $owner, float $balance, string $userid)
  {
    $this->account = $account;
    $this->owner = $owner;
    $this->balance = $balance;
    $this->userid = $userid;
  }

  public function getAccount(): string
  {
    return $this->account;
  }

  public function getOwner(): string
  {
    return $this->owner;
  }

  public function getBalance(): float
  {
    return $this->balance;
  }

  public function getUserid(): string
  {
    return $this->userid;
  }

  public function setBalance(float $balance): void
  {
    $this->balance = $balance;
  }
}
