<!DOCTYPE html>
<html>
   <head>
      
      <meta charset="UTF-8">
      <title>Pet Profile Form</title>
          
      <style>
         
      p {
      color:grey;
      }
      
      .red {
      color:red;
      }
      
      .container {
      width:100%;
      position:;
      margin-right:;
      border-radius:20px;
      background-color: #fef7ed;
      padding:3%;
      
      }
      
      
      .fborder {
      border-color: #d7d4d8;
      border-radius: 10px;
      padding:10px;
      padding-right:auto;
      border-style: solid;
      border-width: .5px;
      border-color:#d7d4d8;
      }
      
      .column {
      width:47%;
      padding:10px;
      height:;
      margin-right:;
      }
      
      
      .row:after {
      content: "";
      width:;
      display: table;
      clear: both;
      }
      
      
      .button {
      
      background-color: #1f62b5;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      
      }
      
      .button {
      box-shadow:
      0 8px 16px 0
      rgba(0,0,0,0.2),
      0 6px 20px 0
      rgba(0,0,0,0.19);
      }
      
      .button:hover {
      background-color: #0d9418;
      box-shadow: 
      0 12px 16px 0
      rgba(0,0,0,0.24),
      0 17px 50px 0
      rgba(0,0,0,0.19);
      }
      
      
      @media only screen and (max-width: 600px){
      
      
      .container {
      width:100%;
      position: ;
      margin-right:10%;
      border-radius:20px;
      background-color: #fef7ed;
      padding:3%;
      
      }
      
      .column{
      width:;
      padding: 10px;
      height:;
      margin-right:;
      }
      
      }
      
      
      
      </style>
      
   </head>
   
   <body>
   
   <!--  -->
   
   		 <div class="container">
         <div>
            <h1 style="color:blue; margin:0;">Pet Profile Form</h1>
            <p style="margin:0;">Please tell us about pet(s). Please fill out the form more than once for each pet you have.</p>
         </div>
         <br>
         
         <form id="form1" method="POST" action="http://localhost/myeclipse2021/Forms/post.php">
            
            <div class="row">
               <input type="text" name="FirstName" placeholder="*First Name" class="column fborder" style="padding:10px;">
               
               <input type="text" name="Surname" placeholder="*Surname" class="column fborder" style="padding:10px;">
            </div>
            
            <br>
            
            <input type="text" name="streetaddress" placeholder="*Street Address" class="column fborder" style="width:94.5%; padding:10px;">
            
            <br>
            <br>
            <input type="text" name="streetaddress2" placeholder="Street Address 2" class="fborder column" style="width:94.5%; padding:10px;">
            
            <br>
            <br>
            
            <div class="row">
               <input type="text" name="City" placeholder="*City" class="fborder column" style="padding:10px;">
               <input type="text" name="State" placeholder="*state / Region" class="fborder column" style="padding:10px;">
            </div>
            
            <br>
            
            <div class="row">
               <input type="text" name="Postal" placeholder="*Postal / Zip Code" class="fborder column" style="padding:10px;">
               
               <select name="country" style="width:47%; color:grey;" class="fborder" >
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Aland Islands">Aland Islands</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="American Samoa">American Samoa</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antarctica">Antarctica</option>
                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijan">Azerbaijan</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Belize">Belize</option>
                  <option value="Benin">Benin</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Bouvet Island">Bouvet Island</option>
                  <option value="Brazil">Brazil</option>
                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Canada">Canada</option>
                  <option value="Cape Verde">Cape Verde</option>
                  <option value="Cayman Islands">Cayman Islands</option>
                  <option value="Central African Republic">Central African Republic</option>
                  <option value="Chad">Chad</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Christmas Island">Christmas Island</option>
                  <option value="Keeling Islands">Keeling Islands</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo">Congo</option>
                  <option value="Cook Islands">Cook Islands</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Croatia">Croatia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Cyprus">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Republic">Dominican Republic</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Ethiopia">Ethiopia</option>
                  <option value="Falkland Islands">Falkland Islands</option>
                  <option value="Faroe Islands">Faroe Islands</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="French Guiana">French Guiana</option>
                  <option value="French Polynesia">French Polynesia</option>
                  <option value="Gabon">Gabon</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Germany">Germany</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Greece">Greece</option>
                  <option value="Greenland">Greenland</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadeloupe">Guadeloupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guernsey">Guernsey</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Holy See">Holy See</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Iran">Iran</option>
                  <option value="Iraq">Iraq</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Isle of Man">Isle of Man</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jersey">Jersey</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Korea">Korea</option>
                  <option value="Kosovo">Kosovo</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                  <option value="Laos">Laos</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Macao">Macao</option>
                  <option value="Macedonia">Macedonia</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Maldives">Maldives</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marshall Islands">Marshall Islands</option>
                  <option value="Martinique">Martinique</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Micronesia">Micronesia</option>
                  <option value="Moldova">Moldova</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montenegro">Montenegro</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Morocco">Morocco</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Namibia">Namibia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Netherlands">Netherlands</option>
                  <option value="New Caledonia">New Caledonia</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Niger">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Niue">Niue</option>
                  <option value="Norfolk Island">Norfolk Island</option>
                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau">Palau</option>
                  <option value="Palestinian Territory">Palestinian Territory</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Philippines">Philippines</option>
                  <option value="Pitcairn">Pitcairn</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Romania">Romania</option>
                  <option value="Russia">Russia</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="Reunion">Reunion</option>
                  <option value="Saint Barthelemy">Saint Barthelemy</option>
                  <option value="Saint Helena">Saint Helena</option>
                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                  <option value="Saint Lucia">Saint Lucia</option>
                  <option value="Saint Martin">Saint Martin</option>
                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                  <option value="Saint Vincent">Saint Vincent</option>
                  <option value="Samoa">Samoa</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Serbia">Serbia</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leone">Sierra Leone</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Slovakia">Slovakia</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                  <option value="Somalia">Somalia</option>
                  <option value="South Africa">South Africa</option>
                  <option value="South Sudan">South Sudan</option>
                  <option value="Spain">Spain</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                  <option value="Swaziland">Swaziland</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                  <option value="Taiwan">Taiwan</option>
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Tanzania">Tanzania</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Timor-Leste">Timor-Leste</option>
                  <option value="Togo">Togo</option>
                  <option value="Tokelau">Tokelau</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Emirates">United Arab Emirates</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="United States" selected>United States</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Vietnam">Vietnam</option>
                  <option value="Virgin Islands, British">Virgin Islands, British</option>
                  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                  <option value="Wallis and Futuna">Wallis and Futuna</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>
               </select>
               <br>
               <br>
              
              <input type="text" name="Phone" placeholder="Phone" class="fborder column" style="width:94.5%; padding:10px;"></p>
               
               <p>Number of Pets you have (please note, you must fill out a pet profile for each individual pet)
                  <input type="text" name="numberofpets" placeholder="*5" class="fborder column" style="width:94.5%; padding:10px;"></p>
                  
                  <p>Pet's Name<span class="red">*</span>
