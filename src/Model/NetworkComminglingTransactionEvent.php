<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A network commingling transaction event.
 */
class NetworkComminglingTransactionEvent extends AbstractModel
{
    /**
     * The type of network item swap.
     *
     * Possible values:
     *
     * * NetCo - A Fulfillment by Amazon inventory pooling transaction. Available only
     * in the India marketplace.
     *
     * * ComminglingVAT - A commingling VAT transaction. Available only in the UK,
     * Spain, France, Germany, and Italy marketplaces.
     *
     * @var string
     */
    public $TransactionType = null;

    /**
     * The date and time when the financial event was posted.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $PostedDate = null;

    /**
     * The identifier for the network item swap.
     *
     * @var string
     */
    public $NetCoTransactionID = null;

    /**
     * The reason for the network item swap.
     *
     * @var string
     */
    public $SwapReason = null;

    /**
     * The Amazon Standard Identification Number (ASIN) of the swapped item.
     *
     * @var string
     */
    public $ASIN = null;

    /**
     * The marketplace in which the event took place.
     *
     * @var string
     */
    public $MarketplaceId = null;

    /**
     * The price of the swapped item minus TaxAmount.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $TaxExclusiveAmount = null;

    /**
     * The tax on the network item swap paid by the seller.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $TaxAmount = null;
}
