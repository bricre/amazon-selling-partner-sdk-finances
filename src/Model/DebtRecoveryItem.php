<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An item of a debt payment or debt adjustment.
 */
class DebtRecoveryItem extends AbstractModel
{
    /**
     * The amount applied for the recovery item.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $RecoveryAmount = null;

    /**
     * The original debt amount.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $OriginalAmount = null;

    /**
     * The beginning date and time of the financial event group that contains the debt.
     * In ISO 8601 date time format.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $GroupBeginDate = null;

    /**
     * The ending date and time of the financial event group that contains the debt. In
     * ISO 8601 date time format.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $GroupEndDate = null;
}