<br>                    
                  <input type="text" name="nameofpets" placeholder="*Fido" class="fborder column" style="width:94.5%; padding:10px;"></p>
                  
                  <p>Pet's Age / Birthdate (if known)<span class="red;">*</span>
                  <input type="text" name="ageofpets" placeholder="*3 years old" class="fborder column" style="width:94.5%; padding:10px;"></p>
                  
                  <p>Gender<span class="red">*</span></p>
                  <p><input type="radio" name="petgender" value="Male" required>Male</p>
                  <p><input type="radio" name="petgender" value="Female" required>Female</p>
                  
                  <p>Neutered / Spayed?</p>
                  <p><input type="radio" name="neutered" value="Yes" required>Yes</p>
                  <p><input type="radio" name="neutered" value="No" required>No</p>
                  
                  <p>Pet's Breed<span class="red">*</span><br>
                  <input type="text" name="petsbreed" placeholder="*Goldendoodle" class="fborder column" style="width:94.5%; padding:10px;"></p>
                  
                  <p>Pet's Weight<br>
                     <input type="text" name="petsweight" placeholder="*35" class="fborder column" style="width:94.5%; padding:10px;"></p>
                     
                     <p>At Maturity, your pet should weigh...<br>
                        <select name="maturity" class="fborder" style="width:94.5%; color:grey;">
                           <option value="" disabled="" hidden="">Please choose...</option>
                           <option value="teacup"> 5 lbs or less (Tea Cup)</option>
                           <option value="toy"> 6 - 10 lbs (Toy)</option>
                           <option value="small"> 11 - 25 lbs (Small)</option>
                           <option value="medium"> 26 - 55 lbs (Medium)</option>
                           <option value="large"> 56 - 80 lbs (Large)</option>
                           <option value="xlarge"> 81 lbs or more (X-Large)</option></p></select>
                           
                           
                           <br>
                           <p>Weight Category is<br>
                              <select name="weightcategory" class="fborder" style="width:94.5%; color:grey;">
                                 <option value="" disabled="" hidden="">Please choose...</option>
                                 <option value="Normal">Normal</option>
                                 <option value="underweight"> UNDER weight</option>
                                 <option value="overweight"> OVER weight</option></select></p>
                                 
                            <p>Energy Level is:<br>
                            <select name="energylavel" class="fborder" style="width:94.5%; color:grey;">
                              	<option value="" disabled="" hidden=""> Please choose...</option>
                              	<option value="normal">Normal</option>
                              	<option value="low">Low</option>
                              	<option value="medium">Medium</option>
                              	<option value="hight">High</option></select></p>
                              	
                            <p>What do you currently feed your Pet?<br>
                            <input type="text" name="whatdoyoucurrentlyfeedyourpet" placeholder="*Purina Pro Plan - Salmon" class="column fborder" style="width:94.5%; padding:10px;"></p>
                             
                            <h2 style="color:grey;">What Food Form do you prefer (select all that apply):<span class="red">*</span></h2>
                            
                            <p><input type="checkbox" name="whatfood[]" value="Dry Kiddle">Dry Kiddle</p>
                            <p><input type="checkbox" name="whatfood[]" value="Canned">Canned</p>
                            <p><input type="checkbox" name="whatfood[]" value="Fresh Prepared">Fresh Prepared (like Farmer's Dog)</p>
                            <p><input type="checkbox" name="whatfood[]" value="Raw">Raw</p>
                            <p><input type="checkbox" name="whatfood[]" value="Other">Other (please describe more in the Comments)</p>
                            
                            <h2 style="color:grey;">Check all that apply:</h2>
                            <p><input type="checkbox" name="whatfood[]" value="Bad Breath">Bad Breath</p>
                            <p><input type="checkbox" name="whatfood[]" value="Excessive Shedding">Excessive Shedding</p>
                            <p><input type="checkbox" name="whatfood[]" value="Dull Coat">Dull Coat</p>
                            <p><input type="checkbox" name="whatfood[]" value="Sensitive Stomach">Sensitive Stomach</p>
                            <p><input type="checkbox" name="whatfood[]" value="Loose Stool">Loose Stool</p>
                            <p><input type="checkbox" name="whatfood[]" value="Picky Eating">Picky Eating</p>
                            <p><input type="checkbox" name="whatfood[]" value="Bladder Issues">Bladder Issues</p>
                            <p><input type="checkbox" name="whatfood[]" value="Hairballs">Hairballs</p>
                            <p><input type="checkbox" name="whatfood[]" value="Stiff/Sore Joints">Stiff/Sore Joints</p>
                            <p><input type="checkbox" name="whatfood[]" value="Itchy/Smelly Ears">Itchy/Smelly Ears</p>
                            <p><input type="checkbox" name="whatfood[]" value="Red, Dry, Itchy, or Irritable Skin">Red, Dry, Itchy, or Irritable Skin</p>
                            <p><input type="checkbox" name="whatfood[]" value="Cognative Issues in Senior Dogs">Cognative Issues in Senior Dogs</p>
                            <p><input type="checkbox" name="whatfood[]" value="Seasonal or Food Allergies">Seasonal or Food Allergies</p>
                            <p><input type="checkbox" name="whatfood[]" value="High Stress &/or Anxiety">High Stress &/or Anxiety</p>
                            <p><input type="checkbox" name="whatfood[]" value="Eats Poop">Eats Pooop</p>
                            <p><input type="checkbox" name="whatfood[]" value="Bad Gas">Bad Gas</p>
                            <p><input type="checkbox" name="whatfood[]" value="Bright Red &/or Dry Tongue">Bright Red &/or Dry Tongue</p>
                            <p><input type="checkbox" name="whatfood[]" value="Pale or wet tongue">Pale or wet tongue</p>
                            <p><input type="checkbox" name="whatfood[]" value="Excessive Thirst">Excessive Thirst</p>
                            <p><input type="checkbox" name="whatfood[]" value="Always looking for a cool spot to lay">Always looking for a cool spot to lay</p>
                            <p><input type="checkbox" name="whatfood[]" value="Always looking for a warm spot to be">Always looking for a warm spot to be</p>
                            <p><input type="checkbox" name="whatfood[]" value="Always restless">Always restless</p>
                            <p><input type="checkbox" name="whatfood[]" value="Red Eyes">Red Eyes</p>
                            <p><input type="checkbox" name="whatfood[]" value="Doesn't sleep well">Doesn't sleep well</p>
                            <p><input type="checkbox" name="whatfood[]" value="Fatigue">Fatigue</p>
                            <p><input type="checkbox" name="whatfood[]" value="Dry Eyes">Dry Eyes</p>
                            <p><input type="checkbox" name="whatfood[]" value="Dandruff">Dandruff</p>
                            <p><input type="checkbox" name="whatfood[]" value="No Outward Health Problems">No Outward Health Problems</p>
                            <p><input type="checkbox" name="whatfood[]" value="Other">Other</p>
                            
                            <h2 style="color:grey;">Have you already ordered an allergy Test from EasyDNA?<span class="red">*</span></h2>
                            <p><input type="radio" name="EasyDNA[]" value="Yes">Yes</p>
                            <p><input type="radio" name="EasyDNA[]" value="No">No</p>
                            <p><input type="radio" name="EasyDNA[]" value="What's That?">What's That?</p>
                            
                            <p>If you have already ordered an Allergy Test from EasyDNA, please share your Allergy Barcode(s) with me here:</p>
                            <textarea class="fborder" style="margin: 0px; width: 94.5%; height: 100px; "></textarea>
                            
                            <p>If Someone referred you to me, will you please share their name with me here?</p>
                            <textarea class="fborder" style="margin: 0px; width: 94.5%; height: 100px; "></textarea>
                            
                            <p>Comments-is there anything you'd like to share with me?</p>
                            <textarea class="fborder" style="margin: 0px; width: 94.5%; height: 100px; "></textarea>
                            
                            <br>
                            <br>
                            
                            <div>
                            
                            <button type="submit" value="Submit Pet Profile" class="button" onclick="return mess ();">Submit Pet Profile</button>
                            
                            </div>
                           <!-- 
                            <script type="text/javascript">
							function mess()
							{
								alert ("Your Data is Recorded")
								return true;
							}

                            </script>
                             --> 
                                                        
                           </div>
                        </form>
                     </div>
                  </body>
               </html>