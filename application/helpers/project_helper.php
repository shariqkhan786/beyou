<?php
function UpdateToken($UserId) {
    $ci = & get_instance();
    $data =[
        'token'=>$ci->url_encrypt->encode($UserId.date("YmdHis")),
        'updated_date'=>date("Y-m-d H:i:s")
    ];
    $ci->db->where('id',$UserId);
    $ci->db->update('tbl_users',$data);
    return $ci->db->last_query();
}
function isUser($UserId)
{
    $ci = & get_instance();
    $ci->db->where('isDeleted',FALSE);
    $ci->db->where('id',$UserId);
    $Query = $ci->db->get('tbl_users');
    return $Query->row();
}
function GetUser($Token)
{
    $ci = & get_instance();
    $ci->db->where('isDeleted',FALSE);
    $ci->db->where('token',$Token);
    $Query = $ci->db->get('tbl_users');
    // echo $ci->db->last_query();
    return $Query->row();
}

function Delete($data,$column,$table)
{
    $ci = & get_instance();
    $result=false;
    $ci->db->set('isDeleted',True);
    $ci->db->where('isDeleted',FALSE);
    $ci->db->where($column,$data);
    $Query = $ci->db->update($table);
    // echo $ci->db->last_query();
    if($Query){
        $result=True;
    }
    return $result;
}
function CheckExist($data,$column,$table)
{
    $ci = & get_instance();
    $ci->db->where($column,$data);
    $ci->db->where('isDeleted',False);
    $Query = $ci->db->get($table);
    return $Query->row();
}

function notification($UserId,$ToId,$fcm, $msg, $type,$link='',$image='') {
    $url = "https://fcm.googleapis.com/fcm/send";
    $Package = [
        'message'=>$msg,
        'type'=>$type,
        'link'=>(($link)?$link:''),
        'image'=>(($image)?$image:'')
    ];
    $post = array(
        'to'  => $fcm,
        'data' => array(
            "click_action" => PROJECT_NAME,
            "Package" => $Package
        )
    );
    $headers = array('Authorization: key='.FCM_SERVER_KEY,'Content-Type: application/json');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        $error = curl_error($ch);
        return $error;
    }
    curl_close($ch);
    //create a log
    $ci = & get_instance();
    $data =[
       'from_id'=>$UserId,
       'to_id'=>$ToId,
       'notification'=>$msg,
       'type'=>$type,
       'image'=>(($image)?$image:''),
       'link'=>(($link)?$link:'')
    ];
    $ci->db->insert('tbl_notifications',$data);
    return $ci->db->last_query();
    
}


