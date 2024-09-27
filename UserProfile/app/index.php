<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link
            rel="icon"
            href="../img/use Brand new logo big.png" width="500px" height="500px"
            type="image/x-icon"
        />
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
   
   
    <div id="page" class="site">
        <div class="cantainer">
            <div class="form-box">
                <div class="progress">
                    <div class="logo"><span width="60px" height="60px"><a href="/index.php" ><img src="../img/Brand new logo name.png" alt="Logo" width="150px" height="110px" ></a></span></div>
                        <ul class="progress-steps">
                            <li class="step active">
                                <span>1</span>
                                <p>Personal details <br> <span>25 secs to complete</span></p>

                            </li>
                            <li class="step ">
                                <span>2</span>
                                <p>Contact details<br> <span>60 secs to complete</span></p>

                            </li>
                            <li class="step ">
                                <span>3</span>
                                <p>Security info<br> <span>30 secs to complete</span></p>

                            </li>

                        </ul>
                    
                </div>
                <form action="">
                    <div class="form-one form-step active">
                        <div class="bg-svg"></div>
                        <h2>Personal Information</h2>
                        <p>Please enter your personal information here correctly</p>
                        <div>
                            <label for="">First Name <small style="color: tomato;">*</small></label>
                            <input type="text" placeholder="e.g John">
                        </div>
                        
                        <div>
                            <label for="">Last Name<small style="color: tomato;">*</small></label>
                            <input type="text" placeholder="e.g Paul">
                        </div>

                        <div class="birth">
                            <label for="">Date of Birth<small style="color: tomato;">*</small></label>
                            <div class="grouping">
                                <input type="text" patter ="[0-9]" value="" max="31" placeholder="00">
                                <input type="text" patter ="[0-9]" value="" max="12" placeholder="MM">
                                <input type="text" patter ="[0-9]" value="" max="2050" placeholder="YYYY">
                            </div>
                        </div>

                    
                        <div>
                            <label for="">Proffession<small style="color: tomato;">*</small></label>
                            <input type="text" placeholder="e.g software engineer">
                        </div>
                        

                    </div>




                    <div class="form-two form-step ">
                        <div class="bg-svg"></div>
                        <h2>Contact Information details</h2>
                        <p>Please enter your personal contact information here correctly</p>
                        <div>
                            <label for="">Phone<small style="color: tomato;">*</small></label>
                            <input type="tel" placeholder="e.g +233XXXXXXX">
                        </div>
                        
                        <div>
                            <label for="">GPS Address<small style="color: tomato;">*</small></label>
                            <input type="text" placeholder="Street Address">
                        </div>
                        
                        <div>
                            <label for="">City<small style="color: tomato;">*</small></label>
                            <input type="text" placeholder="e.g Bawku ">
                        </div>


                        <div>
                            <label for="">Country<small style="color: tomato;">*</small></label>
                            <select name="country" id="country">
                                <option value="">Please Select</option>
                                <option value="Afganistan">Afganistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguila">Anguila</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="South Africa">South Africa"</option>
                                <option value="Kenya">Kenya</option>
                                <option value="DR Congo">DR Congo</option>
                                <option value="Togo">Togo</option>
                                <option value="cote de'voir">cote de'voir</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Botswana">Botswana</option>
                                
                            </select>
                        </div>
                        
                    </div>
                    <div class="form-three form-step">
                        <h2>Security</h2>
                        <p>Please try and enter the correct and remeberable passwords so you won't forget

                        </p>

                        <div>
                            <label for="">Email<small style="color: tomato;">*</small></label>
                            <input type="text" placeholder="e.g example@gmail.com">
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
                       
                        <div class="checkbox">
                            <input type="checkbox">
                            <label for="">Receive our news letters and special offers</label>
                        </div>
                    </div>

                    <div class="btn-group">
                       <button type="button" class="btn-prev" disabled>Prev</button>
                       <button type="button" class="btn-next">Next</button>
                       <button type="button" class="btn-submit">Submit</button>
                    </div>

                </form>
            </div>
        </div> <div class="rules__and__regulations">
            <span><svg width="13" height="13" viewBox="0 0 512 512"><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm306.7 69.1L162.4 380.6c-19.4 7.5-38.5-11.6-31-31l55.5-144.3c3.3-8.5 9.9-15.1 18.4-18.4l144.3-55.5c19.4-7.5 38.5 11.6 31 31L325.1 306.7c-3.2 8.5-9.9 15.1-18.4 18.4zM288 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>
                English</span>
            <span>Cookies</span>
            <span>Terms</span>
            <span>Privacy</span>
        </div>




    </div>
    
    <script src="../form.js"></script>
</body>
</html>