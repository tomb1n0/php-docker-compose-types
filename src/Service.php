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
     * @return Deployment|null
     * @codeCoverageIgnoreStart
     */
    public function getDeploy()
    {
        return $this->deploy;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Deployment|null $deploy
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDeploy($deploy)
    {
        $this->deploy = $deploy;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|float[]|bool[]|null[]|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|float[]|bool[]|null[]|string[]|array $annotations
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAnnotations($annotations)
    {
        $this->annotations = $annotations;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return bool
     * @codeCoverageIgnoreStart
     */
    public function getAttach()
    {
        return $this->attach;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $attach
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setAttach($attach)
    {
        $this->attach = $attach;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string|ServiceBuildOneOf1
     * @codeCoverageIgnoreStart
     */
    public function getBuild()
    {
        return $this->build;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|ServiceBuildOneOf1 $build
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setBuild($build)
    {
        $this->build = $build;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return ServiceBlkioConfig
     * @codeCoverageIgnoreStart
     */
    public function getBlkioConfig()
    {
        return $this->blkioConfig;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ServiceBlkioConfig $blkioConfig
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setBlkioConfig(ServiceBlkioConfig $blkioConfig)
    {
        $this->blkioConfig = $blkioConfig;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getCapAdd()
    {
        return $this->capAdd;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $capAdd
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCapAdd($capAdd)
    {
        $this->capAdd = $capAdd;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getCapDrop()
    {
        return $this->capDrop;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $capDrop
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCapDrop($capDrop)
    {
        $this->capDrop = $capDrop;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getCgroup()
    {
        return $this->cgroup;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $cgroup
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCgroup($cgroup)
    {
        $this->cgroup = $cgroup;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getCgroupParent()
    {
        return $this->cgroupParent;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $cgroupParent
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCgroupParent($cgroupParent)
    {
        $this->cgroupParent = $cgroupParent;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return null|string|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getCommand()
    {
        return $this->command;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param null|string|string[]|array $command
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCommand($command)
    {
        $this->command = $command;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|ServiceConfigOrSecretItemsOneOf1[]|array
     * @codeCoverageIgnoreStart
     */
    public function getConfigs()
    {
        return $this->configs;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|ServiceConfigOrSecretItemsOneOf1[]|array $configs
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setConfigs($configs)
    {
        $this->configs = $configs;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getContainerName()
    {
        return $this->containerName;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $containerName
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setContainerName($containerName)
    {
        $this->containerName = $containerName;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getCpuCount()
    {
        return $this->cpuCount;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $cpuCount
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCpuCount($cpuCount)
    {
        $this->cpuCount = $cpuCount;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getCpuPercent()
    {
        return $this->cpuPercent;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $cpuPercent
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCpuPercent($cpuPercent)
    {
        $this->cpuPercent = $cpuPercent;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return float|string
     * @codeCoverageIgnoreStart
     */
    public function getCpuShares()
    {
        return $this->cpuShares;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float|string $cpuShares
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCpuShares($cpuShares)
    {
        $this->cpuShares = $cpuShares;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return float|string
     * @codeCoverageIgnoreStart
     */
    public function getCpuQuota()
    {
        return $this->cpuQuota;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float|string $cpuQuota
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCpuQuota($cpuQuota)
    {
        $this->cpuQuota = $cpuQuota;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return float|string
     * @codeCoverageIgnoreStart
     */
    public function getCpuPeriod()
    {
        return $this->cpuPeriod;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float|string $cpuPeriod
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCpuPeriod($cpuPeriod)
    {
        $this->cpuPeriod = $cpuPeriod;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return float|string
     * @codeCoverageIgnoreStart
     */
    public function getCpuRtPeriod()
    {
        return $this->cpuRtPeriod;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float|string $cpuRtPeriod
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCpuRtPeriod($cpuRtPeriod)
    {
        $this->cpuRtPeriod = $cpuRtPeriod;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return float|string
     * @codeCoverageIgnoreStart
     */
    public function getCpuRtRuntime()
    {
        return $this->cpuRtRuntime;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float|string $cpuRtRuntime
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCpuRtRuntime($cpuRtRuntime)
    {
        $this->cpuRtRuntime = $cpuRtRuntime;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return float|string
     * @codeCoverageIgnoreStart
     */
    public function getCpus()
    {
        return $this->cpus;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float|string $cpus
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCpus($cpus)
    {
        $this->cpus = $cpus;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getCpuset()
    {
        return $this->cpuset;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $cpuset
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCpuset($cpuset)
    {
        $this->cpuset = $cpuset;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return ServiceCredentialSpec
     * @codeCoverageIgnoreStart
     */
    public function getCredentialSpec()
    {
        return $this->credentialSpec;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ServiceCredentialSpec $credentialSpec
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setCredentialSpec(ServiceCredentialSpec $credentialSpec)
    {
        $this->credentialSpec = $credentialSpec;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|array|ServiceDependsOnOneOf1PatternPropertiesAZAZ09[]
     * @codeCoverageIgnoreStart
     */
    public function getDependsOn()
    {
        return $this->dependsOn;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array|ServiceDependsOnOneOf1PatternPropertiesAZAZ09[] $dependsOn
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDependsOn($dependsOn)
    {
        $this->dependsOn = $dependsOn;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getDeviceCgroupRules()
    {
        return $this->deviceCgroupRules;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $deviceCgroupRules
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDeviceCgroupRules($deviceCgroupRules)
    {
        $this->deviceCgroupRules = $deviceCgroupRules;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getDevices()
    {
        return $this->devices;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $devices
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDevices($devices)
    {
        $this->devices = $devices;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getDns()
    {
        return $this->dns;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|string[]|array $dns
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDns($dns)
    {
        $this->dns = $dns;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getDnsOpt()
    {
        return $this->dnsOpt;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $dnsOpt
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDnsOpt($dnsOpt)
    {
        $this->dnsOpt = $dnsOpt;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getDnsSearch()
    {
        return $this->dnsSearch;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|string[]|array $dnsSearch
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDnsSearch($dnsSearch)
    {
        $this->dnsSearch = $dnsSearch;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getDomainname()
    {
        return $this->domainname;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $domainname
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setDomainname($domainname)
    {
        $this->domainname = $domainname;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return null|string|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getEntrypoint()
    {
        return $this->entrypoint;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param null|string|string[]|array $entrypoint
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setEntrypoint($entrypoint)
    {
        $this->entrypoint = $entrypoint;
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
     * @return string[]|float[]|bool[]|null[]|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getEnvironment()
    {
        return $this->environment;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|float[]|bool[]|null[]|string[]|array $environment
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|float[]|array
     * @codeCoverageIgnoreStart
     */
    public function getExpose()
    {
        return $this->expose;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|float[]|array $expose
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setExpose($expose)
    {
        $this->expose = $expose;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string|ServiceExtendsOneOf1
     * @codeCoverageIgnoreStart
     */
    public function getExtends()
    {
        return $this->extends;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|ServiceExtendsOneOf1 $extends
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setExtends($extends)
    {
        $this->extends = $extends;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getExternalLinks()
    {
        return $this->externalLinks;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $externalLinks
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setExternalLinks($externalLinks)
    {
        $this->externalLinks = $externalLinks;
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
     * @return string[]|float[]|array
     * @codeCoverageIgnoreStart
     */
    public function getGroupAdd()
    {
        return $this->groupAdd;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|float[]|array $groupAdd
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setGroupAdd($groupAdd)
    {
        $this->groupAdd = $groupAdd;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return Healthcheck
     * @codeCoverageIgnoreStart
     */
    public function getHealthcheck()
    {
        return $this->healthcheck;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param Healthcheck $healthcheck
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHealthcheck(Healthcheck $healthcheck)
    {
        $this->healthcheck = $healthcheck;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getHostname()
    {
        return $this->hostname;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $hostname
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getImage()
    {
        return $this->image;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $image
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return bool
     * @codeCoverageIgnoreStart
     */
    public function getInit()
    {
        return $this->init;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $init
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setInit($init)
    {
        $this->init = $init;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getIpc()
    {
        return $this->ipc;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $ipc
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setIpc($ipc)
    {
        $this->ipc = $ipc;
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
    public function getLinks()
    {
        return $this->links;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $links
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return ServiceLogging
     * @codeCoverageIgnoreStart
     */
    public function getLogging()
    {
        return $this->logging;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param ServiceLogging $logging
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setLogging(ServiceLogging $logging)
    {
        $this->logging = $logging;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getMacAddress()
    {
        return $this->macAddress;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $macAddress
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMacAddress($macAddress)
    {
        $this->macAddress = $macAddress;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return float|string
     * @codeCoverageIgnoreStart
     */
    public function getMemLimit()
    {
        return $this->memLimit;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float|string $memLimit
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMemLimit($memLimit)
    {
        $this->memLimit = $memLimit;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string|int
     * @codeCoverageIgnoreStart
     */
    public function getMemReservation()
    {
        return $this->memReservation;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|int $memReservation
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMemReservation($memReservation)
    {
        $this->memReservation = $memReservation;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getMemSwappiness()
    {
        return $this->memSwappiness;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $memSwappiness
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMemSwappiness($memSwappiness)
    {
        $this->memSwappiness = $memSwappiness;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return float|string
     * @codeCoverageIgnoreStart
     */
    public function getMemswapLimit()
    {
        return $this->memswapLimit;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float|string $memswapLimit
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setMemswapLimit($memswapLimit)
    {
        $this->memswapLimit = $memswapLimit;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getNetworkMode()
    {
        return $this->networkMode;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $networkMode
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setNetworkMode($networkMode)
    {
        $this->networkMode = $networkMode;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|array|ServiceNetworksOneOf1PatternPropertiesAZAZ09OneOf0[]|null[]
     * @codeCoverageIgnoreStart
     */
    public function getNetworks()
    {
        return $this->networks;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array|ServiceNetworksOneOf1PatternPropertiesAZAZ09OneOf0[]|null[] $networks
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setNetworks($networks)
    {
        $this->networks = $networks;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return bool
     * @codeCoverageIgnoreStart
     */
    public function getOomKillDisable()
    {
        return $this->oomKillDisable;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $oomKillDisable
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setOomKillDisable($oomKillDisable)
    {
        $this->oomKillDisable = $oomKillDisable;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getOomScoreAdj()
    {
        return $this->oomScoreAdj;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $oomScoreAdj
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setOomScoreAdj($oomScoreAdj)
    {
        $this->oomScoreAdj = $oomScoreAdj;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string|null
     * @codeCoverageIgnoreStart
     */
    public function getPid()
    {
        return $this->pid;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|null $pid
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return float|string
     * @codeCoverageIgnoreStart
     */
    public function getPidsLimit()
    {
        return $this->pidsLimit;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float|string $pidsLimit
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPidsLimit($pidsLimit)
    {
        $this->pidsLimit = $pidsLimit;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getPlatform()
    {
        return $this->platform;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $platform
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return float[]|string[]|ServicePortsItemsOneOf2[]|array
     * @codeCoverageIgnoreStart
     */
    public function getPorts()
    {
        return $this->ports;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float[]|string[]|ServicePortsItemsOneOf2[]|array $ports
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPorts($ports)
    {
        $this->ports = $ports;
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
     * @return string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getProfiles()
    {
        return $this->profiles;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $profiles
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setProfiles($profiles)
    {
        $this->profiles = $profiles;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getPullPolicy()
    {
        return $this->pullPolicy;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $pullPolicy
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setPullPolicy($pullPolicy)
    {
        $this->pullPolicy = $pullPolicy;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return bool
     * @codeCoverageIgnoreStart
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $readOnly
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setReadOnly($readOnly)
    {
        $this->readOnly = $readOnly;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getRestart()
    {
        return $this->restart;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $restart
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRestart($restart)
    {
        $this->restart = $restart;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getRuntime()
    {
        return $this->runtime;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $runtime
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int
     * @codeCoverageIgnoreStart
     */
    public function getScale()
    {
        return $this->scale;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int $scale
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setScale($scale)
    {
        $this->scale = $scale;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getSecurityOpt()
    {
        return $this->securityOpt;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $securityOpt
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSecurityOpt($securityOpt)
    {
        $this->securityOpt = $securityOpt;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return float|string
     * @codeCoverageIgnoreStart
     */
    public function getShmSize()
    {
        return $this->shmSize;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param float|string $shmSize
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
     * @return string[]|float[]|bool[]|null[]|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getSysctls()
    {
        return $this->sysctls;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|float[]|bool[]|null[]|string[]|array $sysctls
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setSysctls($sysctls)
    {
        $this->sysctls = $sysctls;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return bool
     * @codeCoverageIgnoreStart
     */
    public function getStdinOpen()
    {
        return $this->stdinOpen;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $stdinOpen
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStdinOpen($stdinOpen)
    {
        $this->stdinOpen = $stdinOpen;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getStopGracePeriod()
    {
        return $this->stopGracePeriod;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $stopGracePeriod
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStopGracePeriod($stopGracePeriod)
    {
        $this->stopGracePeriod = $stopGracePeriod;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getStopSignal()
    {
        return $this->stopSignal;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $stopSignal
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStopSignal($stopSignal)
    {
        $this->stopSignal = $stopSignal;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return mixed
     * @codeCoverageIgnoreStart
     */
    public function getStorageOpt()
    {
        return $this->storageOpt;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param mixed $storageOpt
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setStorageOpt($storageOpt)
    {
        $this->storageOpt = $storageOpt;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string|string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getTmpfs()
    {
        return $this->tmpfs;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string|string[]|array $tmpfs
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTmpfs($tmpfs)
    {
        $this->tmpfs = $tmpfs;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return bool
     * @codeCoverageIgnoreStart
     */
    public function getTty()
    {
        return $this->tty;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param bool $tty
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setTty($tty)
    {
        $this->tty = $tty;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return int[]|ServiceUlimitsPatternPropertiesAZOneOf1[]
     * @codeCoverageIgnoreStart
     */
    public function getUlimits()
    {
        return $this->ulimits;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param int[]|ServiceUlimitsPatternPropertiesAZOneOf1[] $ulimits
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setUlimits($ulimits)
    {
        $this->ulimits = $ulimits;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getUser()
    {
        return $this->user;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $user
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getUts()
    {
        return $this->uts;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $uts
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setUts($uts)
    {
        $this->uts = $uts;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getUsernsMode()
    {
        return $this->usernsMode;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $usernsMode
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setUsernsMode($usernsMode)
    {
        $this->usernsMode = $usernsMode;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|ServiceVolumesItemsOneOf1[]|array
     * @codeCoverageIgnoreStart
     */
    public function getVolumes()
    {
        return $this->volumes;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|ServiceVolumesItemsOneOf1[]|array $volumes
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setVolumes($volumes)
    {
        $this->volumes = $volumes;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string[]|array
     * @codeCoverageIgnoreStart
     */
    public function getVolumesFrom()
    {
        return $this->volumesFrom;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string[]|array $volumesFrom
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setVolumesFrom($volumesFrom)
    {
        $this->volumesFrom = $volumesFrom;
        return $this;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function getWorkingDir()
    {
        return $this->workingDir;
    }
    /** @codeCoverageIgnoreEnd */

    /**
     * @param string $workingDir
     * @return $this
     * @codeCoverageIgnoreStart
     */
    public function setWorkingDir($workingDir)
    {
        $this->workingDir = $workingDir;
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