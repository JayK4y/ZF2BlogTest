<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Jakob
 */

namespace Blog\Service;

use Blog\Model\PostInterface;

interface PostServiceInterface
{
    public function findAllPosts();
    
    public function findPost($id);
    
    public function savePost(PostInterface $blog);
    
    public function deletePost(PostInterface $blog);
}
