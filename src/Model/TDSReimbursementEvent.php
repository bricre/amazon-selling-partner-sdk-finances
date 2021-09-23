<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A tax deduction at source (TDS) claim reimbursement event on the seller's
 * account.
 */
class TDSReimbursementEvent extends AbstractModel
{
    /**
     * The date and time when the financial event was posted.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $PostedDate = null;

    /**
     * A tax deduction at source (TDS) claim identifier.
     *
     * @var string
     */
    public $TdsOrderId = null;

    /**
     * The amount of the reimbursement.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $ReimbursedAmount = null;
}
