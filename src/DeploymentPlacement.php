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


class DeploymentPlacement extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var string[]|array */
    public $constraints;

    /** @var DeploymentPlacementPreferencesItems[]|array */
    public $preferences;

    /** @var int */
    public $maxReplicasPerNode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->constraints = Schema::arr();
        $properties->constraints->items = Schema::string();
        $properties->preferences = Schema::arr();
        $properties->preferences->items = DeploymentPlacementPreferencesItems::schema();
        $properties->maxReplicasPerNode = Schema::integer();
        $ownerSchema->addPropertyMapping('max_replicas_per_node', self::names()->maxReplicasPerNode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
    }

    /**
     * @return string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getConstraints()
    {
        return $this->constraints;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $constraints
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setConstraints($constraints)
    {
        $this->constraints = $constraints;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return DeploymentPlacementPreferencesItems[]|array
     * @codeCoverageIgnoreStart
     */
    public function getPreferences()
    {
        return $this->preferences;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param DeploymentPlacementPreferencesItems[]|array $preferences
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPreferences($preferences)
    {
        $this->preferences = $preferences;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getMaxReplicasPerNode()
    {
        return $this->maxReplicasPerNode;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $maxReplicasPerNode
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMaxReplicasPerNode($maxReplicasPerNode)
    {
        $this->maxReplicasPerNode = $maxReplicasPerNode;
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