<?php
Class Barang extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://pkl.notaxcloth.com/rest_server/index.php";
        
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    // menampilkan data barang
    function index(){
        $data['barang'] = json_decode($this->curl->simple_get($this->API.'/barang'));
        $this->load->view('barang/list',$data);
    }
    
    // insert data barang
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
            'id'=>$this->input->post('id'),
            'id_barang'=>$this->input->post('id_barang'),
            'nama'=>$this->input->post('nama'),
            'kategori'=>$this->input->post('kategori'),
            'stok'=>$this->input->post('stok'),
            'satuan'=>$this->input->post('satuan'),
            'isi'=>$this->input->post('isi'),
            'harga_beli'=>$this->input->post('harga_beli'),
            'harga_jual'=>$this->input->post('harga_jual'));
            $insert =  $this->curl->simple_post($this->API.'/barang', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('barang');
        }else{
           
            $this->load->view('barang/create');
        }
    }
    
    // edit data barang
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
            'id'=>$this->input->post('id'),
            'id_barang'=>$this->input->post('id_barang'),
            'nama'=>$this->input->post('nama'),
            'kategori'=>$this->input->post('kategori'),
            'stok'=>$this->input->post('stok'),
            'satuan'=>$this->input->post('satuan'),
            'isi'=>$this->input->post('isi'),
            'harga_beli'=>$this->input->post('harga_beli'),
            'harga_jual'=>$this->input->post('harga_jual'));
            $update =  $this->curl->simple_put($this->API.'/barang', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('barang');
        }else{
            $params = array('id'=>  $this->uri->segment(3));
            $data['barang'] = json_decode($this->curl->simple_get($this->API.'/barang',$params));
            $this->load->view('barang/edit',$data);
        }
    }
    
    // delete data barang
    function delete($id){
        if(empty($id)){
            redirect('barang');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/barang', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('barang');
        }
    }
}