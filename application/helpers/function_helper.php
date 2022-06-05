<?php

function get_count(){
   $CI =& get_instance();
   $users = $CI->db->select("count(id) as users, Month(created_at) as month")->group_by("Month(created_at)")->get('users')->result_array();

   foreach($users as $user){
      $user_arr[$user['month']] = $user['users'];
   }

   $m = date('m') + 1;
   for($i = 0; $i <6; $i++){
      $m--;
      if($m == 0) $m = 12;
      if(!array_key_exists($m, $user_arr)){
         $user_arr[$m] =0;
      }
   }

   $months = ['jan', 'feb', 'mar', 'apr', 'may', 'june', 'july', 'aug', 'sep', 'oct', 'nov', 'dec'];
   
   foreach($user_arr as $key => $val){
      $zzz[0][] = $months[$key];
      $zzz[1][] = $val;
   }

   $zzz = json_encode($zzz);

   return $zzz;
}

function get_count_user(){
   $m = date('m') + 1;
   $m--;
   $months = ['jan', 'feb', 'mar', 'apr', 'may', 'june', 'july', 'aug', 'sep', 'oct', 'nov', 'dec'];
   $y = date('Y');
   for($i = 0; $i < 9; $i++){
      $CI =& get_instance();
      $users[$months[$m-1]] = $CI->db->select("count(id) as users")->where("Month(created_at) = $m AND Year(created_at) = $y")->get('users')->row_array()['users'];
      // return $CI->db->last_query();
      $m--;
      if($m == 0) {
         $m = 12;
         $y--;
      }
   }
   $users = array_reverse($users);
   $usr[0] = array_keys($users);
   $usr[1] = array_values($users);

   return json_encode($usr);
}