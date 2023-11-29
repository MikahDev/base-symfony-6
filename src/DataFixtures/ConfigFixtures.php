<?php

namespace App\DataFixtures;

use App\Entity\Config;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class ConfigFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager): void
    {
        $settings = [
            'app_name' => 'mikah',
            'logo' => '/path/to/default/logo.png',
            'theme' => 'light',
            // Add more settings as needed
        ];

        foreach ($settings as $key => $value) {
            $setting = new Config();
            $setting->setSetting($key);
            $setting->setValue($value);
            $manager->persist($setting);
        }

        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['config'];
    }
}
