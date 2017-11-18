<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
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
//        var_dump($JSON);
        return new Response($JSON);
    }
}
