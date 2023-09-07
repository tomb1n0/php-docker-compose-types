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


class ServiceVolumesItemsOneOf1 extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var string */
    public $type;

    /** @var string */
    public $source;

    /** @var string */
    public $target;

    /** @var bool */
    public $readOnly;

    /** @var string */
    public $consistency;

    /** @var ServiceVolumesItemsOneOf1Bind */
    public $bind;

    /** @var ServiceVolumesItemsOneOf1Volume */
    public $volume;

    /** @var ServiceVolumesItemsOneOf1Tmpfs */
    public $tmpfs;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->type = Schema::string();
        $properties->source = Schema::string();
        $properties->target = Schema::string();
        $properties->readOnly = Schema::boolean();
        $ownerSchema->addPropertyMapping('read_only', self::names()->readOnly);
        $properties->consistency = Schema::string();
        $properties->bind = ServiceVolumesItemsOneOf1Bind::schema();
        $properties->volume = ServiceVolumesItemsOneOf1Volume::schema();
        $properties->tmpfs = ServiceVolumesItemsOneOf1Tmpfs::schema();
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
        $ownerSchema->required = array(
            self::names()->type,
        );
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