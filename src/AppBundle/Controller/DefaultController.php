<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Candidate;
use AppBundle\Entity\jobOffers;
use AppBundle\Forms\NewJobOfferType;
use AppBundle\Forms\SearchCandidateType;


class DefaultController extends Controller
{
    /**
     * @Route("/Admin", name="Dashboard")
     */
    public function indexAction(Request $request)
    {
        
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/Admin/candidates", name="candidates")
     */
    public function candidatesAction(Request $request)
    {     

        //We create the form
        $candidates = new Candidate;        
        $form = $this->createForm(SearchCandidateType::class, $candidates);

        //We take the submit
        $form->handleRequest($request); 

        $repository = $this->getDoctrine()->getRepository(Candidate::class);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData(); 

            $candidates = $repository->findByname($data->getName());
            
            return $this->render('candidates/index.html.twig' , array('form' => $form->createView(),'candidates' => $candidates));

        }else{
            
            $candidates = $repository->findAll();

            return $this->render('candidates/index.html.twig' , array('form' => $form->createView(),'candidates' => $candidates));
        }      
        

    }

    /**
     * @Route("/Admin/joboffers", name="joboffers")
     */
    public function joboffersAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(jobOffers::class);

        $offers = $repository->findAll();

        return $this->render('joboffers/index.html.twig' , array('offers' => $offers ));
    }

    /**
     * @Route("/Admin/joboffers/create", name="NewjobOffer")
     */
    public function createJobofferAction(Request $request)
    {
        
       /*
        $data = $request->request->all();
        var_dump($data);*/     

        //We create the form
        $Joboffer = new jobOffers;        
        $form = $this->createForm(NewJobOfferType::class, $Joboffer);

        //We take the submit
        $form->handleRequest($request); 

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData(); 
            $data->setIdSubsidiary(5);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($data);
            $entityManager->flush();
            

            return $this->redirectToRoute('NewjobOffer');
        }          

        return $this->render('joboffers/create.html.twig' , array('form' => $form->createView()));
    }
}
