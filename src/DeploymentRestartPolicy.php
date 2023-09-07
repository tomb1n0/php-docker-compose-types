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


class DeploymentRestartPolicy extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var string */
    public $condition;

    /** @var string */
    public $delay;

    /** @var int */
    public $maxAttempts;

    /** @var string */
    public $window;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->condition = Schema::string();
        $properties->delay = Schema::string();
        $properties->delay->format = "duration";
        $properties->maxAttempts = Schema::integer();
        $ownerSchema->addPropertyMapping('max_attempts', self::names()->maxAttempts);
        $properties->window = Schema::string();
        $properties->window->format = "duration";
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
    }

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
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getMaxAttempts()
    {
        return $this->maxAttempts;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $maxAttempts
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMaxAttempts($maxAttempts)
    {
        $this->maxAttempts = $maxAttempts;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getWindow()
    {
        return $this->window;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $window
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setWindow($window)
    {
        $this->window = $window;
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