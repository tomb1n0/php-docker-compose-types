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


class ServiceConfigOrSecretItemsOneOf1 extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var string */
    public $source;

    /** @var string */
    public $target;

    /** @var string */
    public $uid;

    /** @var string */
    public $gid;

    /** @var float */
    public $mode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->source = Schema::string();
        $properties->target = Schema::string();
        $properties->uid = Schema::string();
        $properties->gid = Schema::string();
        $properties->mode = Schema::number();
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
    }

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
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getUid()
    {
        return $this->uid;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $uid
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getGid()
    {
        return $this->gid;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $gid
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setGid($gid)
    {
        $this->gid = $gid;
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