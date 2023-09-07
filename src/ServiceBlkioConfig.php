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

    /**
     * @return BlkioLimit[]|array
     * @codeCoverageIgnoreStart
     */
    public function getDeviceReadBps()
    {
        return $this->deviceReadBps;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param BlkioLimit[]|array $deviceReadBps
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDeviceReadBps($deviceReadBps)
    {
        $this->deviceReadBps = $deviceReadBps;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return BlkioLimit[]|array
     * @codeCoverageIgnoreStart
     */
    public function getDeviceReadIops()
    {
        return $this->deviceReadIops;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param BlkioLimit[]|array $deviceReadIops
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDeviceReadIops($deviceReadIops)
    {
        $this->deviceReadIops = $deviceReadIops;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return BlkioLimit[]|array
     * @codeCoverageIgnoreStart
     */
    public function getDeviceWriteBps()
    {
        return $this->deviceWriteBps;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param BlkioLimit[]|array $deviceWriteBps
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDeviceWriteBps($deviceWriteBps)
    {
        $this->deviceWriteBps = $deviceWriteBps;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return BlkioLimit[]|array
     * @codeCoverageIgnoreStart
     */
    public function getDeviceWriteIops()
    {
        return $this->deviceWriteIops;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param BlkioLimit[]|array $deviceWriteIops
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDeviceWriteIops($deviceWriteIops)
    {
        $this->deviceWriteIops = $deviceWriteIops;
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

    /**
     * @return BlkioWeight[]|array
     * @codeCoverageIgnoreStart
     */
    public function getWeightDevice()
    {
        return $this->weightDevice;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param BlkioWeight[]|array $weightDevice
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setWeightDevice($weightDevice)
    {
        $this->weightDevice = $weightDevice;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */
}