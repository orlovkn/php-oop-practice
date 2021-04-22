<?php

namespace App\Controller;

use App\Annotations\Route;
use App\Service\Serializer;

/**
 * @Route(route="/posts")
 */
class PostController
{
    private Serializer $serializer;

    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @Route(route="")
     */
    public function list()
    {
        return $this->serializer->serialize([
            'action' => 'Posts',
            'time' => time()
        ]);
    }

    /**
     * @Route(route="/one")
     */
    public function one()
    {
        return $this->serializer->serialize([
            'action' => 'PostOne',
            'time' => time()
        ]);
    }
}
