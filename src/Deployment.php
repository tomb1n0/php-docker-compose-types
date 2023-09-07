<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Tomb1n0\PhpDockerComposeTypes;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Exception\StringException;
use Swaggest\JsonSchema\Helper;
use Swaggest\JsonSchema\InvalidValue;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from #/definitions/deployment
 * @method static Deployment|null import($data, Context $options = null)
 */
class Deployment extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var string */
    public $mode;

    /** @var string */
    public $endpointMode;

    /** @var int */
    public $replicas;

    /** @var string[]|float[]|bool[]|null[]|string[]|array */
    public $labels;

    /** @var DeploymentRollbackConfig */
    public $rollbackConfig;

    /** @var DeploymentUpdateConfig */
    public $updateConfig;

    /** @var DeploymentResources */
    public $resources;

    /** @var DeploymentRestartPolicy */
    public $restartPolicy;

    /** @var DeploymentPlacement */
    public $placement;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->mode = Schema::string();
        $properties->endpointMode = Schema::string();
        $ownerSchema->addPropertyMapping('endpoint_mode', self::names()->endpointMode);
        $properties->replicas = Schema::integer();
        $properties->labels = new Schema();
        $propertiesLabelsOneOf0 = Schema::object();
        $propertiesLabelsOneOf0->additionalProperties = false;
        $property0017fb = (new Schema())->setType([Schema::STRING, Schema::NUMBER, Schema::BOOLEAN, Schema::NULL]);
        $propertiesLabelsOneOf0->setPatternProperty('.+', $property0017fb);
        $properties->labels->oneOf[0] = $propertiesLabelsOneOf0;
        $propertiesLabelsOneOf1 = Schema::arr();
        $propertiesLabelsOneOf1->items = Schema::string();
        $propertiesLabelsOneOf1->uniqueItems = true;
        $properties->labels->oneOf[1] = $propertiesLabelsOneOf1;
        $properties->labels->setFromRef('#/definitions/list_or_dict');
        $properties->rollbackConfig = DeploymentRollbackConfig::schema();
        $ownerSchema->addPropertyMapping('rollback_config', self::names()->rollbackConfig);
        $properties->updateConfig = DeploymentUpdateConfig::schema();
        $ownerSchema->addPropertyMapping('update_config', self::names()->updateConfig);
        $properties->resources = DeploymentResources::schema();
        $properties->restartPolicy = DeploymentRestartPolicy::schema();
        $ownerSchema->addPropertyMapping('restart_policy', self::names()->restartPolicy);
        $properties->placement = DeploymentPlacement::schema();
        $ownerSchema->type = [Schema::OBJECT, Schema::NULL];
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
        $ownerSchema->id = "#/definitions/deployment";
        $ownerSchema->setFromRef('#/definitions/deployment');
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
    public function getEndpointMode()
    {
        return $this->endpointMode;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $endpointMode
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setEndpointMode($endpointMode)
    {
        $this->endpointMode = $endpointMode;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getReplicas()
    {
        return $this->replicas;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $replicas
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setReplicas($replicas)
    {
        $this->replicas = $replicas;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|float[]|bool[]|null[]|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|float[]|bool[]|null[]|string[]|array $labels
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return DeploymentRollbackConfig
     * @codeCoverageIgnoreStart
     */
    public function getRollbackConfig()
    {
        return $this->rollbackConfig;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param DeploymentRollbackConfig $rollbackConfig
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRollbackConfig(DeploymentRollbackConfig $rollbackConfig)
    {
        $this->rollbackConfig = $rollbackConfig;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return DeploymentUpdateConfig
     * @codeCoverageIgnoreStart
     */
    public function getUpdateConfig()
    {
        return $this->updateConfig;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param DeploymentUpdateConfig $updateConfig
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setUpdateConfig(DeploymentUpdateConfig $updateConfig)
    {
        $this->updateConfig = $updateConfig;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return DeploymentResources
     * @codeCoverageIgnoreStart
     */
    public function getResources()
    {
        return $this->resources;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param DeploymentResources $resources
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setResources(DeploymentResources $resources)
    {
        $this->resources = $resources;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return DeploymentRestartPolicy
     * @codeCoverageIgnoreStart
     */
    public function getRestartPolicy()
    {
        return $this->restartPolicy;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param DeploymentRestartPolicy $restartPolicy
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRestartPolicy(DeploymentRestartPolicy $restartPolicy)
    {
        $this->restartPolicy = $restartPolicy;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return DeploymentPlacement
     * @codeCoverageIgnoreStart
     */
    public function getPlacement()
    {
        return $this->placement;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param DeploymentPlacement $placement
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPlacement(DeploymentPlacement $placement)
    {
        $this->placement = $placement;
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