<?php

/*
 * This file is part of the Laravel Rave package.
 *
 * (c) Oluwole Adebiyi - Flamez <flamekeed@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace StephenCoduor\Rave\Facades;

use Illuminate\Support\Facades\Facade;
use StephenCoduor\Rave\Helpers\Banks;
use StephenCoduor\Rave\Helpers\Beneficiary;
use StephenCoduor\Rave\Helpers\Payments;
use StephenCoduor\Rave\Helpers\Transfers;

/**
 * Class Rave
 *
 * @method static string generateReference(String $transactionPrefix = null)
 * @method static object initializePayment(array $data)
 * @method static string getTransactionIDFromCallback()
 * @method static object verifyTransaction(string $transactionId)
 * @method static bool verifyWebhook()
 * @method static Payments payments()
 * @method static Banks banks()
 * @method static Transfers transfers()
 * @method static Beneficiary beneficiaries()
 *
 * @see \StephenCoduor\Rave\Rave
 *
 */
class Rave extends Facade
{
    /**
     * Get the registered name of the component
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelrave';
    }
}
