<?php 
    include("connect.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nets | Order</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <section id="Home">
        <nav>
            <div class="logo">
                <img src="image/nets_case_study_logo_feaure_image.png">
            </div>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="offer.php">Our Services</a></li>
                <li><a href="partners.php">Partners</a></li>
                <li><a href="contact.php">Order</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>

            <div class="icon">
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-heart"></i>
                <i class="fa-solid fa-cart-shopping"></i>
            </div>

        </nav>
        <div class="order" id="Order">
            <h1><span>Order</span>Now</h1>

            <div class="order_main">

                <form action="process.php" class="form" method="post">

                    <div class="input">
                        <p><label> 1. Company: <br />
                                <span data-name="client-company"><input size="40" maxlength="400"
                                        placeholder="Your Company" aria-invalid="false" value="" type="text"
                                        name="company" /></span> </label>
                        </p>
                    </div>

                    <div class="input">
                        <p><label> 2. Business Email: <br />
                                <input size="40" maxlength="400" autocomplete="email" placeholder="Your Business Email"
                                    aria-invalid="false" value="" type="email" name="email" /> </label>
                        </p>
                    </div>

                    <div class="input">
                        <p><label> 3. Job Title: <br />
                                <span data-name="client-jobtitle"><input size="40" maxlength="400"
                                        placeholder="Your Job Title" aria-invalid="false" value="" type="text"
                                        name="title" /></span> </label>
                        </p>
                    </div>

                    <div class="input">
                        <p><label> 4. First Name: <br />
                                <span data-name="client-name"><input size="100" maxlength="400" placeholder="First Name"
                                        aria-required="true" aria-invalid="false" value="" type="text"
                                        name="fname" /></span> </label>
                        </p>

                    </div>

                    <div class="input">
                        <p><label> 5. Last Name: <br />
                                <span data-name="client-lastname">
                                    <input type="text" name="lname" placeholder="Last Name" /></span> </label>
                        </p>

                    </div>

                    <div class="input">
                        <p><label> 6. Phone number: <br />
                                <span data-name="client-tel">
                                    <input type="text" name="pnumber" placeholder="Your Phone Number" /></span></label>
                        </p>
                    </div>

                    <div class="input">
                        <p><label> 7. Country: <br />
                                <span data-name="client-country">
                                    <select name="country">
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Antigua &amp; Deps">Antigua &amp; Deps</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia Herzegovina">Bosnia Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina">Burkina</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Central African Rep">Central African Rep</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo, the Democratic Republic of the">Congo, the Democratic
                                            Republic of the</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote d&#039;Ivoire">Cote d&#039;Ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland Republic">Ireland Republic</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea North">Korea North</option>
                                        <option value="Korea South">Korea South</option>
                                        <option value="Kosovo">Kosovo</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar, Burma">Myanmar, Burma</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="St Kitts &amp; Nevis">St Kitts &amp; Nevis</option>
                                        <option value="St Lucia">St Lucia</option>
                                        <option value="Saint Vincent &amp; the Grenadines">Saint Vincent &amp; the
                                            Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
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
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City">Vatican City</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select></span><br /></label>
                        </p>
                    </div>

                    <div class="input">
                        <p><label> 8. Company Address: <br />
                                <span data-name="client-companyaddress">
                                    <input size="40" maxlength="400" placeholder="Company Address" aria-required="true"
                                        aria-invalid="false" value="" type="text" name="address" /></span>
                            </label>
                        </p>
                    </div>
                    <div class="input">
                        <p><label> 9. You are interested in: <br />
                                <span data-name="client-interest"><select aria-required="true" aria-invalid="false"
                                        name="interest">
                                        <option value="">&#8212;Please choose an option&#8212;</option>
                                        <option value="Maintenance/ EOSL">Maintenance/ EOSL</option>
                                        <option value="Spare parts - SPaaS">Spare parts - SPaaS</option>
                                        <option value="Buy-back program">Buy-back program</option>
                                        <option value="Recycling/ ITAD">Recycling/ ITAD</option>
                                        <option value="Professional services">Professional services</option>
                                        <option value="Financial solutions">Financial solutions</option>
                                        <option value="Customer Portal">Customer Portal</option>
                                        <option value="Partner program">Partner program</option>
                                        <option value="Customer support">Customer support</option>
                                        <option value="Careers at Evernex">Careers at Evernex</option>
                                    </select></span><br />
                            </label>
                        </p>
                    </div>
                    <!-- <button type="submit" name="submit">Submit Order</button> -->
                    <div class="order_btn">
                        <input type="submit" name="submit" value="Submit Order">
                    </div>
                </form>

            </div>

        </div>
    </section>
    <footer>
        <div class="footer_main">

            <div class="footer_tag">
                <h2>Location</h2>
                <p>Kigali - Rwanda</p>
                <p>KG 227 St</p>
                <p>Twin-Tower building</p>
                <p>17th floor</p>
            </div>

            <div class="footer_tag">
                <h2>Quick Link</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="offer.php">Our Services</a></li>
                    <li><a href="partners.php">Partners</a></li>
                    <li><a href="contact.php">Order</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>Tel: +250 786 888 878</p>
                <p>Tel: +250 737 734 142</p>
                <p>Email: netsitvendor@gmaill.com</p>
                <p>Email: netsitcompany@gmail.com</p>
            </div>

            <div class="footer_tag">
                <h2>Our Service</h2>
                <p>Cloud Computing</p>
                <p>Network Security</p>
                <p>Software Development</p>
                <p>Troubleshooting</p>
                <p>Hardware Installations</p>
            </div>

            <div class="footer_tag">
                <h2>Follows</h2>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>

        <p class="end">&copy; Copy Right Nets IT. Designed by: Ishimwe Rwigema Gael Date: 04/08/2024<span><i
                    class="fa-solid fa-face-grin"></i></span>
        </p>

    </footer>
</body>

</html>