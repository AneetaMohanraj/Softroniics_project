

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function(){
            $('#category').on('change',function(){
                let val = $(this).val();
                console.log(val);


                $.ajax({
                    url:'getCategory.php',
                    dataType:'json',
                    success:function(response){
                         
                    }
                })
            


                $.ajax({
                url:'categoryfood.php',
                type:'post',
                dataType:'json',
                data:{
                    'id':val
                },
                success:function(response){
                    $('#food').html('<option value="" selected disabled>Choose an food item</option>');

                   for (let i = 0; i < response.length; i++) {
                          $('#food').append('<option value="' + response[i] + '">' + response[i] + '</option>');
                    }
                },
                error:function(xhr,status,error){
                    $('#divresult').html('error is '+status+' '+error)
                }
                
              })

            })

        })
    </script>
</head>
<body><h4>catergory</h4>
        <select name="category" id="category">
            <option value="" selected disabled>Choose a category</option> 
            <?php while($row = $data->fetch_assoc()){ ?>   
            <option value="<?php  echo $row['id'];  ?>"><?php  echo $row['category'];  ?></option>
            <?php } ?>
        </select>

<br><br>
<h4>food</h4>

        <select name="food" id="food">
            
        </select>
        

        <div id="divresult">

        </div>
</body>
</html>