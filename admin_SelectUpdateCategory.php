<?php
include 'database_connection.php';

$id = $_GET['id'];

class UpdateCategory{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function selectCategory($id){
        $st = $this->db->getConnection()->prepare("SELECT * FROM tbl_category WHERE `pk_int_category_id`=?");
        $st->bind_param("i",$id);
        $st->execute();
        return $st->get_result();
    }
}
$db = new Database();
$update = new UpdateCategory($db);
$data = $update->selectCategory($id);
$row = $data->fetch_assoc();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Categories</title> 
  <link rel="icon" type="image/x-icon" href="photos/appleicon.png">
  <link rel="stylesheet" href="registration.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  

  <!-- PASSING FORM DATA TO addCategories.php -->

  <script>
   $(function(){
    $('#image').on('change',function(){
        let val = $('#image').val().split('\\').pop().split('/').pop()
        $('#catimg').attr('src','photos/'+val)
    })

    $('#forms').on('submit',function(e){
      e.preventDefault();
      let image = $('#image').val().split('\\').pop().split('/').pop()
      console.log(image);
      let name = $('#name').val();
      console.log(name);
      let id = $('button').attr('value')
      console.log(id);

      $.ajax({
        url:'admin_UpdateCategories.php',
        type:'post',
        data:{
          'id':id,
          'image':image,
          'name':name
        },
        success:function(response){
          // alert("Category updated")
          // window.location.href = 'adminmain.html';
        },
        error:function(xhr,status,error){
          alert("error : "+status+" "+error);
        }
      })
    })
   })
  </script>
</head>
<body>
  <div class="registration-form">
    <h2 style="text-align: center;color:#e6a6a6;font-size: 35px;font-family: Ephesis;"><font size="6">Update Category</font></h2>
    <form action=" " method="post" id="forms">

     <div class="form-group">
        <img src="photos/<?php echo $row['vchr_category_image']; ?>" id="catimg" height="100px" width="100px"><br>
      </div>

      <div class="form-group">
        <input type="file" id="image" name="foodimg" placeholder="Insert an image" class="inputimg" required style="background-image: url('photos/gallery.png');" ><br>
      </div>

      <div class="form-group">
        <br>
        <input type="text" id="name" name="name" value="<?php echo $row['vchr_category']; ?>" placeholder="Category" class="inputimg" required style="background-image: url('photos/app.png');"><br>
      </div>

      <div>
        <br>
      <button value="<?php echo $row['pk_int_category_id']; ?>" class="buttonstyle">update</button>
      </div>
    </form>
  </div>
</body>
</html>
