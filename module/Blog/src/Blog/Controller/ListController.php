<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ListController
 *
 * @author Jakob
 */
namespace Blog\Controller;

use Blog\Service\PostServiceInterface;
use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

class ListController extends AbstractActionController
{
    protected $postService;
    
    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }
    
    public function indexAction()
    {
        return new ViewModel(array(
            'posts' => $this->postService->findAllPosts()
        ));
    }
    
    public function detailAction()
    {
        $id = $this->params()->fromRoute('id');
        
        try 
        {
            $post = $this->postService->findPost($id);
        }
        catch (\InvalidArgumentException $ex)
        {
            return $this->redirect()->toRoute('blog');
        }
        
        return new ViewModel(array(
            'post' => $post
        ));
    }
}
