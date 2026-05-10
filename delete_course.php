<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="delete_course.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <body>

            

                <form action="delete_course1.php"  method="post">
                            
                  <div class="input-box">    
                     <div class="title">
                        <h1>DELETE COURSE</h1>
                     </div>
                    
                  
                        <label for="text" class="label-color">Course Name</label>
                        <input type="text" name="name" id="name" placeholder="Name" required> 
                
                        
                        <br>
                
                        <input type="submit" class="login" value="Delete"/>
                        </div>
                        </form>
    </body>
</html>