<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information about the taxes withheld.
 */
class TaxWithheldComponent extends AbstractModel
{
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
     * A list of charges that represent the types and amounts of taxes withheld.
     *
     * @var \Amz\Finances\Model\ChargeComponentList
     */
    public $TaxesWithheld = null;
}
