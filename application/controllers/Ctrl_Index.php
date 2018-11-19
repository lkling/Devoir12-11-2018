<?php
class Ctrl_Index extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_Principal');
        $data['users'] = $this->Model_Principal->AfficherTousLesUtilisateurs();
        $this->load->view('View_Index', $data);
    }
    public function AfficherLesRegions()
    {
        $this->load->model('Model_Principal');
        $data['users'] = $this->Model_Principal->AfficherTousLesUtilisateurs();
        $data['regions'] = $this->Model_Principal->AfficherLesRegionsParIdUser($_GET['user']);
        $this->load->view('region',$data);
    }
    function AfficherLesVilles()
    {
        $this->load->model('Model_Principal');
        $data['ville'] = $this->Model_Principal->AfficherLesVillesParIdRegion($_GET['idRegion']);
        $this->load->view('ville', $data);
    }
}
?>