<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'xss');
        $this->load->model('M_program', 'program');
    }

    public function ajax_list()
    {

        $list = $this->program->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $nomor = 1;
        foreach ($list as $program) {
            $no++;
            $row = array();
            $row[] = $nomor++;
            $row[] = $program->sumber_dana;
            $row[] = $program->program;
            $row[] = $program->keterangan;

            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_program(' . "'" . $program->id . "'" . ')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_program(' . "'" . $program->id . "'" . ')"><i class="glyphicon glyphicon-trash"></i> Hapus</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->program->count_all(),
            "recordsFiltered" => $this->program->count_filtered(),
            "data" => $data,
        );

        echo json_encode($output);
    }

    public function ajax_edit($id)
    {
        $data = $this->program->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_add()
    {
        $this->_validate();
        $data = array(
            'sumber_dana' => htmlentities($this->input->post('sumber_dana')),
            'program' => htmlentities($this->input->post('program')),
            'keterangan' => htmlentities($this->input->post('keterangan')),

        );
        $insert = $this->program->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update()
    {
        $this->_validate();

        $data = array(
            'sumber_dana' => htmlentities($this->input->post('sumber_dana')),
            'program' => htmlentities($this->input->post('program')),
            'keterangan' => htmlentities($this->input->post('keterangan')),



        );

        $this->program->update(array('id' => htmlentities($this->input->post('id'))), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id)
    {
        $this->program->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }


    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if ($this->input->post('sumber_dana') == '') {
            $data['inputerror'][] = 'sumber_dana';
            $data['error_string'][] = 'Data sumber dana harus di isi';
            $data['status'] = FALSE;
        }

        if ($this->input->post('program') == '') {
            $data['inputerror'][] = 'program';
            $data['error_string'][] = 'Data program harus di isi';
            $data['status'] = FALSE;
        }

        if ($this->input->post('keterangan') == '') {
            $data['inputerror'][] = 'keterangan';
            $data['error_string'][] = 'Data keterangan harus di isi';
            $data['status'] = FALSE;
        }

        if ($data['status'] === FALSE) {
            echo json_encode($data);
            exit();
        }
    }
}
