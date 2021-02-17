<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Gambar extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model("Model_gambar");
  $this->load->model("Model_siswa");
  if (!$this->session->userdata('logged_in')) {
      redirect('login', 'refresh');
    }

}
  public function index(){
  	$data['data']=$this->Model_gambar->getAll();
    $data['nis']=$this->Model_siswa->getAll();
    $data['autoid']=$this->autoid();
  	$this->template->display_admin('view_gambar.php',$data);
  }
  public function simpan() {
  	//konfigurasi librari upload
    $config = array(
      'allowed_types' => 'jpg|jpeg|png', 'upload_path' => './assets/foto/', 'max_size' => '1024',
      'file_name'=> url_title($this->input->post('foto'))
    );
    //instalasi
    $this->upload->initialize($config);
    if($this->upload->do_upload('foto')){
      $id = $this->input->post('id' ,true);
      $nis = $this->input->post('nis', true);
      $foto = $this->upload->file_name;
      $aktif = $this->input->post('aktif', true);

      $simpan = $this->Model_gambar->simpan($id,$nis,$foto,$aktif);
      $this->session->set_flashdata('info', 'data berhasil di upload');
      redirect('gambar');
    } else  {
      $error = $this->upload->display_errors();
      $this->session->flash_data('danger', $error);
      redirect('gambar');
    }
  }
  public function ubah() {
    $id_nilai=$this->input->post('id_nilai',true);
    $nis=$this->input->post('nis',true);
    $mapel=$this->input->post('mapel',true);
    $nilai=$this->input->post('nilai',true);
    $tanggal=$this->input->post('tanggal',true);
    $this->Model_siswa->ubah($id_nilai,$nis,$mapel,$nilaimat,$tanggal);
    redirect('gambar');
  }
  function autoid(){
    $max=$this->Model_gambar->maxdata();
    $result=$max->row();
    $lastid=$result->lastid;
    if (empty($lastid)){
      $id="00001";
    } else {
      $lastid=$lastid + 1;
      if (strlen($lastid)=='1'){
        $id="0000" . $lastid;
      } else if (strlen($lastid)=='2'){
        $id="000" . $lastid;
      } else if (strlen($lastid)=='3'){
        $id="00" . $lastid;
      } else if (strlen($lastid)=='4'){
        $id="0". $lastid;
      } else {
        $id=$lastid;
      }
    }
    return $id;
  }
   function edit(){
    $id_nilai=$this->input->post('id_nilai', true);
    $data=$this->Model_gambar->getByID($id_nilai);
    $result=$data->row();
    //if (!(strchr($result->aktif, "yes"))){
      //$aktif="selected";
      //$tidak="";
    //} else {
      //$aktif="";
      //$tidak="selected";
    //}
    echo
    "<form action='". base_url()."siswa/ubah ' method='POST'>
    <div class='mb-3'>
      <label for='exampleInputEmail1' class='form-label'>id_nilai</label>
      <input type='text' class='form-control' id='exampleInputEmail1' value='". $result->id_nilai ."' aria-describedby='emailHelp' name='id_nilai'>
    </div>
     <div class='mb-3'>
      <label for='exampleInputPassword1' class='form-label'>nis</label>
       <input type='text' class='form-control' id='exampleInputPassword1' value='". $result->nis ."' name='nis'>
    </div>
    <div class='mb-3'>
      <label for='exampleInputPassword1' class='form-label'>mapel</label>
       <input type='text' class='form-control' id='exampleInputmapel1' value='". $result->mapel ."' name='mapel'>
    </div>
    <div class='mb-3'>
      <label for='exampleInputPassword1' class='form-label'>nilai</label>
       <input type='text' class='form-control' id='exampleInputPassword1' value='". $result->nilai ."' name='nilai'>
    </div>
    <div class='mb-3'>
      <label for='exampleInputPassword1' class='form-label'>tanggal</label>
       <input type='text' class='form-control' id='exampleInputPassword1' value='". $result->tanggal ."' name='tanggal'>
    </div>
       <div class='modal-footer'>
                <button type='submit' class'btn btn-primary'><span class='fa fa-save'></span>&nbspSimpan</button>
                <button type='button' class='btn btn-danger' data-dismiss='modal'><span class='fa fa-times'></span>&nbspBatal</button>
            </div>
      </form>";
    }
  function hapus(){
    $id=$this->uri->segment(3);
        $this->Model_gambar->hapus($id);
        //$this->session->set_flashdata('DANGER', "Data berhasil di hapus");
        redirect('Gambar');
  }
}