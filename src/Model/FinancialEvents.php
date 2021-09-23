<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Contains all information related to a financial event.
 */
class FinancialEvents extends AbstractModel
{
    /**
     * A list of shipment events.
     *
     * @var \Amz\Finances\Model\ShipmentEventList
     */
    public $ShipmentEventList = null;

    /**
     * A list of refund events.
     *
     * @var \Amz\Finances\Model\ShipmentEventList
     */
    public $RefundEventList = null;

    /**
     * A list of guarantee claim events.
     *
     * @var \Amz\Finances\Model\ShipmentEventList
     */
    public $GuaranteeClaimEventList = null;

    /**
     * A list of chargeback events.
     *
     * @var \Amz\Finances\Model\ShipmentEventList
     */
    public $ChargebackEventList = null;

    /**
     * @var \Amz\Finances\Model\PayWithAmazonEventList
     */
    public $PayWithAmazonEventList = null;

    /**
     * @var \Amz\Finances\Model\SolutionProviderCreditEventList
     */
    public $ServiceProviderCreditEventList = null;

    /**
     * @var \Amz\Finances\Model\RetrochargeEventList
     */
    public $RetrochargeEventList = null;

    /**
     * @var \Amz\Finances\Model\RentalTransactionEventList
     */
    public $RentalTransactionEventList = null;

    /**
     * @var \Amz\Finances\Model\ProductAdsPaymentEventList
     */
    public $ProductAdsPaymentEventList = null;

    /**
     * @var \Amz\Finances\Model\ServiceFeeEventList
     */
    public $ServiceFeeEventList = null;

    /**
     * @var \Amz\Finances\Model\SellerDealPaymentEventList
     */
    public $SellerDealPaymentEventList = null;

    /**
     * @var \Amz\Finances\Model\DebtRecoveryEventList
     */
    public $DebtRecoveryEventList = null;

    /**
     * @var \Amz\Finances\Model\LoanServicingEventList
     */
    public $LoanServicingEventList = null;

    /**
     * @var \Amz\Finances\Model\AdjustmentEventList
     */
    public $AdjustmentEventList = null;

    /**
     * @var \Amz\Finances\Model\SAFETReimbursementEventList
     */
    public $SAFETReimbursementEventList = null;

    /**
     * @var \Amz\Finances\Model\SellerReviewEnrollmentPaymentEventList
     */
    public $SellerReviewEnrollmentPaymentEventList = null;

    /**
     * @var \Amz\Finances\Model\FBALiquidationEventList
     */
    public $FBALiquidationEventList = null;

    /**
     * @var \Amz\Finances\Model\CouponPaymentEventList
     */
    public $CouponPaymentEventList = null;

    /**
     * @var \Amz\Finances\Model\ImagingServicesFeeEventList
     */
    public $ImagingServicesFeeEventList = null;

    /**
     * @var \Amz\Finances\Model\NetworkComminglingTransactionEventList
     */
    public $NetworkComminglingTransactionEventList = null;

    /**
     * @var \Amz\Finances\Model\AffordabilityExpenseEventList
     */
    public $AffordabilityExpenseEventList = null;

    /**
     * @var \Amz\Finances\Model\AffordabilityExpenseEventList
     */
    public $AffordabilityExpenseReversalEventList = null;
}
