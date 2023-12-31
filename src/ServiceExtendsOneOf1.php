<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Tomb1n0\PhpDockerComposeTypes;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ServiceExtendsOneOf1 extends ClassStructure
{
    /** @var string */
    public $service;

    /** @var string */
    public $file;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->service = Schema::string();
        $properties->file = Schema::string();
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            self::names()->service,
        );
    }

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getService()
    {
        return $this->service;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $service
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setService($service)
    {
        $this->service = $service;
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
}