<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An item of a shipment, refund, guarantee claim, or chargeback.
 */
class ShipmentItem extends AbstractModel
{
    /**
     * The seller SKU of the item. The seller SKU is qualified by the seller's seller
     * ID, which is included with every call to the Selling Partner API.
     *
     * @var string
     */
    public $SellerSKU = null;

    /**
     * An Amazon-defined order item identifier.
     *
     * @var string
     */
    public $OrderItemId = null;

    /**
     * An Amazon-defined order adjustment identifier defined for refunds, guarantee
     * claims, and chargeback events.
     *
     * @var string
     */
    public $OrderAdjustmentItemId = null;

    /**
     * The number of items shipped.
     *
     * @var int
     */
    public $QuantityShipped = null;

    /**
     * A list of charges associated with the shipment item.
     *
     * @var \Amz\Finances\Model\ChargeComponentList
     */
    public $ItemChargeList = null;

    /**
     * A list of charge adjustments associated with the shipment item. This value is
     * only returned for refunds, guarantee claims, and chargeback events.
     *
     * @var \Amz\Finances\Model\ChargeComponentList
     */
    public $ItemChargeAdjustmentList = null;

    /**
     * A list of fees associated with the shipment item.
     *
     * @var \Amz\Finances\Model\FeeComponentList
     */
    public $ItemFeeList = null;

    /**
     * A list of fee adjustments associated with the shipment item. This value is only
     * returned for refunds, guarantee claims, and chargeback events.
     *
     * @var \Amz\Finances\Model\FeeComponentList
     */
    public $ItemFeeAdjustmentList = null;

    /**
     * A list of taxes withheld information for a shipment item.
     *
     * @var \Amz\Finances\Model\TaxWithheldComponentList
     */
    public $ItemTaxWithheldList = null;

    /**
     * @var \Amz\Finances\Model\PromotionList
     */
    public $PromotionList = null;

    /**
     * A list of promotion adjustments associated with the shipment item. This value is
     * only returned for refunds, guarantee claims, and chargeback events.
     *
     * @var \Amz\Finances\Model\PromotionList
     */
    public $PromotionAdjustmentList = null;

    /**
     * The cost of Amazon Points granted for a shipment item.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $CostOfPointsGranted = null;

    /**
     * The cost of Amazon Points returned for a shipment item. This value is only
     * returned for refunds, guarantee claims, and chargeback events.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $CostOfPointsReturned = null;
}
