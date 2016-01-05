<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author Jakob
 */
namespace Blog\Model;

class Post implements PostInterface
{
    protected $id;
    protected $title;
    protected $text;
    
    public function getId()
    {
        return $this->id;
    }       
    
    public function setId($id)
    {
       $this->id = $id;
    }    
    
    public function getTitle()
    {
        return $this->title;
    }        
    
    public function setTitle($title)
    {
        $this->title = $title;
    }   
    
    public function getText()
    {
        return $this->text;
    }
    
    public function setText($text)
    {
        $this->text = $text;
    }    
}
