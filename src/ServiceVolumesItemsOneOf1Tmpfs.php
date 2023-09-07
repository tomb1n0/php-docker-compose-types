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


class ServiceVolumesItemsOneOf1Tmpfs extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var int|string */
    public $size;

    /** @var float */
    public $mode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->size = new Schema();
        $propertiesSizeOneOf0 = Schema::integer();
        $propertiesSizeOneOf0->minimum = 0;
        $properties->size->oneOf[0] = $propertiesSizeOneOf0;
        $properties->size->oneOf[1] = Schema::string();
        $properties->mode = Schema::number();
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
    }

    /**
     * @return int|string
     * @codeCoverageIgnoreStart
     */
    public function getSize()
    {
        return $this->size;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int|string $size
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return float
     * @codeCoverageIgnoreStart
     */
    public function getMode()
    {
        return $this->mode;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float $mode
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

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