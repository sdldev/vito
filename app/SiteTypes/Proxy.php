<?php

namespace App\SiteTypes;

use App\Enums\SiteFeature;
use App\SSH\Services\Webserver\Webserver;
use Illuminate\Validation\Rule;

class Proxy extends PHPSite
{
    public function supportedFeatures(): array
    {
        return [
            SiteFeature::SSL,
        ];
    }

    public function createRules(array $input): array
    {
        return [];
    }

    public function createFields(array $input): array
    {
        return [];
    }

    public function data(array $input): array
    {
        return [];
    }

    public function install(): void
    {
        /** @var Webserver $webserver */
        $webserver = $this->site->server->webserver()->handler();
        $webserver->createVHost($this->site);
        $this->progress(65);
    }
}
