<?php
/**
 * Created by PhpStorm.
 * User: mamareza
 * Date: 10/5/2017 AD
 * Time: 10:34
 */

namespace Acme;


class Book implements BookInterface
{
    public function open()
    {
        var_dump("The book has been opened");
    }

    public function turnPage()
    {
        var_dump("Switched to next page...");
    }
}