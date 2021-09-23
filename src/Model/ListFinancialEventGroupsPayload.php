<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload for the listFinancialEventGroups operation.
 */
class ListFinancialEventGroupsPayload extends AbstractModel
{
    /**
     * When present and not empty, pass this string token in the next request to return
     * the next response page.
     *
     * @var string
     */
    public $NextToken = null;

    /**
     * @var \Amz\Finances\Model\FinancialEventGroupList
     */
    public $FinancialEventGroupList = null;
}
