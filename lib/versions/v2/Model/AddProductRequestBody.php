<?php
/**
 * AddProductRequestBody
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Pipedrive\versions\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Pipedrive API v2
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Pipedrive\versions\v2\Model;

use ArrayAccess;
use JsonException;
use JsonSerializable;
use Pipedrive\versions\v2\Traits\RawData;
use Pipedrive\versions\v2\ObjectSerializer;

/**
 * AddProductRequestBody Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive\versions\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AddProductRequestBody implements ModelInterface, ArrayAccess, JsonSerializable
{
    use RawData;

    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AddProductRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'code' => 'string',
        'description' => 'string',
        'unit' => 'string',
        'tax' => 'float',
        'category' => 'float',
        'owner_id' => 'int',
        'is_linkable' => 'bool',
        'visible_to' => '\Pipedrive\versions\v2\Model\VisibleTo',
        'prices' => 'object[]',
        'billing_frequency' => '\Pipedrive\versions\v2\Model\BillingFrequency1',
        'billing_frequency_cycles' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'code' => null,
        'description' => null,
        'unit' => null,
        'tax' => null,
        'category' => null,
        'owner_id' => null,
        'is_linkable' => null,
        'visible_to' => null,
        'prices' => null,
        'billing_frequency' => null,
        'billing_frequency_cycles' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @phpstan-return array<string, string|null>
     * @psalm-return array<string, string|null>
     * @return array
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'code' => 'code',
        'description' => 'description',
        'unit' => 'unit',
        'tax' => 'tax',
        'category' => 'category',
        'owner_id' => 'owner_id',
        'is_linkable' => 'is_linkable',
        'visible_to' => 'visible_to',
        'prices' => 'prices',
        'billing_frequency' => 'billing_frequency',
        'billing_frequency_cycles' => 'billing_frequency_cycles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'code' => 'setCode',
        'description' => 'setDescription',
        'unit' => 'setUnit',
        'tax' => 'setTax',
        'category' => 'setCategory',
        'owner_id' => 'setOwnerId',
        'is_linkable' => 'setIsLinkable',
        'visible_to' => 'setVisibleTo',
        'prices' => 'setPrices',
        'billing_frequency' => 'setBillingFrequency',
        'billing_frequency_cycles' => 'setBillingFrequencyCycles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'code' => 'getCode',
        'description' => 'getDescription',
        'unit' => 'getUnit',
        'tax' => 'getTax',
        'category' => 'getCategory',
        'owner_id' => 'getOwnerId',
        'is_linkable' => 'getIsLinkable',
        'visible_to' => 'getVisibleTo',
        'prices' => 'getPrices',
        'billing_frequency' => 'getBillingFrequency',
        'billing_frequency_cycles' => 'getBillingFrequencyCycles'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     * @phpstan-var array<int|string, mixed>
     * @psalm-var array<int|string, mixed>
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @phpstan-param array<string, mixed>|null $data
     * @psalm-param array<string, mixed>|null $data
     * @param array|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = $data['name'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
        $this->container['tax'] = $data['tax'] ?? 0;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['is_linkable'] = $data['is_linkable'] ?? true;
        $this->container['visible_to'] = $data['visible_to'] ?? null;
        $this->container['prices'] = $data['prices'] ?? null;
        $this->container['billing_frequency'] = $data['billing_frequency'] ?? null;
        $this->container['billing_frequency_cycles'] = $data['billing_frequency_cycles'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     * @phpstan-return array<int, string>
     * @psalm-return array<int, string>
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the product. Cannot be an empty string
     *
     * @return self
     */
    public function setName($name): self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code The product code
     *
     * @return self
     */
    public function setCode($code): self
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The product description
     *
     * @return self
     */
    public function setDescription($description): self
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit The unit in which this product is sold
     *
     * @return self
     */
    public function setUnit($unit): self
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return float|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param float|null $tax The tax percentage
     *
     * @return self
     */
    public function setTax($tax): self
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets category
     *
     * @return float|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param float|null $category The category of the product
     *
     * @return self
     */
    public function setCategory($category): self
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return int|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param int|null $owner_id The ID of the user who will be marked as the owner of this product. When omitted, the authorized user ID will be used
     *
     * @return self
     */
    public function setOwnerId($owner_id): self
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets is_linkable
     *
     * @return bool|null
     */
    public function getIsLinkable()
    {
        return $this->container['is_linkable'];
    }

    /**
     * Sets is_linkable
     *
     * @param bool|null $is_linkable Whether this product can be added to a deal or not
     *
     * @return self
     */
    public function setIsLinkable($is_linkable): self
    {
        $this->container['is_linkable'] = $is_linkable;

        return $this;
    }

    /**
     * Gets visible_to
     *
     * @return VisibleTo|null
     */
    public function getVisibleTo()
    {
        return $this->container['visible_to'];
    }

    /**
     * Sets visible_to
     *
     * @param VisibleTo|null $visible_to The visibility of the product. If omitted, the visibility will be set to the default visibility setting of this item type for the authorized user. Read more about visibility groups <a href=\"https://support.pipedrive.com/en/article/visibility-groups\" target=\"_blank\" rel=\"noopener noreferrer\">here</a>.<h4>Essential / Advanced plan</h4><table><tr><th style=\"width: 40px\">Value</th><th>Description</th></tr><tr><td>`1`</td><td>Owner &amp; followers</td><tr><td>`3`</td><td>Entire company</td></tr></table><h4>Professional / Enterprise plan</h4><table><tr><th style=\"width: 40px\">Value</th><th>Description</th></tr><tr><td>`1`</td><td>Owner only</td><tr><td>`3`</td><td>Owner's visibility group</td></tr><tr><td>`5`</td><td>Owner's visibility group and sub-groups</td></tr><tr><td>`7`</td><td>Entire company</td></tr></table>
     *
     * @return self
     */
    public function setVisibleTo($visible_to): self
    {
        $this->container['visible_to'] = $visible_to;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return object[]|null
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param object[]|null $prices An array of objects, each containing: `currency` (string), `price` (number), `cost` (number, optional), `direct_cost` (number, optional). Note that there can only be one price per product per currency. When `prices` is omitted altogether, a default price of 0 and the user's default currency will be assigned.
     *
     * @return self
     */
    public function setPrices($prices): self
    {
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets billing_frequency
     *
     * @return \Pipedrive\versions\v2\Model\BillingFrequency1|null
     */
    public function getBillingFrequency()
    {
        return $this->container['billing_frequency'];
    }

    /**
     * Sets billing_frequency
     *
     * @param \Pipedrive\versions\v2\Model\BillingFrequency1|null $billing_frequency billing_frequency
     *
     * @return self
     */
    public function setBillingFrequency($billing_frequency): self
    {
        $this->container['billing_frequency'] = $billing_frequency;

        return $this;
    }

    /**
     * Gets billing_frequency_cycles
     *
     * @return int|null
     */
    public function getBillingFrequencyCycles()
    {
        return $this->container['billing_frequency_cycles'];
    }

    /**
     * Sets billing_frequency_cycles
     *
     * @param int|null $billing_frequency_cycles Only available in Advanced and above plans  The number of times the billing frequency repeats for a product in a deal  When `billing_frequency` is set to `one-time`, this field must be `null`  When `billing_frequency` is set to `weekly`, this field cannot be `null`  For all the other values of `billing_frequency`, `null` represents a product billed indefinitely  Must be a positive integer less or equal to 208
     *
     * @return self
     */
    public function setBillingFrequencyCycles($billing_frequency_cycles): self
    {
        $this->container['billing_frequency_cycles'] = $billing_frequency_cycles;

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
     * @return mixed
     */
    public function offsetGet($offset): mixed
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
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @throws JsonException
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @throws JsonException
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}


