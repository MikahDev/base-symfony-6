<?php

namespace App\Form;

use App\Entity\Config;
use App\Form\DataTransformer\SettingsTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConfigType extends AbstractType
{
    private SettingsTransformer $transformer;

    public function __construct(SettingsTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->addModelTransformer($this->transformer);

        foreach ($options['settings'] as $setting) {
            $builder->add($setting->getSetting(), null, [
                'data' => $setting->getValue(),
                'label' => ucfirst(str_replace('_', ' ', $setting->getSetting())),
                // Add other field options as needed
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
            'settings' => [], // Pass the settings array
        ]);
    }
}
