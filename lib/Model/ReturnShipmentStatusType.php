<?php
/**
 * ReturnShipmentStatusType
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
 * ReturnShipmentStatusType Class Doc Comment
 *
 * @category Class
 * @description Статус передачи возврата:  * &#x60;CREATED&#x60; — возврат создан.  * &#x60;RECEIVED&#x60; — принят у покупателя.  * &#x60;IN_TRANSIT&#x60; — возврат в пути.  * &#x60;READY_FOR_PICKUP&#x60; — возврат готов к выдаче магазину.  * &#x60;PICKED&#x60; — возврат выдан магазину.  * &#x60;LOST&#x60; — возврат утерян при транспортировке.  * &#x60;CANCELLED&#x60; — возврат отменен.  * &#x60;FULFILMENT_RECEIVED&#x60; — возврат принят на складе Маркета.  * &#x60;PREPARED_FOR_UTILIZATION&#x60; — возврат передан в утилизацию.  * &#x60;UTILIZED&#x60; — возврат утилизирован.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReturnShipmentStatusType
{
    /**
     * Possible values of this enum
     */
    public const CREATED = 'CREATED';

    public const RECEIVED = 'RECEIVED';

    public const IN_TRANSIT = 'IN_TRANSIT';

    public const READY_FOR_PICKUP = 'READY_FOR_PICKUP';

    public const PICKED = 'PICKED';

    public const LOST = 'LOST';

    public const EXPIRED = 'EXPIRED';

    public const CANCELLED = 'CANCELLED';

    public const FULFILMENT_RECEIVED = 'FULFILMENT_RECEIVED';

    public const PREPARED_FOR_UTILIZATION = 'PREPARED_FOR_UTILIZATION';

    public const NOT_IN_DEMAND = 'NOT_IN_DEMAND';

    public const UTILIZED = 'UTILIZED';

    public const READY_FOR_EXPROPRIATION = 'READY_FOR_EXPROPRIATION';

    public const RECEIVED_FOR_EXPROPRIATION = 'RECEIVED_FOR_EXPROPRIATION';

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
            self::LOST,
            self::EXPIRED,
            self::CANCELLED,
            self::FULFILMENT_RECEIVED,
            self::PREPARED_FOR_UTILIZATION,
            self::NOT_IN_DEMAND,
            self::UTILIZED,
            self::READY_FOR_EXPROPRIATION,
            self::RECEIVED_FOR_EXPROPRIATION
        ];
    }
}


