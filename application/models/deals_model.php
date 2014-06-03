<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * send mail via gmail
 * */
class deals_model extends CI_Model
{
	//public $fromdate;
	//public $todate;

	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getDeals($fromdate = "03/01/2013", $todate = "10/31/2014", $purchasedcheck=true, $giftedcheck=true, $redeemedcheck=true, $inactivecheck=true){
        
        $q0 = $inactivecheck ? '' : ' and srv_deals_detail."Status" = \'active\'';
        
        if($purchasedcheck || $giftedcheck || $redeemedcheck){
            if($purchasedcheck){
                $q1 = $purchasedcheck ? ' and (srv_deals_purchased."Status" = \'Purchased\'' : '';    
                $q2 = $redeemedcheck ? ' or srv_deals_purchased."Status" = \'Redeemed\'' : '';
                $q3 = $giftedcheck ? ' or srv_deals_purchased."Status" = \'gifted\' )' : ')'; //the space is very important to make the query not errors        
            } else if($redeemedcheck) {
                $q1 = '';
                $q2 = $redeemedcheck ? ' and (srv_deals_purchased."Status" = \'Redeemed\'' : '';
                $q3 = $giftedcheck ? ' or srv_deals_purchased."Status" = \'gifted\' )' : ')';
            } else {
                $q1 = $q2 = '';
                $q3 = $giftedcheck ? ' and (srv_deals_purchased."Status" = \'gifted\' )' : '';
            }
        } else {
            $q1 = $q2 = $q3 = '';
        }
        

    	$query = 'select loi.*, srv_restaurant_information."Name"
                    from (select srv_deals_detail.* from srv_deals_detail 
                    left join srv_deals_purchased
                    on srv_deals_detail."id" = srv_deals_purchased."Deals_Detail_ID"::Integer
                    where srv_deals_detail."End_Date" >= \''. $fromdate .'\'
                    and srv_deals_detail."End_Date" <= \''. $todate .'\''
                    . $q0 . $q1 . $q2 . $q3 .
                    'group by srv_deals_detail."id", srv_deals_detail."Restaurant_id"
                    order by srv_deals_detail."id" asc) loi
                    left join srv_restaurant_information
                    on loi."Restaurant_id"::Integer = srv_restaurant_information."id"';

		$result = $this->db->query($query);
		$result = $result->result_array();
		//print_r($result);
		return $result;
    }

    public function getDealsDetail($id = null){
    	if(!is_null($id)){
            $query = 'select * from srv_deals_detail where "id" = ' . $id;

            $result = $this->db->query($query);
            $result = $result->result_array();
            //print_r($result);
            $data1 =  $result;

            $query = 'select srv_deals_purchased.*, srv_user."User_name" from srv_deals_purchased 
                        left join srv_user
                        on srv_deals_purchased."User_id"::Integer = srv_user."id"
                        where "Deals_Detail_ID" = \'' . $id .'\'
                        order by srv_deals_purchased."DateTime" desc';

            $result = $this->db->query($query);
            $result = $result->result_array();
            //print_r($result);
            $data2 =  $result;

            return array('data1'=>$data1, 'data2'=>$data2);
    	}
    }

    public function deactivateDeal($id = null){
        $this->db->where('id', $id);
    	$this->db->update('srv_deals_detail', array('Status' => 'inactive')); 
    }

    public function updateDeal($id = null, $txtdesc="", $price="", $coins="", $startdate="", $enddate=""){
        $this->db->where('id', $id);
        $this->db->update('srv_deals_detail', array('Description' => $txtdesc, 
                                                    'Dollar_Price'=>$price, 
                                                    'Coin_Price'=>$coins, 
                                                    'Start_Date'=>$startdate,
                                                    'End_Date'=>$enddate));    
    }

/////////////////////////////////////////////////
}