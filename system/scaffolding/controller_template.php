<?php

class modules extends Controller
{

    function index()
    {
        $this->modules = get_all("SELECT * FROM module");
    }

    function view()
    {
        $module_id = $this->params[0];
        $this->module = get_first("SELECT * FROM module WHERE module_id = '{$module_id}'");
    }

    function edit()
    {
        $module_id = $this->params[0];
        $this->module = get_first("SELECT * FROM module WHERE module_id = '{$module_id}'");
    }

    function post_edit()
    {
        $data = $_POST['data'];
        insert('module', $data);
    }

    function ajax_delete()
    {
        exit( q("DELETE FROM module WHERE module_id = '{$_POST['module_id']}'") ? 'Ok' : 'Fail' );
    }

}