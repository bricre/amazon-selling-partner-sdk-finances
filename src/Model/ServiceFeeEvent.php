<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A service fee on the seller's account.
 */
class ServiceFeeEvent extends AbstractModel
{
    /**
     * An Amazon-defined identifier for an order.
     *
     * @var string
     */
    public $AmazonOrderId = null;

    /**
     * A short description of the service fee reason.
     *
     * @var string
     */
    public $FeeReason = null;

    /**
     * A list of fee components associated with the service fee.
     *
     * @var \Amz\Finances\Model\FeeComponentList
     */
    public $FeeList = null;

    /**
     * The seller SKU of the item. The seller SKU is qualified by the seller's seller
     * ID, which is included with every call to the Selling Partner API.
     *
     * @var string
     */
    public $SellerSKU = null;

    /**
     * A unique identifier assigned by Amazon to products stored in and fulfilled from
     * an Amazon fulfillment center.
     *
     * @var string
     */
    public $FnSKU = null;

    /**
     * A short description of the service fee event.
     *
     * @var string
     */
    public $FeeDescription = null;

    /**
     * The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @var string
     */
    public $ASIN = null;
}
