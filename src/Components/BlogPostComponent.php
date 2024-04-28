<?php

namespace App\Components;

use App\Entity\Blog;
use App\Repository\BlogRepository;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('blogpost')]
class BlogPostComponent
{
    public int $id;

    public function __construct(
        private BlogRepository $blogRepository
    ) {
    }

    public function getBlogPost(): Blog
    {
        return $this->blogRepository->find($this->id);
    }
}