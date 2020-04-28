<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Categories_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }
    {
        if(sizeof($condition )>0){
            $this->mongo_db->where($condition);
        }
        $result =$this->mongo_db->getOne('categories');
        $data =$CI->moongo_db->row_array($result);
        return $data;
    


    }
    public function findAll($condition =[])
    {
        if(sizeof($condtion )>0){
            $this->mongo_db->where($condition);
        }
        $result =$this->mongo_db->get('Categories');
        return $result;
    }
}