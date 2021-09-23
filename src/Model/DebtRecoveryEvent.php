<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A debt payment or debt adjustment.
 */
class DebtRecoveryEvent extends AbstractModel
{
    /**
     * The debt recovery type.
     *
     * Possible values:
     *
     * * DebtPayment
     *
     * * DebtPaymentFailure
     *
     * *DebtAdjustment
     *
     * @var string
     */
    public $DebtRecoveryType = null;

    /**
     * The amount applied for recovery.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $RecoveryAmount = null;

    /**
     * The amount returned for overpayment.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $OverPaymentCredit = null;

    /**
     * @var \Amz\Finances\Model\DebtRecoveryItemList
     */
    public $DebtRecoveryItemList = null;

    /**
     * @var \Amz\Finances\Model\ChargeInstrumentList
     */
    public $ChargeInstrumentList = null;
}
