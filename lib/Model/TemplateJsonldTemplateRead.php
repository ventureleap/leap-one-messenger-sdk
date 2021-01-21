<?php
/**
 * TemplateJsonldTemplateRead
 *
 * PHP version 5
 *
 * @category Class
 * @package  VentureLeap\MessengerService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Messenger API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace VentureLeap\MessengerService\Model;

use \ArrayAccess;
use \VentureLeap\MessengerService\ObjectSerializer;

/**
 * TemplateJsonldTemplateRead Class Doc Comment
 *
 * @category Class
 * @package  VentureLeap\MessengerService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TemplateJsonldTemplateRead implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Template:jsonld-TemplateRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'uuid' => 'string',
'email_template' => 'string',
'sms_template' => 'string',
'language' => 'string',
'template_type' => 'string',
'subject' => 'string',
'application_id' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'active' => 'bool',
'deleted' => 'bool',
'custom_data' => 'object[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
'id' => null,
'type' => null,
'uuid' => 'uuid',
'email_template' => null,
'sms_template' => null,
'language' => null,
'template_type' => null,
'subject' => null,
'application_id' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'active' => null,
'deleted' => null,
'custom_data' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'context' => '@context',
'id' => '@id',
'type' => '@type',
'uuid' => 'uuid',
'email_template' => 'emailTemplate',
'sms_template' => 'smsTemplate',
'language' => 'language',
'template_type' => 'templateType',
'subject' => 'subject',
'application_id' => 'applicationId',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'active' => 'active',
'deleted' => 'deleted',
'custom_data' => 'customData'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
'id' => 'setId',
'type' => 'setType',
'uuid' => 'setUuid',
'email_template' => 'setEmailTemplate',
'sms_template' => 'setSmsTemplate',
'language' => 'setLanguage',
'template_type' => 'setTemplateType',
'subject' => 'setSubject',
'application_id' => 'setApplicationId',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'active' => 'setActive',
'deleted' => 'setDeleted',
'custom_data' => 'setCustomData'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
'id' => 'getId',
'type' => 'getType',
'uuid' => 'getUuid',
'email_template' => 'getEmailTemplate',
'sms_template' => 'getSmsTemplate',
'language' => 'getLanguage',
'template_type' => 'getTemplateType',
'subject' => 'getSubject',
'application_id' => 'getApplicationId',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'active' => 'getActive',
'deleted' => 'getDeleted',
'custom_data' => 'getCustomData'    ];

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
        return self::$swaggerModelName;
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
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['email_template'] = isset($data['email_template']) ? $data['email_template'] : null;
        $this->container['sms_template'] = isset($data['sms_template']) ? $data['sms_template'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['template_type'] = isset($data['template_type']) ? $data['template_type'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['custom_data'] = isset($data['custom_data']) ? $data['custom_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email_template'] === null) {
            $invalidProperties[] = "'email_template' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['template_type'] === null) {
            $invalidProperties[] = "'template_type' can't be null";
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
     * Gets context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param string $context context
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets email_template
     *
     * @return string
     */
    public function getEmailTemplate()
    {
        return $this->container['email_template'];
    }

    /**
     * Sets email_template
     *
     * @param string $email_template the actual html.twig template for emails
     *
     * @return $this
     */
    public function setEmailTemplate($email_template)
    {
        $this->container['email_template'] = $email_template;

        return $this;
    }

    /**
     * Gets sms_template
     *
     * @return string
     */
    public function getSmsTemplate()
    {
        return $this->container['sms_template'];
    }

    /**
     * Sets sms_template
     *
     * @param string $sms_template twig template for sms and other messenger like services
     *
     * @return $this
     */
    public function setSmsTemplate($sms_template)
    {
        $this->container['sms_template'] = $sms_template;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language e.g. \"de\", \"en\"
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets template_type
     *
     * @return string
     */
    public function getTemplateType()
    {
        return $this->container['template_type'];
    }

    /**
     * Sets template_type
     *
     * @param string $template_type template identification e.g. \"user.invited\", \"user.password_reset\"
     *
     * @return $this
     */
    public function setTemplateType($template_type)
    {
        $this->container['template_type'] = $template_type;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject for emails
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets application_id
     *
     * @return string
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param string $application_id application_id
     *
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets custom_data
     *
     * @return object[]
     */
    public function getCustomData()
    {
        return $this->container['custom_data'];
    }

    /**
     * Sets custom_data
     *
     * @param object[] $custom_data custom_data
     *
     * @return $this
     */
    public function setCustomData($custom_data)
    {
        $this->container['custom_data'] = $custom_data;

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
