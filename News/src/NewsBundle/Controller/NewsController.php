<?php

namespace NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\JsonResponse;

class NewsController extends Controller
{
   const DEFAULT_PAGESIZE = 2;
    
   public function listAction(Request $request)
   {
       $builder = $this->getDoctrine()->getManager()->createQueryBuilder();
       
       $builder->select('n.title, n.anounce, n.author, n.dateCreate');
       $builder->from('NewsBundle\Entity\News', 'n');
       
       $sortField = $request->get('sort');
       if (!empty($sortField) and in_array($sortField, ['title', 'dateCreate', 'author'])) {
           $builder->addOrderBy('n.' . $sortField);
       }
       
       $page = $request->get('page');
       if (!empty($page) && $page > 0) {
           
           $pageSize = $request->get('pagesize');
           if (empty($pageSize)) {
               $pageSize = self::DEFAULT_PAGESIZE;
           }
           
           $builder->setFirstResult(($page - 1) * $pageSize);
           $builder->setMaxResults($page * $pageSize);
       }
       
       $query = $builder->getQuery();
       
       $result = $query->execute();
       
       $news = [];
       /* @var $item \NewsBundle\Entity\News*/
       foreach ($result as $item) {
           $news[] = [
             'title'  => $item['title'],
             'text'   => $item['anounce'],
             'date'   => $item['dateCreate']->format('Y-m-d'),
             'author' => $item['author'],  
           ];
       }
       
       
       
       return $this->render('news/list.html.twig', [
               'news'  => $news
           ]);
       
       $response = new JsonResponse([]);
       return $response;
   }
   
   public function itemAction(Request $request)
   {
       $id = $request->get('id');
       if ($id) {
           /* @var $entity \NewsBundle\Entity\News*/
           $entity = $this->getDoctrine()->getManager()->find('NewsBundle\Entity\News', $id);
           
           return $this->render('news/item.html.twig', [
               'title'  => $entity->getTitle(),
               'text'   => $entity->getFulltext(),
               'date'   => $entity->getDateCreate()->format('Y-m-d'),
               'author' => $entity->getAuthor(),
           ]);
       }
   }
}
