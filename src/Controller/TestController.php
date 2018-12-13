<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController {

    /**
     * @Route("/")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction() {

        return $this->render('test/index.html.twig');

    }

    /**
     * @Route("/download")
     */
    public function downloadAction() {

        return new BinaryFileResponse('../assets/sheets/test.xlsx', 200, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Content-Disposition' => 'attachment; filename="test.xlsx"'
        ]);

    }

}