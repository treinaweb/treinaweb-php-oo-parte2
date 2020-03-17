<?php

namespace App\Email\Adaptadores;

class AdaptadorBase 
{
    public function processar(): void
    {
        echo "processado com adaptador base";
    }
}