<?php

namespace App\Controller;
use App\Repository\CompagneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
#[Route('/api/compagne', name: 'compagne')]
class CompagneController extends AbstractController
{   
    private $EntityManager;
    private $CompagneRepository;
    
    public function __construct(EntityManagerInterface $EntityManager,CompagneRepository $CompagneRepository )  
    {
      $this->EntityManager=$EntityManager;
      $this->CompagneRepository=$CompagneRepository;
    }
    
    
    #[Route('/read', name: 'compagne')]
    
    public function index(): Response
    { 
      $compagnes =$this->CompagneRepository->findAll();
      $arrayofcompagnes = [];
      foreach($compagnes as $compagne)
      {
        $arrayofcompagnes=$compagne->toArray();
      }
      return $this->Json($arrayofcompagnes) ;
       
    }
}
