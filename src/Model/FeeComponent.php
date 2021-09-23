<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A fee associated with the event.
 */
class FeeComponent extends AbstractModel
{
    /**
     * The type of fee. For more information about Selling on Amazon fees, see [Selling
     * on Amazon Fee Schedule](https://sellercentral.amazon.com/gp/help/200336920) on
     * Seller Central. For more information about Fulfillment by Amazon fees, see [FBA
     * features, services and fees](https://sellercentral.amazon.com/gp/help/201074400)
     * on Seller Central.
     *
     * @var string
     */
    public $FeeType = null;

    /**
     * The amount of the fee.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $FeeAmount = null;
}
