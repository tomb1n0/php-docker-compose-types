<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Tomb1n0\PhpDockerComposeTypes;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from #/definitions/blkio_weight
 */
class BlkioWeight extends ClassStructure
{
    /** @var string */
    public $path;

    /** @var int */
    public $weight;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->path = Schema::string();
        $properties->weight = Schema::integer();
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->setFromRef('#/definitions/blkio_weight');
    }

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getPath()
    {
        return $this->path;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $path
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $weight
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}