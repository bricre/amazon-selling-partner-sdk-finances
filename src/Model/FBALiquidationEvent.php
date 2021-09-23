<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A payment event for Fulfillment by Amazon (FBA) inventory liquidation. This
 * event is used only in the US marketplace.
 */
class FBALiquidationEvent extends AbstractModel
{
    /**
     * The date and time when the financial event was posted.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $PostedDate = null;

    /**
     * The identifier for the original removal order.
     *
     * @var string
     */
    public $OriginalRemovalOrderId = null;

    /**
     * The amount paid by the liquidator for the seller's inventory. The seller
     * receives this amount minus LiquidationFeeAmount.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $LiquidationProceedsAmount = null;

    /**
     * The fee charged to the seller by Amazon for liquidating the seller's FBA
     * inventory.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $LiquidationFeeAmount = null;
}
