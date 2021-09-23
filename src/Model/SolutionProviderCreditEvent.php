<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A credit given to a solution provider.
 */
class SolutionProviderCreditEvent extends AbstractModel
{
    /**
     * The transaction type.
     *
     * @var string
     */
    public $ProviderTransactionType = null;

    /**
     * A seller-defined identifier for an order.
     *
     * @var string
     */
    public $SellerOrderId = null;

    /**
     * The identifier of the marketplace where the order was placed.
     *
     * @var string
     */
    public $MarketplaceId = null;

    /**
     * The two-letter country code of the country associated with the marketplace where
     * the order was placed.
     *
     * @var string
     */
    public $MarketplaceCountryCode = null;

    /**
     * The Amazon-defined identifier of the seller.
     *
     * @var string
     */
    public $SellerId = null;

    /**
     * The store name where the payment event occurred.
     *
     * @var string
     */
    public $SellerStoreName = null;

    /**
     * The Amazon-defined identifier of the solution provider.
     *
     * @var string
     */
    public $ProviderId = null;

    /**
     * The store name where the payment event occurred.
     *
     * @var string
     */
    public $ProviderStoreName = null;

    /**
     * The amount of the credit.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $TransactionAmount = null;

    /**
     * The date and time that the credit transaction was created, in ISO 8601 date time
     * format.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $TransactionCreationDate = null;
}
