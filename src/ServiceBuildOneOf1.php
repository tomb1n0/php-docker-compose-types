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
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getContext()
    {
        return $this->context;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $context
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getDockerfile()
    {
        return $this->dockerfile;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $dockerfile
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDockerfile($dockerfile)
    {
        $this->dockerfile = $dockerfile;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getDockerfileInline()
    {
        return $this->dockerfileInline;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $dockerfileInline
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDockerfileInline($dockerfileInline)
    {
        $this->dockerfileInline = $dockerfileInline;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|float[]|bool[]|null[]|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getArgs()
    {
        return $this->args;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|float[]|bool[]|null[]|string[]|array $args
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setArgs($args)
    {
        $this->args = $args;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|float[]|bool[]|null[]|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getSsh()
    {
        return $this->ssh;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|float[]|bool[]|null[]|string[]|array $ssh
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSsh($ssh)
    {
        $this->ssh = $ssh;
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
     * @return string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getCacheFrom()
    {
        return $this->cacheFrom;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $cacheFrom
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCacheFrom($cacheFrom)
    {
        $this->cacheFrom = $cacheFrom;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getCacheTo()
    {
        return $this->cacheTo;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $cacheTo
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCacheTo($cacheTo)
    {
        $this->cacheTo = $cacheTo;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return bool
     * @codeCoverageIgnoreStart
     */
    public function getNoCache()
    {
        return $this->noCache;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $noCache
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setNoCache($noCache)
    {
        $this->noCache = $noCache;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|float[]|bool[]|null[]|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getAdditionalContexts()
    {
        return $this->additionalContexts;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|float[]|bool[]|null[]|string[]|array $additionalContexts
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAdditionalContexts($additionalContexts)
    {
        $this->additionalContexts = $additionalContexts;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getNetwork()
    {
        return $this->network;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $network
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setNetwork($network)
    {
        $this->network = $network;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return bool
     * @codeCoverageIgnoreStart
     */
    public function getPull()
    {
        return $this->pull;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $pull
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPull($pull)
    {
        $this->pull = $pull;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getTarget()
    {
        return $this->target;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $target
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int|string
     * @codeCoverageIgnoreStart
     */
    public function getShmSize()
    {
        return $this->shmSize;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int|string $shmSize
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setShmSize($shmSize)
    {
        $this->shmSize = $shmSize;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|float[]|bool[]|null[]|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getExtraHosts()
    {
        return $this->extraHosts;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|float[]|bool[]|null[]|string[]|array $extraHosts
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setExtraHosts($extraHosts)
    {
        $this->extraHosts = $extraHosts;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getIsolation()
    {
        return $this->isolation;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $isolation
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setIsolation($isolation)
    {
        $this->isolation = $isolation;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return bool
     * @codeCoverageIgnoreStart
     */
    public function getPrivileged()
    {
        return $this->privileged;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $privileged
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPrivileged($privileged)
    {
        $this->privileged = $privileged;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|ServiceConfigOrSecretItemsOneOf1[]|array
     * @codeCoverageIgnoreStart
     */
    public function getSecrets()
    {
        return $this->secrets;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|ServiceConfigOrSecretItemsOneOf1[]|array $secrets
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
     * @return string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getTags()
    {
        return $this->tags;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $tags
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getPlatforms()
    {
        return $this->platforms;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $platforms
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPlatforms($platforms)
    {
        $this->platforms = $platforms;
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