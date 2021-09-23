<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An event related to coupon payments.
 */
class CouponPaymentEvent extends AbstractModel
{
    /**
     * The date and time when the financial event was posted.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $PostedDate = null;

    /**
     * A coupon identifier.
     *
     * @var string
     */
    public $CouponId = null;

    /**
     * The description provided by the seller when they created the coupon.
     *
     * @var string
     */
    public $SellerCouponDescription = null;

    /**
     * The number of coupon clips or redemptions.
     *
     * @var int
     */
    public $ClipOrRedemptionCount = null;

    /**
     * A payment event identifier.
     *
     * @var string
     */
    public $PaymentEventId = null;

    /**
     * @var \Amz\Finances\Model\FeeComponent
     */
    public $FeeComponent = null;

    /**
     * @var \Amz\Finances\Model\ChargeComponent
     */
    public $ChargeComponent = null;

    /**
     * The FeeComponent value plus the ChargeComponent value.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $TotalAmount = null;
}
