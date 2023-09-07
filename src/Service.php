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
 * Built from #/definitions/service
 * @property Deployment|null $deploy
 * @property null|string|string[]|array $command
 * @property null|string|string[]|array $entrypoint
 * @property string|null $pid
 */
class Service extends ClassStructure
{
    const HOST = 'host';

    const _PRIVATE = 'private';

    const ALWAYS = 'always';

    const NEVER = 'never';

    const IF_NOT_PRESENT = 'if_not_present';

    const BUILD = 'build';

    const MISSING = 'missing';

    const X_PROPERTY_PATTERN = '^x-';

    /** @var string[]|float[]|bool[]|null[]|string[]|array */
    public $annotations;

    /** @var bool */
    public $attach;

    /** @var string|ServiceBuildOneOf1 */
    public $build;

    /** @var ServiceBlkioConfig */
    public $blkioConfig;

    /** @var string[]|array */
    public $capAdd;

    /** @var string[]|array */
    public $capDrop;

    /** @var string */
    public $cgroup;

    /** @var string */
    public $cgroupParent;

    /** @var string[]|ServiceConfigOrSecretItemsOneOf1[]|array */
    public $configs;

    /** @var string */
    public $containerName;

    /** @var int */
    public $cpuCount;

    /** @var int */
    public $cpuPercent;

    /** @var float|string */
    public $cpuShares;

    /** @var float|string */
    public $cpuQuota;

    /** @var float|string */
    public $cpuPeriod;

    /** @var float|string */
    public $cpuRtPeriod;

    /** @var float|string */
    public $cpuRtRuntime;

    /** @var float|string */
    public $cpus;

    /** @var string */
    public $cpuset;

    /** @var ServiceCredentialSpec */
    public $credentialSpec;

    /** @var string[]|array|ServiceDependsOnOneOf1PatternPropertiesAZAZ09[] */
    public $dependsOn;

    /** @var string[]|array */
    public $deviceCgroupRules;

    /** @var string[]|array */
    public $devices;

    /** @var string|string[]|array */
    public $dns;

    /** @var string[]|array */
    public $dnsOpt;

    /** @var string|string[]|array */
    public $dnsSearch;

    /** @var string */
    public $domainname;

    /** @var string|string[]|array */
    public $envFile;

    /** @var string[]|float[]|bool[]|null[]|string[]|array */
    public $environment;

    /** @var string[]|float[]|array */
    public $expose;

    /** @var string|ServiceExtendsOneOf1 */
    public $extends;

    /** @var string[]|array */
    public $externalLinks;

    /** @var string[]|float[]|bool[]|null[]|string[]|array */
    public $extraHosts;

    /** @var string[]|float[]|array */
    public $groupAdd;

    /** @var Healthcheck */
    public $healthcheck;

    /** @var string */
    public $hostname;

    /** @var string */
    public $image;

    /** @var bool */
    public $init;

    /** @var string */
    public $ipc;

    /** @var string */
    public $isolation;

    /** @var string[]|float[]|bool[]|null[]|string[]|array */
    public $labels;

    /** @var string[]|array */
    public $links;

    /** @var ServiceLogging */
    public $logging;

    /** @var string */
    public $macAddress;

    /** @var float|string */
    public $memLimit;

    /** @var string|int */
    public $memReservation;

    /** @var int */
    public $memSwappiness;

    /** @var float|string */
    public $memswapLimit;

    /** @var string */
    public $networkMode;

    /** @var string[]|array|ServiceNetworksOneOf1PatternPropertiesAZAZ09OneOf0[]|null[] */
    public $networks;

    /** @var bool */
    public $oomKillDisable;

    /** @var int */
    public $oomScoreAdj;

    /** @var float|string */
    public $pidsLimit;

    /** @var string */
    public $platform;

    /** @var float[]|string[]|ServicePortsItemsOneOf2[]|array */
    public $ports;

    /** @var bool */
    public $privileged;

    /** @var string[]|array */
    public $profiles;

    /** @var string */
    public $pullPolicy;

    /** @var bool */
    public $readOnly;

    /** @var string */
    public $restart;

