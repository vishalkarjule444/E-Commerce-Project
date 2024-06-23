<?php
class Admin extends CI_Controller {

	protected function ov($filename,$data="")
	{
		$this->load->view("admin/nav");
		$this->load->view("admin/".$filename,$data);
		$this->load->view("admin/footer");
	}
	
	public function index()
	{
		$this->ov("index");
	}

	public function add_category()
	{
		$data['category_list'] = $this->My_model->select("category");
		$this->ov("add_category",$data);
	}
	public function save_category()
	{
		print_r($_POST);
		$this->My_model->insert("category",$_POST);
		redirect(base_url()."admin/add_category");
	}
	public function remove_category($category_id)
	{
		$cond=['category_id'=>$category_id];
		$this->My_model->delete("category",$cond);
		redirect(base_url()."admin/add_category");
		
	}
	// public function edit_category($category_id)
	// {
	// 	print_r($_POST);
	// 	// $cond = ["category_id"=>$category_id];
	// 	// $data['info'] = $this->My_model->select_where("category",$cond);
		
	// 	 $this->ov("edit_category");
	// }
	public function edit_category($category_id)
	{
		 $cond = ["category_id"=>$category_id];
		 $data['info'] = $this->My_model->select_where("category",$cond);
		
		$this->ov("edit_category",$data);
		
	}
	public function update_category()
	{
		$cond = ['category_id'=>$_POST['category_id']];
		$this->My_model->update("category",$cond,$_POST);
		redirect(base_url()."admin/add_category");

	}

	public function add_product()
	{
		 $data['cetegory_list'] = $this->My_model->select("category");
		$this->ov("add_product",$data);
	}
	protected function upload($key)
	{
		//print_r($_FILES[$key]);
		$file_name=rand(1111,9999).time().$_FILES[$key]['name'];
		move_uploaded_file($_FILES[$key]['tmp_name'],"uploads/".$file_name);
		$_POST[$key]=$file_name;
	}
	public function save_product()
	{
		 // echo "<pre>";
		 // print_r($_POST);
		// print_r($_FILES);
		$this->upload("product_image");
		$this->My_model->insert("product",$_POST);
		redirect(base_url()."admin/add_product");
	}
	public function product_list()
	{
		// $data['products']=$this->My_model->select("product");
		$data['products']=$this->db->query("SELECT * FROM product,category WHERE category.category_id=product.product_category")->result_array();
		$this->ov("product_list",$data);
	}
	public function pending_orders()
	{
		$data['orders']=$this->My_model->select_where("order_tbl",['order_status'=>'pending']);
		$this->ov("pending_orders",$data);
	}
	public function order_details($order_tbl_id)
	{
		$data['order_det']=$this->My_model->select_where("order_tbl",['order_tbl_id'=>$order_tbl_id]);
		$data['order_product_det']=$this->My_model->select_where("order_product_tbl",['order_tbl_id'=>$order_tbl_id]);	
		$this->ov("order_details",$data);
	}
	public function send_to_dispatch($order_tbl_id)
	{
		
		$data['dispatch_date']=date('Y-m-d');
		$data['dispatch_time']=date('H:ia');
		$data['order_status']="dispatch";
		$cond["order_tbl_id"]=$order_tbl_id;
		$this->My_model->update("order_tbl",$cond,$data);
		redirect(base_url()."admin/pending_orders");
	}
	public function dispatch_orders()
	{
		$data['orders']=$this->My_model->select_where("order_tbl",['order_status'=>'dispatch']);
		$this->ov("dispatch_orders",$data);	
	}
	public function send_to_delivered($order_tbl_id)
	{
		
		$data['delivered_date']=date('Y-m-d');
		$data['delivered_time']=date('H:ia');
		$data['order_status']="delivered";
		$cond["order_tbl_id"]=$order_tbl_id;
		$this->My_model->update("order_tbl",$cond,$data);
		redirect(base_url()."admin/dispatch_orders");
	}
}
?>