<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Tomb1n0\PhpDockerComposeTypes;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Exception\StringException;
use Swaggest\JsonSchema\Helper;
use Swaggest\JsonSchema\InvalidValue;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class DevicesItems extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var string[]|array */
    public $capabilities;

    /** @var string|int */
    public $count;

    /** @var string[]|array */
    public $deviceIds;

    /** @var string */
    public $driver;

    /** @var string[]|float[]|bool[]|null[]|string[]|array */
    public $options;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->capabilities = Schema::arr();
        $properties->capabilities->items = Schema::string();
        $properties->capabilities->uniqueItems = true;
        $properties->capabilities->setFromRef('#/definitions/list_of_strings');
        $properties->count = (new Schema())->setType([Schema::STRING, Schema::INTEGER]);
        $properties->deviceIds = Schema::arr();
        $properties->deviceIds->items = Schema::string();
        $properties->deviceIds->uniqueItems = true;
        $properties->deviceIds->setFromRef('#/definitions/list_of_strings');
        $ownerSchema->addPropertyMapping('device_ids', self::names()->deviceIds);
        $properties->driver = Schema::string();
        $properties->options = new Schema();
        $propertiesOptionsOneOf0 = Schema::object();
        $propertiesOptionsOneOf0->additionalProperties = false;
        $property0017fb = (new Schema())->setType([Schema::STRING, Schema::NUMBER, Schema::BOOLEAN, Schema::NULL]);
        $propertiesOptionsOneOf0->setPatternProperty('.+', $property0017fb);
        $properties->options->oneOf[0] = $propertiesOptionsOneOf0;
        $propertiesOptionsOneOf1 = Schema::arr();
        $propertiesOptionsOneOf1->items = Schema::string();
        $propertiesOptionsOneOf1->uniqueItems = true;
        $properties->options->oneOf[1] = $propertiesOptionsOneOf1;
        $properties->options->setFromRef('#/definitions/list_or_dict');
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
    }

    /**
     * @return array
     * @codeCoverageIgnoreStart
     */
    public function getXValues()
    {
        $result = array();
        if (!$names = $this->getPatternPropertyNames(self::X_PROPERTY_PATTERN)) {
            return $result;
        }
        foreach ($names as $name) {
            $result[$name] = $this->$name;
        }
        return $result;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $name
     * @param mixed $value
     * @return self
     * @throws InvalidValue
     * @codeCoverageIgnoreStart
     */
    public function setXValue($name, $value)
    {
        if (!preg_match(Helper::toPregPattern(self::X_PROPERTY_PATTERN), $name)) {
            throw new StringException('Pattern mismatch', StringException::PATTERN_MISMATCH);
        }
        $this->addPatternPropertyName(self::X_PROPERTY_PATTERN, $name);
        $this->{$name} = $value;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}