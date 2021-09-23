<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Item-level information for a removal shipment.
 */
class RemovalShipmentItem extends AbstractModel
{
    /**
     * An identifier for an item in a removal shipment.
     *
     * @var string
     */
    public $RemovalShipmentItemId = null;

    /**
     * The tax collection model applied to the item.
     *
     * Possible values:
     *
     * * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority
     * by Amazon on behalf of the seller.
     *
     * * Standard - Tax is paid to the seller and not remitted to the taxing authority
     * by Amazon.
     *
     * @var string
     */
    public $TaxCollectionModel = null;

    /**
     * The Amazon fulfillment network SKU for the item.
     *
     * @var string
     */
    public $FulfillmentNetworkSKU = null;

    /**
     * The quantity of the item.
     *
     * @var int
     */
    public $Quantity = null;

    /**
     * The total amount paid to the seller for the removed item.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $Revenue = null;

    /**
     * The fee that Amazon charged to the seller for the removal of the item. The
     * amount is a negative number.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $FeeAmount = null;

    /**
     * Tax collected on the revenue.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $TaxAmount = null;

    /**
     * The tax withheld and remitted to the taxing authority by Amazon on behalf of the
     * seller. If TaxCollectionModel=MarketplaceFacilitator, then TaxWithheld=TaxAmount
     * (except the TaxWithheld amount is a negative number). Otherwise TaxWithheld=0.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $TaxWithheld = null;
}
