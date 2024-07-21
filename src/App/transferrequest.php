<?php

namespace Src\App;

use Src\Core\Bank;

class TransferRequest
{
  private Bank $fromAccount;
  private Bank $toAccount;
  private float $amount;

  public function __construct(Bank $fromAccount, bank $toAccount, float $amount)
  {
    $this->fromAccount = $fromAccount;
    $this->toAccount = $toAccount;
    $this->amount = $amount;
  }
  public function getFromAccount(): Bank
  {
    return $this->fromAccount;
  }

  public function getToAccount(): Bank
  {
    return $this->toAccount;
  }

  public function getAmount(): float
  {
    return $this->amount;
  }

}