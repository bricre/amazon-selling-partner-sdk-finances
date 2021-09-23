<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the listFinancialEventGroups operation.
 */
class ListFinancialEventGroupsResponse extends AbstractModel
{
    /**
     * The payload for the listFinancialEventGroups operation.
     *
     * @var \Amz\Finances\Model\ListFinancialEventGroupsPayload
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the listFinancialEventGroups
     * operation.
     *
     * @var \Amz\Finances\Model\ErrorList
     */
    public $errors = null;
}