    /** @var string */
    public $runtime;

    /** @var int */
    public $scale;

    /** @var string[]|array */
    public $securityOpt;

    /** @var float|string */
    public $shmSize;

    /** @var string[]|ServiceConfigOrSecretItemsOneOf1[]|array */
    public $secrets;

    /** @var string[]|float[]|bool[]|null[]|string[]|array */
    public $sysctls;

    /** @var bool */
    public $stdinOpen;

    /** @var string */
    public $stopGracePeriod;

    /** @var string */
    public $stopSignal;

    /** @var mixed */
    public $storageOpt;

    /** @var string|string[]|array */
    public $tmpfs;

    /** @var bool */
    public $tty;

    /** @var int[]|ServiceUlimitsPatternPropertiesAZOneOf1[] */
    public $ulimits;

    /** @var string */
    public $user;

    /** @var string */
    public $uts;

    /** @var string */
    public $usernsMode;

    /** @var string[]|ServiceVolumesItemsOneOf1[]|array */
    public $volumes;

    /** @var string[]|array */
    public $volumesFrom;

    /** @var string */
    public $workingDir;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->deploy = Deployment::schema();
        $properties->annotations = new Schema();
        $propertiesAnnotationsOneOf0 = Schema::object();
        $propertiesAnnotationsOneOf0->additionalProperties = false;
        $property0017fb = (new Schema())->setType([Schema::STRING, Schema::NUMBER, Schema::BOOLEAN, Schema::NULL]);
        $propertiesAnnotationsOneOf0->setPatternProperty('.+', $property0017fb);
        $properties->annotations->oneOf[0] = $propertiesAnnotationsOneOf0;
        $propertiesAnnotationsOneOf1 = Schema::arr();
        $propertiesAnnotationsOneOf1->items = Schema::string();
        $propertiesAnnotationsOneOf1->uniqueItems = true;
        $properties->annotations->oneOf[1] = $propertiesAnnotationsOneOf1;
        $properties->annotations->setFromRef('#/definitions/list_or_dict');
        $properties->attach = Schema::boolean();
        $properties->build = new Schema();
        $properties->build->oneOf[0] = Schema::string();
        $properties->build->oneOf[1] = ServiceBuildOneOf1::schema();
        $properties->blkioConfig = ServiceBlkioConfig::schema();
        $ownerSchema->addPropertyMapping('blkio_config', self::names()->blkioConfig);
        $properties->capAdd = Schema::arr();
        $properties->capAdd->items = Schema::string();
        $properties->capAdd->uniqueItems = true;
        $ownerSchema->addPropertyMapping('cap_add', self::names()->capAdd);
        $properties->capDrop = Schema::arr();
        $properties->capDrop->items = Schema::string();
        $properties->capDrop->uniqueItems = true;
        $ownerSchema->addPropertyMapping('cap_drop', self::names()->capDrop);
        $properties->cgroup = Schema::string();
        $properties->cgroup->enum = array(
            self::HOST,
            self::_PRIVATE,
        );
        $properties->cgroupParent = Schema::string();
        $ownerSchema->addPropertyMapping('cgroup_parent', self::names()->cgroupParent);
        $properties->command = new Schema();
        $properties->command->oneOf[0] = Schema::null();
        $properties->command->oneOf[1] = Schema::string();
        $propertiesCommandOneOf2 = Schema::arr();
        $propertiesCommandOneOf2->items = Schema::string();
        $properties->command->oneOf[2] = $propertiesCommandOneOf2;
        $properties->command->setFromRef('#/definitions/command');
        $properties->configs = Schema::arr();
        $properties->configs->items = new Schema();
        $properties->configs->items->oneOf[0] = Schema::string();
        $properties->configs->items->oneOf[1] = ServiceConfigOrSecretItemsOneOf1::schema();
        $properties->configs->setFromRef('#/definitions/service_config_or_secret');
        $properties->containerName = Schema::string();
        $ownerSchema->addPropertyMapping('container_name', self::names()->containerName);
        $properties->cpuCount = Schema::integer();
        $properties->cpuCount->minimum = 0;
        $ownerSchema->addPropertyMapping('cpu_count', self::names()->cpuCount);
        $properties->cpuPercent = Schema::integer();
        $properties->cpuPercent->maximum = 100;
        $properties->cpuPercent->minimum = 0;
        $ownerSchema->addPropertyMapping('cpu_percent', self::names()->cpuPercent);
        $properties->cpuShares = (new Schema())->setType([Schema::NUMBER, Schema::STRING]);
        $ownerSchema->addPropertyMapping('cpu_shares', self::names()->cpuShares);
        $properties->cpuQuota = (new Schema())->setType([Schema::NUMBER, Schema::STRING]);
        $ownerSchema->addPropertyMapping('cpu_quota', self::names()->cpuQuota);
        $properties->cpuPeriod = (new Schema())->setType([Schema::NUMBER, Schema::STRING]);
        $ownerSchema->addPropertyMapping('cpu_period', self::names()->cpuPeriod);
        $properties->cpuRtPeriod = (new Schema())->setType([Schema::NUMBER, Schema::STRING]);
        $ownerSchema->addPropertyMapping('cpu_rt_period', self::names()->cpuRtPeriod);
        $properties->cpuRtRuntime = (new Schema())->setType([Schema::NUMBER, Schema::STRING]);
        $ownerSchema->addPropertyMapping('cpu_rt_runtime', self::names()->cpuRtRuntime);
        $properties->cpus = (new Schema())->setType([Schema::NUMBER, Schema::STRING]);
        $properties->cpuset = Schema::string();
        $properties->credentialSpec = ServiceCredentialSpec::schema();
        $ownerSchema->addPropertyMapping('credential_spec', self::names()->credentialSpec);
        $properties->dependsOn = new Schema();
        $propertiesDependsOnOneOf0 = Schema::arr();
        $propertiesDependsOnOneOf0->items = Schema::string();
        $propertiesDependsOnOneOf0->uniqueItems = true;
        $propertiesDependsOnOneOf0->setFromRef('#/definitions/list_of_strings');
        $properties->dependsOn->oneOf[0] = $propertiesDependsOnOneOf0;
        $propertiesDependsOnOneOf1 = Schema::object();
        $propertiesDependsOnOneOf1->additionalProperties = false;
        $aZAZ09 = ServiceDependsOnOneOf1PatternPropertiesAZAZ09::schema();
        $propertiesDependsOnOneOf1->setPatternProperty('^[a-zA-Z0-9._-]+$', $aZAZ09);
        $properties->dependsOn->oneOf[1] = $propertiesDependsOnOneOf1;
        $ownerSchema->addPropertyMapping('depends_on', self::names()->dependsOn);
        $properties->deviceCgroupRules = Schema::arr();
        $properties->deviceCgroupRules->items = Schema::string();
        $properties->deviceCgroupRules->uniqueItems = true;
        $properties->deviceCgroupRules->setFromRef('#/definitions/list_of_strings');
        $ownerSchema->addPropertyMapping('device_cgroup_rules', self::names()->deviceCgroupRules);
        $properties->devices = Schema::arr();
        $properties->devices->items = Schema::string();
        $properties->devices->uniqueItems = true;
        $properties->dns = new Schema();
        $properties->dns->oneOf[0] = Schema::string();
        $propertiesDnsOneOf1 = Schema::arr();
        $propertiesDnsOneOf1->items = Schema::string();
        $propertiesDnsOneOf1->uniqueItems = true;
        $propertiesDnsOneOf1->setFromRef('#/definitions/list_of_strings');
        $properties->dns->oneOf[1] = $propertiesDnsOneOf1;
        $properties->dns->setFromRef('#/definitions/string_or_list');
        $properties->dnsOpt = Schema::arr();
        $properties->dnsOpt->items = Schema::string();
        $properties->dnsOpt->uniqueItems = true;
        $ownerSchema->addPropertyMapping('dns_opt', self::names()->dnsOpt);
        $properties->dnsSearch = new Schema();
        $properties->dnsSearch->oneOf[0] = Schema::string();
        $propertiesDnsSearchOneOf1 = Schema::arr();
        $propertiesDnsSearchOneOf1->items = Schema::string();
        $propertiesDnsSearchOneOf1->uniqueItems = true;
        $propertiesDnsSearchOneOf1->setFromRef('#/definitions/list_of_strings');
        $properties->dnsSearch->oneOf[1] = $propertiesDnsSearchOneOf1;
        $properties->dnsSearch->setFromRef('#/definitions/string_or_list');
        $ownerSchema->addPropertyMapping('dns_search', self::names()->dnsSearch);
        $properties->domainname = Schema::string();
        $properties->entrypoint = new Schema();
        $properties->entrypoint->oneOf[0] = Schema::null();
        $properties->entrypoint->oneOf[1] = Schema::string();
        $propertiesEntrypointOneOf2 = Schema::arr();
        $propertiesEntrypointOneOf2->items = Schema::string();
        $properties->entrypoint->oneOf[2] = $propertiesEntrypointOneOf2;
        $properties->entrypoint->setFromRef('#/definitions/command');
        $properties->envFile = new Schema();
        $properties->envFile->oneOf[0] = Schema::string();
        $propertiesEnvFileOneOf1 = Schema::arr();
        $propertiesEnvFileOneOf1->items = Schema::string();
        $propertiesEnvFileOneOf1->uniqueItems = true;
        $propertiesEnvFileOneOf1->setFromRef('#/definitions/list_of_strings');
        $properties->envFile->oneOf[1] = $propertiesEnvFileOneOf1;
        $properties->envFile->setFromRef('#/definitions/string_or_list');
        $ownerSchema->addPropertyMapping('env_file', self::names()->envFile);
        $properties->environment = new Schema();
        $propertiesEnvironmentOneOf0 = Schema::object();
        $propertiesEnvironmentOneOf0->additionalProperties = false;
        $property0017fb = (new Schema())->setType([Schema::STRING, Schema::NUMBER, Schema::BOOLEAN, Schema::NULL]);
        $propertiesEnvironmentOneOf0->setPatternProperty('.+', $property0017fb);
        $properties->environment->oneOf[0] = $propertiesEnvironmentOneOf0;
        $propertiesEnvironmentOneOf1 = Schema::arr();
        $propertiesEnvironmentOneOf1->items = Schema::string();
        $propertiesEnvironmentOneOf1->uniqueItems = true;
        $properties->environment->oneOf[1] = $propertiesEnvironmentOneOf1;
        $properties->environment->setFromRef('#/definitions/list_or_dict');
        $properties->expose = Schema::arr();
        $properties->expose->items = (new Schema())->setType([Schema::STRING, Schema::NUMBER]);
        $properties->expose->items->format = "expose";
        $properties->expose->uniqueItems = true;
        $properties->extends = new Schema();
        $properties->extends->oneOf[0] = Schema::string();
        $properties->extends->oneOf[1] = ServiceExtendsOneOf1::schema();
        $properties->externalLinks = Schema::arr();
        $properties->externalLinks->items = Schema::string();
        $properties->externalLinks->uniqueItems = true;
        $ownerSchema->addPropertyMapping('external_links', self::names()->externalLinks);
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
        $properties->groupAdd = Schema::arr();
        $properties->groupAdd->items = (new Schema())->setType([Schema::STRING, Schema::NUMBER]);
        $properties->groupAdd->uniqueItems = true;
        $ownerSchema->addPropertyMapping('group_add', self::names()->groupAdd);
        $properties->healthcheck = Healthcheck::schema();
        $properties->hostname = Schema::string();
        $properties->image = Schema::string();
        $properties->init = Schema::boolean();
        $properties->ipc = Schema::string();
        $properties->isolation = Schema::string();
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
        $properties->links = Schema::arr();
        $properties->links->items = Schema::string();
        $properties->links->uniqueItems = true;
        $properties->logging = ServiceLogging::schema();
        $properties->macAddress = Schema::string();
        $ownerSchema->addPropertyMapping('mac_address', self::names()->macAddress);
        $properties->memLimit = (new Schema())->setType([Schema::NUMBER, Schema::STRING]);
        $ownerSchema->addPropertyMapping('mem_limit', self::names()->memLimit);
        $properties->memReservation = (new Schema())->setType([Schema::STRING, Schema::INTEGER]);
        $ownerSchema->addPropertyMapping('mem_reservation', self::names()->memReservation);
        $properties->memSwappiness = Schema::integer();
        $ownerSchema->addPropertyMapping('mem_swappiness', self::names()->memSwappiness);
        $properties->memswapLimit = (new Schema())->setType([Schema::NUMBER, Schema::STRING]);
        $ownerSchema->addPropertyMapping('memswap_limit', self::names()->memswapLimit);
        $properties->networkMode = Schema::string();
        $ownerSchema->addPropertyMapping('network_mode', self::names()->networkMode);
        $properties->networks = new Schema();
        $propertiesNetworksOneOf0 = Schema::arr();
        $propertiesNetworksOneOf0->items = Schema::string();
        $propertiesNetworksOneOf0->uniqueItems = true;
        $propertiesNetworksOneOf0->setFromRef('#/definitions/list_of_strings');
        $properties->networks->oneOf[0] = $propertiesNetworksOneOf0;
        $propertiesNetworksOneOf1 = Schema::object();
        $propertiesNetworksOneOf1->additionalProperties = false;
        $aZAZ09 = new Schema();
        $aZAZ09->oneOf[0] = ServiceNetworksOneOf1PatternPropertiesAZAZ09OneOf0::schema();
        $aZAZ09->oneOf[1] = Schema::null();
        $propertiesNetworksOneOf1->setPatternProperty('^[a-zA-Z0-9._-]+$', $aZAZ09);
        $properties->networks->oneOf[1] = $propertiesNetworksOneOf1;
        $properties->oomKillDisable = Schema::boolean();
        $ownerSchema->addPropertyMapping('oom_kill_disable', self::names()->oomKillDisable);
        $properties->oomScoreAdj = Schema::integer();
        $properties->oomScoreAdj->maximum = 1000;
        $properties->oomScoreAdj->minimum = -1000;
        $ownerSchema->addPropertyMapping('oom_score_adj', self::names()->oomScoreAdj);
        $properties->pid = (new Schema())->setType([Schema::STRING, Schema::NULL]);
        $properties->pidsLimit = (new Schema())->setType([Schema::NUMBER, Schema::STRING]);
        $ownerSchema->addPropertyMapping('pids_limit', self::names()->pidsLimit);
        $properties->platform = Schema::string();
        $properties->ports = Schema::arr();
        $properties->ports->items = new Schema();
        $propertiesPortsItemsOneOf0 = Schema::number();
        $propertiesPortsItemsOneOf0->format = "ports";
        $properties->ports->items->oneOf[0] = $propertiesPortsItemsOneOf0;
        $propertiesPortsItemsOneOf1 = Schema::string();
        $propertiesPortsItemsOneOf1->format = "ports";
        $properties->ports->items->oneOf[1] = $propertiesPortsItemsOneOf1;
        $properties->ports->items->oneOf[2] = ServicePortsItemsOneOf2::schema();
        $properties->ports->uniqueItems = true;
        $properties->privileged = Schema::boolean();
        $properties->profiles = Schema::arr();
        $properties->profiles->items = Schema::string();
        $properties->profiles->uniqueItems = true;
        $properties->profiles->setFromRef('#/definitions/list_of_strings');
        $properties->pullPolicy = Schema::string();
        $properties->pullPolicy->enum = array(
            self::ALWAYS,
            self::NEVER,
            self::IF_NOT_PRESENT,
            self::BUILD,
            self::MISSING,
        );
        $ownerSchema->addPropertyMapping('pull_policy', self::names()->pullPolicy);
        $properties->readOnly = Schema::boolean();
        $ownerSchema->addPropertyMapping('read_only', self::names()->readOnly);
        $properties->restart = Schema::string();
        $properties->runtime = Schema::string();
        $properties->scale = Schema::integer();
        $properties->securityOpt = Schema::arr();
        $properties->securityOpt->items = Schema::string();
        $properties->securityOpt->uniqueItems = true;
        $ownerSchema->addPropertyMapping('security_opt', self::names()->securityOpt);
        $properties->shmSize = (new Schema())->setType([Schema::NUMBER, Schema::STRING]);
        $ownerSchema->addPropertyMapping('shm_size', self::names()->shmSize);
        $properties->secrets = Schema::arr();
        $properties->secrets->items = new Schema();
        $properties->secrets->items->oneOf[0] = Schema::string();
        $properties->secrets->items->oneOf[1] = ServiceConfigOrSecretItemsOneOf1::schema();
        $properties->secrets->setFromRef('#/definitions/service_config_or_secret');
        $properties->sysctls = new Schema();
        $propertiesSysctlsOneOf0 = Schema::object();
        $propertiesSysctlsOneOf0->additionalProperties = false;
        $property0017fb = (new Schema())->setType([Schema::STRING, Schema::NUMBER, Schema::BOOLEAN, Schema::NULL]);
        $propertiesSysctlsOneOf0->setPatternProperty('.+', $property0017fb);
        $properties->sysctls->oneOf[0] = $propertiesSysctlsOneOf0;
        $propertiesSysctlsOneOf1 = Schema::arr();
        $propertiesSysctlsOneOf1->items = Schema::string();
        $propertiesSysctlsOneOf1->uniqueItems = true;
        $properties->sysctls->oneOf[1] = $propertiesSysctlsOneOf1;
        $properties->sysctls->setFromRef('#/definitions/list_or_dict');
        $properties->stdinOpen = Schema::boolean();
        $ownerSchema->addPropertyMapping('stdin_open', self::names()->stdinOpen);
        $properties->stopGracePeriod = Schema::string();
        $properties->stopGracePeriod->format = "duration";
        $ownerSchema->addPropertyMapping('stop_grace_period', self::names()->stopGracePeriod);
        $properties->stopSignal = Schema::string();
        $ownerSchema->addPropertyMapping('stop_signal', self::names()->stopSignal);
        $properties->storageOpt = Schema::object();
        $ownerSchema->addPropertyMapping('storage_opt', self::names()->storageOpt);
        $properties->tmpfs = new Schema();
        $properties->tmpfs->oneOf[0] = Schema::string();
        $propertiesTmpfsOneOf1 = Schema::arr();
        $propertiesTmpfsOneOf1->items = Schema::string();
        $propertiesTmpfsOneOf1->uniqueItems = true;
        $propertiesTmpfsOneOf1->setFromRef('#/definitions/list_of_strings');
        $properties->tmpfs->oneOf[1] = $propertiesTmpfsOneOf1;
        $properties->tmpfs->setFromRef('#/definitions/string_or_list');
        $properties->tty = Schema::boolean();
        $properties->ulimits = Schema::object();
        $aZ = new Schema();
        $aZ->oneOf[0] = Schema::integer();
        $aZ->oneOf[1] = ServiceUlimitsPatternPropertiesAZOneOf1::schema();
        $properties->ulimits->setPatternProperty('^[a-z]+$', $aZ);
        $properties->user = Schema::string();
        $properties->uts = Schema::string();
        $properties->usernsMode = Schema::string();
        $ownerSchema->addPropertyMapping('userns_mode', self::names()->usernsMode);
        $properties->volumes = Schema::arr();
        $properties->volumes->items = new Schema();
        $properties->volumes->items->oneOf[0] = Schema::string();
        $properties->volumes->items->oneOf[1] = ServiceVolumesItemsOneOf1::schema();
        $properties->volumes->uniqueItems = true;
        $properties->volumesFrom = Schema::arr();
        $properties->volumesFrom->items = Schema::string();
        $properties->volumesFrom->uniqueItems = true;
        $ownerSchema->addPropertyMapping('volumes_from', self::names()->volumesFrom);
        $properties->workingDir = Schema::string();
        $ownerSchema->addPropertyMapping('working_dir', self::names()->workingDir);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $x = new Schema();
        $ownerSchema->setPatternProperty('^x-', $x);
        $ownerSchema->id = "#/definitions/service";
        $ownerSchema->setFromRef('#/definitions/service');
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