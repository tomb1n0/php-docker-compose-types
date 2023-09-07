<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Tomb1n0\PhpDockerComposeTypes;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class IncludeOneOf1 extends ClassStructure
{
    /** @var string|string[]|array */
    public $path;

    /** @var string|string[]|array */
    public $envFile;

    /** @var string */
    public $projectDirectory;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->path = new Schema();
        $properties->path->oneOf[0] = Schema::string();
        $propertiesPathOneOf1 = Schema::arr();
        $propertiesPathOneOf1->items = Schema::string();
        $propertiesPathOneOf1->uniqueItems = true;
        $propertiesPathOneOf1->setFromRef('#/definitions/list_of_strings');
        $properties->path->oneOf[1] = $propertiesPathOneOf1;
        $properties->path->setFromRef('#/definitions/string_or_list');
        $properties->envFile = new Schema();
        $properties->envFile->oneOf[0] = Schema::string();
        $propertiesEnvFileOneOf1 = Schema::arr();
        $propertiesEnvFileOneOf1->items = Schema::string();
        $propertiesEnvFileOneOf1->uniqueItems = true;
        $propertiesEnvFileOneOf1->setFromRef('#/definitions/list_of_strings');
        $properties->envFile->oneOf[1] = $propertiesEnvFileOneOf1;
        $properties->envFile->setFromRef('#/definitions/string_or_list');
        $ownerSchema->addPropertyMapping('env_file', self::names()->envFile);
        $properties->projectDirectory = Schema::string();
        $ownerSchema->addPropertyMapping('project_directory', self::names()->projectDirectory);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
    }

    /**
     * @return string|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getPath()
    {
        return $this->path;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|string[]|array $path
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
     * @return string|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getEnvFile()
    {
        return $this->envFile;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|string[]|array $envFile
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setEnvFile($envFile)
    {
        $this->envFile = $envFile;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getProjectDirectory()
    {
        return $this->projectDirectory;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $projectDirectory
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setProjectDirectory($projectDirectory)
    {
        $this->projectDirectory = $projectDirectory;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}