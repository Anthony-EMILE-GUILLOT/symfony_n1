<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LuckyController
{
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);
        return new Response(
                '<html>
                <head>
                <style>
                body { 
                    font-family: Comic Sans MS, sans-serif;
                    font-size: 48px;
                    background-color: #d1b6ffff;
                    color: #000000ff;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                </style>
                </head>
                <body>Lucky number: '.$number.'</body>
                </html>'
            );
    }
}
