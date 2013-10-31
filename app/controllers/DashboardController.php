<?php

class DashboardController extends BaseController {

    protected $layout = 'layouts.master';

    public static function setDataVars($content){

        $ID = Auth::user()->id;

        $dashModel = new Dashboard();

        $content->userName = $dashModel->getCurrentUserNameById($ID);

        $mas = $dashModel->getUserListFromDatabaseById($ID);
        $content->contacts = $mas;

    }

}