<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A payment instrument.
 */
class ChargeInstrument extends AbstractModel
{
    /**
     * A short description of the charge instrument.
     *
     * @var string
     */
    public $Description = null;

    /**
     * The account tail (trailing digits) of the charge instrument.
     *
     * @var string
     */
    public $Tail = null;

    /**
     * The amount charged to this charge instrument.
     *
     * @var \Amz\Finances\Model\Currency
     */
    public $Amount = null;
}
