<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Tomb1n0\PhpDockerComposeTypes;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * @method static SecretExternal|bool import($data, Context $options = null)
 */
class SecretExternal extends ClassStructure
{
    /** @var string */
    public $name;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->name = Schema::string();
        $ownerSchema->type = [Schema::BOOLEAN, Schema::OBJECT];
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
}