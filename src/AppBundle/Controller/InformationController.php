<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Information;
use AppBundle\Service\Weather;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use JMS\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Information controller.
 *
 * @Route("information")
 */
class InformationController extends Controller
{
    /**
     * Lists all information entities.
     *
     * @Route("/", name="information_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $information = $em->getRepository('AppBundle:Information')->findAll();

        return $this->render('information/index.html.twig', array(
            'information' => $information,
        ));
    }

    /**
     * Lists all information entities.
     *
     * @Route("/find/{adresse}", name="information_index")
     * @Method("GET")
     * @param $adresse
     * @param SerializerInterface $serializer
     * @return Response
     */
    public function findAction($adresse, SerializerInterface $serializer)
    {
        $em = $this->getDoctrine()->getManager();

        $informations = $em->getRepository('AppBundle:Information')->findInfosByAdresse($adresse);
        $data=$serializer->serialize($informations, 'json');

        $response=new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }

    /**
     * Lists all information entities.
     *
     * @Route("/infos", name="information_commune")
     * @Method("POST")
     * @param SerializerInterface $serializer
     * @return Response
     */
    public function findInfoAction(Weather $weather)
    {
        $commune = $_POST['commune'];

        $em = $this->getDoctrine()->getManager();

        $information = $em->getRepository('AppBundle:Information')->findInfosByCommune($commune);
        $reponse_API = $weather->getCurrent($commune);
        $lat=$reponse_API['data']['coord']['lat'];
        $lon= $reponse_API['data']['coord']['lon'];




        return $this->render('default/info.html.twig', [
            'test' => $information,
            'data'=>$reponse_API,
            'lat'=>$lat,
            'lon'=>$lon
        ]);

    }



    /**
     * Creates a new information entity.
     *
     * @Route("/new", name="information_new")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function newAction(Request $request)
    {
        $information = new Information();
        $form = $this->createForm('AppBundle\Form\InformationType', $information);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($information);
            $em->flush();

            return $this->redirectToRoute('information_show', array('id' => $information->getId()));
        }

        return $this->render('information/new.html.twig', array(
            'information' => $information,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a information entity.
     *
     * @Route("/{id}", name="information_show")
     * @Method("GET")
     * @param Information $information
     * @return Response
     */
    public function showAction(Information $information)
    {
        $deleteForm = $this->createDeleteForm($information);

        return $this->render('information/show.html.twig', array(
            'information' => $information,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing information entity.
     *
     * @Route("/{id}/edit", name="information_edit")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @param Information $information
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function editAction(Request $request, Information $information)
    {
        $deleteForm = $this->createDeleteForm($information);
        $editForm = $this->createForm('AppBundle\Form\InformationType', $information);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('information_edit', array('id' => $information->getId()));
        }

        return $this->render('information/edit.html.twig', array(
            'information' => $information,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a information entity.
     *
     * @Route("/{id}", name="information_delete")
     * @Method("DELETE")
     * @param Request $request
     * @param Information $information
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, Information $information)
    {
        $form = $this->createDeleteForm($information);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($information);
            $em->flush();
        }

        return $this->redirectToRoute('information_index');
    }

    /**
     * Creates a form to delete a information entity.
     *
     * @param Information $information The information entity
     *
     * @return \Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm(Information $information)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('information_delete', array('id' => $information->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
