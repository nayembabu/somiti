<?php

/* Author                   : Nayem Babu 
 * Author Title             : Web Developer
 * Software Name            : Association Software
 * Author Url               : https://nayembabu.com
 * Github Peroject Url      : https://github.com/nayembabu/somiti
 * Github Author Url        : https://github.com/nayembabu/
 * Github Contributor       : Jashim Uddin
 * Github Contributor Url   : https://github.com/jashimgit/
 */

class Member extends CI_Controller {
	
	function __construct() {
		Parent::__construct();
		$this->load->library('Ion_auth');
        $this->load->library('session');
        $this->load->model('ion_auth_model');
        $this->load->library('upload');
   /*     $language = $this->db->get('settings')->row()->language;
        $this->lang->load('system_syntax', $language);*/
        $this->load->model('member_model');
        $this->load->model('settings_model');

		if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
	}

    public function index() {
        $log_id = $this->ion_auth->user()->row()->mbr_iid;
        $data['member_info'] = $this->member_model->getAllMember();
        $data['user_info'] = $this->settings_model->getuserinfo($log_id);
        $data['div_query'] = $this->settings_model->getDiv();
        $data['sys_set'] = $this->settings_model->getSysInfo();
        $this->load->view('header', $data);
        $this->load->view('member', $data);
        $this->load->view('footer');
    }

    function add_new_m() {
        $mbr_name       = $this->input->post('mbr_name');
        $mbr_father     = $this->input->post('mbr_father');
        $mbr_mother     = $this->input->post('mbr_mother');
        $mbr_h_w_name   = $this->input->post('mbr_h_w_name');
        $mbr_age        = $this->input->post('mbr_age');
        $mbr_dob        = date('Y-m-d', strtotime($this->input->post('mbr_dob')));
        $prs_div_iid    = $this->input->post('prs_div_iid');
        $prs_dist_iid   = $this->input->post('prs_dist_iid');
        $prs_up_iid     = $this->input->post('prs_up_iid');
        $prs_areas      = $this->input->post('prs_areas');
        $prm_div_idd    = $this->input->post('prm_div_idd');
        $prm_dist_idd   = $this->input->post('prm_dist_idd');
        $prm_up_idd     = $this->input->post('prm_up_idd');
        $prm_areas      = $this->input->post('prm_areas');
        $add_date       = date('Y-m-d', strtotime($this->input->post('add_date')));
        $occupation     = $this->input->post('occupation');
        $nid            = $this->input->post('nid');
        $phone          = $this->input->post('phone');
        $thistime       = time();

            $file_name = $_FILES['img_url']['name'];
            $file_name_pieces = explode('_', $file_name);
            $new_file_name = '';
            $count = 1;
            foreach ($file_name_pieces as $piece) {
                if ($count !== 1) {
                    $piece = ucfirst($piece);
                }
                $new_file_name .= $piece;
                $count++;
            }
            $config = array(
                'file_name' => $new_file_name,
                'upload_path' => "./upload/member/",
                'allowed_types' => "*",
                'overwrite' => False,
                'max_size' => "20480000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "1768",
                'max_width' => "2024"
            );
            $this->load->library('Upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('img_url')) {
                $path = $this->upload->data();
                $img_url = "upload/member/" . $path['file_name'];
                
                $data = array(
                    'mbr_name'            => $mbr_name,
                    'mbr_father'          => $mbr_father,
                    'mbr_mother'          => $mbr_mother,
                    'mbr_age'             => $mbr_age,
                    'mbr_dob'             => $mbr_dob,
                    'mbr_nid_num'         => $nid,
                    'present_area'        => $prs_areas,
                    'present_thana_id'    => $prs_up_iid,
                    'present_dist_id'     => $prs_dist_iid,
                    'present_div_id'      => $prs_div_iid,
                    'mbr_img'             => $img_url,
                    'parmanent_area'      => $prm_areas,
                    'parmanent_thana_id'  => $prm_up_idd,
                    'parmanent_dist_id'   => $prm_dist_idd,
                    'parmanent_div_id'    => $prm_div_idd,
                    'add_date'            => $add_date,
                    'this_time'           => $thistime,
                    'mbr_occupation'      => $occupation,
                    'mbr_wife_hus_name'   => $mbr_h_w_name,
                    'mbr_mobile'          => $phone
                );
            $this->member_model->insert_new_member($data);
            }
            redirect('member');
    }

    function get_district_byjson() {
        $div_id = $this->input->get('divid');
        $data = $this->member_model->get_dist_byDiv($div_id);
        echo json_encode($data);
    }

    function get_upazilla_byjson() {
        $dist_id = $this->input->get('dist_id');
        $data = $this->member_model->get_upazilla_byDist($dist_id);
        echo json_encode($data);
    }

    function delete_mbr() {
        $id = $this->input->get('id');
        $this->member_model->delete_m($id);
        redirect('member');
    }
}