<?php

namespace app\controllers;

class ContactController
{
    public function main()
    {
        return view('contact');
    }

    public function store($inputs)
    {
        var_dump($inputs);
    }
}
