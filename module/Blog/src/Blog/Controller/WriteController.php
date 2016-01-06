<?php

namespace Blog\Controller;

/**
 * Description of WriteController
 *
 * @author Jakob
 */

use Blog\Service\PostServiceInterface;
use Zend\Form\FormInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class WriteController extends AbstractActionController
{
    protected $postService;
    protected $postForm;
    
    public function __construct
            (
                PostServiceInterface $postService,
                FormInterface $postForm 
            )
    {
        $this->postService = $postService;
        $this->postForm    = $postForm;
    }
    
    public function addAction()
    {
        $request = $this->getRequest();
        
        if ($request->isPost())
        {
            $this->postForm->setData($request->getPost());
            
            if ($this->postForm->isValid())
            {
                try
                {
                    $this->postService->savePost($this->postForm->getData());
                    
                    return $this->redirect()->toRoute('blog');
                }
                catch (\Exception $ex)
                {
                    throw new Exception("An Error with your data occured");
                }
            }
        }
        
        return new ViewModel(array(
            'form' => $this->postForm
        ));
    }
}
