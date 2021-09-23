<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An event linked to the payment of a fee related to the specified deal.
 */
class SellerDealPaymentEvent extends AbstractModel
{
    /**
     * The date and time when the financial event was posted.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $postedDate = null;

    /**
     * The unique identifier of the deal.
     *
     * @var string
     */
    public $dealId = null;

    /**
     * The internal description of the deal.
     *
     * @var string
     */
    public $dealDescription = null;

    /**
     * The type of event: SellerDealComplete.
     *
     * @var string
     */
    public $eventType = null;

    /**
     * The type of fee: RunLightningDealFee.
     *
     * @var string
     */
    public $feeType = null;

    /**
     * The monetary amount of the fee.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $feeAmount = null;

    /**
     * The monetary amount of the tax applied.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $taxAmount = null;

    /**
     * The total monetary amount paid.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $totalAmount = null;
}
