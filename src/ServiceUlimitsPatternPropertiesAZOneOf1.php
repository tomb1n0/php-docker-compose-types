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


class ServiceUlimitsPatternPropertiesAZOneOf1 extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var int */
    public $hard;

    /** @var int */
    public $soft;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->hard = Schema::integer();
        $properties->soft = Schema::integer();
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
        $ownerSchema->required = array(
            self::names()->soft,
            self::names()->hard,
        );
    }

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getHard()
    {
        return $this->hard;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $hard
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHard($hard)
    {
        $this->hard = $hard;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getSoft()
    {
        return $this->soft;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $soft
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSoft($soft)
    {
        $this->soft = $soft;
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