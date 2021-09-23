<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An event related to a rental transaction.
 */
class RentalTransactionEvent extends AbstractModel
{
    /**
     * An Amazon-defined identifier for an order.
     *
     * @var string
     */
    public $AmazonOrderId = null;

    /**
     * The type of rental event.
     *
     * Possible values:
     *
     * * RentalCustomerPayment-Buyout - Transaction type that represents when the
     * customer wants to buy out a rented item.
     *
     * * RentalCustomerPayment-Extension - Transaction type that represents when the
     * customer wants to extend the rental period.
     *
     * * RentalCustomerRefund-Buyout - Transaction type that represents when the
     * customer requests a refund for the buyout of the rented item.
     *
     * * RentalCustomerRefund-Extension - Transaction type that represents when the
     * customer requests a refund over the extension on the rented item.
     *
     * * RentalHandlingFee - Transaction type that represents the fee that Amazon
     * charges sellers who rent through Amazon.
     *
     * * RentalChargeFailureReimbursement - Transaction type that represents when
     * Amazon sends money to the seller to compensate for a failed charge.
     *
     * * RentalLostItemReimbursement - Transaction type that represents when Amazon
     * sends money to the seller to compensate for a lost item.
     *
     * @var string
     */
    public $RentalEventType = null;

    /**
     * The number of days that the buyer extended an already rented item. This value is
     * only returned for RentalCustomerPayment-Extension and
     * RentalCustomerRefund-Extension events.
     *
     * @var int
     */
    public $ExtensionLength = null;

    /**
     * The date and time when the financial event was posted.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $PostedDate = null;

    /**
     * A list of charges associated with the rental event.
     *
     * @var \Amz\Finances\Model\ChargeComponentList
     */
    public $RentalChargeList = null;

    /**
     * A list of fees associated with the rental event.
     *
     * @var \Amz\Finances\Model\FeeComponentList
     */
    public $RentalFeeList = null;

    /**
     * The name of the marketplace.
     *
     * @var string
     */
    public $MarketplaceName = null;

    /**
     * The amount of money the customer originally paid to rent the item. This value is
     * only returned for RentalChargeFailureReimbursement and
     * RentalLostItemReimbursement events.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $RentalInitialValue = null;

    /**
     * The amount of money Amazon sends the seller to compensate for a lost item or a
     * failed charge. This value is only returned for RentalChargeFailureReimbursement
     * and RentalLostItemReimbursement events.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $RentalReimbursement = null;

    /**
     * A list of taxes withheld information for a rental item.
     *
     * @var \Amz\Finances\Model\TaxWithheldComponentList
     */
    public $RentalTaxWithheldList = null;
}
