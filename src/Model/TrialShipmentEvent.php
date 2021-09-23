<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An event related to a trial shipment.
 */
class TrialShipmentEvent extends AbstractModel
{
    /**
     * An Amazon-defined identifier for an order.
     *
     * @var string
     */
    public $AmazonOrderId = null;

    /**
     * The identifier of the financial event group.
     *
     * @var string
     */
    public $FinancialEventGroupId = null;

    /**
     * The date and time when the financial event was posted.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $PostedDate = null;

    /**
     * The seller SKU of the item. The seller SKU is qualified by the seller's seller
     * ID, which is included with every call to the Selling Partner API.
     *
     * @var string
     */
    public $SKU = null;

    /**
     * A list of fees charged by Amazon for trial shipments.
     *
     * @var \Amz\Finances\Model\FeeComponentList
     */
    public $FeeList = null;
}
