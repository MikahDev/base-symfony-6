<?php

namespace App\Controller;

use App\Entity\Config;
use App\Form\ConfigType;
use App\Repository\ConfigRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConfigController extends AbstractController
{
    #[Route('/config', name: 'config_index')]
    public function index(Request $request, ConfigRepository $configRepository): Response
    {
        $settings = $configRepository->findAll();
        $form = $this->createForm(ConfigType::class, $settings, [
            'settings' => $settings,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            foreach ($settings as $setting) {
                $settingKey = $setting->getSetting();
                $setting->setValue($form->get($settingKey)->getData());
                $configRepository->add($setting, true);
            }



            $this->addFlash('success', 'Settings updated successfully.');
            return $this->redirectToRoute('config_index');
        }

        return $this->render('config/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
