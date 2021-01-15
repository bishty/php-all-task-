<!DOCTYPE html>
<html>
    <head>
        <title>demo</title>
    </head>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <body>
    <form id="loginform" method="post">
            <h1>Ragistration Form ..</h1>
            <label >Name:</label>
            <input type="text" id="name" name="name"><br><br>
            <label >Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <form id="loginform" method="post">
            <label >Email:</label>
            <input type="text" id="email" name="email"><br><br>
            <label>Gender:</label>
            <input type ="radio" name ="male" value="male">Male
            <input type ="radio" name ="subject" value ="female">Female
            <br><br>
            <label >Check Boxes :</label> 
            <input type = "checkbox" name ="yes" value ="yes">Yes
            <input type = "checkbox" name ="no" value = "no">No
            <br><br>
            <label >Age:</label>
            <input type="text" id="age" name="age"><br><br>
            <input type ="button" name = "reset"  value = "Reset" ></button>
            <input type="button" id="loginBtn" name ="loginBtn" value ="login" />
        </form>
        <script> 
        $(document).ready(function(){
       $("#loginBtn").on('click' ,function(e){
       
       $.ajax({
         type:'POST',
         url :'data.php',
         data : $('#loginform').serialize(),
         success: function(response){
            // debugger;
             var jsonData = JSON.parse(response);
            console.log(jsonData);
                
                }
                });
                });
               });
    </script>
    </body>
</html>