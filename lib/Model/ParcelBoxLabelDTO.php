<?php
/**
 * ParcelBoxLabelDTO
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ParcelBoxLabelDTO Class Doc Comment
 *
 * @category Class
 * @description Информация о ярлыке для коробки.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ParcelBoxLabelDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ParcelBoxLabelDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'url' => 'string',
        'supplier_name' => 'string',
        'delivery_service_name' => 'string',
        'order_id' => 'int',
        'order_num' => 'string',
        'recipient_name' => 'string',
        'box_id' => 'int',
        'fulfilment_id' => 'string',
        'place' => 'string',
        'weight' => 'string',
        'delivery_service_id' => 'string',
        'delivery_address' => 'string',
        'shipment_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'url' => null,
        'supplier_name' => null,
        'delivery_service_name' => null,
        'order_id' => 'int64',
        'order_num' => null,
        'recipient_name' => null,
        'box_id' => 'int64',
        'fulfilment_id' => null,
        'place' => null,
        'weight' => null,
        'delivery_service_id' => null,
        'delivery_address' => null,
        'shipment_date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'url' => false,
        'supplier_name' => false,
        'delivery_service_name' => false,
        'order_id' => false,
        'order_num' => false,
        'recipient_name' => false,
        'box_id' => false,
        'fulfilment_id' => false,
        'place' => false,
        'weight' => false,
        'delivery_service_id' => false,
        'delivery_address' => false,
        'shipment_date' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'url' => 'url',
        'supplier_name' => 'supplierName',
        'delivery_service_name' => 'deliveryServiceName',
        'order_id' => 'orderId',
        'order_num' => 'orderNum',
        'recipient_name' => 'recipientName',
        'box_id' => 'boxId',
        'fulfilment_id' => 'fulfilmentId',
        'place' => 'place',
        'weight' => 'weight',
        'delivery_service_id' => 'deliveryServiceId',
        'delivery_address' => 'deliveryAddress',
        'shipment_date' => 'shipmentDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'supplier_name' => 'setSupplierName',
        'delivery_service_name' => 'setDeliveryServiceName',
        'order_id' => 'setOrderId',
        'order_num' => 'setOrderNum',
        'recipient_name' => 'setRecipientName',
        'box_id' => 'setBoxId',
        'fulfilment_id' => 'setFulfilmentId',
        'place' => 'setPlace',
        'weight' => 'setWeight',
        'delivery_service_id' => 'setDeliveryServiceId',
        'delivery_address' => 'setDeliveryAddress',
        'shipment_date' => 'setShipmentDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'supplier_name' => 'getSupplierName',
        'delivery_service_name' => 'getDeliveryServiceName',
        'order_id' => 'getOrderId',
        'order_num' => 'getOrderNum',
        'recipient_name' => 'getRecipientName',
        'box_id' => 'getBoxId',
        'fulfilment_id' => 'getFulfilmentId',
        'place' => 'getPlace',
        'weight' => 'getWeight',
        'delivery_service_id' => 'getDeliveryServiceId',
        'delivery_address' => 'getDeliveryAddress',
        'shipment_date' => 'getShipmentDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('supplier_name', $data ?? [], null);
        $this->setIfExists('delivery_service_name', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('order_num', $data ?? [], null);
        $this->setIfExists('recipient_name', $data ?? [], null);
        $this->setIfExists('box_id', $data ?? [], null);
        $this->setIfExists('fulfilment_id', $data ?? [], null);
        $this->setIfExists('place', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('delivery_service_id', $data ?? [], null);
        $this->setIfExists('delivery_address', $data ?? [], null);
        $this->setIfExists('shipment_date', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['supplier_name'] === null) {
            $invalidProperties[] = "'supplier_name' can't be null";
        }
        if ($this->container['delivery_service_name'] === null) {
            $invalidProperties[] = "'delivery_service_name' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['order_num'] === null) {
            $invalidProperties[] = "'order_num' can't be null";
        }
        if ($this->container['recipient_name'] === null) {
            $invalidProperties[] = "'recipient_name' can't be null";
        }
        if ($this->container['box_id'] === null) {
            $invalidProperties[] = "'box_id' can't be null";
        }
        if ($this->container['fulfilment_id'] === null) {
            $invalidProperties[] = "'fulfilment_id' can't be null";
        }
        if ($this->container['place'] === null) {
            $invalidProperties[] = "'place' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['delivery_service_id'] === null) {
            $invalidProperties[] = "'delivery_service_id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Соответствует URL, по которому выполняется запрос [GET campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label](../../reference/orders/generateOrderLabel.md).
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets supplier_name
     *
     * @return string
     */
    public function getSupplierName()
    {
        return $this->container['supplier_name'];
    }

    /**
     * Sets supplier_name
     *
     * @param string $supplier_name Юридическое название магазина.
     *
     * @return self
     */
    public function setSupplierName($supplier_name)
    {
        if (is_null($supplier_name)) {
            throw new \InvalidArgumentException('non-nullable supplier_name cannot be null');
        }
        $this->container['supplier_name'] = $supplier_name;

        return $this;
    }

    /**
     * Gets delivery_service_name
     *
     * @return string
     */
    public function getDeliveryServiceName()
    {
        return $this->container['delivery_service_name'];
    }

    /**
     * Sets delivery_service_name
     *
     * @param string $delivery_service_name Юридическое название службы доставки.
     *
     * @return self
     */
    public function setDeliveryServiceName($delivery_service_name)
    {
        if (is_null($delivery_service_name)) {
            throw new \InvalidArgumentException('non-nullable delivery_service_name cannot be null');
        }
        $this->container['delivery_service_name'] = $delivery_service_name;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int $order_id Идентификатор заказа в системе Маркета.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_num
     *
     * @return string
     */
    public function getOrderNum()
    {
        return $this->container['order_num'];
    }

    /**
     * Sets order_num
     *
     * @param string $order_num Идентификатор заказа в информационной системе магазина.  Совпадает с `orderId`, если Маркету неизвестен номер заказа в системе магазина.
     *
     * @return self
     */
    public function setOrderNum($order_num)
    {
        if (is_null($order_num)) {
            throw new \InvalidArgumentException('non-nullable order_num cannot be null');
        }
        $this->container['order_num'] = $order_num;

        return $this;
    }

    /**
     * Gets recipient_name
     *
     * @return string
     */
    public function getRecipientName()
    {
        return $this->container['recipient_name'];
    }

    /**
     * Sets recipient_name
     *
     * @param string $recipient_name Фамилия и инициалы получателя заказа.
     *
     * @return self
     */
    public function setRecipientName($recipient_name)
    {
        if (is_null($recipient_name)) {
            throw new \InvalidArgumentException('non-nullable recipient_name cannot be null');
        }
        $this->container['recipient_name'] = $recipient_name;

        return $this;
    }

    /**
     * Gets box_id
     *
     * @return int
     */
    public function getBoxId()
    {
        return $this->container['box_id'];
    }

    /**
     * Sets box_id
     *
     * @param int $box_id Идентификатор коробки.
     *
     * @return self
     */
    public function setBoxId($box_id)
    {
        if (is_null($box_id)) {
            throw new \InvalidArgumentException('non-nullable box_id cannot be null');
        }
        $this->container['box_id'] = $box_id;

        return $this;
    }

    /**
     * Gets fulfilment_id
     *
     * @return string
     */
    public function getFulfilmentId()
    {
        return $this->container['fulfilment_id'];
    }

    /**
     * Sets fulfilment_id
     *
     * @param string $fulfilment_id Идентификатор коробки в информационной системе магазина.  Возвращается в формате: `номер заказа на Маркете-номер коробки`. Например, `7206821‑1`, `7206821‑2` и т. д.
     *
     * @return self
     */
    public function setFulfilmentId($fulfilment_id)
    {
        if (is_null($fulfilment_id)) {
            throw new \InvalidArgumentException('non-nullable fulfilment_id cannot be null');
        }
        $this->container['fulfilment_id'] = $fulfilment_id;

        return $this;
    }

    /**
     * Gets place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->container['place'];
    }

    /**
     * Sets place
     *
     * @param string $place Номер коробки в заказе. Возвращается в формате: `номер места/общее количество мест`.
     *
     * @return self
     */
    public function setPlace($place)
    {
        if (is_null($place)) {
            throw new \InvalidArgumentException('non-nullable place cannot be null');
        }
        $this->container['place'] = $place;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param string $weight {% note warning \"\" %}  Этот параметр устарел. Не используйте его.  {% endnote %}  Общая масса всех товаров в заказе. Возвращается в формате: `weight кг`.
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets delivery_service_id
     *
     * @return string
     */
    public function getDeliveryServiceId()
    {
        return $this->container['delivery_service_id'];
    }

    /**
     * Sets delivery_service_id
     *
     * @param string $delivery_service_id Идентификатор службы доставки. Информацию о службе доставки можно получить с помощью запроса [GET delivery/services](../../reference/orders/getDeliveryServices.md).
     *
     * @return self
     */
    public function setDeliveryServiceId($delivery_service_id)
    {
        if (is_null($delivery_service_id)) {
            throw new \InvalidArgumentException('non-nullable delivery_service_id cannot be null');
        }
        $this->container['delivery_service_id'] = $delivery_service_id;

        return $this;
    }

    /**
     * Gets delivery_address
     *
     * @return string|null
     */
    public function getDeliveryAddress()
    {
        return $this->container['delivery_address'];
    }

    /**
     * Sets delivery_address
     *
     * @param string|null $delivery_address Адрес получателя.
     *
     * @return self
     */
    public function setDeliveryAddress($delivery_address)
    {
        if (is_null($delivery_address)) {
            throw new \InvalidArgumentException('non-nullable delivery_address cannot be null');
        }
        $this->container['delivery_address'] = $delivery_address;

        return $this;
    }

    /**
     * Gets shipment_date
     *
     * @return string|null
     */
    public function getShipmentDate()
    {
        return $this->container['shipment_date'];
    }

    /**
     * Sets shipment_date
     *
     * @param string|null $shipment_date Дата отгрузки в формате `dd.MM.yyyy`.
     *
     * @return self
     */
    public function setShipmentDate($shipment_date)
    {
        if (is_null($shipment_date)) {
            throw new \InvalidArgumentException('non-nullable shipment_date cannot be null');
        }
        $this->container['shipment_date'] = $shipment_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


