<!DOCTYPE html>
<html>
    <head>
        <title>demo</title>
    </head>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <body>
        <form id="loginform" method="post">
            <h1>Ragistration Form ..</h1>
            <label >Text Box:</label>
            <input type="text" id="username" name="username"><br><br>
            <label>Password:</label>
            <input type="password" id="password" name="password"><br><br>
           <input type="submit" id="loginBtn" name="loginBtn" value="login"></button>
            <h3 id="waiting"></h3>
            <h4 id="confirm"></h4>
        </form>
        <script>
    $(document).ready(function(){
    $("#loginform").submit(function(e){
     $("#confirm").text('');  
     $("#waiting").text('waiting....');
     e.preventDefault(); 
     $.ajax({
         type:'POST',
         url :'login.php',
         data : $(this).serialize(),
         success: function(response){
             debugger; 
             var jsonDATA = JSON.parse(response);
            
             if(jsonDATA == "1"){
                // debugger; 
                 setTimeout(function() {
                $("#waiting").text('');
                $("#confirm").text('Login success');
                 },3000);
                 }
                 else{
                    setTimeout(function() {
                        $("#waiting").text('');
                        $("#confirm").text('Login failed');
                         },3000);
                         }
                        }
                });
                });
               });
        </script> 
    </body>
</html>