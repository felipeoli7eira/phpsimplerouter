<?php

namespace app\controllers;

class SiteController
{
    public function main(object $props)
    {
        return view('index');
    }

    public function location()
    {
        return header('Location: /response-location', true, 301);
    }

    public function responseLocation()
    {
        return '<h1>Response location</h1>';
    }

    public function json()
    {
        header('Content-Type: application/json;charset=utf-8');

        $responseJSON = [
            'error' => false,
            'message' => 'nobody',
            'content' => []
        ];

        return json_encode($responseJSON);
    }
}
