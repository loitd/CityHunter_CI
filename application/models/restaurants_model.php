<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * send mail via gmail
 * */
class restaurants_model extends CI_Model
{
	//public $fromdate;
	//public $todate;

	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getRestaurants(){
    	$query = 'SELECT "id", "Name", "Cousine_Type", "Check_ins", \'active\' AS "Status"
				FROM srv_restaurant_information
				ORDER BY "id" ASC';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return $result;
    }

    public function getRestaurantDetail($id = null){
    	if(!is_null($id)){
            $this->db->trans_start(); //begin the transaction
            
            $basic = $this->db->get_where('srv_restaurant_information', array('id'=>$id))->result_array();

            $owner = '';

            $contact = '';
            
            $account = '';

            $newsfeed = '';

            $notes = '';
            
            $deals = 'select * from srv_deals_detail where "Restaurant_id"::Integer = ' . $id . ' order by id asc';
            $deals = $this->db->query($deals);
            $deals = $deals->result_array();
            
            $sales = 'select loi2.*, srv_restaurant_information."Name" as "Restaurant_Name"
                        ,srv_restaurant_information."Redeem_Code"
                        from ( select loi.*, srv_deals_detail."Restaurant_id", srv_deals_detail."Dollar_Price", srv_deals_detail."Coin_Price"
                        from ( select srv_deals_purchased.*, srv_user."User_name" 
                        from srv_deals_purchased 
                        left join srv_user
                        on srv_deals_purchased."User_id"::Integer = srv_user."id"
                        where "Deals_Detail_ID"::Integer in (select "id" from srv_deals_detail where "Restaurant_id"::Integer = '.$id.') ) loi
                        left join srv_deals_detail
                        on loi."Deals_Detail_ID"::Integer = srv_deals_detail."id" ) loi2
                        left join srv_restaurant_information
                        on loi2."Restaurant_id"::Integer = srv_restaurant_information."id"
                        order by loi2."id" asc';
            $sales = $this->db->query($sales);
            $sales = $sales->result_array();
            
            $ownerphotos = '';
            $memberphotos = '';
            $comments = '';
            
            $signatures = 'select * from srv_restaurant_menus where "Restaurant_Id"::Integer = ' . $id;
            $signatures = $this->db->query($signatures);
            $signatures = $signatures->result_array();

            $this->db->trans_complete(); //end transaction

            if( $basic == '' || is_null($basic) || count($basic) < 1 ){
                $result = null;
            } else {
                $result = array(
                    'basic'     => $basic[0],
                    'owner'     => $owner,  
                    'contact'   => $contact,
                    'account'   => $account,
                    'newsfeed'  => $newsfeed,
                    'notes'     => $notes,
                    'deals'     => $deals, //include deals history
                    'sales'     => $sales, 
                    'ownerphotos'       => $ownerphotos, 
                    'memberphotos'      => $memberphotos, 
                    'comments'          => $comments, 
                    'signatures'        => $signatures, 

                );    
            }

            
            return $result;
    	}
    }

    public function deleteRestaurant($rid = null){
    	$this->db->delete('srv_restaurant_information', array('id' => $rid)); 
    }

    public function updateRestaurant1($id=null, $what2update){
        // $action = 
        // 1. Update Restaurant Information
        // 2. Deals
        // 3. Photos
        // 4. Signature Dishes
        $this->db->insert('srv_restaurant_updates', 
            array('restaurant_id'=>$id, 'status'=>'Approved', 'action'=>'Restaurant Information')); 
        $this->db->where('id', $id);
        $this->db->update('srv_restaurant_information', $what2update); 
    }

    public function updateRestaurant2($id=null, $what2update ){
        $this->db->insert('srv_restaurant_updates', 
                    array('restaurant_id'=>$id, 'status'=>'Approved', 'action'=>'Deals'));
        $this->db->where('id', $id);
        $this->db->update('srv_deals_detail', $what2update); 
    }

    public function updateRestaurant3($id=null, $what2update ){
        $this->db->insert('srv_restaurant_updates', 
                    array('restaurant_id'=>$id, 'status'=>'Approved', 'action'=>'Signature Dishes'));
        $this->db->where('id', $id);
        $this->db->update('srv_restaurant_menus', $what2update); 
    }

/////////////////////////////////////////////////
}