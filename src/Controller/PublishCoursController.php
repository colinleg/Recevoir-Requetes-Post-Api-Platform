<?php

namespace App\Controller;

use App\Entity\Cours;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PublishCoursController extends AbstractController
{
    // #[Route('/publish/cours', name: 'publish_cours')]
    public function __invoke(Cours $data): Cours
    {
        $data->setOnline(true);
        return $data;
    }
}
