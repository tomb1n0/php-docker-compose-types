<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Tomb1n0\PhpDockerComposeTypes;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ServiceDependsOnOneOf1PatternPropertiesAZAZ09 extends ClassStructure
{
    const SERVICE_STARTED = 'service_started';

    const SERVICE_HEALTHY = 'service_healthy';

    const SERVICE_COMPLETED_SUCCESSFULLY = 'service_completed_successfully';

    /** @var bool */
    public $restart;

    /** @var bool */
    public $required;

    /** @var string */
    public $condition;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->restart = Schema::boolean();
        $properties->required = Schema::boolean();
        $properties->required->default = true;
        $properties->condition = Schema::string();
        $properties->condition->enum = array(
            self::SERVICE_STARTED,
            self::SERVICE_HEALTHY,
            self::SERVICE_COMPLETED_SUCCESSFULLY,
        );
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            self::names()->condition,
        );
    }

    /**
     * @return bool
     * @codeCoverageIgnoreStart
     */
    public function getRestart()
    {
        return $this->restart;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $restart
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRestart($restart)
    {
        $this->restart = $restart;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return bool
     * @codeCoverageIgnoreStart
     */
    public function getRequired()
    {
        return $this->required;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $required
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getCondition()
    {
        return $this->condition;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $condition
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}