<?php
/**
 * SessionSettings
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Apideck
 *
 * The Apideck OpenAPI Spec: SDK Optimized
 *
 * The version of the OpenAPI document: 10.7.6
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Apideck\Client\Model;

use \ArrayAccess;
use \Apideck\Client\ObjectSerializer;

/**
 * SessionSettings Class Doc Comment
 *
 * @category Class
 * @description Settings to change the way the Vault is displayed.
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SessionSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Session_settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'unified_apis' => '\Apideck\Client\Model\UnifiedApiId[]',
        'hide_resource_settings' => 'bool',
        'sandbox_mode' => 'bool',
        'isolation_mode' => 'bool',
        'session_length' => 'string',
        'show_logs' => 'bool',
        'show_suggestions' => 'bool',
        'show_sidebar' => 'bool',
        'auto_redirect' => 'bool',
        'hide_guides' => 'bool',
        'allow_actions' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'unified_apis' => null,
        'hide_resource_settings' => null,
        'sandbox_mode' => null,
        'isolation_mode' => null,
        'session_length' => null,
        'show_logs' => null,
        'show_suggestions' => null,
        'show_sidebar' => null,
        'auto_redirect' => null,
        'hide_guides' => null,
        'allow_actions' => null
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
        'unified_apis' => 'unified_apis',
        'hide_resource_settings' => 'hide_resource_settings',
        'sandbox_mode' => 'sandbox_mode',
        'isolation_mode' => 'isolation_mode',
        'session_length' => 'session_length',
        'show_logs' => 'show_logs',
        'show_suggestions' => 'show_suggestions',
        'show_sidebar' => 'show_sidebar',
        'auto_redirect' => 'auto_redirect',
        'hide_guides' => 'hide_guides',
        'allow_actions' => 'allow_actions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unified_apis' => 'setUnifiedApis',
        'hide_resource_settings' => 'setHideResourceSettings',
        'sandbox_mode' => 'setSandboxMode',
        'isolation_mode' => 'setIsolationMode',
        'session_length' => 'setSessionLength',
        'show_logs' => 'setShowLogs',
        'show_suggestions' => 'setShowSuggestions',
        'show_sidebar' => 'setShowSidebar',
        'auto_redirect' => 'setAutoRedirect',
        'hide_guides' => 'setHideGuides',
        'allow_actions' => 'setAllowActions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unified_apis' => 'getUnifiedApis',
        'hide_resource_settings' => 'getHideResourceSettings',
        'sandbox_mode' => 'getSandboxMode',
        'isolation_mode' => 'getIsolationMode',
        'session_length' => 'getSessionLength',
        'show_logs' => 'getShowLogs',
        'show_suggestions' => 'getShowSuggestions',
        'show_sidebar' => 'getShowSidebar',
        'auto_redirect' => 'getAutoRedirect',
        'hide_guides' => 'getHideGuides',
        'allow_actions' => 'getAllowActions'
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

    const ALLOW_ACTIONS_DELETE = 'delete';
    const ALLOW_ACTIONS_DISCONNECT = 'disconnect';
    const ALLOW_ACTIONS_REAUTHORIZE = 'reauthorize';
    const ALLOW_ACTIONS_DISABLE = 'disable';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAllowActionsAllowableValues()
    {
        return [
            self::ALLOW_ACTIONS_DELETE,
            self::ALLOW_ACTIONS_DISCONNECT,
            self::ALLOW_ACTIONS_REAUTHORIZE,
            self::ALLOW_ACTIONS_DISABLE,
        ];
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
        $this->container['unified_apis'] = $data['unified_apis'] ?? null;
        $this->container['hide_resource_settings'] = $data['hide_resource_settings'] ?? false;
        $this->container['sandbox_mode'] = $data['sandbox_mode'] ?? false;
        $this->container['isolation_mode'] = $data['isolation_mode'] ?? false;
        $this->container['session_length'] = $data['session_length'] ?? '1h';
        $this->container['show_logs'] = $data['show_logs'] ?? true;
        $this->container['show_suggestions'] = $data['show_suggestions'] ?? false;
        $this->container['show_sidebar'] = $data['show_sidebar'] ?? true;
        $this->container['auto_redirect'] = $data['auto_redirect'] ?? false;
        $this->container['hide_guides'] = $data['hide_guides'] ?? false;
        $this->container['allow_actions'] = $data['allow_actions'] ?? null;
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
     * Gets unified_apis
     *
     * @return \Apideck\Client\Model\UnifiedApiId[]|null
     */
    public function getUnifiedApis()
    {
        return $this->container['unified_apis'];
    }

    /**
     * Sets unified_apis
     *
     * @param \Apideck\Client\Model\UnifiedApiId[]|null $unified_apis Provide the IDs of the Unified APIs you want to be visible. Leaving it empty or omitting this field will show all Unified APIs.
     *
     * @return self
     */
    public function setUnifiedApis($unified_apis)
    {
        $this->container['unified_apis'] = $unified_apis;

        return $this;
    }

    /**
     * Gets hide_resource_settings
     *
     * @return bool|null
     */
    public function getHideResourceSettings()
    {
        return $this->container['hide_resource_settings'];
    }

    /**
     * Sets hide_resource_settings
     *
     * @param bool|null $hide_resource_settings A boolean that controls the display of the configurable resources for an integration. When set to true, the resource configuration options will be hidden and not shown to the user. When set to false, the resource configuration options will be displayed to the user.
     *
     * @return self
     */
    public function setHideResourceSettings($hide_resource_settings)
    {
        $this->container['hide_resource_settings'] = $hide_resource_settings;

        return $this;
    }

    /**
     * Gets sandbox_mode
     *
     * @return bool|null
     */
    public function getSandboxMode()
    {
        return $this->container['sandbox_mode'];
    }

    /**
     * Sets sandbox_mode
     *
     * @param bool|null $sandbox_mode Configure [Vault](/apis/vault/reference#section/Get-Started) to show a banner informing the logged in user is in a test environment.
     *
     * @return self
     */
    public function setSandboxMode($sandbox_mode)
    {
        $this->container['sandbox_mode'] = $sandbox_mode;

        return $this;
    }

    /**
     * Gets isolation_mode
     *
     * @return bool|null
     */
    public function getIsolationMode()
    {
        return $this->container['isolation_mode'];
    }

    /**
     * Sets isolation_mode
     *
     * @param bool|null $isolation_mode Configure [Vault](/apis/vault/reference#section/Get-Started) to run in isolation mode, meaning it only shows the connection settings and hides the navigation items.
     *
     * @return self
     */
    public function setIsolationMode($isolation_mode)
    {
        $this->container['isolation_mode'] = $isolation_mode;

        return $this;
    }

    /**
     * Gets session_length
     *
     * @return string|null
     */
    public function getSessionLength()
    {
        return $this->container['session_length'];
    }

    /**
     * Sets session_length
     *
     * @param string|null $session_length The duration of time the session is valid for (maximum 1 week).
     *
     * @return self
     */
    public function setSessionLength($session_length)
    {
        $this->container['session_length'] = $session_length;

        return $this;
    }

    /**
     * Gets show_logs
     *
     * @return bool|null
     */
    public function getShowLogs()
    {
        return $this->container['show_logs'];
    }

    /**
     * Sets show_logs
     *
     * @param bool|null $show_logs Configure [Vault](/apis/vault/reference#section/Get-Started) to show the logs page. Defaults to `true`.
     *
     * @return self
     */
    public function setShowLogs($show_logs)
    {
        $this->container['show_logs'] = $show_logs;

        return $this;
    }

    /**
     * Gets show_suggestions
     *
     * @return bool|null
     */
    public function getShowSuggestions()
    {
        return $this->container['show_suggestions'];
    }

    /**
     * Sets show_suggestions
     *
     * @param bool|null $show_suggestions Configure [Vault](/apis/vault/reference#section/Get-Started) to show the suggestions page. Defaults to `false`.
     *
     * @return self
     */
    public function setShowSuggestions($show_suggestions)
    {
        $this->container['show_suggestions'] = $show_suggestions;

        return $this;
    }

    /**
     * Gets show_sidebar
     *
     * @return bool|null
     */
    public function getShowSidebar()
    {
        return $this->container['show_sidebar'];
    }

    /**
     * Sets show_sidebar
     *
     * @param bool|null $show_sidebar Configure [Vault](/apis/vault/reference#section/Get-Started) to show the sidebar. Defaults to `true`.
     *
     * @return self
     */
    public function setShowSidebar($show_sidebar)
    {
        $this->container['show_sidebar'] = $show_sidebar;

        return $this;
    }

    /**
     * Gets auto_redirect
     *
     * @return bool|null
     */
    public function getAutoRedirect()
    {
        return $this->container['auto_redirect'];
    }

    /**
     * Sets auto_redirect
     *
     * @param bool|null $auto_redirect Automatically redirect to redirect uri after the connection has been configured as callable. Defaults to `false`.
     *
     * @return self
     */
    public function setAutoRedirect($auto_redirect)
    {
        $this->container['auto_redirect'] = $auto_redirect;

        return $this;
    }

    /**
     * Gets hide_guides
     *
     * @return bool|null
     */
    public function getHideGuides()
    {
        return $this->container['hide_guides'];
    }

    /**
     * Sets hide_guides
     *
     * @param bool|null $hide_guides Hide Apideck connection guides in [Vault](/apis/vault/reference#section/Get-Started). Defaults to `false`.
     *
     * @return self
     */
    public function setHideGuides($hide_guides)
    {
        $this->container['hide_guides'] = $hide_guides;

        return $this;
    }

    /**
     * Gets allow_actions
     *
     * @return string[]|null
     */
    public function getAllowActions()
    {
        return $this->container['allow_actions'];
    }

    /**
     * Sets allow_actions
     *
     * @param string[]|null $allow_actions Hide actions from your users in [Vault](/apis/vault/reference#section/Get-Started). Actions in `allow_actions` will be shown on a connection in Vault. Available actions are: `delete`, `disconnect`, `reauthorize` and `disable`. Empty array will hide all actions. By default all actions are visible.
     *
     * @return self
     */
    public function setAllowActions($allow_actions)
    {
        $allowedValues = $this->getAllowActionsAllowableValues();
        if (!is_null($allow_actions) && array_diff($allow_actions, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'allow_actions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['allow_actions'] = $allow_actions;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


