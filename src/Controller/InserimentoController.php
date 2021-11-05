<?php

namespace App\Controller;

use App\Entity\MdlUser;
use App\Entity\MdlUserInfoData;
use App\Entity\Utentiwordpress;
use App\Repository\UtentiWordpressRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class InserimentoController extends AbstractController
{
    /**
     * @Route("/inserimento", name="inserimento")
     */
    public function createProduct(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
$entityManager = $this->getDoctrine()->getManager();
$product = new MdlUser();
$product->setauth('Manual');
$product->setconfirmed(1);
$product->setpolicyagreed(0);
$product->setdeleted(0);
$product->setsuspended(0);
$product->setmnethostid(0);
$product->setusername('User');
$product->setpassword('Pass');
$product->setidnumber('');
$product->setfirstname('NULL');
$product->setlastname('NULL');
$product->setemail('email');
$product->setemailstop('NULL');
$product->setphone1('NULL');
$product->setphone2('NULL');
$product->setinstitution('NULL');
$product->setdepartment('NULL');
$product->setaddress('NULL');
$product->setcity('NULL');
$product->setcountry('NULL');
$product->setlang('NULL');
$product->setcalendartype('NULL');
$product->settheme('NULL');
$product->settimezone('NULL');
$product->setfirstaccess('NULL');
$product->setlastaccess('NULL');
$product->setlastlogin('NULL');
$product->setcurrentlogin('NULL');
$product->setlastip('NULL');
$product->setsecret('NULL');
$product->setpicture('NULL');
$product->setdescription('NULL');
$product->setdescriptionformat(1);
$product->setmailformat(1);
$product->setmaildigest('NULL');
$product->setmaildisplay('NULL');
$product->setautosubscribe(1);
$product->settrackforums('NULL');
$product->settimecreated('NULL');
$product->settimemodified('NULL');
$product->settrustbitmask('NULL');
$product->setimagealt('NULL');
$product->setlastnamephonetic('NULL');
$product->setfirstnamephonetic('NULL');
$product->setmiddlename('NULL');
$product->setalternatename('NULL');
$product->setmoodlenetprofile('NULL');

echo "ciao";
       // $entityManager->persist($product);

      //  $entityManager->flush();

      //  return new Response('Saved new product with id '.$product->getId());

      return $this->render('inserimento/index.html.twig');
    }



 /**
 * @Route("/inserimento/{nome}", name="inserimentoCodFiscale")
 */
public function InserisciNomeCognome(Request $request, $nome)
{
// qui recupero i dati da una entità, senza passarli al twig, filtro dalla variabile passata nella funzione
// assegno ad una variabile e poi salvo in una nuova entità

$utenti = $this->getDoctrine()->getManager()->getRepository(Utentiwordpress::class);
$products = $utenti->findOneBy(['nome' => $nome]);
$nome = $products->getNome();
$cognome = $products->getCognome();
$indirizzo1 = $products->getIndirizzo1();
$citta = $products->getCitta();
$stato = $products->getStato();
$cap = $products->getCap();
$nazione = $products->getNazione();
$email = $products->getEmail();
$tel = $products->getTel();
$codfiscale = $products->getCodfiscale();



$em = $this->getDoctrine()->getManager();
$Scrivi = new Utentiwordpress();
$Scrivi = $utenti->findOneBy(['nome' => $nome]);
$Scrivi->setImportato('si');
$em->persist($Scrivi);
$em->flush();

$entityManager = $this->getDoctrine()->getManager();
$product = new MdlUser();
$product->setauth('manual');
$product->setconfirmed(1);
$product->setpolicyagreed(0);
$product->setdeleted(0);
$product->setsuspended(0);
$product->setmnethostid(1);
$product->setusername($nome);
$product->setpassword('$2a$10$co0xUbKD5FROO4sG0M5ocejS0rYeNNAQbIUlZzIzd5r6tcpe0JXHq');
$product->setidnumber('');
$product->setfirstname($nome);
$product->setlastname($cognome);
$product->setemail($email);
$product->setemailstop(0);
$product->setphone1($tel);
$product->setphone2($tel);
$product->setinstitution($nazione);
$product->setdepartment($cap );
$product->setaddress($indirizzo1);
$product->setcity($citta);
$product->setcountry($stato);
$product->setlang('NULL');
$product->setcalendartype('NULL');
$product->settheme('NULL');
$product->settimezone('NULL');
$product->setfirstaccess('NULL');
$product->setlastaccess('NULL');
$product->setlastlogin('NULL');
$product->setcurrentlogin('NULL');
$product->setlastip('NULL');
$product->setsecret('NULL');
$product->setpicture('NULL');
$product->setdescription('NULL');
$product->setdescriptionformat(1);
$product->setmailformat(1);
$product->setmaildigest('NULL');
$product->setmaildisplay('NULL');
$product->setautosubscribe(1);
$product->settrackforums('NULL');
$product->settimecreated('NULL');
$product->settimemodified('NULL');
$product->settrustbitmask('NULL');
$product->setimagealt('NULL');
$product->setlastnamephonetic('NULL');
$product->setfirstnamephonetic('NULL');
$product->setmiddlename('NULL');
$product->setalternatename('NULL');
$product->setmoodlenetprofile('NULL');

$entityManager->persist($product);
$entityManager->flush();


$utentiId = $this->getDoctrine()->getManager()->getRepository(MdlUser::class);
$prodId = $utentiId->findOneBy(['nome' => $nome]);
$Id = $prodId->getId();

// inserimento campi aggiuntivi

            $em1 = $this->getDoctrine()->getManager();
            $Scrivi1 = new MdlUserInfoData();
            $Scrivi1->setUserid($Id);
            $Scrivi1->setFieldid('2');
            $Scrivi1->setData($codfiscale);
            $Scrivi1->setDataformat('0');

            $em1->persist($Scrivi1);
            $em1->flush();

// inserimento campi aggiuntivi

            $em1 = $this->getDoctrine()->getManager();
            $Scrivi1 = new MdlUserInfoData();
            $Scrivi1->setUserid($Id);
            $Scrivi1->setFieldid('3');
            $Scrivi1->setData($codfiscale);
            $Scrivi1->setDataformat('0');

            $em1->persist($Scrivi1);
            $em1->flush();


return $this->redirectToRoute('utenti_moodle');

        //return new Response('Saved new product with id '.$product->getId());

//return $this->render('inserimento/index.html.twig');
    }

    /**
 * @Route("/inserimentoC/{nome}", name="InserisciCampiAggiuntivi")
 */
public function InserisciCampiAggiuntivi(Request $request, $nome)
{
// qui recupero i dati da una entità, senza passarli al twig, filtro dalla variabile passata nella funzione
// assegno ad una variabile e poi salvo in una nuova entità

$utenti = $this->getDoctrine()->getManager()->getRepository(Utentiwordpress::class);
$products = $utenti->findOneBy(['nome' => $nome]);
$nome = $products->getNome();
$cognome = $products->getCognome();
$indirizzo1 = $products->getIndirizzo1();
$citta = $products->getCitta();
$stato = $products->getStato();
$cap = $products->getCap();
$nazione = $products->getNazione();
$email = $products->getEmail();
$tel = $products->getTel();
$codfiscale = $products->getCodfiscale();
$Numiscrizionealbo = $products->getNumiscrizionealbo();



$utentiId = $this->getDoctrine()->getManager()->getRepository(MdlUser::class);
$prodId = $utentiId->findOneBy(['username' => $nome]);
$Id = $prodId->getId();

            // inserimento campi aggiuntivi
            $em1 = $this->getDoctrine()->getManager();
            $InsCampiAggiuntivi = new MdlUserInfoData();
            $InsCampiAggiuntivi->setUserid($Id);
            $InsCampiAggiuntivi->setFieldid('2');
            $InsCampiAggiuntivi->setData($codfiscale);
            $InsCampiAggiuntivi->setDataformat('0');
            $em1->persist($InsCampiAggiuntivi);
            $em1->flush();
            // inserimento campi aggiuntivi
            $em1 = $this->getDoctrine()->getManager();
            $InsCampiAggiuntivi = new MdlUserInfoData();
            $InsCampiAggiuntivi->setUserid($Id);
            $InsCampiAggiuntivi->setFieldid('3');
            $InsCampiAggiuntivi->setData($codfiscale);
            $InsCampiAggiuntivi->setDataformat('0');
            $em1->persist($InsCampiAggiuntivi);
            $em1->flush();
            // inserimento campi aggiuntivi
            $em1 = $this->getDoctrine()->getManager();
            $InsCampiAggiuntivi = new MdlUserInfoData();
            $InsCampiAggiuntivi->setUserid($Id);
            $InsCampiAggiuntivi->setFieldid('5');
            $InsCampiAggiuntivi->setData($codfiscale);
            $InsCampiAggiuntivi->setDataformat('0');
            $em1->persist($InsCampiAggiuntivi);
            $em1->flush();
            // inserimento campi aggiuntivi
            $em1 = $this->getDoctrine()->getManager();
            $InsCampiAggiuntivi = new MdlUserInfoData();
            $InsCampiAggiuntivi->setUserid($Id);
            $InsCampiAggiuntivi->setFieldid('6');
            $InsCampiAggiuntivi->setData($codfiscale);
            $InsCampiAggiuntivi->setDataformat('0');
            $em1->persist($InsCampiAggiuntivi);
            $em1->flush();
            // inserimento campi aggiuntivi
            $em1 = $this->getDoctrine()->getManager();
            $InsCampiAggiuntivi = new MdlUserInfoData();
            $InsCampiAggiuntivi->setUserid($Id);
            $InsCampiAggiuntivi->setFieldid('7');
            $InsCampiAggiuntivi->setData($codfiscale);
            $InsCampiAggiuntivi->setDataformat('0');
            $em1->persist($InsCampiAggiuntivi);
            $em1->flush();
            // inserimento campi aggiuntivi
            $em1 = $this->getDoctrine()->getManager();
            $InsCampiAggiuntivi = new MdlUserInfoData();
            $InsCampiAggiuntivi->setUserid($Id);
            $InsCampiAggiuntivi->setFieldid('8');
            $InsCampiAggiuntivi->setData($codfiscale);
            $InsCampiAggiuntivi->setDataformat('0');
            $em1->persist($InsCampiAggiuntivi);
            $em1->flush();
            // inserimento campi aggiuntivi
            $em1 = $this->getDoctrine()->getManager();
            $InsCampiAggiuntivi = new MdlUserInfoData();
            $InsCampiAggiuntivi->setUserid($Id);
            $InsCampiAggiuntivi->setFieldid('9');
            $InsCampiAggiuntivi->setData($codfiscale);
            $InsCampiAggiuntivi->setDataformat('0');
            $em1->persist($InsCampiAggiuntivi);
            $em1->flush();
            // inserimento campi aggiuntivi
            $em1 = $this->getDoctrine()->getManager();
            $InsCampiAggiuntivi = new MdlUserInfoData();
            $InsCampiAggiuntivi->setUserid($Id);
            $InsCampiAggiuntivi->setFieldid('10');
            $InsCampiAggiuntivi->setData($codfiscale);
            $InsCampiAggiuntivi->setDataformat('0');
            $em1->persist($InsCampiAggiuntivi);
            $em1->flush();
            // inserimento campi aggiuntivi
            $em1 = $this->getDoctrine()->getManager();
            $InsCampiAggiuntivi = new MdlUserInfoData();
            $InsCampiAggiuntivi->setUserid($Id);
            $InsCampiAggiuntivi->setFieldid('11');
            $InsCampiAggiuntivi->setData($tel);
            $InsCampiAggiuntivi->setDataformat('0');
            $em1->persist($InsCampiAggiuntivi);
            $em1->flush();
            // inserimento campi aggiuntivi
            $em1 = $this->getDoctrine()->getManager();
            $InsCampiAggiuntivi = new MdlUserInfoData();
            $InsCampiAggiuntivi->setUserid($Id);
            $InsCampiAggiuntivi->setFieldid('12');
            $InsCampiAggiuntivi->setData($tel);
            $InsCampiAggiuntivi->setDataformat('0');
            $em1->persist($InsCampiAggiuntivi);
            $em1->flush();
            // inserimento campi aggiuntivi
            $em1 = $this->getDoctrine()->getManager();
            $InsCampiAggiuntivi = new MdlUserInfoData();
            $InsCampiAggiuntivi->setUserid($Id);
            $InsCampiAggiuntivi->setFieldid('13');
            $InsCampiAggiuntivi->setData($Numiscrizionealbo);
            $InsCampiAggiuntivi->setDataformat('0');
            $em1->persist($InsCampiAggiuntivi);
            $em1->flush();


return $this->redirectToRoute('utenti_moodle');

//return new Response('Saved new product with id '.$product->getId());

//return $this->render('inserimento/index.html.twig');
    }
 }
     