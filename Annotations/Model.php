<?php

namespace RedpillLinpro\GamineBundle\Annotations;

class Model extends \Doctrine\Common\Annotations\Annotation
{
    public $name;

    public function getKey()
    {
        return 'model';
    }
}
