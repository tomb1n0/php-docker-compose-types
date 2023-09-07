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


class ServiceNetworksOneOf1PatternPropertiesAZAZ09OneOf0 extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var string[]|array */
    public $aliases;

    /** @var string */
    public $ipv4Address;

    /** @var string */
    public $ipv6Address;

    /** @var string[]|array */
    public $linkLocalIps;

    /** @var float */
    public $priority;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->aliases = Schema::arr();
        $properties->aliases->items = Schema::string();
        $properties->aliases->uniqueItems = true;
        $properties->aliases->setFromRef('#/definitions/list_of_strings');
        $properties->ipv4Address = Schema::string();
        $ownerSchema->addPropertyMapping('ipv4_address', self::names()->ipv4Address);
        $properties->ipv6Address = Schema::string();
        $ownerSchema->addPropertyMapping('ipv6_address', self::names()->ipv6Address);
        $properties->linkLocalIps = Schema::arr();
        $properties->linkLocalIps->items = Schema::string();
        $properties->linkLocalIps->uniqueItems = true;
        $properties->linkLocalIps->setFromRef('#/definitions/list_of_strings');
        $ownerSchema->addPropertyMapping('link_local_ips', self::names()->linkLocalIps);
        $properties->priority = Schema::number();
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
    }

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