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
 * Built from #/definitions/secret
 */
class Secret extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var string */
    public $name;

    /** @var string */
    public $environment;

    /** @var string */
    public $file;

    /** @var SecretExternal|bool */
    public $external;

    /** @var string[]|float[]|bool[]|null[]|string[]|array */
    public $labels;

    /** @var string */
    public $driver;

    /** @var string[]|float[] */
    public $driverOpts;

    /** @var string */
    public $templateDriver;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->name = Schema::string();
        $properties->environment = Schema::string();
        $properties->file = Schema::string();
        $properties->external = SecretExternal::schema();
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
        $properties->driver = Schema::string();
        $properties->driverOpts = Schema::object();
        $property268bf9 = (new Schema())->setType([Schema::STRING, Schema::NUMBER]);
        $properties->driverOpts->setPatternProperty('^.+$', $property268bf9);
        $ownerSchema->addPropertyMapping('driver_opts', self::names()->driverOpts);
        $properties->templateDriver = Schema::string();
        $ownerSchema->addPropertyMapping('template_driver', self::names()->templateDriver);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
        $ownerSchema->id = "#/definitions/secret";
        $ownerSchema->setFromRef('#/definitions/secret');
    }

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
     * @param string $name
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
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getEnvironment()
    {
        return $this->environment;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $environment
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getFile()
    {
        return $this->file;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $file
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return SecretExternal|bool
     * @codeCoverageIgnoreStart
     */
    public function getExternal()
    {
        return $this->external;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param SecretExternal|bool $external
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setExternal($external)
    {
        $this->external = $external;
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
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getDriver()
    {
        return $this->driver;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $driver
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDriver($driver)
    {
        $this->driver = $driver;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|float[]
     * @codeCoverageIgnoreStart
     */
    public function getDriverOpts()
    {
        return $this->driverOpts;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|float[] $driverOpts
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDriverOpts($driverOpts)
    {
        $this->driverOpts = $driverOpts;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getTemplateDriver()
    {
        return $this->templateDriver;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $templateDriver
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTemplateDriver($templateDriver)
    {
        $this->templateDriver = $templateDriver;
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