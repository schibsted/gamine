<?php

namespace RedpillLinpro\GamineBundle\Annotations;

/**
 *
 * @Annotation
 */
class Extract extends \Doctrine\Common\Annotations\Annotation
{
    public $columns;
    public $preserve_items = true;
    
    public function hasColumns()
    {
        return (bool) !empty($this->columns);
    }

    public function getKey()
    {
        return 'extract';
    }
}
