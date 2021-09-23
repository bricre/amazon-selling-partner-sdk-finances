<?php

namespace Amz\Finances\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A fee event related to Amazon Imaging services.
 */
class ImagingServicesFeeEvent extends AbstractModel
{
    /**
     * The identifier for the imaging services request.
     *
     * @var string
     */
    public $ImagingRequestBillingItemID = null;

    /**
     * The Amazon Standard Identification Number (ASIN) of the item for which the
     * imaging service was requested.
     *
     * @var string
     */
    public $ASIN = null;

    /**
     * The date and time when the financial event was posted.
     *
     * @var \Amz\Finances\Model\Date
     */
    public $PostedDate = null;

    /**
     * A list of fees associated with the event.
     *
     * @var \Amz\Finances\Model\FeeComponentList
     */
    public $FeeList = null;
}
