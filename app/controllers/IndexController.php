<?php

class IndexController extends BaseController
{
    protected $layout = 'layouts.wazzup';
    public function index()
    {
        $this->layout->content = View::make('index.index');

    }
}
