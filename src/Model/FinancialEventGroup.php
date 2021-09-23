<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information related to a financial event group.
 */
class FinancialEventGroup extends AbstractModel
{
    /**
     * A unique identifier for the financial event group.
     *
     * @var string
     */
    public $FinancialEventGroupId = null;

    /**
     * The processing status of the financial event group indicates whether the balance
     * of the financial event group is settled.
     *
     * Possible values:
     *
     * * Open
     *
     * * Closed
     *
     * @var string
     */
    public $ProcessingStatus = null;

    /**
     * The status of the fund transfer.
     *
     * @var string
     */
    public $FundTransferStatus = null;

    /**
     * The total amount in the currency of the marketplace in which the transactions
     * occurred.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $OriginalTotal = null;

    /**
     * The total amount in the currency of the marketplace in which the funds were
     * disbursed.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $ConvertedTotal = null;

    /**
     * The date and time when the disbursement or charge was initiated. Only present
     * for closed settlements. In ISO 8601 date time format.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $FundTransferDate = null;

    /**
     * The trace identifier used by sellers to look up transactions externally.
     *
     * @var string
     */
    public $TraceId = null;

    /**
     * The account tail of the payment instrument.
     *
     * @var string
     */
    public $AccountTail = null;

    /**
     * The balance at the beginning of the settlement period.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $BeginningBalance = null;

    /**
     * The date and time at which the financial event group is opened. In ISO 8601 date
     * time format.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $FinancialEventGroupStart = null;

    /**
     * The date and time at which the financial event group is closed. In ISO 8601 date
     * time format.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $FinancialEventGroupEnd = null;
}
