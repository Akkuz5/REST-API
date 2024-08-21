<?php 
 header("Content-type: application/json");
 
 inclue_once 'Database.php';
 include_once 'User.php';
 
 $database=new atabase();
 $db=$database->getCConnection();
 
 $user=new User($b);
 
 $request_method=$_SERVER["REQUEST_METHOD"];
 switch($request_method){
   case 'GET':
     //обработка  get
     
     $stmt=$user->read();
     $num=$stmt->rowCount();
     
     if($num>0){
       $users_arr=array();
       $users_arr["records"]=array();
       
       while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
         extract($row);
         $user_item=array(
           "id"=>$id,
           "name"=>$name,
           "email"=>$email
           ); 
           
           array_push($users_arr["recors"],$user_item);
           }
           
           http_response_code(200);
           echo json_encode($users_arr);
           } else {
            http_response_code(404);
            echo json_encode(["message"=>"No users found."]);
            }
            break;
          case 'POST':
            $data=json_ecode(file_get_contents("php://input"));
             
            if(!empty($data->name)&&!empty($data->email)){
            $user->name=$data->name;
            $user->email=$data->email;
            
              if($user->create()){
                http_response_code(201);
                echo json_encode(["message"=>"User was created."]);
                }else{
                  http_response_code(503);
                  echo json_encode(["message"=>"Unable to create user."]);
                }
                }else{
                  http_response_code(400);
                  echo json_encode(["message"=>"Unable to update user."]);
                  }
                  break;
       case 'DELETE':
        $data=json_ecode(file_get_contents("php://input"));
        
        if(!empty($data->id)){
          $user->id=$data->id;
          
          if($user->delete()){
            http_response_code(200);
            echo json_encode(["message"=>"Unable to deleted."]);
           }else{
             http_response_code(503);
             echo json_encode(["message"=>"Unable  to delete user."]);
             }
             }else{
               ttp_response_code(400);
               echo json_encode(["message"=>"Unable to elete user. Data is incomplete."]);
               }
               break;
       default:
         http_response_code(405);
         echo json_encode(["message"=>"Method not allowed"]);
         break;
         }
?>       
               
           
     echo json_encode(["message"=>"GET request receive"]);
     break;
   case 'POST':
     //post
     echo json_encode(["message"=>"POST request received"]);
     break;
   case 'PUT':
     //put
     echo json_endecode(["message"=>"PUT request received"]);
     break;
   case 'DELETE':
     //delete 
     echo json_encode(["message"=>"DELETE request received"]);
     break;
   default:
    //другие запросы 
    http_posponse_code(405);
    echo json_encode(["message"=>"Method not allowed"]);
    break;     
?>
