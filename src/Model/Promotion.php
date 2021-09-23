<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A promotion applied to an item.
 */
class Promotion extends AbstractModel
{
    /**
     * The type of promotion.
     *
     * @var string
     */
    public $PromotionType = null;

    /**
     * The seller-specified identifier for the promotion.
     *
     * @var string
     */
    public $PromotionId = null;

    /**
     * The amount of promotional discount applied to the item.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $PromotionAmount = null;
}
