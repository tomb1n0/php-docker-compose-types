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


class ServiceBuildOneOf1 extends ClassStructure
{
    const X_PROPERTY_PATTERN = '^x-';

    /** @var string */
    public $context;

    /** @var string */
    public $dockerfile;

    /** @var string */
    public $dockerfileInline;

    /** @var string[]|float[]|bool[]|null[]|string[]|array */
    public $args;

    /** @var string[]|float[]|bool[]|null[]|string[]|array */
    public $ssh;

    /** @var string[]|float[]|bool[]|null[]|string[]|array */
    public $labels;

    /** @var string[]|array */
    public $cacheFrom;

    /** @var string[]|array */
    public $cacheTo;

    /** @var bool */
    public $noCache;

    /** @var string[]|float[]|bool[]|null[]|string[]|array */
    public $additionalContexts;

    /** @var string */
    public $network;

    /** @var bool */
    public $pull;

    /** @var string */
    public $target;

    /** @var int|string */
    public $shmSize;

    /** @var string[]|float[]|bool[]|null[]|string[]|array */
    public $extraHosts;

    /** @var string */
    public $isolation;

    /** @var bool */
    public $privileged;

    /** @var string[]|ServiceConfigOrSecretItemsOneOf1[]|array */
    public $secrets;

    /** @var string[]|array */
    public $tags;

    /** @var string[]|array */
    public $platforms;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->context = Schema::string();
        $properties->dockerfile = Schema::string();
        $properties->dockerfileInline = Schema::string();
        $ownerSchema->addPropertyMapping('dockerfile_inline', self::names()->dockerfileInline);
        $properties->args = new Schema();
        $propertiesArgsOneOf0 = Schema::object();
        $propertiesArgsOneOf0->additionalProperties = false;
        $property0017fb = (new Schema())->setType([Schema::STRING, Schema::NUMBER, Schema::BOOLEAN, Schema::NULL]);
        $propertiesArgsOneOf0->setPatternProperty('.+', $property0017fb);
        $properties->args->oneOf[0] = $propertiesArgsOneOf0;
        $propertiesArgsOneOf1 = Schema::arr();
        $propertiesArgsOneOf1->items = Schema::string();
        $propertiesArgsOneOf1->uniqueItems = true;
        $properties->args->oneOf[1] = $propertiesArgsOneOf1;
        $properties->args->setFromRef('#/definitions/list_or_dict');
        $properties->ssh = new Schema();
        $propertiesSshOneOf0 = Schema::object();
        $propertiesSshOneOf0->additionalProperties = false;
        $property0017fb = (new Schema())->setType([Schema::STRING, Schema::NUMBER, Schema::BOOLEAN, Schema::NULL]);
        $propertiesSshOneOf0->setPatternProperty('.+', $property0017fb);
        $properties->ssh->oneOf[0] = $propertiesSshOneOf0;
        $propertiesSshOneOf1 = Schema::arr();
        $propertiesSshOneOf1->items = Schema::string();
        $propertiesSshOneOf1->uniqueItems = true;
        $properties->ssh->oneOf[1] = $propertiesSshOneOf1;
        $properties->ssh->setFromRef('#/definitions/list_or_dict');
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
        $properties->cacheFrom = Schema::arr();
        $properties->cacheFrom->items = Schema::string();
        $ownerSchema->addPropertyMapping('cache_from', self::names()->cacheFrom);
        $properties->cacheTo = Schema::arr();
        $properties->cacheTo->items = Schema::string();
        $ownerSchema->addPropertyMapping('cache_to', self::names()->cacheTo);
        $properties->noCache = Schema::boolean();
        $ownerSchema->addPropertyMapping('no_cache', self::names()->noCache);
        $properties->additionalContexts = new Schema();
        $propertiesAdditionalContextsOneOf0 = Schema::object();
        $propertiesAdditionalContextsOneOf0->additionalProperties = false;
        $property0017fb = (new Schema())->setType([Schema::STRING, Schema::NUMBER, Schema::BOOLEAN, Schema::NULL]);
        $propertiesAdditionalContextsOneOf0->setPatternProperty('.+', $property0017fb);
        $properties->additionalContexts->oneOf[0] = $propertiesAdditionalContextsOneOf0;
        $propertiesAdditionalContextsOneOf1 = Schema::arr();
        $propertiesAdditionalContextsOneOf1->items = Schema::string();
        $propertiesAdditionalContextsOneOf1->uniqueItems = true;
        $properties->additionalContexts->oneOf[1] = $propertiesAdditionalContextsOneOf1;
        $properties->additionalContexts->setFromRef('#/definitions/list_or_dict');
        $ownerSchema->addPropertyMapping('additional_contexts', self::names()->additionalContexts);
        $properties->network = Schema::string();
        $properties->pull = Schema::boolean();
        $properties->target = Schema::string();
        $properties->shmSize = (new Schema())->setType([Schema::INTEGER, Schema::STRING]);
        $ownerSchema->addPropertyMapping('shm_size', self::names()->shmSize);
        $properties->extraHosts = new Schema();
        $propertiesExtraHostsOneOf0 = Schema::object();
        $propertiesExtraHostsOneOf0->additionalProperties = false;
        $property0017fb = (new Schema())->setType([Schema::STRING, Schema::NUMBER, Schema::BOOLEAN, Schema::NULL]);
        $propertiesExtraHostsOneOf0->setPatternProperty('.+', $property0017fb);
        $properties->extraHosts->oneOf[0] = $propertiesExtraHostsOneOf0;
        $propertiesExtraHostsOneOf1 = Schema::arr();
        $propertiesExtraHostsOneOf1->items = Schema::string();
        $propertiesExtraHostsOneOf1->uniqueItems = true;
        $properties->extraHosts->oneOf[1] = $propertiesExtraHostsOneOf1;
        $properties->extraHosts->setFromRef('#/definitions/list_or_dict');
        $ownerSchema->addPropertyMapping('extra_hosts', self::names()->extraHosts);
        $properties->isolation = Schema::string();
        $properties->privileged = Schema::boolean();
        $properties->secrets = Schema::arr();
        $properties->secrets->items = new Schema();
        $properties->secrets->items->oneOf[0] = Schema::string();
        $properties->secrets->items->oneOf[1] = ServiceConfigOrSecretItemsOneOf1::schema();
        $properties->secrets->setFromRef('#/definitions/service_config_or_secret');
        $properties->tags = Schema::arr();
        $properties->tags->items = Schema::string();
        $properties->platforms = Schema::arr();
        $properties->platforms->items = Schema::string();
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