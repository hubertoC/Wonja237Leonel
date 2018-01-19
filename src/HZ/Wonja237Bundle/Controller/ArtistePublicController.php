<?php

namespace HZ\Wonja237Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HZ\Wonja237Bundle\Form\RechercheType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\DependencyInjection\ContainerInterface;
use HZ\Wonja237Bundle\Form\CommentaireType;
use HZ\Wonja237Bundle\Entity\Commentaire;
use HZ\Wonja237Bundle\Entity\Reservation;
use HZ\Wonja237Bundle\Form\ReservationType;
use HZ\Wonja237Bundle\Form\EnregistrementType;
use HZ\Wonja237Bundle\Form\EnregistrementAutreArtisteType;
use HZ\Wonja237Bundle\Entity\EnregistrementAutreArtiste;
use HZ\Wonja237Bundle\Entity\Enregistrement;
use HZ\Wonja237Bundle\Entity\Contact;
use HZ\Wonja237Bundle\Form\ContactType;
use HZ\Wonja237Bundle\Form\newsLettersType;
use HZ\Wonja237Bundle\Entity\newsLetters;
use HZ\Wonja237Bundle\Form\publiciteDefileType;
use HZ\Wonja237Bundle\Entity\PubliciteDefile;
use HZ\Wonja237Bundle\Form\TestSiteType;
use HZ\Wonja237Bundle\Entity\TestSite;
use Symfony\Component\HttpFoundation\Response;

class ArtistePublicController extends Controller
{


    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $entities =  $em->getRepository('HZWonja237Bundle:Artiste')->findEntitiesByString($requestString);
        if(!$entities) {
            $result['entities']['error'] = "Aucun resultat trouver pour cette recherche.";
        } else {
            $result = array('entities' => $this->getRealEntities($entities));
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($entities){
        foreach ($entities as $entity){
            $realEntities[$entity->getId()] = [$entity->getName() ,$entity->getSurname()];
        }

        return $realEntities;
    }


    public function indexAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();

      $artiste = $em->getRepository('HZWonja237Bundle:Artiste')->findAll();
      shuffle($artiste);
      $category = $em->getRepository('HZWonja237Bundle:Category')->findAll();
      shuffle($category);

      $publicites = $em->getRepository('HZWonja237Bundle:Publicites')->findAll();
      shuffle($publicites);

      $publicitesDefile = $em->getRepository('HZWonja237Bundle:PubliciteDefile')->findAll();
      shuffle($publicitesDefile);

      $actualite = $em->getRepository('HZWonja237Bundle:Actualite')->findAll();
      shuffle($publicitesDefile);

      $newsLetter = new newsLetters();
      $form = $this->createForm(newsLettersType::class, $newsLetter);


      $em = $this->getDoctrine()->getManager();
      $form->handleRequest($request);
              if ($form->isSubmitted() && $form->isValid()) {
                  $em->persist($newsLetter);
                  $em->flush();
      $flashBag = $this->get('session')->getFlashBag();
      $flashBag->get('user-notice'); // gets message and clears type
      $flashBag->set('user-notice', 'Merci, votre enregistrement à la newsletter a été prise en compte');
$email = $form["email"]->getData();

      $message = \Swift_Message::newInstance()
                ->setSubject('Enregistrement à la newsletter')
                ->setFrom(array('huberto@foyang-familie.com' => "Wonja237"))
                ->setTo($email)
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody($this->renderView('HZWonja237Bundle:ArtistePublic:swiftLayout.html.twig'));

                $this->get('mailer')->send($message);


                  $message = \Swift_Message::newInstance()
                          ->setSubject('Nouvel !! Enregistrement à la newsletter')
                          ->setFrom(array('huberto@foyang-familie.com' => "Wonja237"))
                          ->setTo('hubertoz@yahoo.fr')
                          ->setCharset('utf-8')
                          ->setContentType('text/html')
                          ->setBody($this->renderView('HZWonja237Bundle:Emails:receptionNewsLetter.html.twig'));

                          $this->get('mailer')->send($message);
    }

        return $this->render('HZWonja237Bundle:ArtistePublic:index.html.twig', array('artiste' => $artiste, 'category' => $category, 'publicites' => $publicites, 'publicitesDefile' => $publicitesDefile, 'actualite' => $actualite, 'form'=>$form->createView()));
    }


