<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A retrocharge or retrocharge reversal.
 */
class RetrochargeEvent extends AbstractModel
{
    /**
     * The type of event.
     *
     * Possible values:
     *
     * * Retrocharge
     *
     * * RetrochargeReversal
     *
     * @var string
     */
    public $RetrochargeEventType = null;

    /**
     * An Amazon-defined identifier for an order.
     *
     * @var string
     */
    public $AmazonOrderId = null;

    /**
     * The date and time when the financial event was posted.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $PostedDate = null;

    /**
     * The base tax associated with the retrocharge event.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $BaseTax = null;

    /**
     * The shipping tax associated with the retrocharge event.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $ShippingTax = null;

    /**
     * The name of the marketplace where the retrocharge event occurred.
     *
     * @var string
     */
    public $MarketplaceName = null;

    /**
     * A list of information about taxes withheld.
     *
     * @var \Amz\Finances\Model\TaxWithheldComponentList
     */
    public $RetrochargeTaxWithheldList = null;
}
