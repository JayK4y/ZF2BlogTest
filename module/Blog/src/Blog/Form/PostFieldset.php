<?php

/**
 * Description of PostFieldset
 *
 * @author Jakob
 */
namespace Blog\Form;

use Zend\Form\Fieldset;

class PostFieldset extends Fieldset
{
    public function __construct()
    {
        $this->add(array(
            'type' => 'hidden',
            'name' => 'id'
        ));
        
        $this->add(array(
            'type' => 'text',
            'name' => 'text',
            'options' => array(
                'label' => 'The Text'
            )
        ));
        
        $this->add(array(
            'type' => 'text',
            'name' => 'title',
            'options' => array(
                'label' => 'Blog Title'
            )
        ));
    }
}
