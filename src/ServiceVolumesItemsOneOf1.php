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
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getType()
    {
        return $this->type;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $type
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getSource()
    {
        return $this->source;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $source
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getTarget()
    {
        return $this->target;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $target
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return bool
     * @codeCoverageIgnoreStart
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $readOnly
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setReadOnly($readOnly)
    {
        $this->readOnly = $readOnly;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getConsistency()
    {
        return $this->consistency;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $consistency
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setConsistency($consistency)
    {
        $this->consistency = $consistency;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return ServiceVolumesItemsOneOf1Bind
     * @codeCoverageIgnoreStart
     */
    public function getBind()
    {
        return $this->bind;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ServiceVolumesItemsOneOf1Bind $bind
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setBind(ServiceVolumesItemsOneOf1Bind $bind)
    {
        $this->bind = $bind;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return ServiceVolumesItemsOneOf1Volume
     * @codeCoverageIgnoreStart
     */
    public function getVolume()
    {
        return $this->volume;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ServiceVolumesItemsOneOf1Volume $volume
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setVolume(ServiceVolumesItemsOneOf1Volume $volume)
    {
        $this->volume = $volume;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return ServiceVolumesItemsOneOf1Tmpfs
     * @codeCoverageIgnoreStart
     */
    public function getTmpfs()
    {
        return $this->tmpfs;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ServiceVolumesItemsOneOf1Tmpfs $tmpfs
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTmpfs(ServiceVolumesItemsOneOf1Tmpfs $tmpfs)
    {
        $this->tmpfs = $tmpfs;
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