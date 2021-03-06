<?php
/**
 *
 * @author Jakob
 */
namespace Blog\Mapper;

use Blog\Model\PostInterface;

interface PostMapperInterface
{
    public function find($id);
    
    public function findAll();
    
    public function save(PostInterface $postObject);
    
    public function delete(PostInterface $postObject);
}
