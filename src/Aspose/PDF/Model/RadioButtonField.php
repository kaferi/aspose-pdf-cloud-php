<?php
/**
 *
 *   Copyright (c) 2019 Aspose.PDF Cloud
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */


/**
 * RadioButtonField Class 
 *
 * @category Class
 * @description Provides RadioButtonField.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class RadioButtonField extends ChoiceField 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RadioButtonField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'options' => '\Aspose\PDF\Model\Option[]',
        'radio_button_options_field' => '\Aspose\PDF\Model\RadioButtonOptionField[]',
        'style' => '\Aspose\PDF\Model\BoxStyle',
        'selected' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'options' => null,
        'radio_button_options_field' => null,
        'style' => null,
        'selected' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'options' => 'Options',
        'radio_button_options_field' => 'RadioButtonOptionsField',
        'style' => 'Style',
        'selected' => 'Selected'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'options' => 'setOptions',
        'radio_button_options_field' => 'setRadioButtonOptionsField',
        'style' => 'setStyle',
        'selected' => 'setSelected'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'options' => 'getOptions',
        'radio_button_options_field' => 'getRadioButtonOptionsField',
        'style' => 'getStyle',
        'selected' => 'getSelected'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['radio_button_options_field'] = isset($data['radio_button_options_field']) ? $data['radio_button_options_field'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['selected'] = isset($data['selected']) ? $data['selected'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['selected'] === null) {
            $invalidProperties[] = "'selected' can't be null";
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
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['selected'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets options
     *
     * @return \Aspose\PDF\Model\Option[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Aspose\PDF\Model\Option[] $options Gets collection of options of the radio button.
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets radio_button_options_field
     *
     * @return \Aspose\PDF\Model\RadioButtonOptionField[]
     */
    public function getRadioButtonOptionsField()
    {
        return $this->container['radio_button_options_field'];
    }

    /**
     * Sets radio_button_options_field
     *
     * @param \Aspose\PDF\Model\RadioButtonOptionField[] $radio_button_options_field Gets collection of radio button options field.
     *
     * @return $this
     */
    public function setRadioButtonOptionsField($radio_button_options_field)
    {
        $this->container['radio_button_options_field'] = $radio_button_options_field;

        return $this;
    }

    /**
     * Gets style
     *
     * @return \Aspose\PDF\Model\BoxStyle
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param \Aspose\PDF\Model\BoxStyle $style Style of field box.
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets selected
     *
     * @return int
     */
    public function getSelected()
    {
        return $this->container['selected'];
    }

    /**
     * Sets selected
     *
     * @param int $selected Gets or sets index of selected item. Numbering of items is started from 1.
     *
     * @return $this
     */
    public function setSelected($selected)
    {
        $this->container['selected'] = $selected;

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

