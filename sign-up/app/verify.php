

<?php
require_once("connect.php");


if(isset($_POST['verify'])){


    
    $code = $_POST['code'];

    $fields = [
    'api_key'=> 'eVluenVQRnlDWm5IY3pLSWNIb0o',
    'code'=> $code,
    'number'=> $phoneNumber,
    ];

    echo $fields;

    $postvars = '';
    foreach($fields as $key=>$value) {
        $postvars .= $key . "=" . $value . "&";
    }
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://sms.arkesel.com/api/otp/verify',
    CURLOPT_HTTPHEADER => array('api-key: eVluenVQRnlDWm5IY3pLSWNIb0o'),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 10,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $postvars,
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;




}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daab - Verify</title>
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
                <form action="" style="padding:40px;">
                    
                    <div class="form-con breadcrumb">
                        <h2 style="color: #10d060;">Verification</h2>
                        <p class="verify-message" >An OTP code has been successifully sent to 233XXXXX07 SMS messenger</p>

                        <style>
                            .verify-message{
                                background-color:#c3ffd4bb;
                               /* color: #076013; */
                                color: rgb(6, 135, 6);
                                padding: 16px ;
                                border-radius:0 3% 3% 0;
                               

                            }


                               
                            .verify-message::before{
                                content:" ";
                                width: 4px;
                                height: 38%;
                                color:green;
                                background-color:green;
                                position: absolute;
                                margin-left:-60px;
                                margin-top:-16px;
                                text-align: left;
                                border-radius: 3% 0 0 3%;
                                position: fixed;
                            }

                        </style>
                        <div>
                            <label for=""> Enter Verification code</label>
                            <input type="text"  name="code" placeholder="Enter code here">
                        </div>

                       
                    </div>

                    <div class="btn-group">
                       
                       <button type="button"  class="btn-submit sign-up" name="verify">Verify</button>
                    </div>
                   
                    <div class="create__account_link" style="margin: 30px;">
                        <a href="/Login/index.php" class="btn-submit sign-up"> Resend <small>59s</small> </a>
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
            this.innerHTML = '<div class="loader"></div>Verifying...';
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