<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A Sponsored Products payment event.
 */
class ProductAdsPaymentEvent extends AbstractModel
{
    /**
     * The date and time when the financial event was posted.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $postedDate = null;

    /**
     * Indicates if the transaction is for a charge or a refund.
     *
     * Possible values:
     *
     * * charge - Charge
     *
     * * refund - Refund
     *
     * @var string
     */
    public $transactionType = null;

    /**
     * Identifier for the invoice that the transaction appears in.
     *
     * @var string
     */
    public $invoiceId = null;

    /**
     * Base amount of the transaction, before tax.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $baseValue = null;

    /**
     * Tax amount of the transaction.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $taxValue = null;

    /**
     * The total amount of the transaction. Equal to baseValue + taxValue.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $transactionValue = null;
}
