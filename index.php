<?php
     header('Access-Control-Allow-Origin: *');
     header('Content-Type: application/json');
      header('Access-Control-Allow-Methods: GET');
     $con = new mysqli('localhost','root','','db_API');
     $sql = 'SELECT * FROM `tb_menu`';
     $rs  = $con->query($sql);
     $data = array();
     while($row=$rs->fetch_array()){
          $data[] = array(
               'id'=>$row[0],
               'title'=>$row[1],
               'date'=>$row[2]
          );
     }
     header('HTTP/1.0 200 success');
     echo json_encode($data)
?>