<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An item from a SAFE-T claim reimbursement.
 */
class SAFETReimbursementItem extends AbstractModel
{
    /**
     * A list of charges associated with the item.
     *
     * @var \Amz\Finances\Model\ChargeComponentList
     */
    public $itemChargeList = null;

    /**
     * The description of the item as shown on the product detail page on the retail
     * website.
     *
     * @var string
     */
    public $productDescription = null;

    /**
     * The number of units of the item being reimbursed.
     *
     * @var string
     */
    public $quantity = null;
}
