<?php

namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

class SettingsTransformer implements DataTransformerInterface
{
    public function transform($settings)
    {
        if (null === $settings) {
            return [];
        }

        $settingsArray = [];
        foreach ($settings as $setting) {
            $settingsArray[$setting->getSetting()] = $setting->getValue();
        }

        return $settingsArray;
    }

    public function reverseTransform($settingsArray)
    {
        // Transform the array back into a collection of Setting entities
        // Implement this based on how you want to handle the form submission
    }
}