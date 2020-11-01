<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;

class SliseController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        $package = new Package(new EmptyVersionStrategy());

        $meta = [
            'title' => 'Sito Web ufficiale Slise',
            'description' => '',
            'socialImage' => '',
            'url' => '',
            'keywords' => '',
        ];

        $menu = [
            'backgroundImage' => $package->getUrl('/images/pexels-jopwell-2422294.jpg'),
            'logo' => ['image' => $package->getUrl('/images/slise2.png'), 'alt' => 'slise logo'],
            'items' => [
                ['name' => 'Chi siamo', 'link' => $this->generateUrl('chi-siamo')],
                ['name' => 'Servizi', 'link' => ''],
            ],
            'callToAction' => ['name' => 'Contattaci', 'link' => ''],
            'content' => [
                'title' => 'Slise studio dove innovazione è casa', 
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam risus mauris, sagittis 
                ut efficitur id, suscipit in ipsum. Vivamus ornare convallis lorem. Donec ut justo ac turpis malesuada 
                viverra non ac eros.'
            ]
        ];

        $header = [
            'title' => 'Slise studio',
            'description' => 'Lorem Ipsum',
        ];

        return $this->render('slise/index.html.twig', [
            'controller_name' => 'SliseController',
            'menu' => $menu,
            'header' => $header,
            'meta' => $meta,
        ]);
    }

    /**
     * @Route("/chi-siamo", name="chi-siamo")
     */
    public function about(): Response
    {
        $package = new Package(new EmptyVersionStrategy());

        $meta = [
            'title' => 'Chi siamo | Slise studio',
            'description' => '',
            'socialImage' => '',
            'url' => '',
            'keywords' => '',
        ];

        $menu = [
            'backgroundImage' => $package->getUrl('/images/pexels-fauxels-3184325.jpg'),
            'logo' => ['image' => $package->getUrl('/images/slise2.png'), 'alt' => 'slise logo'],
            'items' => [
                ['name' => 'Chi siamo', 'link' => ''],
                ['name' => 'Servizi', 'link' => ''],
            ],
            'callToAction' => ['name' => 'Contattaci', 'link' => ''],
            'content' => [
                'title' => 'Slise studio dove innovazione è casa'
            ]
        ];

        $header = [
            'title' => 'Slise studio',
            'description' => 'Lorem Ipsum',
        ];

        return $this->render('slise/about.html.twig', [
            'controller_name' => 'SliseController',
            'menu' => $menu,
            'header' => $header,
            'meta' => $meta,
        ]);
    }
}
