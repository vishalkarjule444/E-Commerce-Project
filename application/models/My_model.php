<?php
class My_model extends CI_model
{
	public function insert ($tname,$data)
	{
		$this->db->insert($tname,$data);
		return $this->db->Insert_Id();
	}
	public function select($tname)
	{
		return $this->db->get($tname)->result_array();

	}
	public function delete($tname,$cond)
	{
		return $this->db->where($cond)->delete($tname);
	}
	public function select_where($tname,$cond)
	{
		return $this->db->where($cond)->get($tname)->result_array();
	}
	public function update($tname,$cond,$data)
	{
		$this->db->where($cond)->update($tname,$data);
	}
	public function newProducts()
	{
		return $this->db->query("SELECT * FROM product ORDER BY product_id DESC limit 8")->result_array();
	}
	
	public function cart_data()
	{
		return $this->db->query("SELECT * FROM user_cart,product WHERE user_cart.product_id=product.product_id AND user_tbl_id='".$_SESSION['user_tbl_id']."' ")->result_array();
	}
	function inc_qty($user_cart_id)
	{
		$this->db->query("UPDATE user_cart SET qty=qty+1 WHERE user_cart_id='".$user_cart_id."'");
	}

	function dec_qty($user_cart_id)
	{
		$this->db->query("UPDATE user_cart SET qty=qty-1 WHERE user_cart_id='".$user_cart_id."'");
	}
	function create_table($tname,$arr)
	{
		$sql="CREATE TABLE ".$tname. "(" .$tname."_id int auto_increment primary key";
		foreach ($arr as $key => $value)
		{
			$sql.=", ".$key." text";
		}
		$sql.=");";
		return($this->db->query($sql));
	}
	

}
?>