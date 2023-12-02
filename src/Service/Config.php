<?php

namespace App\Service;

use App\Repository\ConfigRepository;

class Config
{
    private $configRepository;

    public function __construct(ConfigRepository $configRepository) {
        $this->configRepository = $configRepository;
    }

    public function getSetting($setting): ?string
    {
        $setting = $this->configRepository->findOneBy(['setting' => $setting]);

        return $setting->getValue();

    }


}