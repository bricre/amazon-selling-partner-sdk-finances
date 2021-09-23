<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the listFinancialEvents operation.
 */
class ListFinancialEventsResponse extends AbstractModel
{
    /**
     * The payload for the listFinancialEvents operation.
     *
     * @var \Amz\Finances\Model\ListFinancialEventsPayload
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the listFinancialEvents operation.
     *
     * @var \Amz\Finances\Model\ErrorList
     */
    public $errors = null;
}
