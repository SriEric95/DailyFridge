<?php

namespace App\Controller;
use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;
use App\Entity\HistoriqueAchat;
use App\Repository\ProduitRepository;
use App\Repository\HistoriqueAchatRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\ResultSetMapping;



class DailyFridgeController extends AbstractController
{
    /**
     * @Route("/", name="daily_fridge_index")
     */
    //{{path('daily_fridge_create')}}
    public function index()
    {
        return $this->render('daily_fridge/index.html.twig', [
            'controller_name' => 'DailyFridgeController'
        ]);
    }

     /**
     * @Route("/daily_fridge_inscription2",name="daily_fridge_eric")
     */
    public function create()
    {
        return $this->render('daily_fridge/inscription.html.twig');

    }


    /**
     * @Route("/test/{varTest}/{varTest2}",name="test")
     */
    public function test($varTest,$varTest2)
    {
      /*  $conn = $this->getDoctrine()->getManager()->getConnection() ;
            
             $sql ="INSERT INTO produit(nom, prix, date_limite)
             VALUES ('Chocolat', '700', '2020-04-03 00:00:00')";
          
             $stmt = $conn->prepare($sql);
             $stmt->execute(); */
        return new Response($varTest." ".$varTest2);
    }

    /**
     * @Route("/daily_fridge_accueil",name="daily_fridge_accueil")
     */

    public function accueil()
    {
        return $this->render('daily_fridge/accueil.html.twig');
    }

    /**
     * @Route("/daily_fridge_Mes_Produits",name="daily_fridge_Mes_Produits")
     */
    public function liste_produit(EntityManagerInterface $em)
    {
        $em = $this->getDoctrine()->getManager();
        $repo=$this->getDoctrine()->getRepository(HistoriqueAchat::class);
        $Histoproduits = $repo->findAll($em->getRepository(Produit::class)->findAll());

        //dump($Histoproduits);        
        //die;

        return $this->render('daily_fridge/mes_produits.html.twig', [
                'Histoproduits' => $Histoproduits
        ]);
    }

    /**
     * @Route("/daily_fridge_Mon_Frigo",name="daily_fridge_Mon_Frigo")
     */
    public function frigo(HistoriqueAchatRepository $HistoriqueAchat)
    {   
        //$em = $this->getDoctrine()->getManager();
        $Histoproduits = $HistoriqueAchat->frigoREP();

        //dump($Histoproduits);        
        //die;

        return $this->render('daily_fridge/mon_frigo.html.twig', [
                'Histoproduits' => $Histoproduits
        ]);
    }

    /**
     * @Route("/daily_fridge_Mes_Recettes",name="daily_fridge_Mes_Recettes")
     */
    public function recette()
    {
        return $this->render('daily_fridge/mes_recettes.html.twig');
    }

    /**
     * @Route("/daily_fridge_Info_Recette",name="daily_fridge_Info_Recette")
     */

    public function info_recette()
    {
        return $this->render('daily_fridge/info_recette.html.twig');
    }

   /**
     * @Route("/daily_fridge_Scan",name="daily_fridge_Scan")
     */
    public function scan(Request $request, EntityManagerInterface  $manager)
    {
        
        if(  $request->request->count() > 0 )
        {
            $produit = new Produit;   
            $historique_achat = new HistoriqueAchat; 

            $produit->setMarque($request->request->get('marque'));  
            $produit->setDateLimite(new \DateTime($request->request->get('date_limite')));  
            $produit->setTauxSucre($request->request->get('sucre'));
            $produit->setTauxSel($request->request->get('sel_V'));
            $produit->setTauxProteine($request->request->get('proteines'));
            $produit->setTauxFibre($request->request->get('fibre'));
            $produit->setTauxEnergie($request->request->get('energie'));     
            $produit->setTauxGras($request->request->get('gras'));
            $produit->setTauxSodium($request->request->get('sodium'));
            $produit->setTauxCalcium($request->request->get('calcium'));      
            
            $produit->setNom($request->request->get('nom'));

            $historique_achat->setProduit($produit);

                if (($request->request->get('frigo')) != null) {
                    // $produit->setNom($request->request->get('nom'));
                    $historique_achat->setEtatH('Frigo');                    
                }
                else{
                    // $produit->setNom($request->request->get('frigo'));
                    $historique_achat->setEtatH('Frigo non');
                }     
            
            $historique_achat->setQuantite($request->request->get('quantite'));
            $historique_achat->setDateAchat(new \DateTime());
            $historique_achat->setDateLimite(new \DateTime($request->request->get('date_limite')));

            // $historique_achat->setDate($request->request->get('date_limite'));

            $manager->persist($produit);
            $manager->persist($historique_achat);

           

            $manager->flush();

            // dump($produit);
            // dump($historique_achat);
            // die;
        }

        else
        {            
           
        }  
        return $this->render('daily_fridge/page_scan.html.twig');
    }

    //<img alt="Logo" src="./image/Capture.JPG" >
    
//     <a href='+"{{ path('daily_fridge_Scan',{'code':'"+code+"','nom':'"+nom+"','prix':'"+quantite+"','date_limite':'"+
    //date_limite+"','sucre':'"+sucre+"','sel':'"+sel_V+"','sodium':'"+sodium+"','boule':'true'}) }} >"



   
    /**
     * @Route("/daily_fridge_Mon_Frigo_update_consommer/{id}", name="daily_fridge_Mon_Frigo_update_consommer")
     */
    public function updateHisto_consommer($id,HistoriqueAchatRepository $historepo ,EntityManagerInterface $em)
    {
        $em = $this->getDoctrine()->getManager();

        $histo=$historepo->SelectHisto($em->getRepository(Produit::class)->find($id));

        foreach ($histo as $value) {
            
            $value->setEtatH("Consommé");
        }

        //dump($histo);        
        //die;

        $em->flush();

        return $this->redirectToRoute('daily_fridge_Mon_Frigo');
    }

     /**
     * @Route("/daily_fridge_Mon_Frigo_update_perimer/{id}", name="daily_fridge_Mon_Frigo_update_perimer")
     */
    public function updateHisto_perimer($id,HistoriqueAchatRepository $historepo ,EntityManagerInterface $em)
    {
        $em = $this->getDoctrine()->getManager();

        $histo=$historepo->SelectHisto($em->getRepository(Produit::class)->find($id));

        foreach ($histo as $value) {
            
            $value->setEtatH("Périmé");
        }

        //dump($histo);        
        //die;

        $em->flush();

        return $this->redirectToRoute('daily_fridge_Mon_Frigo');
    }

     /**
     * @Route("/daily_fridge_mes_produits_perimes",name="mes_produits_perimes")
     */

    public function mes_produits_perimes(EntityManagerInterface $em)
    {       
        $em = $this->getDoctrine()->getManager();
        $repo=$this->getDoctrine()->getRepository(HistoriqueAchat::class);
        $produitsPerimes = $repo->findBy(['EtatH'=>'Périmé']);
        //dump($produitsPerimes);        
        //die;


        return $this->render('daily_fridge/mes_produits_perimes.html.twig', [
            'produitsPerimes' => $produitsPerimes,
        ]);

        //   $em = $this->getDoctrine();
        //$produitsPerimes=$historepo->SelectProduitsPerimes($em->getRepository(HistoriqueAchat::class)->find('Disponible'));
        //$produitsPerimes=$produitrepo->SelectProduitsPerimes();
    }
    

    

   
}
