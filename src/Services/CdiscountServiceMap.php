<?php

namespace SengentoBV\CdiscountMarketplaceSdk\Services;

class CdiscountServiceMap
{
    public const SERVICE_GET = "get";
    public const SERVICE_CREATE = "create";
    public const SERVICE_GENERATE = "generate";
    public const SERVICE_MANAGE = "manage";
    public const SERVICE_SUBMIT = "submit";
    public const SERVICE_CLOSE = "close";
    public const SERVICE_VALIDATE = "validate";

    final public static function all() : array
    {
        return [
            CdiscountServiceMap::SERVICE_GET => CdiscountGet::class,
            CdiscountServiceMap::SERVICE_CREATE => CdiscountCreate::class,
            CdiscountServiceMap::SERVICE_GENERATE => CdiscountGenerate::class,
            CdiscountServiceMap::SERVICE_MANAGE => CdiscountManage::class,
            CdiscountServiceMap::SERVICE_SUBMIT => CdiscountSubmit::class,
            CdiscountServiceMap::SERVICE_CLOSE => CdiscountClose::class,
            CdiscountServiceMap::SERVICE_VALIDATE => CdiscountValidate::class,
        ];
    }

    final public static function get(string $service) : ?string
    {
        $service = strtolower($service);
        $mappings = CdiscountServiceMap::all();

        if (isset($mappings[$service])) {

            return $mappings[$service];
        }

        return null;
    }
}