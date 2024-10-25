




<?php
/*
/**
 * Requires libcurl
*/


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daab - Sign_Up</title>
    <link href="https://fonts.gstatic.com" rel="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="icon" href="../img/use Brand new logo big.png" width="500px" height="500px" type="image/x-icon"/>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body style="background-color: #dbffee57;">
   
    <div id="page" class="site">
        <div class="cantainer">
            <div class="form-box">
                <div class="progress">
                    <div class="logo"><span width="60px" height="60px"><a href="../index.php" ><img src="../img/Brand new logo name.png" alt="Logo" width="150px" height="110px" ></a></span></div>
                       
                    
                </div>
                <form action="">
                    
                    <div class="form-con breadcrumb">
                      <p>This data will be used throughout your use of the app</p>
                        
                        <div>
                            <label for=""> Full name<small style="color: tomato;">*</small></label>
                            <input type="text" placeholder="Name">
                        </div>

                       
                        <div>
                            <label for="">Password<small style="color: tomato;">*</small></label>
                            <input type="password" placeholder="e.g password">
                        </div>
                        <div>
                            <label for="">Confirm Password<small style="color: tomato;">*</small></label>
                            <input type="password" placeholder="e.g confirm Password">
                        </div>
                        <div>
                            <label for="">Name your favorite thing</label>
                            <input type="password" placeholder="e.g hint">
                        </div>

                        
                       
                        

                    </div>

                    <div class="btn-group">
                       
                       <button type="button" class="btn-submit sign-up">Create</button>
                    </div>

                    
                  
                </form>
            </div>

           
            <div class="rules__and__regulations">
                <span><svg width="13" height="13" viewBox="0 0 512 512"><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm306.7 69.1L162.4 380.6c-19.4 7.5-38.5-11.6-31-31l55.5-144.3c3.3-8.5 9.9-15.1 18.4-18.4l144.3-55.5c19.4-7.5 38.5 11.6 31 31L325.1 306.7c-3.2 8.5-9.9 15.1-18.4 18.4zM288 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>
                    English</span>
                <span>Cookies</span>
                <span>Terms</span>
                <span>Privacy</span>
            </div>

        </div>
    </div>
    <script src="../form.js"></script>
    <script>
        let loader_text = document.querySelector(".btn-submit.sign-up");
        loader_text.onclick = function(){
            this.innerHTML = '<div class="loader"></div>Creating...';
            this.style ="display:block; color: #f0fffa; background-color: #8fe8ab; border:2px solid #04ff75; padding:10px; font-size:16px; transition: 0.2s ease;"
            
            /*

            setTimeout(()=>{
                this.innerHTML = " Changes saved";
               
            }, 2000)*/
        }
     </script>

    <script>
        /*
    $(document).ready(function(){
     $(".button").click(function(){

         $(this).addClass(".sign-up");
     });

    });

    */
    </script>
</body>
</html>