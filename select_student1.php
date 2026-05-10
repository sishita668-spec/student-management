<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="select_student.css">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <body>

            

                <form action="select_student.php"  method="post">
                            
                  <div class="input-box">    
                     <div class="title">
                        <h1>SELECT STUDENT DETAILS</h1>
                        
                     </div>
                    
                  
                        <label for="text" class="label-color">Email Id</label>
                        <input type="email" name="mail" id="mail" placeholder="Email" required> 
                    
                
                        <input type="submit" class="login" value="Select"/>
                        </div>
                        </form>
    </body>
</html>