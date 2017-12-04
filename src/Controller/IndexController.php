<?php

namespace App\Controller;

use App\Entity\Project;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {

    	$em = $this->getDoctrine()->getManager();
        $projects = $em->getRepository(Project::class)->findAll();
        //dump($projects);exit;
        return $this->render('index.html.twig', ['projects' => $projects]);
    }
}
