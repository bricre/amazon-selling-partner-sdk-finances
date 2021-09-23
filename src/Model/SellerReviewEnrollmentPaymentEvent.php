<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A fee payment event for the Early Reviewer Program.
 */
class SellerReviewEnrollmentPaymentEvent extends AbstractModel
{
    /**
     * The date and time when the financial event was posted.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $PostedDate = null;

    /**
     * An enrollment identifier.
     *
     * @var string
     */
    public $EnrollmentId = null;

    /**
     * The Amazon Standard Identification Number (ASIN) of the item that was enrolled
     * in the Early Reviewer Program.
     *
     * @var string
     */
    public $ParentASIN = null;

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
