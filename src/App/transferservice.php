<?php
namespace Src\App;

use Src\Core\Bank;
use Src\App\TransferRequestValidator;

class Transferservice
{
  private TransferRequestValidator $validator;

  public function __construct(TransferRequestValidator $validator)
  {
    $this->validator = $validator;
  }

  public function transferFunds(TransferRequest $request): void
  {
    $this->validator->validate($request);

    $fromAccount = $request->getFromAccount();
    $toAccount = $request->getToAccount();
    $amount = $request->getAmount();

    // Deduct amount from the from account
    $fromAccount->setBalance($fromAccount->getBalance() - $amount);

    // Add amount to the to account
    $toAccount->setBalance($toAccount->getBalance() + $amount);
  }

}