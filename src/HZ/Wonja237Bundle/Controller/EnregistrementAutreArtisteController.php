<?php

namespace HZ\Wonja237Bundle\Controller;

use HZ\Wonja237Bundle\Entity\EnregistrementAutreArtiste;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Enregistrementautreartiste controller.
 *
 */
class EnregistrementAutreArtisteController extends Controller
{
    /**
     * Lists all enregistrementAutreArtiste entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $enregistrementAutreArtistes = $em->getRepository('HZWonja237Bundle:EnregistrementAutreArtiste')->findAll();

        return $this->render('enregistrementautreartiste/index.html.twig', array(
            'enregistrementAutreArtistes' => $enregistrementAutreArtistes,
        ));
    }

    /**
     * Creates a new enregistrementAutreArtiste entity.
     *
     */
    public function newAction(Request $request)
    {
        $enregistrementAutreArtiste = new Enregistrementautreartiste();
        $form = $this->createForm('HZ\Wonja237Bundle\Form\EnregistrementAutreArtisteType', $enregistrementAutreArtiste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enregistrementAutreArtiste);
            $em->flush();

            return $this->redirectToRoute('admin_enregistrement_show', array('id' => $enregistrementAutreArtiste->getId()));
        }

        return $this->render('enregistrementautreartiste/new.html.twig', array(
            'enregistrementAutreArtiste' => $enregistrementAutreArtiste,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a enregistrementAutreArtiste entity.
     *
     */
    public function showAction(EnregistrementAutreArtiste $enregistrementAutreArtiste)
    {
        $deleteForm = $this->createDeleteForm($enregistrementAutreArtiste);

        return $this->render('enregistrementautreartiste/show.html.twig', array(
            'enregistrementAutreArtiste' => $enregistrementAutreArtiste,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing enregistrementAutreArtiste entity.
     *
     */
    public function editAction(Request $request, EnregistrementAutreArtiste $enregistrementAutreArtiste)
    {
        $deleteForm = $this->createDeleteForm($enregistrementAutreArtiste);
        $editForm = $this->createForm('HZ\Wonja237Bundle\Form\EnregistrementAutreArtisteType', $enregistrementAutreArtiste);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_enregistrement_edit', array('id' => $enregistrementAutreArtiste->getId()));
        }

        return $this->render('enregistrementautreartiste/edit.html.twig', array(
            'enregistrementAutreArtiste' => $enregistrementAutreArtiste,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a enregistrementAutreArtiste entity.
     *
     */
    public function deleteAction(Request $request, EnregistrementAutreArtiste $enregistrementAutreArtiste)
    {
        $form = $this->createDeleteForm($enregistrementAutreArtiste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($enregistrementAutreArtiste);
            $em->flush();
        }

        return $this->redirectToRoute('admin_enregistrement_index');
    }

    /**
     * Creates a form to delete a enregistrementAutreArtiste entity.
     *
     * @param EnregistrementAutreArtiste $enregistrementAutreArtiste The enregistrementAutreArtiste entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EnregistrementAutreArtiste $enregistrementAutreArtiste)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_enregistrement_delete', array('id' => $enregistrementAutreArtiste->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
