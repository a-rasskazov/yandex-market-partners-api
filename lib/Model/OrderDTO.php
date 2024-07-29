<?php
/**
 * OrderDTO
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
 * OrderDTO Class Doc Comment
 *
 * @category Class
 * @description Заказ.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'status' => '\OpenAPI\Client\Model\OrderStatusType',
        'substatus' => '\OpenAPI\Client\Model\OrderSubstatusType',
        'creation_date' => 'string',
        'currency' => '\OpenAPI\Client\Model\CurrencyType',
        'items_total' => 'float',
        'delivery_total' => 'float',
        'buyer_items_total' => 'float',
        'buyer_total' => 'float',
        'buyer_items_total_before_discount' => 'float',
        'buyer_total_before_discount' => 'float',
        'payment_type' => '\OpenAPI\Client\Model\OrderPaymentType',
        'payment_method' => '\OpenAPI\Client\Model\OrderPaymentMethodType',
        'fake' => 'bool',
        'items' => '\OpenAPI\Client\Model\OrderItemDTO[]',
        'subsidies' => '\OpenAPI\Client\Model\OrderSubsidyDTO[]',
        'delivery' => '\OpenAPI\Client\Model\OrderDeliveryDTO',
        'buyer' => '\OpenAPI\Client\Model\OrderBuyerDTO',
        'notes' => 'string',
        'tax_system' => '\OpenAPI\Client\Model\OrderTaxSystemType',
        'cancel_requested' => 'bool',
        'expiry_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'status' => null,
        'substatus' => null,
        'creation_date' => 'date-dd-MM-yyyy-HH-mm-ss',
        'currency' => null,
        'items_total' => 'decimal',
        'delivery_total' => 'decimal',
        'buyer_items_total' => 'decimal',
        'buyer_total' => 'decimal',
        'buyer_items_total_before_discount' => 'decimal',
        'buyer_total_before_discount' => 'decimal',
        'payment_type' => null,
        'payment_method' => null,
        'fake' => null,
        'items' => null,
        'subsidies' => null,
        'delivery' => null,
        'buyer' => null,
        'notes' => null,
        'tax_system' => null,
        'cancel_requested' => null,
        'expiry_date' => 'date-dd-MM-yyyy-HH-mm-ss'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'status' => false,
        'substatus' => false,
        'creation_date' => false,
        'currency' => false,
        'items_total' => false,
        'delivery_total' => false,
        'buyer_items_total' => false,
        'buyer_total' => false,
        'buyer_items_total_before_discount' => false,
        'buyer_total_before_discount' => false,
        'payment_type' => false,
        'payment_method' => false,
        'fake' => false,
        'items' => false,
        'subsidies' => false,
        'delivery' => false,
        'buyer' => false,
        'notes' => false,
        'tax_system' => false,
        'cancel_requested' => false,
        'expiry_date' => false
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
        'id' => 'id',
        'status' => 'status',
        'substatus' => 'substatus',
        'creation_date' => 'creationDate',
        'currency' => 'currency',
        'items_total' => 'itemsTotal',
        'delivery_total' => 'deliveryTotal',
        'buyer_items_total' => 'buyerItemsTotal',
        'buyer_total' => 'buyerTotal',
        'buyer_items_total_before_discount' => 'buyerItemsTotalBeforeDiscount',
        'buyer_total_before_discount' => 'buyerTotalBeforeDiscount',
        'payment_type' => 'paymentType',
        'payment_method' => 'paymentMethod',
        'fake' => 'fake',
        'items' => 'items',
        'subsidies' => 'subsidies',
        'delivery' => 'delivery',
        'buyer' => 'buyer',
        'notes' => 'notes',
        'tax_system' => 'taxSystem',
        'cancel_requested' => 'cancelRequested',
        'expiry_date' => 'expiryDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'substatus' => 'setSubstatus',
        'creation_date' => 'setCreationDate',
        'currency' => 'setCurrency',
        'items_total' => 'setItemsTotal',
        'delivery_total' => 'setDeliveryTotal',
        'buyer_items_total' => 'setBuyerItemsTotal',
        'buyer_total' => 'setBuyerTotal',
        'buyer_items_total_before_discount' => 'setBuyerItemsTotalBeforeDiscount',
        'buyer_total_before_discount' => 'setBuyerTotalBeforeDiscount',
        'payment_type' => 'setPaymentType',
        'payment_method' => 'setPaymentMethod',
        'fake' => 'setFake',
        'items' => 'setItems',
        'subsidies' => 'setSubsidies',
        'delivery' => 'setDelivery',
        'buyer' => 'setBuyer',
        'notes' => 'setNotes',
        'tax_system' => 'setTaxSystem',
        'cancel_requested' => 'setCancelRequested',
        'expiry_date' => 'setExpiryDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'substatus' => 'getSubstatus',
        'creation_date' => 'getCreationDate',
        'currency' => 'getCurrency',
        'items_total' => 'getItemsTotal',
        'delivery_total' => 'getDeliveryTotal',
        'buyer_items_total' => 'getBuyerItemsTotal',
        'buyer_total' => 'getBuyerTotal',
        'buyer_items_total_before_discount' => 'getBuyerItemsTotalBeforeDiscount',
        'buyer_total_before_discount' => 'getBuyerTotalBeforeDiscount',
        'payment_type' => 'getPaymentType',
        'payment_method' => 'getPaymentMethod',
        'fake' => 'getFake',
        'items' => 'getItems',
        'subsidies' => 'getSubsidies',
        'delivery' => 'getDelivery',
        'buyer' => 'getBuyer',
        'notes' => 'getNotes',
        'tax_system' => 'getTaxSystem',
        'cancel_requested' => 'getCancelRequested',
        'expiry_date' => 'getExpiryDate'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('substatus', $data ?? [], null);
        $this->setIfExists('creation_date', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('items_total', $data ?? [], null);
        $this->setIfExists('delivery_total', $data ?? [], null);
        $this->setIfExists('buyer_items_total', $data ?? [], null);
        $this->setIfExists('buyer_total', $data ?? [], null);
        $this->setIfExists('buyer_items_total_before_discount', $data ?? [], null);
        $this->setIfExists('buyer_total_before_discount', $data ?? [], null);
        $this->setIfExists('payment_type', $data ?? [], null);
        $this->setIfExists('payment_method', $data ?? [], null);
        $this->setIfExists('fake', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('subsidies', $data ?? [], null);
        $this->setIfExists('delivery', $data ?? [], null);
        $this->setIfExists('buyer', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('tax_system', $data ?? [], null);
        $this->setIfExists('cancel_requested', $data ?? [], null);
        $this->setIfExists('expiry_date', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Идентификатор заказа.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\OrderStatusType|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\OrderStatusType|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets substatus
     *
     * @return \OpenAPI\Client\Model\OrderSubstatusType|null
     */
    public function getSubstatus()
    {
        return $this->container['substatus'];
    }

    /**
     * Sets substatus
     *
     * @param \OpenAPI\Client\Model\OrderSubstatusType|null $substatus substatus
     *
     * @return self
     */
    public function setSubstatus($substatus)
    {
        if (is_null($substatus)) {
            throw new \InvalidArgumentException('non-nullable substatus cannot be null');
        }
        $this->container['substatus'] = $substatus;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string|null $creation_date creation_date
     *
     * @return self
     */
    public function setCreationDate($creation_date)
    {
        if (is_null($creation_date)) {
            throw new \InvalidArgumentException('non-nullable creation_date cannot be null');
        }
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \OpenAPI\Client\Model\CurrencyType|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \OpenAPI\Client\Model\CurrencyType|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets items_total
     *
     * @return float|null
     */
    public function getItemsTotal()
    {
        return $this->container['items_total'];
    }

    /**
     * Sets items_total
     *
     * @param float|null $items_total Платеж покупателя.
     *
     * @return self
     */
    public function setItemsTotal($items_total)
    {
        if (is_null($items_total)) {
            throw new \InvalidArgumentException('non-nullable items_total cannot be null');
        }
        $this->container['items_total'] = $items_total;

        return $this;
    }

    /**
     * Gets delivery_total
     *
     * @return float|null
     */
    public function getDeliveryTotal()
    {
        return $this->container['delivery_total'];
    }

    /**
     * Sets delivery_total
     *
     * @param float|null $delivery_total Стоимость доставки.
     *
     * @return self
     */
    public function setDeliveryTotal($delivery_total)
    {
        if (is_null($delivery_total)) {
            throw new \InvalidArgumentException('non-nullable delivery_total cannot be null');
        }
        $this->container['delivery_total'] = $delivery_total;

        return $this;
    }

    /**
     * Gets buyer_items_total
     *
     * @return float|null
     * @deprecated
     */
    public function getBuyerItemsTotal()
    {
        return $this->container['buyer_items_total'];
    }

    /**
     * Sets buyer_items_total
     *
     * @param float|null $buyer_items_total {% note warning \"\" %}  Этот параметр устарел.  {% endnote %}  Стоимость всех товаров в заказе в валюте покупателя после применения скидок и без учета стоимости доставки.
     *
     * @return self
     * @deprecated
     */
    public function setBuyerItemsTotal($buyer_items_total)
    {
        if (is_null($buyer_items_total)) {
            throw new \InvalidArgumentException('non-nullable buyer_items_total cannot be null');
        }
        $this->container['buyer_items_total'] = $buyer_items_total;

        return $this;
    }

    /**
     * Gets buyer_total
     *
     * @return float|null
     * @deprecated
     */
    public function getBuyerTotal()
    {
        return $this->container['buyer_total'];
    }

    /**
     * Sets buyer_total
     *
     * @param float|null $buyer_total {% note warning \"\" %}  Этот параметр устарел.  {% endnote %}  Стоимость всех товаров в заказе в валюте покупателя после применения скидок и с учетом стоимости доставки.
     *
     * @return self
     * @deprecated
     */
    public function setBuyerTotal($buyer_total)
    {
        if (is_null($buyer_total)) {
            throw new \InvalidArgumentException('non-nullable buyer_total cannot be null');
        }
        $this->container['buyer_total'] = $buyer_total;

        return $this;
    }

    /**
     * Gets buyer_items_total_before_discount
     *
     * @return float|null
     */
    public function getBuyerItemsTotalBeforeDiscount()
    {
        return $this->container['buyer_items_total_before_discount'];
    }

    /**
     * Sets buyer_items_total_before_discount
     *
     * @param float|null $buyer_items_total_before_discount Цена продажи. Стоимость всех товаров в заказе в валюте покупателя до применения скидок и без учета стоимости доставки.
     *
     * @return self
     */
    public function setBuyerItemsTotalBeforeDiscount($buyer_items_total_before_discount)
    {
        if (is_null($buyer_items_total_before_discount)) {
            throw new \InvalidArgumentException('non-nullable buyer_items_total_before_discount cannot be null');
        }
        $this->container['buyer_items_total_before_discount'] = $buyer_items_total_before_discount;

        return $this;
    }

    /**
     * Gets buyer_total_before_discount
     *
     * @return float|null
     * @deprecated
     */
    public function getBuyerTotalBeforeDiscount()
    {
        return $this->container['buyer_total_before_discount'];
    }

    /**
     * Sets buyer_total_before_discount
     *
     * @param float|null $buyer_total_before_discount {% note warning \"\" %}  Этот параметр устарел.  {% endnote %}  Стоимость всех товаров в заказе в валюте покупателя до применения скидок и с учетом стоимости доставки (`buyerItemsTotalBeforeDiscount` + стоимость доставки).
     *
     * @return self
     * @deprecated
     */
    public function setBuyerTotalBeforeDiscount($buyer_total_before_discount)
    {
        if (is_null($buyer_total_before_discount)) {
            throw new \InvalidArgumentException('non-nullable buyer_total_before_discount cannot be null');
        }
        $this->container['buyer_total_before_discount'] = $buyer_total_before_discount;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return \OpenAPI\Client\Model\OrderPaymentType|null
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param \OpenAPI\Client\Model\OrderPaymentType|null $payment_type payment_type
     *
     * @return self
     */
    public function setPaymentType($payment_type)
    {
        if (is_null($payment_type)) {
            throw new \InvalidArgumentException('non-nullable payment_type cannot be null');
        }
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \OpenAPI\Client\Model\OrderPaymentMethodType|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \OpenAPI\Client\Model\OrderPaymentMethodType|null $payment_method payment_method
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        if (is_null($payment_method)) {
            throw new \InvalidArgumentException('non-nullable payment_method cannot be null');
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets fake
     *
     * @return bool|null
     */
    public function getFake()
    {
        return $this->container['fake'];
    }

    /**
     * Sets fake
     *
     * @param bool|null $fake Тип заказа:  * `false` — настоящий заказ покупателя.  * `true` — [тестовый](../../pushapi/concepts/sandbox.md) заказ Маркета.
     *
     * @return self
     */
    public function setFake($fake)
    {
        if (is_null($fake)) {
            throw new \InvalidArgumentException('non-nullable fake cannot be null');
        }
        $this->container['fake'] = $fake;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\OrderItemDTO[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\OrderItemDTO[]|null $items Список товаров в заказе.
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets subsidies
     *
     * @return \OpenAPI\Client\Model\OrderSubsidyDTO[]|null
     */
    public function getSubsidies()
    {
        return $this->container['subsidies'];
    }

    /**
     * Sets subsidies
     *
     * @param \OpenAPI\Client\Model\OrderSubsidyDTO[]|null $subsidies Список субсидий по типам.
     *
     * @return self
     */
    public function setSubsidies($subsidies)
    {
        if (is_null($subsidies)) {
            throw new \InvalidArgumentException('non-nullable subsidies cannot be null');
        }
        $this->container['subsidies'] = $subsidies;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \OpenAPI\Client\Model\OrderDeliveryDTO|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \OpenAPI\Client\Model\OrderDeliveryDTO|null $delivery delivery
     *
     * @return self
     */
    public function setDelivery($delivery)
    {
        if (is_null($delivery)) {
            throw new \InvalidArgumentException('non-nullable delivery cannot be null');
        }
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \OpenAPI\Client\Model\OrderBuyerDTO|null
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \OpenAPI\Client\Model\OrderBuyerDTO|null $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        if (is_null($buyer)) {
            throw new \InvalidArgumentException('non-nullable buyer cannot be null');
        }
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Комментарий к заказу.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets tax_system
     *
     * @return \OpenAPI\Client\Model\OrderTaxSystemType|null
     */
    public function getTaxSystem()
    {
        return $this->container['tax_system'];
    }

    /**
     * Sets tax_system
     *
     * @param \OpenAPI\Client\Model\OrderTaxSystemType|null $tax_system tax_system
     *
     * @return self
     */
    public function setTaxSystem($tax_system)
    {
        if (is_null($tax_system)) {
            throw new \InvalidArgumentException('non-nullable tax_system cannot be null');
        }
        $this->container['tax_system'] = $tax_system;

        return $this;
    }

    /**
     * Gets cancel_requested
     *
     * @return bool|null
     */
    public function getCancelRequested()
    {
        return $this->container['cancel_requested'];
    }

    /**
     * Sets cancel_requested
     *
     * @param bool|null $cancel_requested **Только для модели DBS**  Запрошена ли отмена.
     *
     * @return self
     */
    public function setCancelRequested($cancel_requested)
    {
        if (is_null($cancel_requested)) {
            throw new \InvalidArgumentException('non-nullable cancel_requested cannot be null');
        }
        $this->container['cancel_requested'] = $cancel_requested;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return string|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param string|null $expiry_date expiry_date
     *
     * @return self
     */
    public function setExpiryDate($expiry_date)
    {
        if (is_null($expiry_date)) {
            throw new \InvalidArgumentException('non-nullable expiry_date cannot be null');
        }
        $this->container['expiry_date'] = $expiry_date;

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


