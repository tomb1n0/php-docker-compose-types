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


class DeploymentResources extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var DeploymentResourcesLimits */
    public $limits;

    /** @var DeploymentResourcesReservations */
    public $reservations;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->limits = DeploymentResourcesLimits::schema();
        $properties->reservations = DeploymentResourcesReservations::schema();
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
    }

    /**
     * @return DeploymentResourcesLimits
     * @codeCoverageIgnoreStart
     */
    public function getLimits()
    {
        return $this->limits;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param DeploymentResourcesLimits $limits
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLimits(DeploymentResourcesLimits $limits)
    {
        $this->limits = $limits;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return DeploymentResourcesReservations
     * @codeCoverageIgnoreStart
     */
    public function getReservations()
    {
        return $this->reservations;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param DeploymentResourcesReservations $reservations
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setReservations(DeploymentResourcesReservations $reservations)
    {
        $this->reservations = $reservations;
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