<?php

namespace App\Controller;
use App\Repository\GroupEmailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
#[Route('/api/groupemail', name: 'group_email')]
class GroupEmailController extends AbstractController
{   
    private $EntityManager;
    private $GroupEmailRepository;
    
    public function __construct(EntityManagerInterface $EntityManager,GroupEmailRepository $GroupEmailRepository )  
    {
      $this->EntityManager=$EntityManager;
      $this->GroupEmailRepository=$GroupEmailRepository;
    }
    
    
    #[Route('/read', name: 'group_email')]
    
    public function index(): Response
    { 
      $grpemails =$this->GroupEmailRepository->findAll();
      $arrayofgrpemails = [];
      foreach($grpemails as $grpemail)
      {
        $arrayofgrpemails=$grpemail->toArray();
      }
      return $this->Json($arrayofgrpemails) ;
       
    }
}
