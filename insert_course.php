<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="insert_course.css">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <body>

            

                <form action="insert_course1.php"  method="post">
                            
                  <div class="input-box">    
                     <div class="title">
                        <h1>ADD COURSE</h1>
                     </div>
                    
                  
                        <label for="number" class="label-color">Course Id</label>
                        <input type="number" name="id" id="number" placeholder="Id" required> 
                    
                        <br>

                        <label for="text" class="label-color">Course Name</label>
                        <input type="text" name="name" id="name" placeholder="Course Name"  required > 
                      
                        <br>

                        <label for="number" class="label-color">Course Fēes</label>
                        <input type="number" name="fees" id="fees" placeholder="Course Fees"  required >
                        
                        <br>
                
                        <input type="submit" class="add" value="Add Course"/>
                        </div>
                        </form>
    </body>
</html>