<?php

namespace HZ\Wonja237Bundle\Controller;

use HZ\Wonja237Bundle\Entity\PubliciteDefile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Publicitedefile controller.
 *
 */
class PubliciteDefileController extends Controller
{
    /**
     * Lists all publiciteDefile entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $publiciteDefiles = $em->getRepository('HZWonja237Bundle:PubliciteDefile')->findAll();

        return $this->render('publicitedefile/index.html.twig', array(
            'publiciteDefiles' => $publiciteDefiles,
        ));
    }

    /**
     * Creates a new publiciteDefile entity.
     *
     */
    public function newAction(Request $request)
    {
        $publiciteDefile = new Publicitedefile();
        $form = $this->createForm('HZ\Wonja237Bundle\Form\PubliciteDefileType', $publiciteDefile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($publiciteDefile);
            $em->flush();

            return $this->redirectToRoute('publicitedefile_show', array('id' => $publiciteDefile->getId()));
        }

        return $this->render('publicitedefile/new.html.twig', array(
            'publiciteDefile' => $publiciteDefile,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a publiciteDefile entity.
     *
     */
    public function showAction(PubliciteDefile $publiciteDefile)
    {
        $deleteForm = $this->createDeleteForm($publiciteDefile);

        return $this->render('publicitedefile/show.html.twig', array(
            'publiciteDefile' => $publiciteDefile,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing publiciteDefile entity.
     *
     */
    public function editAction(Request $request, PubliciteDefile $publiciteDefile)
    {
        $deleteForm = $this->createDeleteForm($publiciteDefile);
        $editForm = $this->createForm('HZ\Wonja237Bundle\Form\PubliciteDefileType', $publiciteDefile);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('publicitedefile_edit', array('id' => $publiciteDefile->getId()));
        }

        return $this->render('publicitedefile/edit.html.twig', array(
            'publiciteDefile' => $publiciteDefile,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a publiciteDefile entity.
     *
     */
    public function deleteAction(Request $request, PubliciteDefile $publiciteDefile)
    {
        $form = $this->createDeleteForm($publiciteDefile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($publiciteDefile);
            $em->flush();
        }

        return $this->redirectToRoute('publicitedefile_index');
    }

    /**
     * Creates a form to delete a publiciteDefile entity.
     *
     * @param PubliciteDefile $publiciteDefile The publiciteDefile entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PubliciteDefile $publiciteDefile)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('publicitedefile_delete', array('id' => $publiciteDefile->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
