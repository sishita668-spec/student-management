<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="delete_student.css"> 
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <body>

            

                <form action="delete_student.php"  method="post">
                            
                  <div class="input-box">    
                     <div class="title">
                        <h1>DELETE STUDENT DETAILS</h1>
                        <h2>Enter Student E-Mail</h2>
                     </div>
                    
                  
                        <label for="text" class="label-color">Email Id</label>
                        <input type="email" name="mail" id="mail" placeholder="Email" required> 
                
                        
                        <br>
                
                        <input type="submit" class="login" value="Delete"/>
                        </div>
                        </form>
    </body>
</html>