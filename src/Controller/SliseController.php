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
                ['name' => 'Servizi', 'link' => $this->generateUrl('services')],
            ],
            'callToAction' => ['name' => 'Contattaci', 'link' => $this->generateUrl('contact')],
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
                ['name' => 'Chi siamo', 'link' => $this->generateUrl('chi-siamo')],
                ['name' => 'Servizi', 'link' => $this->generateUrl('services')],
            ],
            'callToAction' => ['name' => 'Contattaci', 'link' => $this->generateUrl('contact')],
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

    /**
     * @Route("/servizi", name="services")
     */
    public function services(): Response
    {
        $package = new Package(new EmptyVersionStrategy());

        $meta = [
            'title' => 'Servizi | Slise studio',
            'description' => '',
            'socialImage' => '',
            'url' => '',
            'keywords' => '',
        ];

        $menu = [
            'backgroundImage' => $package->getUrl('/images/pexels-fauxels-3184325.jpg'),
            'logo' => ['image' => $package->getUrl('/images/slise2.png'), 'alt' => 'slise logo'],
            'items' => [
                ['name' => 'Chi siamo', 'link' => $this->generateUrl('chi-siamo')],
                ['name' => 'Servizi', 'link' => $this->generateUrl('services')],
            ],
            'callToAction' => ['name' => 'Contattaci', 'link' => ''],
            'content' => [
                'title' => 'Slise studio dove innovazione è casa'
            ]
        ];

        $services = [
            [
                'logo' => $package->getUrl('/images/phone.png'),
                'title' => 'Programmazione e Web design',
                'subtitle' => 'Perchè un sito web?',
                'description' => "Il sito web è il tuo biglietto da visita digitale: la tua voce quando non puoi
                parlare; il punto d’incontro tra forma e sostanza in perfetto equilibrio tra
                design e funzionalità.
                Ogni sito racconta una storia diversa, qual è la tua?
                
                Possiamo raccontare la tua storia in diversi modi, la nostra mission sarà in-
                dividuare insieme a te sceneggiatura e voce narrante.
                
                In base a questo capiremo se usare un tema o crearlo su misura per te, se
                usare un CMS oppure crearlo da zero scrivendo tutto il codice.",
            ],[
                'logo' => $package->getUrl('/images/phone.png'),
                'title' => 'Programmazione e Web design',
                'subtitle' => 'Perchè un sito web?',
                'description' => "Il sito web è il tuo biglietto da visita digitale: la tua voce quando non puoi
                parlare; il punto d’incontro tra forma e sostanza in perfetto equilibrio tra
                design e funzionalità.
                Ogni sito racconta una storia diversa, qual è la tua?
                
                Possiamo raccontare la tua storia in diversi modi, la nostra mission sarà in-
                dividuare insieme a te sceneggiatura e voce narrante.
                
                In base a questo capiremo se usare un tema o crearlo su misura per te, se
                usare un CMS oppure crearlo da zero scrivendo tutto il codice.",
            ],[
                'logo' => $package->getUrl('/images/phone.png'),
                'title' => 'Programmazione e Web design',
                'subtitle' => 'Perchè un sito web?',
                'description' => "Il sito web è il tuo biglietto da visita digitale: la tua voce quando non puoi
                parlare; il punto d’incontro tra forma e sostanza in perfetto equilibrio tra
                design e funzionalità.
                Ogni sito racconta una storia diversa, qual è la tua?
                
                Possiamo raccontare la tua storia in diversi modi, la nostra mission sarà in-
                dividuare insieme a te sceneggiatura e voce narrante.
                
                In base a questo capiremo se usare un tema o crearlo su misura per te, se
                usare un CMS oppure crearlo da zero scrivendo tutto il codice.",
            ],[
                'logo' => $package->getUrl('/images/phone.png'),
                'title' => 'Programmazione e Web design',
                'subtitle' => 'Perchè un sito web?',
                'description' => "Il sito web è il tuo biglietto da visita digitale: la tua voce quando non puoi
                parlare; il punto d’incontro tra forma e sostanza in perfetto equilibrio tra
                design e funzionalità.
                Ogni sito racconta una storia diversa, qual è la tua?
                
                Possiamo raccontare la tua storia in diversi modi, la nostra mission sarà in-
                dividuare insieme a te sceneggiatura e voce narrante.
                
                In base a questo capiremo se usare un tema o crearlo su misura per te, se
                usare un CMS oppure crearlo da zero scrivendo tutto il codice.",
            ],[
                'logo' => $package->getUrl('/images/phone.png'),
                'title' => 'Programmazione e Web design',
                'subtitle' => 'Perchè un sito web?',
                'description' => "Il sito web è il tuo biglietto da visita digitale: la tua voce quando non puoi
                parlare; il punto d’incontro tra forma e sostanza in perfetto equilibrio tra
                design e funzionalità.
                Ogni sito racconta una storia diversa, qual è la tua?
                
                Possiamo raccontare la tua storia in diversi modi, la nostra mission sarà in-
                dividuare insieme a te sceneggiatura e voce narrante.
                
                In base a questo capiremo se usare un tema o crearlo su misura per te, se
                usare un CMS oppure crearlo da zero scrivendo tutto il codice.",
            ],[
                'logo' => $package->getUrl('/images/phone.png'),
                'title' => 'Programmazione e Web design',
                'subtitle' => 'Perchè un sito web?',
                'description' => "Il sito web è il tuo biglietto da visita digitale: la tua voce quando non puoi
                parlare; il punto d’incontro tra forma e sostanza in perfetto equilibrio tra
                design e funzionalità.
                Ogni sito racconta una storia diversa, qual è la tua?
                
                Possiamo raccontare la tua storia in diversi modi, la nostra mission sarà in-
                dividuare insieme a te sceneggiatura e voce narrante.
                
                In base a questo capiremo se usare un tema o crearlo su misura per te, se
                usare un CMS oppure crearlo da zero scrivendo tutto il codice.",
            ],[
                'logo' => $package->getUrl('/images/phone.png'),
                'title' => 'Programmazione e Web design',
                'subtitle' => 'Perchè un sito web?',
                'description' => "Il sito web è il tuo biglietto da visita digitale: la tua voce quando non puoi
                parlare; il punto d’incontro tra forma e sostanza in perfetto equilibrio tra
                design e funzionalità.
                Ogni sito racconta una storia diversa, qual è la tua?
                
                Possiamo raccontare la tua storia in diversi modi, la nostra mission sarà in-
                dividuare insieme a te sceneggiatura e voce narrante.
                
                In base a questo capiremo se usare un tema o crearlo su misura per te, se
                usare un CMS oppure crearlo da zero scrivendo tutto il codice.",
            ],[
                'logo' => $package->getUrl('/images/phone.png'),
                'title' => 'Programmazione e Web design',
                'subtitle' => 'Perchè un sito web?',
                'description' => "Il sito web è il tuo biglietto da visita digitale: la tua voce quando non puoi
                parlare; il punto d’incontro tra forma e sostanza in perfetto equilibrio tra
                design e funzionalità.
                Ogni sito racconta una storia diversa, qual è la tua?
                
                Possiamo raccontare la tua storia in diversi modi, la nostra mission sarà in-
                dividuare insieme a te sceneggiatura e voce narrante.
                
                In base a questo capiremo se usare un tema o crearlo su misura per te, se
                usare un CMS oppure crearlo da zero scrivendo tutto il codice.",
            ],[
                'logo' => $package->getUrl('/images/phone.png'),
                'title' => 'Programmazione e Web design',
                'subtitle' => 'Perchè un sito web?',
                'description' => "Il sito web è il tuo biglietto da visita digitale: la tua voce quando non puoi
                parlare; il punto d’incontro tra forma e sostanza in perfetto equilibrio tra
                design e funzionalità.
                Ogni sito racconta una storia diversa, qual è la tua?
                
                Possiamo raccontare la tua storia in diversi modi, la nostra mission sarà in-
                dividuare insieme a te sceneggiatura e voce narrante.
                
                In base a questo capiremo se usare un tema o crearlo su misura per te, se
                usare un CMS oppure crearlo da zero scrivendo tutto il codice.",
            ],
        ];

        $servicesHead = [
            'image' => $package->getUrl('/images/pit_slise.png'),
            'title' => 'Creazione e realizzazione siti web ottimizzati mobile responsive',
            'description' => 'La tua Web Agency a Milano per lo sviluppo, progettazione, creazione e realizzazione 
            siti responsive o mobile con gestionale incluso. Punto fondamentale per la comunicazione 
            attraverso i servizi web senza mai trascurare la navigazione mobile e desktop. Richiedi 
            un preventivo gratuito per la creazione del tuo sito web responsive',
            'cta' => 'Richiedi preventivo',
        ];

        $header = [
            'title' => 'Slise studio',
            'description' => 'Lorem Ipsum',
        ];

        return $this->render('slise/services.html.twig', [
            'controller_name' => 'SliseController',
            'menu' => $menu,
            'header' => $header,
            'meta' => $meta,
            'services' => $services,
            'servicesHead' => $servicesHead,
        ]);
    }

    /**
     * @Route("/contatti", name="contact")
     */
    public function contact(): Response
    {
        $package = new Package(new EmptyVersionStrategy());

        $meta = [
            'title' => 'Come possiano esserti d\'aiuto? | Slise studio',
            'description' => '',
            'socialImage' => '',
            'url' => '',
            'keywords' => '',
        ];

        $menu = [
            'backgroundImage' => $package->getUrl('/images/pexels-fauxels-3184325.jpg'),
            'logo' => ['image' => $package->getUrl('/images/slise2.png'), 'alt' => 'slise logo'],
            'items' => [
                ['name' => 'Chi siamo', 'link' => $this->generateUrl('chi-siamo')],
                ['name' => 'Servizi', 'link' => $this->generateUrl('services')],
            ],
            'callToAction' => ['name' => 'Contattaci', 'link' => $this->generateUrl('contact')],
            'content' => [
                'title' => 'Slise studio dove innovazione è casa'
            ]
        ];

        $header = [
            'title' => 'Come possiamo esserti d\'aiuto?',
            'description' => 'Lorem Ipsum',
        ];

        return $this->render('slise/contact.html.twig', [
            'controller_name' => 'SliseController',
            'menu' => $menu,
            'header' => $header,
            'meta' => $meta,
        ]);
    }
}
