<?php

namespace ChrisIdakwo\Flutterwave\Laravel\Facades;

use ChrisIdakwo\Flutterwave\Bank\BankAccountCharge\BankAccountCharge;
use ChrisIdakwo\Flutterwave\Bank\BankTransfer\BankTransfer;
use ChrisIdakwo\Flutterwave\BVN\BVNVerification;
use ChrisIdakwo\Flutterwave\Transaction\Refund\Refund;
use ChrisIdakwo\Flutterwave\Transaction\Transaction;
use Illuminate\Support\Facades\Facade;

/**
 * Class Rave
 *
 * @method static array standardPayment(array $data)
 * @method static Transaction verifyTransaction(string $transactionId)
 * @method static Refund refundTransaction(string $transactionId, int $amount)
 * @method static BVNVerification verifyBVN(string $bvn)
 * @method static array verifyBankAccount(string $bankCode, string $accountNumber)
 * @method static BankTransfer bankTransfer(array $transactionData)
 * @method static BankAccountCharge chargeBankAccount(array $transactionData)
 * @method static Transaction chargeCardToken(string $cardToken, array $chargeData)
 * @method static Transaction preAuthCardWithToken(string $cardToken, array $chargeData)
 * @method static Transaction capturePreAuthCharge(string $flwRef, string $amount)
 * @method static Transaction cancelPreAuthCard(string $flwRef)
 * @method static Transaction refundPreAuthCharge(string $flwRef, string $amount)
 *
 * @package ChrisIdakwo\Flutterwave\Laravel\Facades
 */
class Rave extends Facade {
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor(): string {
		return 'laravel-flutterwave';
	}
}
