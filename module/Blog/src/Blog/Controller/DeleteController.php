<?php

namespace Blog\Controller;

/**
 * Description of DeleteController
 *
 * @author Jakob
 */

use Blog\Service\PostServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DeleteController extends AbstractActionController
{
    protected $postService;
    
    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }
    
    public function deleteAction()
    {
        try 
        {
            $post = $this->postService->findPost($this->params('id'));
        }
        catch (\InvalidArgumentException $e)
        {
            return $this->redirect()->toRoute('blog');
        }
        
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            $del = $request->getPost('delete_confirmation_yes');
            // \Zend\Debug\Debug::dump($del);die();
            if ($del === 'yes')
            {
                $this->postService->deletePost($post);
            }
            
            return $this->redirect()->toRoute('blog');        
        }
        return new ViewModel(array(
            'post' => $post
        ));
    }
}
