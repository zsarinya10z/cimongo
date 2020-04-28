<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Products_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    public function findOne($condtion =[])
    {
        if(sizeof($condition )>0){
            $this->mongo_db->where($condition);
        }
        $result =$this->mongo_db->getOne('products');
        $data =$CI->moongo_db->row_array($result);
        return $data;
    }
    public function findAll($condition =[])
    {
        if(sizeof($condtion )>0){
            $this->mongo_db->where($condition);
        }
        $result =$this->mongo_db->get('products');
        return $result;
    }
    public function insert($data)
    {
        $insertId =$this->mongo_db->insert('products',$data);
    }
}