<?php

class Main extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('array');
    }

    function index()
    {
        $this->middle = 'pages/home_view';
        $this->layout();
    }

    function create_report()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('report_name', 'report_name', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->middle = 'main'; // return page will validation error
            $this->layout();
        } else {
            $this->load->model('report/report_model');

            if ($query = $this->report_model->create_report()) {

                $this->middle = 'confirm/add_report_successfull';
                $this->layout();

            } else {
                echo '<script>alert("Im sorry, something went wrong. Please Try Again.");</script>';

                $this->layout();
            }
        }
    }


    function externals()
    {
        $this->load->model('UManage_model');
        $data['opFaculty'] = $this->UManage_model->get_faculty();
        $this->template['middle'] = $this->load->view($this->middle = 'pages/createUser_view', $data, true);
        $this->layout();
        // no page yet made
    }

    function reports()
    {
        $this->load->model('UManage_model');
        $data['all_users'] = $this->UManage_model->get_users();
        $this->template['middle'] = $this->load->view($this->middle = 'pages/allusers_view', $data, true);
        $this->layout();
        // no page yet made
    }

    function responses()
    {
        $this->middle = 'pages/responses_view';
        $this->layout();
        // no page yet made
    }

    function recommendations()
    {
        $this->middle = 'pages/recommendations_view';
        $this->layout();
        // no page yet made
    }

    function psrb()
    {
        $this->middle = 'pages/psrb_view';
        $this->layout();
        // no page yet made
    }

    function analiseofdata()
    {
        $this->middle = 'pages/analise_of_data_view';
        $this->layout();
        // no page yet made
    }

    function missingreports()
    {
        $this->middle = 'pages/missing_reports_view';
        $this->layout();
        // no page yet made
    }

    function update()
    {
        $this->load->model('Authenticator');
        $this->load->model('Update_model');
        $id = $this->session->userID;

        $data['all_users'] = $this->Update_model->get_users();
        $data['single_user'] = $this->Update_model->get_user_id($id);

        $this->template['middle'] = $this->load->view($this->middle = 'pages/update_view', $data, true);
        $this->layout();
    }

    function changelogindetails()
    {
        $this->middle = 'pages/change_login_details_view';
        $this->layout();
        // no page yet made
    }
}