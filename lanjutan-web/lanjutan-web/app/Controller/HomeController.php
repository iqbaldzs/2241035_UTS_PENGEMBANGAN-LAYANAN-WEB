<?php

namespace Iqbal\LanjutanWeb\Controller;

class HomeController
{
    function index(): void 
    {
        echo "HomeController.index()";
    }

    function kategori(): void 
    {
        echo "HomeController.kategori()";
    }

    function produk(): void
    {
        echo "HomeController.produk()";
    }

    function supplier(): void
    {
        echo "HomeController.supplier()";
    }


    function about(): void
    {
        echo "Web Lanjutan PHP MVC";
    }
}