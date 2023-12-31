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
 * Compose Specification
 * The Compose file is a YAML file defining a multi-containers based application.
 */
class DockerCompose extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var string declared for backward compatibility, ignored. */
    public $version;

    /** @var string define the Compose project name, until user defines one explicitly. */
    public $name;

    /** @var string[]|IncludeOneOf1[]|array compose sub-projects to be included. */
    public $include;

    /** @var Service[] */
    public $services;

    /** @var Network[]|null[] */
    public $networks;

    /** @var Volume[]|null[] */
    public $volumes;

    /** @var Secret[] */
    public $secrets;

    /** @var Config[] */
    public $configs;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->version = Schema::string();
        $properties->version->description = "declared for backward compatibility, ignored.";
        $properties->name = Schema::string();
        $properties->name->description = "define the Compose project name, until user defines one explicitly.";
        $properties->name->pattern = "^[a-z0-9][a-z0-9_-]*$";
        $properties->include = Schema::arr();
        $properties->include->items = Schema::object();
        $properties->include->items->oneOf[0] = Schema::string();
        $properties->include->items->oneOf[1] = IncludeOneOf1::schema();
        $properties->include->items->id = "#/definitions/include";
        $properties->include->items->setFromRef('#/definitions/include');
        $properties->include->description = "compose sub-projects to be included.";
        $properties->services = Schema::object();
        $properties->services->additionalProperties = false;
        $aZAZ09 = Service::schema();
        $properties->services->setPatternProperty('^[a-zA-Z0-9._-]+$', $aZAZ09);
        $properties->services->id = "#/properties/services";
        $properties->networks = Schema::object();
        $aZAZ09 = Network::schema();
        $properties->networks->setPatternProperty('^[a-zA-Z0-9._-]+$', $aZAZ09);
        $properties->networks->id = "#/properties/networks";
        $properties->volumes = Schema::object();
        $properties->volumes->additionalProperties = false;
        $aZAZ09 = Volume::schema();
        $properties->volumes->setPatternProperty('^[a-zA-Z0-9._-]+$', $aZAZ09);
        $properties->volumes->id = "#/properties/volumes";
        $properties->secrets = Schema::object();
        $properties->secrets->additionalProperties = false;
        $aZAZ09 = Secret::schema();
        $properties->secrets->setPatternProperty('^[a-zA-Z0-9._-]+$', $aZAZ09);
        $properties->secrets->id = "#/properties/secrets";
        $properties->configs = Schema::object();
        $properties->configs->additionalProperties = false;
        $aZAZ09 = Config::schema();
        $properties->configs->setPatternProperty('^[a-zA-Z0-9._-]+$', $aZAZ09);
        $properties->configs->id = "#/properties/configs";
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
        $ownerSchema->id = "compose_spec.json";
        $ownerSchema->schema = "https://json-schema.org/draft/2019-09/schema#";
        $ownerSchema->title = "Compose Specification";
        $ownerSchema->description = "The Compose file is a YAML file defining a multi-containers based application.";
    }

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getVersion()
    {
        return $this->version;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $version declared for backward compatibility, ignored.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getName()
    {
        return $this->name;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $name define the Compose project name, until user defines one explicitly.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|IncludeOneOf1[]|array
     * @codeCoverageIgnoreStart
     */
    public function getInclude()
    {
        return $this->include;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|IncludeOneOf1[]|array $include compose sub-projects to be included.
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setInclude($include)
    {
        $this->include = $include;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return Service[]
     * @codeCoverageIgnoreStart
     */
    public function getServices()
    {
        return $this->services;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Service[] $services
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setServices($services)
    {
        $this->services = $services;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return Network[]|null[]
     * @codeCoverageIgnoreStart
     */
    public function getNetworks()
    {
        return $this->networks;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Network[]|null[] $networks
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setNetworks($networks)
    {
        $this->networks = $networks;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return Volume[]|null[]
     * @codeCoverageIgnoreStart
     */
    public function getVolumes()
    {
        return $this->volumes;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Volume[]|null[] $volumes
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setVolumes($volumes)
    {
        $this->volumes = $volumes;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return Secret[]
     * @codeCoverageIgnoreStart
     */
    public function getSecrets()
    {
        return $this->secrets;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Secret[] $secrets
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSecrets($secrets)
    {
        $this->secrets = $secrets;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return Config[]
     * @codeCoverageIgnoreStart
     */
    public function getConfigs()
    {
        return $this->configs;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Config[] $configs
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setConfigs($configs)
    {
        $this->configs = $configs;
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