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


/**
 * Built from #/definitions/healthcheck
 */
class Healthcheck extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var bool */
    public $disable;

    /** @var string */
    public $interval;

    /** @var float */
    public $retries;

    /** @var string|string[]|array */
    public $test;

    /** @var string */
    public $timeout;

    /** @var string */
    public $startPeriod;

    /** @var string */
    public $startInterval;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->disable = Schema::boolean();
        $properties->interval = Schema::string();
        $properties->interval->format = "duration";
        $properties->retries = Schema::number();
        $properties->test = new Schema();
        $properties->test->oneOf[0] = Schema::string();
        $propertiesTestOneOf1 = Schema::arr();
        $propertiesTestOneOf1->items = Schema::string();
        $properties->test->oneOf[1] = $propertiesTestOneOf1;
        $properties->timeout = Schema::string();
        $properties->timeout->format = "duration";
        $properties->startPeriod = Schema::string();
        $properties->startPeriod->format = "duration";
        $ownerSchema->addPropertyMapping('start_period', self::names()->startPeriod);
        $properties->startInterval = Schema::string();
        $properties->startInterval->format = "duration";
        $ownerSchema->addPropertyMapping('start_interval', self::names()->startInterval);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
        $ownerSchema->id = "#/definitions/healthcheck";
        $ownerSchema->setFromRef('#/definitions/healthcheck');
    }

    /**
     * @return bool
     * @codeCoverageIgnoreStart
     */
    public function getDisable()
    {
        return $this->disable;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $disable
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDisable($disable)
    {
        $this->disable = $disable;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getInterval()
    {
        return $this->interval;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $interval
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return float
     * @codeCoverageIgnoreStart
     */
    public function getRetries()
    {
        return $this->retries;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float $retries
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRetries($retries)
    {
        $this->retries = $retries;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getTest()
    {
        return $this->test;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|string[]|array $test
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTest($test)
    {
        $this->test = $test;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getTimeout()
    {
        return $this->timeout;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $timeout
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getStartPeriod()
    {
        return $this->startPeriod;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $startPeriod
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStartPeriod($startPeriod)
    {
        $this->startPeriod = $startPeriod;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getStartInterval()
    {
        return $this->startInterval;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $startInterval
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStartInterval($startInterval)
    {
        $this->startInterval = $startInterval;
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