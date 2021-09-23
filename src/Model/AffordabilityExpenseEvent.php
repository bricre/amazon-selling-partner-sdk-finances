<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An expense related to an affordability promotion.
 */
class AffordabilityExpenseEvent extends AbstractModel
{
    /**
     * An Amazon-defined identifier for an order.
     *
     * @var string
     */
    public $AmazonOrderId = null;

    /**
     * The date and time when the financial event was created.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $PostedDate = null;

    /**
     * An encrypted, Amazon-defined marketplace identifier.
     *
     * @var string
     */
    public $MarketplaceId = null;

    /**
     * Indicates the type of transaction.
     *
     * Possible values:
     *
     * * Charge - For an affordability promotion expense.
     *
     * * Refund - For an affordability promotion expense reversal.
     *
     * @var string
     */
    public $TransactionType = null;

    /**
     * The amount charged for clicks incurred under the Sponsored Products program.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $BaseExpense = null;

    /**
     * Central Goods and Service Tax, charged and collected by the central government.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $TaxTypeCGST = null;

    /**
     * State Goods and Service Tax, charged and collected by the state government.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $TaxTypeSGST = null;

    /**
     * Integrated Goods and Service Tax, charged and collected by the central
     * government.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $TaxTypeIGST = null;

    /**
     * The total amount charged to the seller. TotalExpense = BaseExpense + TaxTypeIGST
     * + TaxTypeCGST + TaxTypeSGST.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $TotalExpense = null;
}
