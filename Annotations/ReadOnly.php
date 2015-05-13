<?php

namespace RedpillLinpro\GamineBundle\Annotations;

/**
 *
 * @Annotation
 */
class ReadOnly extends \Doctrine\Common\Annotations\Annotation
{
    public function getKey()
    {
        return 'readonly';
    }
}
