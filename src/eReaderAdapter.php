<?php
/**
 * Created by PhpStorm.
 * User: mamareza
 * Date: 10/5/2017 AD
 * Time: 11:09
 */

namespace Acme;


class eReaderAdapter implements BookInterface
{
    private $reader;

    public function __construct(eReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    public function open()
    {
        return $this->reader->turnOn();
    }

    public function turnPage()
    {
        return $this->reader->clickNextButton();
    }
}