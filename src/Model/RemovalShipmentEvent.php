<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A removal shipment event for a removal order.
 */
class RemovalShipmentEvent extends AbstractModel
{
    /**
     * The date and time when the financial event was posted.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $PostedDate = null;

    /**
     * The identifier for the removal shipment order.
     *
     * @var string
     */
    public $OrderId = null;

    /**
     * The type of removal order.
     *
     * Possible values:
     *
     * * WHOLESALE_LIQUIDATION
     *
     * @var string
     */
    public $TransactionType = null;

    /**
     * A list of removal shipment items.
     *
     * @var \Amz\Finances\Model\RemovalShipmentItemList
     */
    public $RemovalShipmentItemList = null;
}
