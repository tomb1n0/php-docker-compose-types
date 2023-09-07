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
 * Built from #/definitions/blkio_limit
 */
class BlkioLimit extends ClassStructure
{
    /** @var string */
    public $path;

    /** @var int|string */
    public $rate;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->path = Schema::string();
        $properties->rate = (new Schema())->setType([Schema::INTEGER, Schema::STRING]);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->setFromRef('#/definitions/blkio_limit');
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
     * @return int|string
     * @codeCoverageIgnoreStart
     */
    public function getRate()
    {
        return $this->rate;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int|string $rate
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}