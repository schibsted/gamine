<?php

namespace RedpillLinpro\GamineBundle\Annotations;

/**
 *
 * @Annotation
 */
class Id extends \Doctrine\Common\Annotations\Annotation
{
    public function getKey()
    {
        return 'id';
    }
}
