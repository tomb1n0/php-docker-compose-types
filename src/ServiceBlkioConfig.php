<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Tomb1n0\PhpDockerComposeTypes;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ServiceBlkioConfig extends ClassStructure
{
    /** @var BlkioLimit[]|array */
    public $deviceReadBps;

    /** @var BlkioLimit[]|array */
    public $deviceReadIops;

    /** @var BlkioLimit[]|array */
    public $deviceWriteBps;

    /** @var BlkioLimit[]|array */
    public $deviceWriteIops;

    /** @var int */
    public $weight;

    /** @var BlkioWeight[]|array */
    public $weightDevice;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->deviceReadBps = Schema::arr();
        $properties->deviceReadBps->items = BlkioLimit::schema();
        $ownerSchema->addPropertyMapping('device_read_bps', self::names()->deviceReadBps);
        $properties->deviceReadIops = Schema::arr();
        $properties->deviceReadIops->items = BlkioLimit::schema();
        $ownerSchema->addPropertyMapping('device_read_iops', self::names()->deviceReadIops);
        $properties->deviceWriteBps = Schema::arr();
        $properties->deviceWriteBps->items = BlkioLimit::schema();
        $ownerSchema->addPropertyMapping('device_write_bps', self::names()->deviceWriteBps);
        $properties->deviceWriteIops = Schema::arr();
        $properties->deviceWriteIops->items = BlkioLimit::schema();
        $ownerSchema->addPropertyMapping('device_write_iops', self::names()->deviceWriteIops);
        $properties->weight = Schema::integer();
        $properties->weightDevice = Schema::arr();
        $properties->weightDevice->items = BlkioWeight::schema();
        $ownerSchema->addPropertyMapping('weight_device', self::names()->weightDevice);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
    }
}