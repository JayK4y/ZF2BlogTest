<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PostService
 *
 * @author Jakob
 */

namespace Blog\Service;

use Blog\Mapper\PostMapperInterface;

class PostService implements PostServiceInterface
{
    protected $postMapper;
    
    public function __construct(PostMapperInterface $postMapper)
    {
        $this->postMapper = $postMapper;
    }
    
    public function findAllPosts()
    {
        return $this->postMapper->findAll();
    }
    
    public function findPost($id)
    {
        return $this->postMapper->find($id);
    }        
}
