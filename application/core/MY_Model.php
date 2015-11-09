<?php

class MY_Model extends CI_Model
{	/**************thinh them vao***************/	public $error_delimiters = array( '<li>', '</li>' );	public $hide_errors = array();	public $validation_errors   = '';	public $validation_rules = array();			/****************end thinh them vao****************/		
	function __construct(){
		parent::__construct();
		// Load the Database Module REQUIRED for this to work.
		$this->load->database();//Without it -> Message: Undefined property: XXXController::$db
	}
/***************thinh them vao****************/public function validate()	{		// Load the form validation library		$this->load->library('form_validation');		// Apply the form validation error delimiters		$this->_set_form_validation_error_delimiters();		// Set form validation rules		$this->form_validation->set_rules( $this->validation_rules );		// If form validation passes		if( $this->form_validation->run() !== FALSE )		{			// Load var to confirm validation passed			$this->load->vars( array( 'validation_passed' => 1 ) );			return TRUE;		}		/**		 * If form validation passes, none of the code below will be processed.		 */		// Unset fields from the error array if they are in the hide errors array.		if( ! empty( $this->hide_errors ) )		{			foreach( $this->hide_errors as $field )			{				$this->form_validation->unset_error( $field );			}		}		// Load errors into class member for use in model or controller.		$this->validation_errors = validation_errors();		// Load var w/ validation errors		$this->load->vars( array( 'validation_errors' => $this->validation_errors ) );		/**		 * Do not repopulate with data that did not validate		 */		// Get the errors		$error_array = $this->form_validation->get_error_array();		// Loop through the post array		foreach( $this->input->post() as $k => $v )		{			// If a key is in the error array			if( array_key_exists( $k, $error_array ))			{				// kill set_value() for that key				$this->form_validation->unset_field_data( $k );			}		}		return FALSE;	}public function kill_set_value()	{		$this->form_validation->unset_field_data('*');	}private function _set_form_validation_error_delimiters()	{		list( $prefix, $suffix ) = $this->error_delimiters;		$this->form_validation->set_error_delimiters( $prefix, $suffix );	}/*****************end thinh them vao******************/
	function get($select = "*", $table = "", $where = "", $return_array = false)
	{
		$this->db->select($select);
		if($where != "")
		{
			$this->db->where($where);
		}
		#Query
		$query = $this->db->get($table);
		if($return_array){
			$result = $query->row_array();
		} else {
			$result = $query->row();
		}
		$query->free_result();
		return $result;
	}

	function fetch($select = "*", $table = "", $where = "", $order = "", $by = "DESC", $start = -1, $limit = 0, $return_array = false)
	{
		
		$this->db->select($select);
		if($where != "")
		{
			$this->db->where($where);
		}
		if($order != "" && (strtolower($by) == "desc" || strtolower($by) == "asc"))
		{
			if($order == 'rand'){
				$this->db->order_by('rand()');
			}else{
				$this->db->order_by($order, $by);
			}
		}
		
		if((int)$start >= 0 && (int)$limit > 0)
		{
			$this->db->limit($limit, $start);
		}
		#Query
		$query = $this->db->get($table);
		if($return_array){
			$result = $query->result_array();
		} else {
			$result = $query->result();
		}
		$query->free_result();
		return $result;
	}

	function fetch_join($select = "*", $table = "", $where = "", $join_1 = "", $table_1 = "", $on_1 = "", $join_2 = "", $table_2 = "", $on_2 = "", $order = "", $by = "DESC", $start = -1, $limit = 0, $distinct = false,$return_array = false)
	{
        $this->db->select($select);
		if(($join_1 == "INNER" || $join_1 == "LEFT" || $join_1 == "RIGHT") && $table_1 != "" && $on_1 != "")
		{
			$this->db->join($table_1, $on_1, $join_1);
		}
		if(($join_2 == "INNER" || $join_2 == "LEFT" || $join_2 == "RIGHT") && $table_2 != "" && $on_2 != "")
		{
			$this->db->join($table_2, $on_2, $join_2);
		}
		if($where != "")
		{
			$this->db->where($where);
		}
		if($order != "" && (strtolower($by) == "desc" || strtolower($by) == "asc"))
		{
            $this->db->order_by($order, $by);
		}
		if((int)$start >= 0 && (int)$limit > 0)
		{
			$this->db->limit($limit, $start);
		}
		if($distinct == true)
		{
			$this->db->distinct();
		}
		#Query
		$query = $this->db->get($table);
		if($return_array){
			$result = $query->result_array();
		} else {
            $result = $query->result();
		}
		$query->free_result();
		return $result;
	}

	function insert($table = "", $data)
	{
		return $this->db->insert($table, $data);
	}

	function update($table = "", $data, $where = "")
	{
    	if($where != "")
    	{
            $this->db->where($where);
    	}
		return $this->db->update($table, $data);
	}

	function delete($table = "", $where = "")
    {
		if($where != "")
    	{
            $this->db->where($where);
    	}
		return $this->db->delete($table);
    }
    
    
	/*BEGIN: ADMIN*/
	function getRecords($table_name, $select='*', $from, $where_conditions=null, $char_sort = 'id', $t_sort = 'DESC', $start=-1, $limit=-1){
		$result = array();
		if(!empty($from)){
			if($start==-1){ //Count
				$query = "SELECT 1 ";
			} else {
				$query = "SELECT $select ";
			}
			$query .= "FROM $from ";
			if($where_conditions!=null){
				$query .= "WHERE $where_conditions ";
			}
			$query .= "ORDER BY $table_name.$char_sort $t_sort ";
			if($start!=-1){
				$query .= "LIMIT $start, $limit ";
			}
			
			//echo $query; exit();
			$query = $this->db->query($query);
			//$result = $query->result_array();
			if($start==-1){ //Count
				$result = $query->num_rows();
			} else {
				$result = $query->result();
			}
		}
		return $result;
	}

	public function delete_record($table_name, $record_ids)
	{
		if($table_name == 'newcars'){
			$this->load->model('new_car_model');			
			foreach($record_ids as $id){
				$this->new_car_model->delete_car($id);
			}
		}else{
			return $this->db->query("DELETE FROM $table_name WHERE id IN ($record_ids)");
		}
	}
	
	public function set_enable_record($table_name, $record_ids, $is_active)
	{
		return $this->db->query("UPDATE $table_name SET is_active = $is_active WHERE id IN ($record_ids)");
	}
	
	public function findCount($params){
		$records = $this->base_model->fetch('id',$params['table'],$params['conditions']);		
		return count($records);
	}
	
	/*The Anh*/
	function updateCount($params){
		$currentCount = $this->get('count',$params['table'],$params['conditions']);
		$currentCount->count += 1;
		$this->insert($params['table'],$currentCount->count);
	}
	
	function updateSalonCar($params){
		/*$currentCount = $this->get($params['field'],$params['table'],$params['condition']);
		
		$data['count_car'] = $currentCount->count_car + 1;
		$this->update($params['table'],$data,$params['condition']);*/
	}
	/*END: ADMIN*/ 
}