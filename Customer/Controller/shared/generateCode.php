<?php


class Generate
{

    private $char = "0123456789abcdefghijklmnopqrstuvwxyzABCDEF";

    public function genCode($limit)
    {
        $randomString = "";
        for ($i = 0; $i < $limit; $i++) {
            $index = rand(0, strlen($this->char) - 1);
            $randomString .=  $this->char[$index];
        }

        return $randomString;
    }
}
