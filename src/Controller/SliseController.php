<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use Symfony\Component\HttpFoundation\Request;
use PHPMailer\PHPMailer\PHPMailer;

class SliseController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        $request = new Request();
        $package = new Package(new EmptyVersionStrategy());
        $meta = [
            'title' => 'Sito Web ufficiale Slise',
            'description' => 'C’era una volta, in un paese lontano lontano, uno studio di comunicazione. 
            Visto che tutte le migliori storie iniziano così, abbiamo pensato di prendere spunto dalla tradizione, la stessa che però abbiamo deciso di innovare e rivoluzionare',
            'socialImage' => $package->getUrl('/images/pexels-fauxels-3184325.jpg'),
            'url' => $this->generateUrl('homepage'),
            'keywords' => 'Slise studio, agenzia di comunicazione, Attrazione comunicativa',
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

        return $this->render('slise/index.html.twig', [
            'controller_name' => 'SliseController',
            'menu' => $menu,
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
            'description' => 'Slise nasce dalla volontà di offrire servizi di comunicazione a 360 gradi. Crediamo un sacco nel superpotere della comunicazione e quanto sia indispensabile dare ai vostri Brand, il supporto e l\'importanza che meritano.',
            'socialImage' => $package->getUrl('/images/pexels-fauxels-3184325.jpg'),
            'url' => $this->generateUrl('chi-siamo'),
            'keywords' => 'Slise studio, Chi siamo Slise',
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

        return $this->render('slise/about.html.twig', [
            'controller_name' => 'SliseController',
            'menu' => $menu,
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
            'description' => 'Attraiamo le tue idee transformandole nel progetto che hai sempre sognato. Slise nasce dalla volontà di offrire servizi di comunicazione a 360 gradi. Crediamo un sacco nel superpotere della comunicazione e quanto sia indispensabile dare ai vostri Brand, il supporto e l\'importanza che meritano.',
            'socialImage' => $package->getUrl('/images/pexels-fauxels-3184325.jpg'),
            'url' => $this->generateUrl('services'),
            'keywords' => 'Slise studio, Chi siamo Slise',
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
                'logo' => $package->getUrl('/images/icona siti web.svg'),
                'title' => 'Programmazione e Web Design',
                'subtitle' => 'Perchè un sito web?',
                'description' => "Il sito web è il tuo biglietto da visita digitale: la tua voce quando non puoi parlare; il punto d’incontro tra forma e sostanza in perfetto equilibrio tra design e funzionalità.Ogni sito racconta una storia diversa, qual è la tua? 

                Possiamo raccontare la tua storia in diversi modi: la nostra mission sarà individuare insieme a te sceneggiatura e voce narrante.In base a questo capiremo se usare un tema o crearlo su misura per te, se usare un CMS oppure crearlo da zero scrivendo tutto il codice. ",
            ],[
                'logo' => $package->getUrl('/images/icona Coptwriting.svg'),
                'title' => 'Copywriting',
                'subtitle' => 'La voce della comunicazione ',
                'description' => "Qualsiasi tipo di contenuto, in comunicazione, ha bisogno di supporto te- stuale: è proprio per questo che il copy è fondamentale.Perché la nostra presenza online sia efficace, anche contenuti e voce nar- rante devono essere coerenti e sapientemente studiati. 

                Perché avere le parole giuste e sapere cosa dire aiuta, sempre. ",
            ],[
                'logo' => $package->getUrl('/images/icona Seo e Sem.svg'),
                'title' => 'Search Engine Optimisation',
                'subtitle' => 'Se c’è SEO ci SEI.',
                'description' => "Ottimizzare i contenuti del tuo sito può aiutarti ad essere sempre in testa, ma per farlo bisogna usarla, la testa. Un’attenta analisi, chiamata Audit, offre il ‘quadro clinico’ del tuo sito; così capirai se ‘starà bene’ o avrà bisogno di ‘un intervento a cuore aperto’
                ",
            ],[
                'logo' => $package->getUrl('/images/icona social media .svg'),
                'title' => 'Social media marketing',
                'subtitle' => 'Socializziamo',
                'description' => "Qualsiasi tipo di contenuto, in comunicazione, ha bisogno di supporto te- stuale: è proprio per questo che il copy è fondamentale.Perché la nostra presenza online sia efficace, anche contenuti e voce nar- rante devono essere coerenti e sapientemente studiati. 

                Perché avere le parole giuste e sapere cosa dire aiuta, sempre. ",
            ],[
                'logo' => $package->getUrl('/images/Icone_Branding .svg'),
                'title' => 'Branding',
                'subtitle' => 'Il tuo nome sulla bocca di tutti ',
                'description' => "Con Branding intendiamo il percorso grazie al quale sei in grado di distinguerti dai tuoi competitor. La sua mission è la promozione dell’immagine aziendale, nonché innamorare e fidelizzare il cliente. Insomma, differenziamoci dalla massa.",
            ],[
                'logo' => $package->getUrl('/images/Icone_Lead Generation.svg'),
                'title' => 'ADV & Lead Generation',
                'subtitle' => 'Generiamo Fatturato',
                'description' => "Un lead è un contatto molto qualificato: un potenziale cliente interessato al prodotto/servizio che offri. Un azione di Lead Generation è in grado di offrirti tanti contatti in base a quanto decidi. Vediamola come un acceleratore: più lo premiamo a fondo, più clienti saremo in grado di ottenere.
                
                PS: sapere come regolare il pedale, farà la differenza. ",
            ],[
                'logo' => $package->getUrl('/images/Icone_Video.svg'),
                'title' => 'Video',
                'subtitle' => 'Ciak, Si gira!',
                'description' => "Un video lo rende reale, imprimilo su pellicola e sarà per sempre. Se parlia- mo di un evento, oltre ad avere un ricordo, il tuo video è declinabile per spot e campagne marketing più disparate.Se invece sei un artista, un book fotografico ti rende glamour, un videobook, una leggenda. 

                Questo perché dopo una giornata di riprese, il nostro team, in post produ- zione, tra color correction e color grading, enfatizza e rende emozionante ogni singolo frame. ",
            ],[
                'logo' => $package->getUrl('/images/Icone_Influencer.svg'),
                'title' => 'Influencer marketing',
                'subtitle' => 'Influenze positive',
                'description' => "L'Influencer marketing è la capacità di \"influenzare\", generare passaparola strategico e incidere in maniera significativa sulla visibilità del brand.Ogni obiettivo è una sfida da vincere a colpi di stories. 
                Il match perfetto esiste, Tinder insegna. 
                Infatti il risultato di una campagna, dipende molto dall’affinità tra il brand e l’influencer coinvolto. 
                
                Ogni Brand ha una storia, è come la raccontiamo che fa la differenza",
            ],[
                'logo' => $package->getUrl('/images/Icone_Virtual tour.svg'),
                'title' => 'Virtual tour',
                'subtitle' => 'Il tuo mondo, fisicamente online',
                'description' => "Il tuo store, come dal vivo, online. Le persone possono entrare, vedere i prodotti sullo scaffale virtuale e....comprare direttamente dallo shop online. Semplice e Smart allo stesso tempo.",
            ],[
                'logo' => $package->getUrl('/images/Icone_Managment.svg'),
                'title' => 'Management',
                'subtitle' => 'Verso la tua strada',
                'description' => "L’ultima frontiera della comunicazione, tra vita online e offline. Ci prendiamo cura delle nostre leggende gestendo anche immagine, reputazione e canali Social per una scalata verso il successo.",
            ],[
                'logo' => $package->getUrl('/images/icona Fotografia.svg'),
                'title' => 'Fotografia',
                'subtitle' => 'Mettiti in posa',
                'description' => "Anche l’occhio vuole la sua parte, soprattutto nel nostro settore. Proprio per questo, realizziamo book fotografici che includono la presenza di make-up Artist e Stylist per rendere ancora più professionale e accattivante la tua immagine.
                A te spetta solo scegliere il set fotografico: in Studio o in Esterna.
                Ah, realizziamo anche reportage di eventi, fantastici per dare un tocco inaspettato e ‘rubare’ lo scatto perfetto.",
            ],
        ];

        return $this->render('slise/services.html.twig', [
            'controller_name' => 'SliseController',
            'menu' => $menu,
            'meta' => $meta,
            'services' => $services,
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
            'description' => 'Come possiano esserti d\'aiuto?',
            'socialImage' => $package->getUrl('/images/pexels-fauxels-3184325.jpg'),
            'url' => $this->generateUrl('contact'),
            'keywords' => 'Slise studio, Chi siamo Slise',
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
                'title' => 'Slise Studio: lasciati attrarre dalla comunicazione'
            ]
        ];

        return $this->render('slise/contact.html.twig', [
            'controller_name' => 'SliseController',
            'menu' => $menu,
            'meta' => $meta,
        ]);
    }

    /**
     * @Route(
     *      "/consulenza/send", 
     *      name="send_consulenza_slise", 
     *      methods={"POST"}
     * )
     */
    public function sendConsulenza(Request $request){
        $post = $request->request;
        $from = 'info@slise.studio';
        $data = [
            'subject' => 'Richiesta di consulenza dal sito',
            'from' => $from,
            'fromName' => 'Slise studio',
            'email' => $post->get('email'),
            'to' => [
                ['email' => 'info@slise.studio', 'name' => 'Slise studio']
            ],
        ];

        if(!filter_var($post->get('email'), FILTER_VALIDATE_EMAIL))
        return $this->json(['result' => false, 'message' => 'Si sono riscontrati degli errori durante l\'invio della email, controlla i dati inseriti e riprova']);

        $body = $this->renderView('emails/consulenza.html.twig', $data);
        $emailResponse = json_decode($this->sendEmail($data, $body));
        
        return $emailResponse->result
        ? $this->json(['result' => true, 'message' => 'Abbiamo ricevuto con successo la sua richiesta, un nostro operatore la contatterà nel più breve tempo possibile.'])
        : $this->json(['result' => false, 'message' => 'Si sono riscontrati degli errori durante l\'invio della email, la preghiamo di riprovare']);
    }

    /**
     * @Route(
     *      "/contatti/send", 
     *      name="send_contact_slise", 
     *      methods={"POST"}
     * )
     */
    public function sendContatti(Request $request){
        $post = $request->request;
        $from = 'info@slise.studio';
        $data = [
            'fullname' => $post->get('fullname'),
            'tel' => $post->get('tel'),
            'subject' => 'Richiesta di informazioni dal sito',
            'from' => $from,
            'fromName' => 'Slise studio',
            'to' => [
                ['email' => 'info@slise.studio', 'name' => 'Slise studio']
            ],
            'email' => $post->get('email'),
            'text' => $post->get('comment')
        ];

        if(empty($post->get('fullname')) || !filter_var($post->get('email'), FILTER_VALIDATE_EMAIL) || empty($post->get('comment')))
        return $this->json(['result' => false, 'message' => 'Si sono riscontrati degli errori durante l\'invio della email, controlla i dati inseriti e riprova']);

        $body = $this->renderView('emails/contact.html.twig', $data);
        $emailResponse = json_decode($this->sendEmail($data, $body));
        
        return $emailResponse->result
        ? $this->json(['result' => true, 'message' => 'Abbiamo ricevuto con successo la sua richiesta, un nostro operatore la contatterà nel più breve tempo possibile.'])
        : $this->json(['result' => false, 'message' => 'Si sono riscontrati degli errori durante l\'invio della email, la preghiamo di riprovare']);
    }

    
    public function sendEmail($data, $body){
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.ionos.it';                   
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'admin@crazyone.agency';                     
            $mail->Password   = 'Crst3321-';                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
            $mail->Port       = 587; 
            $mail->CharSet = 'utf8';                           
        
            //Recipients
            $mail->From = $data['from'];
            $mail->FromName = $data['fromName'];
            foreach($data['to'] as $to){
                $mail->addAddress($to['email'], $to['name']);
            }
            
            // Content
            $mail->isHTML(true);
            $mail->Subject = $data['subject'];
            $mail->Body    = $body;
        
            return $mail->send()
            ? json_encode(['result' => true, 'message' => 'Email inviato con successo'])
            : json_encode(['result' => false, 'message' => 'Si sono riscontrati degli errori durante l\'invio della email']);
        } catch (Exception $e) {
            return json_encode(['result' => false, 'message' => 'Si sono riscontrati degli errori con la configurazione', 'error' => $mail->ErrorInfo]);
        }
    }
}
