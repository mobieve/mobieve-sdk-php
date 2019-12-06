<?php
/**
 * ArrayOfObjects
 *
 * PHP version 5
 *
 * @category Class
 * @package  Mobieve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Mobieve Notification
 *
 * Notification API for Mobieve Services
 *
 * OpenAPI spec version: 2019-12-05T21:13:11Z
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Mobieve\Model;

use \ArrayAccess;
use \Mobieve\ObjectSerializer;

/**
 * ArrayOfObjects Class Doc Comment
 *
 * @category Class
 * @package  Mobieve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ArrayOfObjects implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ArrayOfObjects';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'data' => 'object',
        'current_page' => 'int',
        'first_page_url' => 'string',
        'from' => 'int',
        'last_page' => 'int',
        'last_page_url' => 'string',
        'path' => 'string',
        'per_page' => 'int',
        'to' => 'int',
        'total' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'data' => null,
        'current_page' => null,
        'first_page_url' => null,
        'from' => null,
        'last_page' => null,
        'last_page_url' => null,
        'path' => null,
        'per_page' => null,
        'to' => null,
        'total' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'data' => 'data',
        'current_page' => 'current_page',
        'first_page_url' => 'first_page_url',
        'from' => 'from',
        'last_page' => 'last_page',
        'last_page_url' => 'last_page_url',
        'path' => 'path',
        'per_page' => 'per_page',
        'to' => 'to',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data' => 'setData',
        'current_page' => 'setCurrentPage',
        'first_page_url' => 'setFirstPageUrl',
        'from' => 'setFrom',
        'last_page' => 'setLastPage',
        'last_page_url' => 'setLastPageUrl',
        'path' => 'setPath',
        'per_page' => 'setPerPage',
        'to' => 'setTo',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data' => 'getData',
        'current_page' => 'getCurrentPage',
        'first_page_url' => 'getFirstPageUrl',
        'from' => 'getFrom',
        'last_page' => 'getLastPage',
        'last_page_url' => 'getLastPageUrl',
        'path' => 'getPath',
        'per_page' => 'getPerPage',
        'to' => 'getTo',
        'total' => 'getTotal'
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['current_page'] = isset($data['current_page']) ? $data['current_page'] : null;
        $this->container['first_page_url'] = isset($data['first_page_url']) ? $data['first_page_url'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['last_page'] = isset($data['last_page']) ? $data['last_page'] : null;
        $this->container['last_page_url'] = isset($data['last_page_url']) ? $data['last_page_url'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['per_page'] = isset($data['per_page']) ? $data['per_page'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
        }
        if ($this->container['current_page'] === null) {
            $invalidProperties[] = "'current_page' can't be null";
        }
        if ($this->container['first_page_url'] === null) {
            $invalidProperties[] = "'first_page_url' can't be null";
        }
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['last_page'] === null) {
            $invalidProperties[] = "'last_page' can't be null";
        }
        if ($this->container['last_page_url'] === null) {
            $invalidProperties[] = "'last_page_url' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['per_page'] === null) {
            $invalidProperties[] = "'per_page' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
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
     * Gets data
     *
     * @return object
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param object $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets current_page
     *
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * Sets current_page
     *
     * @param int $current_page current_page
     *
     * @return $this
     */
    public function setCurrentPage($current_page)
    {
        $this->container['current_page'] = $current_page;

        return $this;
    }

    /**
     * Gets first_page_url
     *
     * @return string
     */
    public function getFirstPageUrl()
    {
        return $this->container['first_page_url'];
    }

    /**
     * Sets first_page_url
     *
     * @param string $first_page_url first_page_url
     *
     * @return $this
     */
    public function setFirstPageUrl($first_page_url)
    {
        $this->container['first_page_url'] = $first_page_url;

        return $this;
    }

    /**
     * Gets from
     *
     * @return int
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param int $from from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets last_page
     *
     * @return int
     */
    public function getLastPage()
    {
        return $this->container['last_page'];
    }

    /**
     * Sets last_page
     *
     * @param int $last_page last_page
     *
     * @return $this
     */
    public function setLastPage($last_page)
    {
        $this->container['last_page'] = $last_page;

        return $this;
    }

    /**
     * Gets last_page_url
     *
     * @return string
     */
    public function getLastPageUrl()
    {
        return $this->container['last_page_url'];
    }

    /**
     * Sets last_page_url
     *
     * @param string $last_page_url last_page_url
     *
     * @return $this
     */
    public function setLastPageUrl($last_page_url)
    {
        $this->container['last_page_url'] = $last_page_url;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets per_page
     *
     * @return int
     */
    public function getPerPage()
    {
        return $this->container['per_page'];
    }

    /**
     * Sets per_page
     *
     * @param int $per_page per_page
     *
     * @return $this
     */
    public function setPerPage($per_page)
    {
        $this->container['per_page'] = $per_page;

        return $this;
    }

    /**
     * Gets to
     *
     * @return int
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param int $to to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


