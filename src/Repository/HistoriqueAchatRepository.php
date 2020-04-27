<?php

namespace App\Repository;

use App\Entity\HistoriqueAchat;
use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\Expr\Join;


/**
 * @method HistoriqueAchat|null find($id, $lockMode = null, $lockVersion = null)
 * @method HistoriqueAchat|null findOneBy(array $criteria, array $orderBy = null)
 * @method HistoriqueAchat[]    findAll()
 * @method HistoriqueAchat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HistoriqueAchatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HistoriqueAchat::class);
    }

    // /**
    //  * @return HistoriqueAchat[] Returns an array of HistoriqueAchat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HistoriqueAchat
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function SelectHisto($produit_id)
    {
        $qb = $this->_em->createQueryBuilder();
 
        $qb->select('h')
           ->from('App:HistoriqueAchat', 'h')
           ->where('h.produit =  :id')
          ->setParameter('id', $produit_id);
 
        return $qb->getQuery()
               ->getResult();
    }

    public function produitNonConsomme($produit_id){
        $qb = $this->_em->createQueryBuilder();
         $qb->select('p')
            ->from('App:Produit','p')
            ->innerJoin('App:HistoriqueAchat', 'h', Join::WITH, 'h.produit = p.id ')
            ->where('h.Etat =  :etat')
            ->setParameter('etat', 'non-consomme')
            ->andWhere('h.Frigo = :frigo')
        ->setParameter('frigo', 1);

        //var_dump($qb->getDQL());die;

        return $qb->getQuery()
                ->getResult();
    }

    
    

    //Fonction de sélection pour les produits périmés
   /* public function SelectProduitsPerimes($hist)
    {
        $qb = $this->_em->createQueryBuilder();
 
        $qb->select('h')
           ->from('App:HistoriqueAchat', 'h')
           ->where('h.HistoriqueAchat =  :etat_h')
           ->setParameter('etat_h', $hist);
       ;
 
        return $qb->getQuery()
               ->getResult();
    } */

    public function frigoREP(){
        
        //$entityManager=$this->getDoctrine()->getRepository(Produit::class);
        $rsm = new ResultSetMapping;
        //$em = $this->getDoctrine()->getManager();

        $rsm->addEntityResult('App\Entity\HistoriqueAchat', 'h');
        $rsm->addFieldResult('h', 'id', 'id');      
        $rsm->addFieldResult('h', 'quantite', 'Quantite'); 
        $rsm->addFieldResult('h', 'date_achat', 'DateAchat'); 
        $rsm->addFieldResult('h', 'date_limite', 'date_limite'); 
        $rsm->addFieldResult('h', 'etat_h', 'EtatH'); 
        $rsm->addJoinedEntityResult('App\Entity\Produit', 'p', 'h', 'produit');  
        $rsm->addFieldResult('p', 'produit_id', 'id');       
        $rsm->addFieldResult('p', 'nom', 'Nom'); 
        $rsm->addFieldResult('p', 'marque', 'marque');     
        
        //Requête SQL
        $sql =  "select h.id, h.quantite, h.date_achat, h.date_limite, h.etat_h, p.id as produit_id ,p.nom,p.marque from historique_achat h inner join produit p".
                " on p.id = h.produit_id".
                " where h.etat_h = 'Frigo'";
        $query = $this->_em->createNativeQuery($sql, $rsm);       
            
        return $query->getResult();

        //dump($Histoproduits);        
        //die;

}  


/*public function frigoREP(){
        
    $qb = $this->_em->createQueryBuilder();
    $qb->select('p')
       ->from('App:Produit','p')
       ->innerJoin('App:HistoriqueAchat', 'h', Join::WITH, 'h.produit = p.id ')
       ->where('h.EtatH =  :etat')
       ->setParameter('etat', 'Disponible')  ;        

   return $qb->getQuery()
           ->getResult();

} */




}