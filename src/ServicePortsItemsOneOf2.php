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


class ServicePortsItemsOneOf2 extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var string */
    public $mode;

    /** @var string */
    public $hostIp;

    /** @var int */
    public $target;

    /** @var string|int */
    public $published;

    /** @var string */
    public $protocol;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->mode = Schema::string();
        $properties->hostIp = Schema::string();
        $ownerSchema->addPropertyMapping('host_ip', self::names()->hostIp);
        $properties->target = Schema::integer();
        $properties->published = (new Schema())->setType([Schema::STRING, Schema::INTEGER]);
        $properties->protocol = Schema::string();
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
    }

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getMode()
    {
        return $this->mode;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $mode
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
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getHostIp()
    {
        return $this->hostIp;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $hostIp
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHostIp($hostIp)
    {
        $this->hostIp = $hostIp;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getTarget()
    {
        return $this->target;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $target
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
     * @return string|int
     * @codeCoverageIgnoreStart
     */
    public function getPublished()
    {
        return $this->published;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|int $published
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPublished($published)
    {
        $this->published = $published;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getProtocol()
    {
        return $this->protocol;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $protocol
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
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