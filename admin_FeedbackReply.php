<?php
include 'database_connection.php';

$feedid = $_GET['id'];

class Reply{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function viewSelected($id){
        $st = $this->db->getConnection()->prepare("SELECT * FROM tbl_feedback where pk_int_feedback_id = ?");
        $st->bind_param("i",$id);
        $st->execute();
        return $st->get_result();
    }
}

$db = new Database();
$reply = new Reply($db);

$data = $reply->viewSelected($feedid);
$row = $data->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Reply</title>
    <link rel="icon" type="image/x-icon" href="photos/appleicon.png">
    <link rel="stylesheet" href="registration.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  $(function(){
   $('#feedbackss').on('submit',function(e){
    e.preventDefault();
    let reply = $('#reply').val()
    console.log(reply)
    let id = $('label').attr('id')
    console.log(id);

    $.ajax({
      url:'admin_FeedbackSendReply.php',
      type:'post',
      data:{
        'id':id,
        'reply':reply
      },
      success:function(response){
          alert("Feedback Replied")
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
        <form action=" " method="post" id="feedbackss">
         

          <label id="<?php echo $row['pk_int_feedback_id'];?>"><?php echo $row['vchr_feedback']; ?></label>
          <div>
            <input type="text" id="reply" name="reply" style="text-align: center;" placeholder="Enter your reply" required>
          </div>
          <br><br><br>
          <div>
          <input type="submit" value="Send" class="buttonstyle" id="feedbackbtn">
          </div>
        </form>
      </div>
</body>
</html>