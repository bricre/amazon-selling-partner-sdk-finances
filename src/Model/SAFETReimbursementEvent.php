<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A SAFE-T claim reimbursement on the seller's account.
 */
class SAFETReimbursementEvent extends AbstractModel
{
    /**
     * The date and time when the financial event was posted.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $PostedDate = null;

    /**
     * A SAFE-T claim identifier.
     *
     * @var string
     */
    public $SAFETClaimId = null;

    /**
     * The amount of the reimbursement.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $ReimbursedAmount = null;

    /**
     * Indicates why the seller was reimbursed.
     *
     * @var string
     */
    public $ReasonCode = null;

    /**
     * @var \Amz\Finances\Model\SAFETReimbursementItemList
     */
    public $SAFETReimbursementItemList = null;
}
