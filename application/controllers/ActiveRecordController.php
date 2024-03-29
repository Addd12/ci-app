<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ActiveRecordController extends CI_Controller {
    public function store_order(){
        $data = [
            'date' => '2001-11-20',
            'customer_name' => 'Jane Doe',
            'customer_address' => 'Mexico'
        ];

        
        $this->db->insert('orders', $data); 

        echo 'order has successfully been created';
    }

    public function index() {
        $query = $this->db->get('orders');
        
        echo "<h3>Orders Listing</h3>";
        echo "<ul>";
        
        foreach ($query->result() as $row) {
            echo "<li>$row->customer_name</li>";
        }
        
        echo "</ul>";
    }

    public function update_order() {
        $data = [
            'customer_name' => 'Joe',
        ];
        $this->db->where('id', 1);
        $this->db->update('orders', $data);
        echo 'order has successfully been updated';
    }

    public function delete_order() {
        $this->db->where('id', 2);
        $this->db->delete('orders');

        echo 'order has successfully been deleted';
    }
}