<?php
include 'database_connection.php';

$id = $_POST['id'];

class Status{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function statusChange(){
        $st = $this->db->getConnection()->prepare("SELECT * FROM ");
        $st->bind_param();
        $st->execute();
    }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Order Status</title>
    <link rel="icon" type="image/x-icon" href="photos/appleicon.png">
    <link rel="stylesheet" href="registration.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

    <div class="registration-form">
        <h2 style="text-align: center;color:#e6a6a6;font-size: 35px;font-family: Ephesis;">Change Order Status</h2>
        <form action=" " method="post" id="status">
         

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
