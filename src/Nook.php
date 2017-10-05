<?php
/**
 * Created by PhpStorm.
 * User: mamareza
 * Date: 10/5/2017 AD
 * Time: 11:06
 */

namespace Acme;


class Nook implements eReaderInterface
{

    public function turnOn()
    {
        var_dump("Turning Nook on");
    }

    public function clickNextButton()
    {
        var_dump("Going to next page Nook");
    }
}