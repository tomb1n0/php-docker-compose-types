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


class DeploymentResourcesReservations extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var float|string */
    public $cpus;

    /** @var string */
    public $memory;

    /** @var GenericResourcesItems[]|array */
    public $genericResources;

    /** @var DevicesItems[]|array */
    public $devices;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->cpus = (new Schema())->setType([Schema::NUMBER, Schema::STRING]);
        $properties->memory = Schema::string();
        $properties->genericResources = Schema::arr();
        $properties->genericResources->items = GenericResourcesItems::schema();
        $properties->genericResources->id = "#/definitions/generic_resources";
        $properties->genericResources->setFromRef('#/definitions/generic_resources');
        $ownerSchema->addPropertyMapping('generic_resources', self::names()->genericResources);
        $properties->devices = Schema::arr();
        $properties->devices->items = DevicesItems::schema();
        $properties->devices->id = "#/definitions/devices";
        $properties->devices->setFromRef('#/definitions/devices');
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
    }

    /**
     * @return float|string
     * @codeCoverageIgnoreStart
     */
    public function getCpus()
    {
        return $this->cpus;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float|string $cpus
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCpus($cpus)
    {
        $this->cpus = $cpus;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getMemory()
    {
        return $this->memory;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $memory
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return GenericResourcesItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getGenericResources()
    {
        return $this->genericResources;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param GenericResourcesItems[]|array $genericResources
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setGenericResources($genericResources)
    {
        $this->genericResources = $genericResources;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return DevicesItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getDevices()
    {
        return $this->devices;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param DevicesItems[]|array $devices
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDevices($devices)
    {
        $this->devices = $devices;
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