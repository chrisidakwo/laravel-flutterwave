<?php

namespace ChrisIdakwo\Flutterwave\Laravel\Facades;

use ChrisIdakwo\Flutterwave\Transaction\Refund\Refund;
use ChrisIdakwo\Flutterwave\Transaction\Transaction;
use Illuminate\Support\Facades\Facade;

/**
 * Class Rave
 *
 * @method static array standardPayment(array $data)
 * @method static Transaction verifyTransaction(string $transactionId)
 * @method static Refund refundTransaction(string $transactionId, int $amount)
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
