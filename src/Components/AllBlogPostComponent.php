<?php

namespace App\Components;

use App\Entity\Blog;
use App\Repository\BlogRepository;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('allblogpost')]
class AllBlogPostComponent
{
    public function __construct(
        private BlogRepository $blogRepository
    ) {
    }

    public function getAllBlogPost(): array
    {
        return $this->blogRepository->findAll();
    }
}