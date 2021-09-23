<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A shipment, refund, guarantee claim, or chargeback.
 */
class ShipmentEvent extends AbstractModel
{
    /**
     * An Amazon-defined identifier for an order.
     *
     * @var string
     */
    public $AmazonOrderId = null;

    /**
     * A seller-defined identifier for an order.
     *
     * @var string
     */
    public $SellerOrderId = null;

    /**
     * The name of the marketplace where the event occurred.
     *
     * @var string
     */
    public $MarketplaceName = null;

    /**
     * A list of order-level charges. These charges are applicable to Multi-Channel
     * Fulfillment COD orders.
     *
     * @var \Amz\Finances\Model\ChargeComponentList
     */
    public $OrderChargeList = null;

    /**
     * A list of order-level charge adjustments. These adjustments are applicable to
     * Multi-Channel Fulfillment COD orders.
     *
     * @var \Amz\Finances\Model\ChargeComponentList
     */
    public $OrderChargeAdjustmentList = null;

    /**
     * A list of shipment-level fees.
     *
     * @var \Amz\Finances\Model\FeeComponentList
     */
    public $ShipmentFeeList = null;

    /**
     * A list of shipment-level fee adjustments.
     *
     * @var \Amz\Finances\Model\FeeComponentList
     */
    public $ShipmentFeeAdjustmentList = null;

    /**
     * A list of order-level fees. These charges are applicable to Multi-Channel
     * Fulfillment orders.
     *
     * @var \Amz\Finances\Model\FeeComponentList
     */
    public $OrderFeeList = null;

    /**
     * A list of order-level fee adjustments. These adjustments are applicable to
     * Multi-Channel Fulfillment orders.
     *
     * @var \Amz\Finances\Model\FeeComponentList
     */
    public $OrderFeeAdjustmentList = null;

    /**
     * A list of transactions where buyers pay Amazon through one of the credit cards
     * offered by Amazon or where buyers pay a seller directly through COD.
     *
     * @var \Amz\Finances\Model\DirectPaymentList
     */
    public $DirectPaymentList = null;

    /**
     * The date and time when the financial event was posted.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $PostedDate = null;

    /**
     * @var \Amz\Finances\Model\ShipmentItemList
     */
    public $ShipmentItemList = null;

    /**
     * A list of shipment item adjustments.
     *
     * @var \Amz\Finances\Model\ShipmentItemList
     */
    public $ShipmentItemAdjustmentList = null;
}
