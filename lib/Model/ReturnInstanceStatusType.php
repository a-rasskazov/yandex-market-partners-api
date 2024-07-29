<?php
/**
 * ReturnInstanceStatusType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ReturnInstanceStatusType Class Doc Comment
 *
 * @category Class
 * @description Логистический статус конкретного товара.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReturnInstanceStatusType
{
    /**
     * Possible values of this enum
     */
    public const CREATED = 'CREATED';

    public const RECEIVED = 'RECEIVED';

    public const IN_TRANSIT = 'IN_TRANSIT';

    public const READY_FOR_PICKUP = 'READY_FOR_PICKUP';

    public const PICKED = 'PICKED';

    public const RECEIVED_ON_FULFILLMENT = 'RECEIVED_ON_FULFILLMENT';

    public const CANCELLED = 'CANCELLED';

    public const LOST = 'LOST';

    public const UTILIZED = 'UTILIZED';

    public const PREPARED_FOR_UTILIZATION = 'PREPARED_FOR_UTILIZATION';

    public const EXPROPRIATED = 'EXPROPRIATED';

    public const NOT_IN_DEMAND = 'NOT_IN_DEMAND';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED,
            self::RECEIVED,
            self::IN_TRANSIT,
            self::READY_FOR_PICKUP,
            self::PICKED,
            self::RECEIVED_ON_FULFILLMENT,
            self::CANCELLED,
            self::LOST,
            self::UTILIZED,
            self::PREPARED_FOR_UTILIZATION,
            self::EXPROPRIATED,
            self::NOT_IN_DEMAND
        ];
    }
}


