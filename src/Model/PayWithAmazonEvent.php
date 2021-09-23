<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An event related to the seller's Pay with Amazon account.
 */
class PayWithAmazonEvent extends AbstractModel
{
    /**
     * An order identifier that is specified by the seller.
     *
     * @var string
     */
    public $SellerOrderId = null;

    /**
     * The date and time when the payment transaction is posted. In ISO 8601 date time
     * format.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $TransactionPostedDate = null;

    /**
     * The type of business object.
     *
     * @var string
     */
    public $BusinessObjectType = null;

    /**
     * The sales channel for the transaction.
     *
     * @var string
     */
    public $SalesChannel = null;

    /**
     * The charge associated with the event.
     *
     * @var \Amz\Finances\Model\ChargeComponent
     */
    public $Charge = null;

    /**
     * A list of fees associated with the event.
     *
     * @var \Amz\Finances\Model\FeeComponentList
     */
    public $FeeList = null;

    /**
     * The type of payment.
     *
     * Possible values:
     *
     * * Sales
     *
     * @var string
     */
    public $PaymentAmountType = null;

    /**
     * A short description of this payment event.
     *
     * @var string
     */
    public $AmountDescription = null;

    /**
     * The fulfillment channel.
     *
     * Possible values:
     *
     * * AFN - Amazon Fulfillment Network (Fulfillment by Amazon)
     *
     * * MFN - Merchant Fulfillment Network (self-fulfilled)
     *
     * @var string
     */
    public $FulfillmentChannel = null;

    /**
     * The store name where the event occurred.
     *
     * @var string
     */
    public $StoreName = null;
}
