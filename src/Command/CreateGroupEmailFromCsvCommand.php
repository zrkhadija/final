<?php

namespace App\Command;
use Symfony\Component\Serializer\Serializer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Repository\GroupEmailRepository;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use App\Entity\GroupEmail;
/** 
*class CreateGroupEmailFromCsvCommand extends Command
*{   private string $dataDirectory;
*    private EntityManagerInterface $entityManager;
 *   private SymfonyStyle $io;
 *   private GroupEmailRepository $GroupEmailRepository; 


 *   public function __construct(EntityManagerInterface $entityManager, string $dataDirectory, GroupEmailRepository $GroupEmailRepository)
  *  {
 *     parent::__construct();
  *    $this->dataDirectory=$dataDirectory;
  *    $this->entityManager=$entityManager;
  *    $this->GroupEmailRepository=$GroupEmailRepository;
   * }
   * protected static $defaultName = 'app:Create-GroupEmail-From-Csv';
    

  *  protected function configure()
  *  {
  *      $this
   *         ->setDescription('Importer des données à partir des fichiers  CSV')
   *     ;
   * }

   * protected function initialize(InputInterface $input, OutputInterface $output): void
*{
   *     $this->io= new SymfonyStyle($input,$output);
   * }
   * protected function execute(InputInterface $input, OutputInterface $output): int
   * {
      * $this->createGroupEmail();

      *  return Command::SUCCESS;
   * }
   * private function getDataFromFile():array
   * {
     *    $file=$this->DataDirectory.'data.csv';
     *    $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
      *   $normalizers = [new ObjectNormalizer()];
      *   $encoders=[
       *      new CsvEncoder()
       *  ];
       *  $serializer = new Serializer($normalizers, $encoders);
        * /**@var string $fileString */
        /* $fileString = file_get_contents($file);
       *  $data=$serializer->decode($fileString,$fileExtension);
         dd($data);
    }
    private function createGroupEmail():void
    {   
        $this->io->section('creation des groupes emails à partir des fichiers csv');
        $groupemailCreated= 0;
        foreach($this->getDataFromFile() as $row){
           if(array_key_exists('email' , $row) && !empty($row['email']))
           {
               $groupemail = $this->$GroupEmailRepository->findOneBy(
                   [
                       'email'=> $row['email']
                   ]
               );
               if(!$groupemail)
               {
                   $groupemail = new GroupEmail();
                   $groupemail->setEmail( $row['email']);
                   $this->entityManager->persist($groupemail);
                   $groupemailCreated++;
               }
           }

        }

    $this->entityManager->flush();

        
    }
}
*/