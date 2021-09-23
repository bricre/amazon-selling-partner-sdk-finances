<?php

namespace Amz\Finances\Api;

use Amz\Finances\Model\ListFinancialEventGroupsResponse as ListFinancialEventGroupsResponse;
use Amz\Finances\Model\ListFinancialEventsResponse as ListFinancialEventsResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class API extends AbstractAPI
{
    /**
     * Returns financial event groups for a given date range.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.5 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'MaxResultsPerPage'		The maximum number of results to return per page.
     *                       'FinancialEventGroupStartedBefore'		A date used for selecting financial event
     *                       groups that opened before (but not at) a specified date and time, in ISO 8601
     *                       format. The date-time  must be later than FinancialEventGroupStartedAfter and no
     *                       later than two minutes before the request was submitted. If
     *                       FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more
     *                       than 180 days apart, no financial event groups are returned.
     *                       'FinancialEventGroupStartedAfter'		A date used for selecting financial event
     *                       groups that opened after (or at) a specified date and time, in ISO 8601 format.
     *                       The date-time must be no later than two minutes before the request was
     *                       submitted.
     *                       'NextToken'		A string token returned in the response of your previous request.
     *
     * @return ListFinancialEventGroupsResponse
     */
    public function listFinancialEventGroups(array $queries = []): ListFinancialEventGroupsResponse
    {
        return $this->client->request('listFinancialEventGroups', 'GET', 'finances/v0/financialEventGroups',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns all financial events for the specified financial event group.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.5 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $eventGroupId The identifier of the financial event group to which the
     * events belong
     * @param array $queries options:
     *                       'MaxResultsPerPage'		The maximum number of results to return per page.
     *                       'NextToken'		A string token returned in the response of your previous request.
     *
     * @return ListFinancialEventsResponse
     */
    public function listFinancialEventsByGroupId($eventGroupId, array $queries = []): ListFinancialEventsResponse
    {
        return $this->client->request('listFinancialEventsByGroupId', 'GET', "finances/v0/financialEventGroups/{$eventGroupId}/financialEvents",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns all financial events for the specified order.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.5 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $orderId An Amazon-defined order identifier, in 3-7-7 format
     * @param array $queries options:
     *                       'MaxResultsPerPage'		The maximum number of results to return per page.
     *                       'NextToken'		A string token returned in the response of your previous request.
     *
     * @return ListFinancialEventsResponse
     */
    public function listFinancialEventsByOrderId($orderId, array $queries = []): ListFinancialEventsResponse
    {
        return $this->client->request('listFinancialEventsByOrderId', 'GET', "finances/v0/orders/{$orderId}/financialEvents",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns financial events for the specified data range.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 0.5 | 30 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'MaxResultsPerPage'		The maximum number of results to return per page.
     *                       'PostedAfter'		A date used for selecting financial events posted after (or at) a
     *                       specified time. The date-time must be no later than two minutes before the
     *                       request was submitted, in ISO 8601 date time format.
     *                       'PostedBefore'		A date used for selecting financial events posted before (but
     *                       not at) a specified time. The date-time must be later than PostedAfter and no
     *                       later than two minutes before the request was submitted, in ISO 8601 date time
     *                       format. If PostedAfter and PostedBefore are more than 180 days apart, no
     *                       financial events are returned. You must specify the PostedAfter parameter if you
     *                       specify the PostedBefore parameter. Default: Now minus two minutes.
     *                       'NextToken'		A string token returned in the response of your previous request.
     *
     * @return ListFinancialEventsResponse
     */
    public function listFinancialEvents(array $queries = []): ListFinancialEventsResponse
    {
        return $this->client->request('listFinancialEvents', 'GET', 'finances/v0/financialEvents',
            [
                'query' => $queries,
            ]
        );
    }
}
