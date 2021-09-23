<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An item in an adjustment to the seller's account.
 */
class AdjustmentItem extends AbstractModel
{
    /**
     * Represents the number of units in the seller's inventory when the AdustmentType
     * is FBAInventoryReimbursement.
     *
     * @var string
     */
    public $Quantity = null;

    /**
     * The per unit value of the item.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $PerUnitAmount = null;

    /**
     * The total value of the item.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $TotalAmount = null;

    /**
     * The seller SKU of the item. The seller SKU is qualified by the seller's seller
     * ID, which is included with every call to the Selling Partner API.
     *
     * @var string
     */
    public $SellerSKU = null;

    /**
     * A unique identifier assigned to products stored in and fulfilled from a
     * fulfillment center.
     *
     * @var string
     */
    public $FnSKU = null;

    /**
     * A short description of the item.
     *
     * @var string
     */
    public $ProductDescription = null;

    /**
     * The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @var string
     */
    public $ASIN = null;
}
