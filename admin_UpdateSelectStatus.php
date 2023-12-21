<?php
include 'database_connection.php';

$id = $_GET['id'];

class Status{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function showStatus($id){
        $st = $this->db->getConnection()->prepare("SELECT * FROM tbl_order WHERE pk_int_order_id = ?");
        $st->bind_param("i",$id);
        $st->execute();
        return $st->get_result();
    }
}

$db = new Database();
$change = new Status($db);

$data = $change->showStatus($id);
$row = $data->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change status</title>
    <link rel="icon" type="image/x-icon" href="photos/appleicon.png">
    <link rel="stylesheet" href="registration.css">

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(function(){
        $('.buttonstyle').on('click',function(){
            let val = $(this).attr('value')
            // console.log(val);
            let id = $('label').attr('id')
            // console.log(id);

            $.ajax({
                url:'admin_UpdateStatus.php',
                data:{
                    'status':val,
                    'id':id
                },
                type:'post',
                success:function(){
                    alert("Status Changed Successfully")
                },
                error:function(xhr,status,error){
                    alert("error : "+status+" - "+error)
                }
            })
        })
    })
  </script>

</head>
<body>
<div class="registration-form">
        <h2 style="text-align: center;color:#e6a6a6;font-size: 35px;font-family: Ephesis;">Reply to feedback</h2>
        <form action=" " method="post" id="feedbackss" align="center">
         

          <label id="<?php echo $row['pk_int_order_id'];?>"><font size="5"><?php echo $row['vchr_status']; ?></font></label>
          <div><br><br>
          <input type="button" value="Processing" class="buttonstyle" style="width:100px;margin:10px;background-color:#b3b3ff;">
          <input type="button" value="Dispatched" class="buttonstyle" style="width:100px;margin:10px;background-color:#b3b3ff;">
          <input type="button" value="Delivered" class="buttonstyle" style="width:100px;margin:10px;background-color:#b3b3ff;">
          <input type="button" value="Dispatched" class="buttonstyle" style="width:100px;margin:10px;background-color:#b3b3ff;">
          <input type="button" value="On Hold" class="buttonstyle" style="width:100px;margin:10px;background-color:#b3b3ff;">
          <input type="button" value="Cancelled" class="buttonstyle" style="width:100px;margin:10px;background-color:#b3b3ff;">
          <input type="button" value="Completed" class="buttonstyle" style="width:100px;margin:10px;background-color:#b3b3ff;">
          <input type="button" value="Returned" class="buttonstyle" style="width:100px;margin:10px;background-color:#b3b3ff;">
          <input type="button" value="Refunded" class="buttonstyle" style="width:100px;margin:10px;background-color:#b3b3ff;">
          
          </div>
        </form>
      </div>
</body>
</html>