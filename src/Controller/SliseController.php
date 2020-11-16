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
            'backgroundImage' => $package->getUrl('/images/bg.gif'),
            'logo' => ['image' => $package->getUrl('/images/slise2.png'), 'alt' => 'slise logo'],
            'items' => [
                ['name' => 'Chi siamo', 'link' => $this->generateUrl('chi-siamo')],
                ['name' => 'Servizi', 'link' => $this->generateUrl('services')],
            ],
            'callToAction' => ['name' => 'Contattaci', 'link' => $this->generateUrl('contact')],
            'content' => [
                'title' => 'Attrazione comunicativa', 
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
                'title' => 'Trasformiamo idee in storie di successo.'
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
            'callToAction' => ['name' => 'Contattaci', 'link' => $this->generateUrl('contact')],
            'content' => [
                'title' => 'Fatti attrarre dai nostri servizi'
            ]
        ];

        $services = [
            [
                'logo' => $package->getUrl('/icons/icona siti web.svg'),
                'title' => 'Programmazione e Web Design',
                'subtitle' => 'Perchè un sito web?',
                'description' => "Il sito web è il tuo biglietto da visita digitale: la tua voce quando non puoi parlare; il punto d’incontro tra forma e sostanza in perfetto equilibrio tra design e funzionalità.Ogni sito racconta una storia diversa, qual è la tua? 

                Possiamo raccontare la tua storia in diversi modi: la nostra mission sarà individuare insieme a te sceneggiatura e voce narrante.In base a questo capiremo se usare un tema o crearlo su misura per te, se usare un CMS oppure crearlo da zero scrivendo tutto il codice. ",
            ],[
                'logo' => $package->getUrl('/icons/icona Coptwriting.svg'),
                'title' => 'Copywriting',
                'subtitle' => 'La voce della comunicazione ',
                'description' => "Qualsiasi tipo di contenuto, in comunicazione, ha bisogno di supporto te- stuale: è proprio per questo che il copy è fondamentale.Perché la nostra presenza online sia efficace, anche contenuti e voce nar- rante devono essere coerenti e sapientemente studiati. 

                Perché avere le parole giuste e sapere cosa dire aiuta, sempre. ",
            ],[
                'logo' => $package->getUrl('/icons/icona Seo e Sem.svg'),
                'title' => 'Search Engine Optimisation',
                'subtitle' => 'Se c’è SEO ci SEI.',
                'description' => "Ottimizzare i contenuti del tuo sito può aiutarti ad essere sempre in testa, ma per farlo bisogna usarla, la testa. Un’attenta analisi, chiamata Audit, offre il ‘quadro clinico’ del tuo sito; così capirai se ‘starà bene’ o avrà bisogno di ‘un intervento a cuore aperto’
                ",
            ],[
                'logo' => $package->getUrl('/icons/icona social media .svg'),
                'title' => 'Social media marketing',
                'subtitle' => 'Socializziamo',
                'description' => "Qualsiasi tipo di contenuto, in comunicazione, ha bisogno di supporto te- stuale: è proprio per questo che il copy è fondamentale.Perché la nostra presenza online sia efficace, anche contenuti e voce nar- rante devono essere coerenti e sapientemente studiati. 

                Perché avere le parole giuste e sapere cosa dire aiuta, sempre. ",
            ],[
                'logo' => $package->getUrl('/icons/Icone_Branding .svg'),
                'title' => 'Branding',
                'subtitle' => 'Il tuo nome sulla bocca di tutti ',
                'description' => "Con Branding intendiamo il percorso grazie al quale sei in grado di distinguerti dai tuoi competitor. La sua mission è la promozione dell’immagine aziendale, nonché innamorare e fidelizzare il cliente. Insomma, differenziamoci dalla massa.",
            ],[
                'logo' => $package->getUrl('/icons/Icone_Lead Generation.svg'),
                'title' => 'ADV & Lead Generation',
                'subtitle' => 'Generiamo Fatturato',
                'description' => "Un lead è un contatto molto qualificato: un potenziale cliente interessato al prodotto/servizio che offri. Un azione di Lead Generation è in grado di offrirti tanti contatti in base a quanto decidi. Vediamola come un acceleratore: più lo premiamo a fondo, più clienti saremo in grado di ottenere.
                
                PS: sapere come regolare il pedale, farà la differenza. ",
            ],[
                'logo' => $package->getUrl('/icons/Icone_Video.svg'),
                'title' => 'Video',
                'subtitle' => 'Ciak, Si gira!',
                'description' => "Un video lo rende reale, imprimilo su pellicola e sarà per sempre. Se parlia- mo di un evento, oltre ad avere un ricordo, il tuo video è declinabile per spot e campagne marketing più disparate.Se invece sei un artista, un book fotografico ti rende glamour, un videobook, una leggenda. 

                Questo perché dopo una giornata di riprese, il nostro team, in post produ- zione, tra color correction e color grading, enfatizza e rende emozionante ogni singolo frame. ",
            ],[
                'logo' => $package->getUrl('/icons/Icone_Influencer.svg'),
                'title' => 'Influencer marketing',
                'subtitle' => 'Influenze positive',
                'description' => "L'Influencer marketing è la capacità di \"influenzare\", generare passaparola strategico e incidere in maniera significativa sulla visibilità del brand.Ogni obiettivo è una sfida da vincere a colpi di stories. 
                Il match perfetto esiste, Tinder insegna. 
                Infatti il risultato di una campagna, dipende molto dall’affinità tra il brand e l’influencer coinvolto. 
                
                Ogni Brand ha una storia, è come la raccontiamo che fa la differenza",
            ],[
                'logo' => $package->getUrl('/icons/Icone_Virtual tour.svg'),
                'title' => 'Virtual tour',
                'subtitle' => 'Il tuo mondo, fisicamente online',
                'description' => "Il tuo store, come dal vivo, online. Le persone possono entrare, vedere i prodotti sullo scaffale virtuale e....comprare direttamente dallo shop online. Semplice e Smart allo stesso tempo.",
            ],[
                'logo' => $package->getUrl('/icons/Icone_Managment.svg'),
                'title' => 'Management',
                'subtitle' => 'Verso la tua strada',
                'description' => "L’ultima frontiera della comunicazione, tra vita online e offline. Ci prendiamo cura delle nostre leggende gestendo anche immagine, reputazione e canali Social per una scalata verso il successo.",
            ],[
                'logo' => $package->getUrl('/icons/icona Fotografia.svg'),
                'title' => 'Fotografia',
                'subtitle' => 'Mettiti in posa',
                'description' => "Anche l’occhio vuole la sua parte, soprattutto nel nostro settore. Proprio per questo, realizziamo book fotografici che includono la presenza di make-up Artist e Stylist per rendere ancora più professionale e accattivante la tua immagine.
                A te spetta solo scegliere il set fotografico: in Studio o in Esterna.
                Ah, realizziamo anche reportage di eventi, fantastici per dare un tocco inaspettato e ‘rubare’ lo scatto perfetto.",
            ],
        ];

        $servicesHead = [
            'image' => $package->getUrl('/images/pit_slise.png'),
            'title' => 'Attraiamo le tue idee transformandole nel progetto che hai sempre sognato',
            'description' => 'Slise nasce dalla volontà di offrire servizi di comunicazione a 360 gradi. Crediamo un sacco nel superpotere della comunicazione e quanto sia indispensabile dare ai vostri Brand, il supporto e l\'importanza che meritano.',
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
