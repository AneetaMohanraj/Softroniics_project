<?php
include 'database_connection.php';

class SelectCategory{
  private $db;

  public function __construct(Database $db){
    $this->db = $db;
  }

  public function selectCat(){
    $st = $this->db->getConnection()->prepare("SELECT * FROM tbl_category");
    $st->execute();
    return $st->get_result();
  }
}

$db = new Database();
$selectcat = new SelectCategory($db);
$data = $selectcat->selectCat();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Items</title> 
  <link rel="stylesheet" href="registration.css">
  <style>
    select{
      width: 300px;height: 40px;border-radius: 45px;background-color: white;box-shadow: 5px 5px 10px 0px rgba(0, 0, 0, 0.2);
      padding: 10px;margin-bottom: 25px;
    }
    select:hover{
      background-color: #f5d6d6;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  $(function(){
     $('#forms').on('submit',function(e){
      e.preventDefault();
      let option = $('#Category').val();
      let foodname = $('#name').val()
      let price = $('#price').val()
      let image = $('#image').val().split('\\').pop().split('/').pop()


      $.ajax({
        url:'getFood.php',
        type:'post',
        data:{
          'id':$('#Category').val(),
          'food':$('#name').val(),
          'price':$('#price').val(),
          'image':$('#image').val().split('\\').pop().split('/').pop()
        },
        dataType:'html',
        success:function(response){
            alert("Food successfully added")
        },
        error:function(xhr,status,error){
          alert("error :  "+status+"  "+error)
        }
      })
     })
  })
  </script>
</head>
<body>
  <div class="registration-form">
    <h2 style="text-align: center;color:#e6a6a6;font-size: 35px;font-family: Ephesis;"><font size="6">Add Food Items</font></h2>

    <form action=" " method="post" id="forms" enctype="multipart/form-data">

      <div class="form-group">
        <br><select id="Category">
        <option value=""selected disabled>Choose a Category</option>
        <?php while($row = $data->fetch_assoc()){ ?>
        <option value="<?php echo $row['pk_int_category_id']; ?>"><?php echo $row['vchr_category']; ?></option>
        <?php } ?>
         
        </select><br>
      </div>
      <div class="form-group">
        
        <input type="file" id="image" name="foodimg" placeholder="Insert an image" class="inputimg" required style="background-image: url('photos/gallery.png');" ><br>
       
      </div>
      <div class="form-group">
        <br>
        <input type="text" id="name" name="name"  placeholder="Food Name" class="inputimg" required style="background-image: url('photos/salad.png');"><br>
      </div>

      <div class="form-group">
        <br>
        <input type="text" id="price" name="price"  placeholder="Price" class="inputimg" required style="background-image: url('photos/price-tag.png');"><br>
      </div>

      <div>
        <br>
      <input type="submit" id="addbtn" value="Add Item" class="buttonstyle">
      </div>
    </form>
  </div>
</body>
</html>
