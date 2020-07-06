<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
       // $this->load->model('School_model');
       // $this->load->model('Dashboard_model');
        //$this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('templates/header.php');
        $this->load->view('dashboard/index.php');
        $this->load->view('templates/footer.php');
    }

   public function category() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('categories');
        $category['category'] = $query->result_array();
        //  print_r($category); exit;
        $this->load->view('templates/header.php');
        $this->load->view('admin/dashboard/add_category.php', $category);
        $this->load->view('templates/footer.php');
    }

    public function add_category() {
        $filename = rand(0, 99999) . $_FILES['image']['name'];
        $this->load->helper(array('form', 'url'));
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'jpg|png|pdf|doc|docx|xlsx|xls';
        $config['max_size'] = 2000;
        $config['file_name'] = $filename;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('item', $this->upload->display_errors());
        } else {
            $data = array(
                'category_name' => $this->input->post('category_name'),
                'discription' => $this->input->post('discription'),
                'image' => $filename
            );
            $this->db->insert('categories', $data);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('item', 'Record is  saved');
            } else {
                $this->session->set_flashdata('item', 'Record is not saved');
            }
        }
        redirect('/dashboard/category');

        //echo json_encode($res);
    }
     public function pcategory() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('categories');
        $category['category'] = $query->result_array();
        $this->load->view('templates/header.php');
        $this->load->view('dashboard/addproduct_category.php', $category);
        $this->load->view('templates/footer.php');
    }

    public function addproduct_category() {
        $filename = rand(0, 99999) . $_FILES['image']['name'];
        $this->load->helper(array('form', 'url'));
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'jpg|png|pdf|doc|docx|xlsx|xls';
        $config['max_size'] = 2000;
        $config['file_name'] = $filename;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('item', $this->upload->display_errors());
        } else {
            $data = array(
                'category_name' => $this->input->post('category_name'),
                'discription' => $this->input->post('discription'),
                'image' => $filename
            );
            $this->db->insert('categories', $data);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('item', 'Record is  saved');
            } else {
                $this->session->set_flashdata('item', 'Record is not saved');
            }
        }
        redirect('/dashboard/category');
    }

    public function subcategory() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('categories');
        $category['category'] = $query->result_array();
        //  print_r($category['category']); exit;

        $this->db->order_by('id', 'DESC');
        $sub_categories = $this->db->get('sub_categories');
        $category['subcategories'] = $sub_categories->result_array();

        //    print_r($category['subcategories']); exit;

        $this->load->view('templates/header.php');
        $this->load->view('dashboard/add_subcategory', $category);
        $this->load->view('templates/footer.php');
    }

    public function add_subcategory() {

        $filename = rand(0, 99999) . $_FILES['image']['name'];
        $this->load->helper(array('form', 'url'));
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'jpg|png|pdf|doc|docx|xlsx|xls';
        $config['max_size'] = 2000;
        $config['file_name'] = $filename;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('item', $this->upload->display_errors());
        } else {
            $data = array(
                'category_id' => $this->input->post('category_id'),
                'subcategory_name' => $this->input->post('sub_categoryname'),
                'image' => $filename,
                'date' => date('Y-m-d')
            );
            $this->db->insert('sub_categories', $data);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('item', 'Record is  saved');
            } else {
                $this->session->set_flashdata('item', 'Record is not saved');
            }
        }
        redirect('/dashboard/subcategory');
    }

    public function product() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('categories');
        $category['category'] = $query->result_array();
        //  print_r($category['category']); exit;

        $this->db->order_by('id', 'DESC');
        $sub_categories = $this->db->get('sub_categories');
        $category['subcategories'] = $sub_categories->result_array();

        $this->db->order_by('id', 'DESC');
        $product = $this->db->get('product');
        //  $result=$product->result_array();
        // $query->result_array();
        $record = array();
        foreach ($product->result() as $p) {
            // $this->db->select('category_name')->where('id',)->row(),
            $record[] = array(
                'category_name' => $this->cate_name($p->category_id),
                'product_name' => $p->product_name,
                'title' => $p->title,
                'price' => $p->price,
                'image' => $p->image
            );
        }
        
        $category['products']=$record;
        $this->load->view('templates/header.php');
        $this->load->view('dashboard/add_product', $category);
        $this->load->view('templates/footer.php');
    }

    public function cate_name($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('categories')->row();
        return $query->category_name;
    }

    public function add_product() {
        // print_r($this->input->post()); exit;
        $filename = rand(0, 99999) . $_FILES['image']['name'];
        $this->load->helper(array('form', 'url'));
        $config['upload_path'] = 'images/';
        $config['allowed_types'] = 'jpg|png|pdf|doc|docx|xlsx|xls';
        $config['max_size'] = 2000;
        $config['file_name'] = $filename;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('item', $this->upload->display_errors());
        } else {
            $data = array(
                'category_id' => $this->input->post('category_id'),
                'subcategory_id' => $this->input->post('subcategory_id'),
                'product_name' => $this->input->post('product_name'),
                'price' => $this->input->post('price'),
                'title' => $this->input->post('title'),
                'image' => $filename,
                'date' => date('Y-m-d')
            );
            $this->db->insert('product', $data);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('item', 'Record is  saved');
            } else {
                $this->session->set_flashdata('item', 'Record is not saved');
            }
        }
        redirect('/dashboard/product');
    }


}
