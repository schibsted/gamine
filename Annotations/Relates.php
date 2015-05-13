<?php

namespace RedpillLinpro\GamineBundle\Annotations;

/**
 *
 * @Annotation
 */
class Relates extends \Doctrine\Common\Annotations\Annotation
{
    public $entity;
    public $collection = false;
    public $relative = true;
    public $related_by;
    public $foreign_key;

    public function getKey()
    {
        return 'relates';
    }
}
