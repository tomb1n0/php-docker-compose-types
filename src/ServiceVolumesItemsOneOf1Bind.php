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


class ServiceVolumesItemsOneOf1Bind extends ClassStructure
{
    const Z = 'z';

    const Z2 = 'Z';

    const X_PROPERTY_PATTERN = '^x-';

    /** @var string */
    public $propagation;

    /** @var bool */
    public $createHostPath;

    /** @var string */
    public $selinux;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->propagation = Schema::string();
        $properties->createHostPath = Schema::boolean();
        $ownerSchema->addPropertyMapping('create_host_path', self::names()->createHostPath);
        $properties->selinux = Schema::string();
        $properties->selinux->enum = array(
            self::Z,
            self::Z2,
        );
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
    }

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getPropagation()
    {
        return $this->propagation;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $propagation
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPropagation($propagation)
    {
        $this->propagation = $propagation;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return bool
     * @codeCoverageIgnoreStart
     */
    public function getCreateHostPath()
    {
        return $this->createHostPath;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $createHostPath
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCreateHostPath($createHostPath)
    {
        $this->createHostPath = $createHostPath;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getSelinux()
    {
        return $this->selinux;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $selinux
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSelinux($selinux)
    {
        $this->selinux = $selinux;
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