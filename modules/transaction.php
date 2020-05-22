<?php 

class Transaction
{
	private $db;

	function __construct()
	{
		$this->db = new Database;
	}

	function addTransaction($data){
		//prepare query
		$this->db->query('INSERT INTO tbl_trans (id,userid,product,amount,currency,status) VALUES(:id,:userid,:product,:amount,:currency,:status)');

		//Bind Values
    	$this->db->bind(':id', $data['id']);
    	$this->db->bind(':userid', $data['userid']);
    	$this->db->bind(':product', $data['product']);
    	$this->db->bind(':amount', $data['amount']);
    	$this->db->bind(':currency', $data['currency']);
    	$this->db->bind(':status', $data['status']);

    	//Execute
    	if ($this->db->execute()) {
    		return true;
    	} else {
    		return false;
    	}
	}

        public function getTransaction()
    {
        $this->db->query('SELECT * FROM tbl_trans ORDER BY creat_date DESC');

        $result = $this->db->resultset();
        return $result;
    }
}