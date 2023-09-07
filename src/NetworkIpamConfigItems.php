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


class NetworkIpamConfigItems extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var string */
    public $subnet;

    /** @var string */
    public $ipRange;

    /** @var string */
    public $gateway;

    /** @var string[] */
    public $auxAddresses;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->subnet = Schema::string();
        $properties->subnet->format = "subnet_ip_address";
        $properties->ipRange = Schema::string();
        $ownerSchema->addPropertyMapping('ip_range', self::names()->ipRange);
        $properties->gateway = Schema::string();
        $properties->auxAddresses = Schema::object();
        $properties->auxAddresses->additionalProperties = false;
        $property268bf9 = Schema::string();
        $properties->auxAddresses->setPatternProperty('^.+$', $property268bf9);
        $ownerSchema->addPropertyMapping('aux_addresses', self::names()->auxAddresses);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
    }

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getSubnet()
    {
        return $this->subnet;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $subnet
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSubnet($subnet)
    {
        $this->subnet = $subnet;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getIpRange()
    {
        return $this->ipRange;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $ipRange
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setIpRange($ipRange)
    {
        $this->ipRange = $ipRange;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getGateway()
    {
        return $this->gateway;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $gateway
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]
     * @codeCoverageIgnoreStart
     */
    public function getAuxAddresses()
    {
        return $this->auxAddresses;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[] $auxAddresses
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAuxAddresses($auxAddresses)
    {
        $this->auxAddresses = $auxAddresses;
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