    public function categoryArtisteAction($category, $name)
    {
      $em = $this->getDoctrine()->getManager();



      $artiste = $em->getRepository('HZWonja237Bundle:Artiste')->byCategory($category);
             //exit(\Doctrine\Common\Util\Debug::dump($artiste));

      return $this->render('HZWonja237Bundle:ArtistePublic:categoryArtiste.html.twig', array('artiste' => $artiste, 'name' => $name));
    }

    public function categoryAction()
    {
      $em = $this->getDoctrine()->getManager();

      $category= $em->getRepository('HZWonja237Bundle:Category')->findAll();

        return $this->render('HZWonja237Bundle:ArtistePublic:category.html.twig', array('category' => $category));
      }




public function profileAction($id, Request $request)
{

  $comment = new Commentaire();
  $form = $this->createForm(CommentaireType::class, $comment);
  $em = $this->getDoctrine()->getManager();

  $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {

              $artiste = $em->getRepository('HZWonja237Bundle:Artiste')->findOneBy(array('id' => $id));
              $comment->setArtiste($artiste);
              $em->persist($comment);

              $em->flush();
              //$request->getSession()->getFlashbag()->add('success','Bien jouer!');
              $flashBag = $this->get('session')->getFlashBag();
              $flashBag->get('user-notice'); // gets message and clears type
              $flashBag->set('user-notice', '!! Merci pour votre Enregistrement !!');
          }




  $artiste = $em->getRepository('HZWonja237Bundle:Artiste')->find($id);
  $category = $em->getRepository('HZWonja237Bundle:Category')->findAll();
  $commentaire =  $em->getRepository('HZWonja237Bundle:Artiste')->getArtisteAvecCommentaires();
  shuffle($commentaire);

  return $this->render('HZWonja237Bundle:ArtistePublic:profile.html.twig' , array('form'=>$form->createView(), 'artiste' => $artiste,  'category' => $category, 'commentaire' => $commentaire));
}

public function reservationAction($id, Request $request, $name){
  $reservation = new Reservation();
  $form = $this->createForm(ReservationType::class, $reservation);

  $em = $this->getDoctrine()->getManager();

  $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {

              $artiste = $em->getRepository('HZWonja237Bundle:Artiste')->findOneBy(array('id' => $id));
              $reservation->setArtiste($artiste);
              $em->persist($reservation);
              $em->flush();
              //$request->getSession()->getFlashbag()->add('success','Bien jouer!');


              $flashBag = $this->get('session')->getFlashBag();
  $flashBag->get('user-notice'); // gets message and clears type
  $flashBag->set('user-notice', 'Votre reservation a été Enregistré avec succès!   Wonja vous remerci');


      $email = $form["email"]->getData();

      $message = \Swift_Message::newInstance()
                ->setSubject('Confirmation Réservation Artistes')
                ->setFrom(array('huberto@foyang-familie.com' => "Wonja237"))
                ->setTo($email)
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody($this->renderView('HZWonja237Bundle:ArtistePublic:sendMailConfirmatinReservation.html.twig'));

                $this->get('mailer')->send($message);

          }

  return $this->render('HZWonja237Bundle:ArtistePublic:reservation.html.twig', array('form'=>$form->createView(), 'artiste' => $reservation, 'name' => $name));

}




public function enregistremenArtisteAction(Request $request){

$enregistremenAutreArtiste = new EnregistrementAutreArtiste();
$formAutre = $this->createForm(EnregistrementAutreArtisteType::class, $enregistremenAutreArtiste);


$em = $this->getDoctrine()->getManager();
$formAutre->handleRequest($request);
        if ($formAutre->isSubmitted() && $formAutre->isValid()) {
            $em->persist($enregistremenAutreArtiste);
            $em->flush();
$flashBag = $this->get('session')->getFlashBag();
$flashBag->get('user-notice'); // gets message and clears type
$flashBag->set('user-notice', 'Vous avez été Enregistrer avec success!');

$email = $formAutre["email"]->getData();
$surname = $formAutre["surname"]->getData();


      $message = \Swift_Message::newInstance()
                ->setSubject('Confirmation d’inscription Artistes')
                ->setFrom(array('huberto@foyang-familie.com' => "Wonja237"))
                ->setTo($email)
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody($this->renderView('HZWonja237Bundle:ArtistePublic:sendMailConfimationEnregistremenArtiste.html.twig', array( 'surname' => $surname)));

                $this->get('mailer')->send($message);
                

}

  return $this->render('HZWonja237Bundle:ArtistePublic:enregistremenArtiste.html.twig', array('formAutre'=>$formAutre->createView()));

}


public function contactAction(Request $request){
  $contact = new Contact();
  $form = $this->createForm(ContactType::class, $contact);


  $em = $this->getDoctrine()->getManager();
  $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {
              $em->persist($contact);
              $em->flush();
  $flashBag = $this->get('session')->getFlashBag();
  $flashBag->get('user-notice'); // gets message and clears type
  $flashBag->set('user-notice', '!! Nous vous remercions !!');

  $email = $form["email"]->getData();

      $message = \Swift_Message::newInstance()
                ->setSubject('Validation de votre Prise de Contact')
                ->setFrom(array('huberto@foyang-familie.com' => "Wonja237"))
                ->setTo($email)
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody($this->renderView('HZWonja237Bundle:ArtistePublic:swiftLayout.html.twig'));

                $this->get('mailer')->send($message);
}
  return $this->render('HZWonja237Bundle:ArtistePublic:contact.html.twig', array('form'=>$form->createView()));

}




public function newsLettersAction(Request $request, \Swift_Mailer $mailer){
  $newsLetter = new newsLetters();
  $form = $this->createForm(newsLettersType::class, $newsLetter);


  $em = $this->getDoctrine()->getManager();
  $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {
              $em->persist($newsLetter);
              $em->flush();
  $flashBag = $this->get('session')->getFlashBag();
  $flashBag->get('user-notice'); // gets message and clears type
  $flashBag->set('user-notice', '!! Enregistrement newsLetter avec success!!');




}
  return $this->render('HZWonja237Bundle:ArtistePublic:newsLetter.html.twig', array('form'=>$form->createView()));

}



public function commentaireAction($id, Request $request)
{
  $em = $this->getDoctrine()->getManager();
  $artiste = $em->getRepository('HZWonja237Bundle:Artiste')->find($id);

  $commentaire =  $em->getRepository('HZWonja237Bundle:Artiste')->getArtisteAvecCommentaires();
  shuffle($commentaire);

  return $this->render('HZWonja237Bundle:ArtistePublic:message_commentaire.html.twig' , array('artiste' => $artiste, 'commentaire' => $commentaire));
}


public function testSiteAction( Request $request){
  $testSite = new TestSite();
  $formAutre = $this->createForm(TestSiteType::class, $testSite);

  $em = $this->getDoctrine()->getManager();

  $formAutre->handleRequest($request);
          if ($formAutre->isSubmitted() && $formAutre->isValid()) {
              $em->persist($testSite);
              $em->flush();
              //$request->getSession()->getFlashbag()->add('success','Bien jouer!');


              $flashBag = $this->get('session')->getFlashBag();
  $flashBag->get('user-notice'); // gets message and clears type
  $flashBag->set('user-notice', 'Merci d\'avoir participé');

  $reference = $testSite->getId();
  $nom= $formAutre["nom"]->getData();
  $profession = $formAutre["profession"]->getData();
  $sexe = $formAutre["sexe"]->getData();
  $ternaminal = $formAutre["ternaminal"]->getData();
  $bonneNavigation = $formAutre["bonneNavigation"]->getData();
  $connaisTuInternet = $formAutre["connaisTuInternet"]->getData();
  $sitePrefere = $formAutre["sitePrefere"]->getData();
  $pourquoiSitePreferer = $formAutre["pourquoiSitePreferer"]->getData();
  $attractionPageAcceuil = $formAutre["attractionPageAcceuil"]->getData();
  $barreDeRescherche = $formAutre["barreDeRescherche"]->getData();
  $ameliorationBarreDeRecherche = $formAutre["ameliorationBarreDeRecherche"]->getData();
  $inscriptionProzess = $formAutre["inscriptionProzess"]->getData();
  $inscriptionOK = $formAutre["inscriptionOK"]->getData();
  $inscriptionPourQuoi = $formAutre["inscriptionPourQuoi"]->getData();
  $reservationProzess = $formAutre["reservationProzess"]->getData();
  $reservationOK = $formAutre["reservationOK"]->getData();
  $reservationPourQuoi = $formAutre["reservationPourQuoi"]->getData();
  $acceCategorieOk = $formAutre["acceCategorieOk"]->getData();
  $acceCategoriePourQuoi = $formAutre["acceCategoriePourQuoi"]->getData();
  $presentationCategorie = $formAutre["presentationCategorie"]->getData();
  $ameliorationCategorie = $formAutre["ameliorationCategorie"]->getData();
  $publiciteRemarque = $formAutre["publiciteRemarque"]->getData();
  $ameliorationPublicite = $formAutre["ameliorationPublicite"]->getData();
  $partenaireUtileOK = $formAutre["partenaireUtileOK"]->getData();
  $partenaiQuePensezVous = $formAutre["partenaiQuePensezVous"]->getData();
  $testNewsLetter = $formAutre["testNewsLetter"]->getData();
  $testContact = $formAutre["testContact"]->getData();
  $reponseParamilOK = $formAutre["reponseParamilOK"]->getData();
  $reseauOk = $formAutre["reseauOk"]->getData();
  $ameliorationGlobale= $formAutre["ameliorationGlobale"]->getData();
  $structureDuContenu= $formAutre["structureDuContenu"]->getData();
  $pertinenceContenu= $formAutre["pertinenceContenu"]->getData();
  $design = $formAutre["design"]->getData();
  $ergonomie = $formAutre["ergonomie"]->getData();
  $simplicte = $formAutre["simplicte"]->getData();
  $intuitivite = $formAutre["intuitivite"]->getData();
  $originalite = $formAutre["originalite"]->getData();



  $message = \Swift_Message::newInstance()
            ->setSubject('Nouvelle participation au test du site wonja 237')
            ->setFrom(array('huberto@foyang-familie.com' => "Wonja237"))
            ->setTo(['Abelboutcheu@yahoo.fr','hubertoz@yahoo.fr', 'Wonjacorp@Gmail.com'])
            ->setCharset('utf-8')
            ->setContentType('text/html')
            ->setBody($this->renderView('HZWonja237Bundle:Emails:testReception.html.twig', array(
              'nom' => $nom,
              'profession' => $profession,
              'sexe' => $sexe,
              'ternaminal' => $ternaminal,
              'bonneNavigation' => $bonneNavigation,
              'connaisTuInternet' => $connaisTuInternet,
              'sitePrefere' => $sitePrefere,
              'pourquoiSitePreferer' => $pourquoiSitePreferer,
              'attractionPageAcceuil' => $attractionPageAcceuil,
              'barreDeRescherche' => $barreDeRescherche,
              'ameliorationBarreDeRecherche' => $ameliorationBarreDeRecherche,
              'inscriptionProzess' => $inscriptionProzess,
              'inscriptionOK' => $inscriptionOK,
              'inscriptionPourQuoi' => $inscriptionPourQuoi,
              'reservationProzess' => $reservationProzess,
              'reservationOK' => $reservationOK,
              'reservationPourQuoi' => $reservationPourQuoi,
              'acceCategorieOk' => $acceCategorieOk,
              'acceCategoriePourQuoi' => $acceCategoriePourQuoi,
              'presentationCategorie' => $presentationCategorie,
              'ameliorationCategorie' => $ameliorationCategorie,
              'publiciteRemarque' => $publiciteRemarque,
              'ameliorationPublicite' => $ameliorationPublicite,
              'partenaireUtileOK' => $partenaireUtileOK,
              'partenaiQuePensezVous' => $partenaiQuePensezVous,
              'testNewsLetter' => $testNewsLetter,
              'testContact' => $testContact,
              'reponseParamilOK' => $reponseParamilOK,
              'reseauOk' => $reseauOk,
              'ameliorationGlobale' => $ameliorationGlobale,
              'structureDuContenu' => $structureDuContenu,
              'pertinenceContenu' => $pertinenceContenu,
              'design' => $design,
              'ergonomie' => $ergonomie,
              'simplicte' => $simplicte,
              'intuitivite' => $intuitivite,
              'originalite' => $originalite,
              'reference' => $reference,
            )));


            $this->get('mailer')->send($message);

          }

  return $this->render('HZWonja237Bundle:ArtistePublic:testSite.html.twig', array('formAutre'=>$formAutre->createView()));

}

}
