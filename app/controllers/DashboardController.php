<?php

class DashboardController extends BaseController {

    protected $layout = 'layouts.master';

    public static function setDataVars($content){

        $ID = Auth::user()->id;

        $dashModel = new Dashboard();

        $content->userName = $dashModel->getCurrentUserNameById($ID);

        $mas = $dashModel->getUserListFromDatabaseById($ID);
        $content->contacts = $mas;
        //block data
        $contactsId = DB::table('contacts')->where('owner_id', $ID)->get(); //contacts id
        $iBlocked = DB::select('select * from blocks '); //select blocks table
        $content->iBlocked = $iBlocked;
        $content->contactsId = $contactsId; //contacts id
    }

}