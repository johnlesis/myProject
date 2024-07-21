<?php

namespace Src\App;

use Exception;

class TransferRequestValidator
{
    public function validate(TransferRequest $request): void
    {
        $fromAccount = $request->getFromAccount();
        $toAccount = $request->getToAccount();
        $amount = $request->getAmount();

        if ($amount <= 0) {
            throw new Exception("Transfer amount must be greater than zero");
        }

        if ($fromAccount->getBalance() < $amount) {
            throw new Exception("Insufficient funds in the from account");
        }

        if ($fromAccount->getUserid() === $toAccount->getUserid()) {
            throw new Exception("Cannot transfer to the same user");
        }
    }
}
