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


class DeploymentRollbackConfig extends ClassStructure
{
    const START_FIRST = 'start-first';

    const STOP_FIRST = 'stop-first';

    const X_PROPERTY_PATTERN = '^x-';

    /** @var int */
    public $parallelism;

    /** @var string */
    public $delay;

    /** @var string */
    public $failureAction;

    /** @var string */
    public $monitor;

    /** @var float */
    public $maxFailureRatio;

    /** @var string */
    public $order;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->parallelism = Schema::integer();
        $properties->delay = Schema::string();
        $properties->delay->format = "duration";
        $properties->failureAction = Schema::string();
        $ownerSchema->addPropertyMapping('failure_action', self::names()->failureAction);
        $properties->monitor = Schema::string();
        $properties->monitor->format = "duration";
        $properties->maxFailureRatio = Schema::number();
        $ownerSchema->addPropertyMapping('max_failure_ratio', self::names()->maxFailureRatio);
        $properties->order = Schema::string();
        $properties->order->enum = array(
            self::START_FIRST,
            self::STOP_FIRST,
        );
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
    }

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getParallelism()
    {
        return $this->parallelism;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $parallelism
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setParallelism($parallelism)
    {
        $this->parallelism = $parallelism;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getDelay()
    {
        return $this->delay;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $delay
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDelay($delay)
    {
        $this->delay = $delay;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getFailureAction()
    {
        return $this->failureAction;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $failureAction
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setFailureAction($failureAction)
    {
        $this->failureAction = $failureAction;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getMonitor()
    {
        return $this->monitor;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $monitor
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMonitor($monitor)
    {
        $this->monitor = $monitor;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return float
     * @codeCoverageIgnoreStart
     */
    public function getMaxFailureRatio()
    {
        return $this->maxFailureRatio;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float $maxFailureRatio
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMaxFailureRatio($maxFailureRatio)
    {
        $this->maxFailureRatio = $maxFailureRatio;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getOrder()
    {
        return $this->order;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $order
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setOrder($order)
    {
        $this->order = $order;
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