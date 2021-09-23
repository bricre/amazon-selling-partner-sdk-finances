<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A currency type and amount.
 */
class Currency extends AbstractModel
{
    /**
     * The three-digit currency code in ISO 4217 format.
     *
     * @var string
     */
    public $CurrencyCode = null;

    /**
     * The monetary value.
     *
     * @var \Amz\Finances\Model\BigDecimal
     */
    public $CurrencyAmount = null;
}
