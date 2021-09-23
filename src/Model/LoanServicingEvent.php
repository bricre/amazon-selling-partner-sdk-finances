<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A loan advance, loan payment, or loan refund.
 */
class LoanServicingEvent extends AbstractModel
{
    /**
     * The amount of the loan.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $LoanAmount = null;

    /**
     * The type of event.
     *
     * Possible values:
     *
     * * LoanAdvance
     *
     * * LoanPayment
     *
     * * LoanRefund
     *
     * @var string
     */
    public $SourceBusinessEventType = null;
}
