<?php declare(strict_types=1);
/**
 * Container.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping.
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping;

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Container implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const CONTAINER_TYPE_CARTON = 'carton';

    public const CONTAINER_TYPE_PALLET = 'pallet';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Container';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'container_type' => 'string',
        'container_identifier' => 'string',
        'tracking_number' => 'string',
        'manifest_id' => 'string',
        'manifest_date' => 'string',
        'ship_method' => 'string',
        'scac_code' => 'string',
        'carrier' => 'string',
        'container_sequence_number' => 'int',
        'dimensions' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\Dimensions',
        'weight' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\Weight',
        'packed_items' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\PackedItem[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'container_type' => null,
        'container_identifier' => null,
        'tracking_number' => null,
        'manifest_id' => null,
        'manifest_date' => null,
        'ship_method' => null,
        'scac_code' => null,
        'carrier' => null,
        'container_sequence_number' => null,
        'dimensions' => null,
        'weight' => null,
        'packed_items' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'container_type' => 'containerType',
        'container_identifier' => 'containerIdentifier',
        'tracking_number' => 'trackingNumber',
        'manifest_id' => 'manifestId',
        'manifest_date' => 'manifestDate',
        'ship_method' => 'shipMethod',
        'scac_code' => 'scacCode',
        'carrier' => 'carrier',
        'container_sequence_number' => 'containerSequenceNumber',
        'dimensions' => 'dimensions',
        'weight' => 'weight',
        'packed_items' => 'packedItems',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'container_type' => 'setContainerType',
        'container_identifier' => 'setContainerIdentifier',
        'tracking_number' => 'setTrackingNumber',
        'manifest_id' => 'setManifestId',
        'manifest_date' => 'setManifestDate',
        'ship_method' => 'setShipMethod',
        'scac_code' => 'setScacCode',
        'carrier' => 'setCarrier',
        'container_sequence_number' => 'setContainerSequenceNumber',
        'dimensions' => 'setDimensions',
        'weight' => 'setWeight',
        'packed_items' => 'setPackedItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'container_type' => 'getContainerType',
        'container_identifier' => 'getContainerIdentifier',
        'tracking_number' => 'getTrackingNumber',
        'manifest_id' => 'getManifestId',
        'manifest_date' => 'getManifestDate',
        'ship_method' => 'getShipMethod',
        'scac_code' => 'getScacCode',
        'carrier' => 'getCarrier',
        'container_sequence_number' => 'getContainerSequenceNumber',
        'dimensions' => 'getDimensions',
        'weight' => 'getWeight',
        'packed_items' => 'getPackedItems',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['container_type'] = $data['container_type'] ?? null;
        $this->container['container_identifier'] = $data['container_identifier'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['manifest_id'] = $data['manifest_id'] ?? null;
        $this->container['manifest_date'] = $data['manifest_date'] ?? null;
        $this->container['ship_method'] = $data['ship_method'] ?? null;
        $this->container['scac_code'] = $data['scac_code'] ?? null;
        $this->container['carrier'] = $data['carrier'] ?? null;
        $this->container['container_sequence_number'] = $data['container_sequence_number'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['packed_items'] = $data['packed_items'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getContainerTypeAllowableValues() : array
    {
        return [
            self::CONTAINER_TYPE_CARTON,
            self::CONTAINER_TYPE_PALLET,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['container_type'] === null) {
            $invalidProperties[] = "'container_type' can't be null";
        }
        $allowedValues = $this->getContainerTypeAllowableValues();

        if (null !== $this->container['container_type'] && !\in_array($this->container['container_type'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'container_type', must be one of '%s'",
                $this->container['container_type'],
                \implode("', '", $allowedValues)
            );
        }

        if ($this->container['container_identifier'] === null) {
            $invalidProperties[] = "'container_identifier' can't be null";
        }

        if ($this->container['packed_items'] === null) {
            $invalidProperties[] = "'packed_items' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets container_type.
     */
    public function getContainerType() : string
    {
        return $this->container['container_type'];
    }

    /**
     * Sets container_type.
     *
     * @param string $container_type the type of container
     */
    public function setContainerType(string $container_type) : self
    {
        $allowedValues = $this->getContainerTypeAllowableValues();

        if (!\in_array($container_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'container_type', must be one of '%s'",
                    $container_type,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['container_type'] = $container_type;

        return $this;
    }

    /**
     * Gets container_identifier.
     */
    public function getContainerIdentifier() : string
    {
        return $this->container['container_identifier'];
    }

    /**
     * Sets container_identifier.
     *
     * @param string $container_identifier the container identifier
     */
    public function setContainerIdentifier(string $container_identifier) : self
    {
        $this->container['container_identifier'] = $container_identifier;

        return $this;
    }

    /**
     * Gets tracking_number.
     */
    public function getTrackingNumber() : ?string
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number.
     *
     * @param null|string $tracking_number the tracking number
     */
    public function setTrackingNumber(?string $tracking_number) : self
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets manifest_id.
     */
    public function getManifestId() : ?string
    {
        return $this->container['manifest_id'];
    }

    /**
     * Sets manifest_id.
     *
     * @param null|string $manifest_id the manifest identifier
     */
    public function setManifestId(?string $manifest_id) : self
    {
        $this->container['manifest_id'] = $manifest_id;

        return $this;
    }

    /**
     * Gets manifest_date.
     */
    public function getManifestDate() : ?string
    {
        return $this->container['manifest_date'];
    }

    /**
     * Sets manifest_date.
     *
     * @param null|string $manifest_date the date of the manifest
     */
    public function setManifestDate(?string $manifest_date) : self
    {
        $this->container['manifest_date'] = $manifest_date;

        return $this;
    }

    /**
     * Gets ship_method.
     */
    public function getShipMethod() : ?string
    {
        return $this->container['ship_method'];
    }

    /**
     * Sets ship_method.
     *
     * @param null|string $ship_method the shipment method
     */
    public function setShipMethod(?string $ship_method) : self
    {
        $this->container['ship_method'] = $ship_method;

        return $this;
    }

    /**
     * Gets scac_code.
     */
    public function getScacCode() : ?string
    {
        return $this->container['scac_code'];
    }

    /**
     * Sets scac_code.
     *
     * @param null|string $scac_code SCAC code required for NA VOC vendors only
     */
    public function setScacCode(?string $scac_code) : self
    {
        $this->container['scac_code'] = $scac_code;

        return $this;
    }

    /**
     * Gets carrier.
     */
    public function getCarrier() : ?string
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier.
     *
     * @param null|string $carrier carrier required for EU VOC vendors only
     */
    public function setCarrier(?string $carrier) : self
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets container_sequence_number.
     */
    public function getContainerSequenceNumber() : ?int
    {
        return $this->container['container_sequence_number'];
    }

    /**
     * Sets container_sequence_number.
     *
     * @param null|int $container_sequence_number an integer that must be submitted for multi-box shipments only, where one item may come in separate packages
     */
    public function setContainerSequenceNumber(?int $container_sequence_number) : self
    {
        $this->container['container_sequence_number'] = $container_sequence_number;

        return $this;
    }

    /**
     * Gets dimensions.
     */
    public function getDimensions() : ?Dimensions
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\Dimensions $dimensions dimensions
     */
    public function setDimensions(?Dimensions $dimensions) : self
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets weight.
     */
    public function getWeight() : ?Weight
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\Weight $weight weight
     */
    public function setWeight(?Weight $weight) : self
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets packed_items.
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\PackedItem[]
     */
    public function getPackedItems() : array
    {
        return $this->container['packed_items'];
    }

    /**
     * Sets packed_items.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\PackedItem[] $packed_items a list of packed items
     */
    public function setPackedItems(array $packed_items) : self
    {
        $this->container['packed_items'] = $packed_items;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}