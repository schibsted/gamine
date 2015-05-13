<?php

namespace RedpillLinpro\GamineBundle\Annotations;

/**
 *
 * @Annotation
 */
class Column extends \Doctrine\Common\Annotations\Annotation
{
    public $name;

    public function getKey()
    {
        return 'column';
    }
}
