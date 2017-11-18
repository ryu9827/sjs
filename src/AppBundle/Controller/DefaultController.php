<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SerializerBundle\JMSSerializerBundle;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\boat;
use AppBundle\Entity\worker;
use AppBundle\Entity\boat_worker;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/api/boats", name="boats_list")
     */
    public function listAction()
    {
        //get all boats information
        $repository = $this->getDoctrine()->getRepository(boat::class);
        $boats = $repository->findAll();

        $serializer = $this->container->get('jms_serializer');
        $JSON = $serializer->serialize($boats, 'json');

        return new Response($JSON);
    }

    /**
     * @Route("/api/boats/{boat_id}", name="boat_show")
     */
    public function getBoatAction($boat_id)
    {
        //get one boat with workers' id
        $em =$this->getDoctrine()->getManager();
        $repository_boat = $em->getRepository(boat::class);
        $boat = $repository_boat->findBy(array('id'=>$boat_id));

        //if id is not found
        if (!$boat) {
            throw $this->createNotFoundException(
                'No boat found for id '.$boat_id
            );
        }

        $query = $em->createQuery(
                     'SELECT t.worker_id from AppBundle:boat_worker t where t.boat_id = :boat_id'
                      )->setParameter('boat_id',$boat_id);

        $workers = $query->getResult();
        foreach ($workers as $value)
            $boat[] = $value ;

        $serializer = $this->container->get('jms_serializer');
        $JSON = $serializer->serialize($boat, 'json');

        return new Response($JSON);

    }
}
