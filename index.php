<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="style/animate.css">
    <link rel="stylesheet" href="style/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    
       

</head>


<style>
            .fas{ 
            line-height: 1.5;
            }
            button:hover,button:focus,a:hover{
                outline: none;
                text-decoration: none;
                color:white;
            }
            

         #tt{
         
            color: red;
            font-weight: bold;
         }
            

        </style>


<body>


<nav>
    <img style="width: 100%;" src="imgs/bgnav.jpg" alt="" srcset="">
</nav>


<form action="php/regester.php" method="post">
               <p style="    text-align: center; font-size: 1.5rem;font-style: italic;font-weight: 600;">inscrivez vous</p> 
                 <!--=====name =====-->
                 <div class="login__box">
                            <i class='fas fa-user login__icon'></i>
                            <input type="text" placeholder="Nom" autocomplete="off" required name="Nom" class="login__input form-control">
                            <div class="msgreq" >
                                Ce champ est requis !
                            </div>
                        </div>
                   <!--===== name=====-->
                     <!--=====prenom =====-->
                 <div class="login__box">
                            <i class='fas fa-user login__icon'></i>
                            <input type="text" placeholder="Prenom" autocomplete="off" required name="prenom" class="login__input form-control">
                            <div class="msgreq" >
                                Ce champ est requis !
                            </div>
                        </div>
                   <!--===== pay=====-->
                   <div class="login__box">
                                <i class="fas fa-flag login__icon"></i>
                                <select id='pays'  name='pay'  class='login__input form-control'><option name='+376'                                                                                                                                                    value='Andorra' >AD - Andorra</option><option name='+971'  value='United Arab Emirates' >AE - United Arab Emirates</option><option name='+93'  value='Afghanistan' >AF - Afghanistan</option><option name='+1268'  value='Antigua And Barbuda' >AG - Antigua And Barbuda</option><option name='+1264'  value='Anguilla' >AI - Anguilla</option><option name='+355'  value='Albania' >AL - Albania</option><option name='+374'  value='Armenia' >AM - Armenia</option><option name='+599'  value='Netherlands Antilles' >AN - Netherlands Antilles</option><option name='+244'  value='Angola' >AO - Angola</option><option name='+672'  value='Antarctica' >AQ - Antarctica</option><option name='+54'  value='Argentina' >AR - Argentina</option><option name='+1684'  value='American Samoa' >AS - American Samoa</option><option name='+43'  value='Austria' >AT - Austria</option><option name='+61'  value='Australia' >AU - Australia</option><option name='+297'  value='Aruba' >AW - Aruba</option><option name='+994'  value='Azerbaijan' >AZ - Azerbaijan</option><option name='+387'  value='Bosnia And Herzegovina' >BA - Bosnia And Herzegovina</option><option name='+1246'  value='Barbados' >BB - Barbados</option><option name='+880'  value='Bangladesh' >BD - Bangladesh</option><option name='+32'  value='Belgium' >BE - Belgium</option><option name='+226'  value='Burkina Faso' >BF - Burkina Faso</option><option name='+359'  value='Bulgaria' >BG - Bulgaria</option><option name='+973'  value='Bahrain' >BH - Bahrain</option><option name='+257'  value='Burundi' >BI - Burundi</option><option name='+229'  value='Benin' >BJ - Benin</option><option name='+590'  value='Saint Barthelemy' >BL - Saint Barthelemy</option><option name='+1441'  value='Bermuda' >BM - Bermuda</option><option name='+673'  value='Brunei Darussalam' >BN - Brunei Darussalam</option><option name='+591'  value='Bolivia' >BO - Bolivia</option><option name='+55'  value='Brazil' >BR - Brazil</option><option name='+1242'  value='Bahamas' >BS - Bahamas</option><option name='+975'  value='Bhutan' >BT - Bhutan</option><option name='+267'  value='Botswana' >BW - Botswana</option><option name='+375'  value='Belarus' >BY - Belarus</option><option name='+501'  value='Belize' >BZ - Belize</option><option name='+1'  value='Canada' >CA - Canada</option><option name='+61'  value='Cocos (keeling) Islands' >CC - Cocos (keeling) Islands</option><option name='+243'  value='Congo, The Democratic Republic Of The' >CD - Congo, The Democratic Republic Of The</option><option name='+236'  value='Central African Republic' >CF - Central African Republic</option><option name='+242'  value='Congo' >CG - Congo</option><option name='+41'  value='Switzerland' >CH - Switzerland</option><option name='+225'  value='Cote D Ivoire' >CI - Cote D Ivoire</option><option name='+682'  value='Cook Islands' >CK - Cook Islands</option><option name='+56'  value='Chile' >CL - Chile</option><option name='+237'  value='Cameroon' >CM - Cameroon</option><option name='+86'  value='China' >CN - China</option><option name='+57'  value='Colombia' >CO - Colombia</option><option name='+506'  value='Costa Rica' >CR - Costa Rica</option><option name='+53'  value='Cuba' >CU - Cuba</option><option name='+238'  value='Cape Verde' >CV - Cape Verde</option><option name='+61'  value='Christmas Island' >CX - Christmas Island</option><option name='+357'  value='Cyprus' >CY - Cyprus</option><option name='+420'  value='Czech Republic' >CZ - Czech Republic</option><option name='+49'  value='Germany' >DE - Germany</option><option name='+253'  value='Djibouti' >DJ - Djibouti</option><option name='+45'  value='Denmark' >DK - Denmark</option><option name='+1767'  value='Dominica' >DM - Dominica</option><option name='+1809'  value='Dominican Republic' >DO - Dominican Republic</option><option name='+213'  value='Algeria' >DZ - Algeria</option><option name='+593'  value='Ecuador' >EC - Ecuador</option><option name='+372'  value='Estonia' >EE - Estonia</option><option name='+20'  value='Egypt' >EG - Egypt</option><option name='+291'  value='Eritrea' >ER - Eritrea</option><option name='+34'  value='Spain' >ES - Spain</option><option name='+251'  value='Ethiopia' >ET - Ethiopia</option><option name='+358'  value='Finland' >FI - Finland</option><option name='+679'  value='Fiji' >FJ - Fiji</option><option name='+500'  value='Falkland Islands (malvinas)' >FK - Falkland Islands (malvinas)</option><option name='+691'  value='Micronesia, Federated States Of' >FM - Micronesia, Federated States Of</option><option name='+298'  value='Faroe Islands' >FO - Faroe Islands</option><option name='+33'  value='France' >FR - France</option><option name='+241'  value='Gabon' >GA - Gabon</option><option name='+44'  value='United Kingdom' >GB - United Kingdom</option><option name='+1473'  value='Grenada' >GD - Grenada</option><option name='+995'  value='Georgia' >GE - Georgia</option><option name='+233'  value='Ghana' >GH - Ghana</option><option name='+350'  value='Gibraltar' >GI - Gibraltar</option><option name='+299'  value='Greenland' >GL - Greenland</option><option name='+220'  value='Gambia' >GM - Gambia</option><option name='+224'  value='Guinea' >GN - Guinea</option><option name='+240'  value='Equatorial Guinea' >GQ - Equatorial Guinea</option><option name='+30'  value='Greece' >GR - Greece</option><option name='+502'  value='Guatemala' >GT - Guatemala</option><option name='+1671'  value='Guam' >GU - Guam</option><option name='+245'  value='Guinea-bissau' >GW - Guinea-bissau</option><option name='+592'  value='Guyana' >GY - Guyana</option><option name='+852'  value='Hong Kong' >HK - Hong Kong</option><option name='+504'  value='Honduras' >HN - Honduras</option><option name='+385'  value='Croatia' >HR - Croatia</option><option name='+509'  value='Haiti' >HT - Haiti</option><option name='+36'  value='Hungary' >HU - Hungary</option><option name='+62'  value='Indonesia' >ID - Indonesia</option><option name='+353'  value='Ireland' >IE - Ireland</option><option name='+44'  value='Isle Of Man' >IM - Isle Of Man</option><option name='+91'  value='India' >IN - India</option><option name='+964'  value='Iraq' >IQ - Iraq</option><option name='+98'  value='Iran, Islamic Republic Of' >IR - Iran, Islamic Republic Of</option><option name='+354'  value='Iceland' >IS - Iceland</option><option name='+39'  value='Italy' >IT - Italy</option><option name='+1876'  value='Jamaica' >JM - Jamaica</option><option name='+962'  value='Jordan' >JO - Jordan</option><option name='+81'  value='Japan' >JP - Japan</option><option name='+254'  value='Kenya' >KE - Kenya</option><option name='+996'  value='Kyrgyzstan' >KG - Kyrgyzstan</option><option name='+855'  value='Cambodia' >KH - Cambodia</option><option name='+686'  value='Kiribati' >KI - Kiribati</option><option name='+269'  value='Comoros' >KM - Comoros</option><option name='+1869'  value='Saint Kitts And Nevis' >KN - Saint Kitts And Nevis</option><option name='+850'  value='Korea Democratic Peoples Republic Of' >KP - Korea Democratic Peoples Republic Of</option><option name='+82'  value='Korea Republic Of' >KR - Korea Republic Of</option><option name='+965'  value='Kuwait' >KW - Kuwait</option><option name='+1345'  value='Cayman Islands' >KY - Cayman Islands</option><option name='+7'  value='Kazakstan' >KZ - Kazakstan</option><option name='+856'  value='Lao Peoples Democratic Republic' >LA - Lao Peoples Democratic Republic</option><option name='+961'  value='Lebanon' >LB - Lebanon</option><option name='+1758'  value='Saint Lucia' >LC - Saint Lucia</option><option name='+423'  value='Liechtenstein' >LI - Liechtenstein</option><option name='+94'  value='Sri Lanka' >LK - Sri Lanka</option><option name='+231'  value='Liberia' >LR - Liberia</option><option name='+266'  value='Lesotho' >LS - Lesotho</option><option name='+370'  value='Lithuania' >LT - Lithuania</option><option name='+352'  value='Luxembourg' >LU - Luxembourg</option><option name='+371'  value='Latvia' >LV - Latvia</option><option name='+218'  value='Libyan Arab Jamahiriya' >LY - Libyan Arab Jamahiriya</option><option name='+212'  value='Morocco' selected>MA - Morocco</option><option name='+377'  value='Monaco' >MC - Monaco</option><option name='+373'  value='Moldova, Republic Of' >MD - Moldova, Republic Of</option><option name='+382'  value='Montenegro' >ME - Montenegro</option><option name='+1599'  value='Saint Martin' >MF - Saint Martin</option><option name='+261'  value='Madagascar' >MG - Madagascar</option><option name='+692'  value='Marshall Islands' >MH - Marshall Islands</option><option name='+389'  value='Macedonia, The Former Yugoslav Republic Of' >MK - Macedonia, The Former Yugoslav Republic Of</option><option name='+223'  value='Mali' >ML - Mali</option><option name='+95'  value='Myanmar' >MM - Myanmar</option><option name='+976'  value='Mongolia' >MN - Mongolia</option><option name='+853'  value='Macau' >MO - Macau</option><option name='+1670'  value='Northern Mariana Islands' >MP - Northern Mariana Islands</option><option name='+222'  value='Mauritania' >MR - Mauritania</option><option name='+1664'  value='Montserrat' >MS - Montserrat</option><option name='+356'  value='Malta' >MT - Malta</option><option name='+230'  value='Mauritius' >MU - Mauritius</option><option name='+960'  value='Maldives' >MV - Maldives</option><option name='+265'  value='Malawi' >MW - Malawi</option><option name='+52'  value='Mexico' >MX - Mexico</option><option name='+60'  value='Malaysia' >MY - Malaysia</option><option name='+258'  value='Mozambique' >MZ - Mozambique</option><option name='+264'  value='Namibia' >NA - Namibia</option><option name='+687'  value='New Caledonia' >NC - New Caledonia</option><option name='+227'  value='Niger' >NE - Niger</option><option name='+234'  value='Nigeria' >NG - Nigeria</option><option name='+505'  value='Nicaragua' >NI - Nicaragua</option><option name='+31'  value='Netherlands' >NL - Netherlands</option><option name='+47'  value='Norway' >NO - Norway</option><option name='+977'  value='Nepal' >NP - Nepal</option><option name='+674'  value='Nauru' >NR - Nauru</option><option name='+683'  value='Niue' >NU - Niue</option><option name='+64'  value='New Zealand' >NZ - New Zealand</option><option name='+968'  value='Oman' >OM - Oman</option><option name='+507'  value='Panama' >PA - Panama</option><option name='+51'  value='Peru' >PE - Peru</option><option name='+689'  value='French Polynesia' >PF - French Polynesia</option><option name='+675'  value='Papua New Guinea' >PG - Papua New Guinea</option><option name='+63'  value='Philippines' >PH - Philippines</option><option name='+92'  value='Pakistan' >PK - Pakistan</option><option name='+48'  value='Poland' >PL - Poland</option><option name='+508'  value='Saint Pierre And Miquelon' >PM - Saint Pierre And Miquelon</option><option name='+870'  value='Pitcairn' >PN - Pitcairn</option><option name='+1'  value='Puerto Rico' >PR - Puerto Rico</option><option name='+970'  value='Palestine' >PS - Palestine</option><option name='+351'  value='Portugal' >PT - Portugal</option><option name='+680'  value='Palau' >PW - Palau</option><option name='+595'  value='Paraguay' >PY - Paraguay</option><option name='+974'  value='Qatar' >QA - Qatar</option><option name='+40'  value='Romania' >RO - Romania</option><option name='+381'  value='Serbia' >RS - Serbia</option><option name='+7'  value='Russian Federation' >RU - Russian Federation</option><option name='+250'  value='Rwanda' >RW - Rwanda</option><option name='+966'  value='Saudi Arabia' >SA - Saudi Arabia</option><option name='+677'  value='Solomon Islands' >SB - Solomon Islands</option><option name='+248'  value='Seychelles' >SC - Seychelles</option><option name='+249'  value='Sudan' >SD - Sudan</option><option name='+46'  value='Sweden' >SE - Sweden</option><option name='+65'  value='Singapore' >SG - Singapore</option><option name='+290'  value='Saint Helena' >SH - Saint Helena</option><option name='+386'  value='Slovenia' >SI - Slovenia</option><option name='+421'  value='Slovakia' >SK - Slovakia</option><option name='+232'  value='Sierra Leone' >SL - Sierra Leone</option><option name='+378'  value='San Marino' >SM - San Marino</option><option name='+221'  value='Senegal' >SN - Senegal</option><option name='+252'  value='Somalia' >SO - Somalia</option><option name='+597'  value='Suriname' >SR - Suriname</option><option name='+239'  value='Sao Tome And Principe' >ST - Sao Tome And Principe</option><option name='+503'  value='El Salvador' >SV - El Salvador</option><option name='+963'  value='Syrian Arab Republic' >SY - Syrian Arab Republic</option><option name='+268'  value='Swaziland' >SZ - Swaziland</option><option name='+1649'  value='Turks And Caicos Islands' >TC - Turks And Caicos Islands</option><option name='+235'  value='Chad' >TD - Chad</option><option name='+228'  value='Togo' >TG - Togo</option><option name='+66'  value='Thailand' >TH - Thailand</option><option name='+992'  value='Tajikistan' >TJ - Tajikistan</option><option name='+690'  value='Tokelau' >TK - Tokelau</option><option name='+670'  value='Timor-leste' >TL - Timor-leste</option><option name='+993'  value='Turkmenistan' >TM - Turkmenistan</option><option name='+216'  value='Tunisia' >TN - Tunisia</option><option name='+676'  value='Tonga' >TO - Tonga</option><option name='+90'  value='Turkey' >TR - Turkey</option><option name='+1868'  value='Trinidad And Tobago' >TT - Trinidad And Tobago</option><option name='+688'  value='Tuvalu' >TV - Tuvalu</option><option name='+886'  value='Taiwan, Province Of China' >TW - Taiwan, Province Of China</option><option name='+255'  value='Tanzania, United Republic Of' >TZ - Tanzania, United Republic Of</option><option name='+380'  value='Ukraine' >UA - Ukraine</option><option name='+256'  value='Uganda' >UG - Uganda</option><option name='+1'  value='United States' >US - United States</option><option name='+598'  value='Uruguay' >UY - Uruguay</option><option name='+998'  value='Uzbekistan' >UZ - Uzbekistan</option><option name='+39'  value='Holy See (vatican City State)' >VA - Holy See (vatican City State)</option><option name='+1784'  value='Saint Vincent And The Grenadines' >VC - Saint Vincent And The Grenadines</option><option name='+58'  value='Venezuela' >VE - Venezuela</option><option name='+1284'  value='Virgin Islands, British' >VG - Virgin Islands, British</option><option name='+1340'  value='Virgin Islands, U.s.' >VI - Virgin Islands, U.s.</option><option name='+84'  value='Viet Nam' >VN - Viet Nam</option><option name='+678'  value='Vanuatu' >VU - Vanuatu</option><option name='+681'  value='Wallis And Futuna' >WF - Wallis And Futuna</option><option name='+685'  value='Samoa' >WS - Samoa</option><option name='+381'  value='Kosovo' >XK - Kosovo</option><option name='+967'  value='Yemen' >YE - Yemen</option><option name='+262'  value='Mayotte' >YT - Mayotte</option><option name='+27'  value='South Africa' >ZA - South Africa</option><option name='+260'  value='Zambia' >ZM - Zambia</option><option name='+263'  value='Zimbabwe' >ZW - Zimbabwe</option></select>                                <!-- <input type="text" placeholder="Pays" name="pay" autocomplete="off" required class="login__input form-control"> -->
                                <div class="msgreq" >
                                    Ce champ est requis !
                                </div>
                            </div>
                    <!--===== pay=====-->  <!-- Ville -->
                        <div class="login__box">
                            <i class="fas fa-city login__icon"></i>
                            <select placeholder="Ville" name="ville" autocomplete="on" required class="login__input form-control">
                                <option value="" disabled="disabled" selected="true">Ville</option>
                                <option value="Al Haouz">Al Haouz</option>
                                <option value="Al Hoceïma">Al Hoceïma  </option>
                                <option value="Aousserd">Aousserd  </option>
                                <option value="Assa-Zag">Assa-Zag  </option>
                                <option value="Azilal">Azilal  </option>
                                <option value="Agadir">Agadir  </option>
                                <option value="Ben Slimane">Ben Slimane  </option>
                                <option value="Béni Mellal-Khénifra">Béni Mellal-Khénifra</option>
                                <option value="Béni-Mellal">Béni-Mellal  </option>
                                <option value="Berkane">Berkane  </option>
                                <option value="Boujdour ">Boujdour  </option>
                                <option value="Boulemane">Boulemane  </option>
                                <option value="Casablanca">Casablanca</option>
                                <option value="Settat">Settat</option>
                                <option value="Chefchaouen">Chefchaouen  </option>
                                <option value="Chichaoua">Chichaoua  </option>
                                <option value="Dakhla">Dakhla</option>
                                <option value="Drâa-Tafilalet">Drâa-Tafilalet</option>
                                <option value="El Hajeb">El Hajeb  </option>
                                <option value="El Jadida">El Jadida  </option>
                                <option value="Errachidia">Errachidia  </option>
                                <option value="Es Semara">Es Semara  </option>
                                <option value="Essaouira">Essaouira  </option>
                                <option value="Fahs Anjra">Fahs Anjra  </option>
                                <option value="Fès">Fès</option>
                                <option value="Meknès">Meknès</option>
                                <option value="Figuig">Figuig  </option>
                                <option value="Guelmim">Guelmim  </option>
                                <option value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
                                <option value="Ifrane">Ifrane</option>
                                <option value="Inezgane-Aït Melloul">Inezgane-Aït Melloul</option>
                                <option value="Jerada">Jerada</option>
                                <option value="Kelaat Sraghna">Kelaat Sraghna</option>
                                <option value="Kénitra">Kénitra  </option>
                                <option value="Khémisset">Khémisset  </option>
                                <option value="Khénifra">Khénifra  </option>
                                <option value="Khouribga">Khouribga  </option>
                                <option value="Rabat">Rabat  </option>
                                <option value="Laâyoune">Laâyoune  </option>
                                <option value="Sakia El Hamra">Sakia El Hamra</option>
                                <option value="Larache">Larache  </option>
                                <option value="Safi">Safi</option>
                                <option value="Marrakesh">Marrakesh</option>
                                <option value="Mediouna">Mediouna  </option>
                                <option value="Moulay Yacoub">Moulay Yacoub  </option>
                                <option value="Nador">Nador  </option>
                                <option value="Nouaceur">Nouaceur  </option>
                                <option value="Oriental">Oriental</option>
                                <option value="Ouarzazate">Ouarzazate  </option>
                                <option value="Oued Ed-Dahab">Oued Ed-Dahab  </option>
                                <option value="Safi">Safi  </option>
                                <option value="Sefrou">Sefrou  </option>
                                <option value="Settat">Settat  </option>
                                <option value="Shtouka Ait Baha">Shtouka Ait Baha  </option>
                                <option value="Sidi Kacem">Sidi Kacem  </option>
                                <option value="Sidi Youssef Ben Ali">Sidi Youssef Ben Ali</option>
                                <option value="Souss-Massa">Souss-Massa</option>
                                <option value="Tan-Tan">Tan-Tan  </option>
                                <option value="Tanger">Tanger</option>
                                <option value="Tétouan">Tétouan</option>
                                <option value="Taounate">Taounate  </option>
                                <option value="Taourirt">Taourirt  </option>
                                <option value="Taroudant">Taroudant  </option>
                                <option value="Tata">Tata  </option>
                                <option value="Taza">Taza  </option>
                                <option value="Tétouan">Tétouan  </option>
                                <option value="Tiznit">Tiznit  </option>
                                <option value="Zagora">Zagora  </option>
                                <option value="Autre">Autre  </option>
                            </select>
                            <div class="msgreq" >
                                  Ce champ est requis !
                            </div>
                        </div>
                         <!-- ville -->

                          <!-- Télé -->
                        <div class="login__box" >
                            <i class='fas fa-phone login__icon'></i>
                            <span id="tt">+212</span>
                            <input type="hidden" value="+212"  id="code" name="code">
                            <input type="tel" id="tele" autocomplete="off" name="tele" placeholder="Num_Téléphone" required  class=" login__input form-control">
                            <div class="msgreq" >
                                Ce champ est requis !
                            </div>
                        </div>

                        
                            <!-- Email -->
                            <div class="login__box">
                            <i class='fas fa-at login__icon'></i>
                            <input type="email" autocomplete="off" name="email" placeholder="exemple@gmail.com" required  class="login__input form-control">
                            <div class="msgreq" >
                                Ce champ est requis !
                            </div>
                        </div>
                        <!-- Email -->
                        

                             <!-- Fonction -->
                             <div class="login__box">
                            <i class="fas fa-project-diagram login__icon" aria-hidden="true"></i>
                            <select placeholder="Spécialité"  class="login__input form-control" name="specialite" required>
                                <option value="" disabled="disabled" selected="true">Spécialité</option>
                                <option value="CHU">Pediatre</option>
                                <option value="Dermatologue">Dermatologue</option>
                                <option value="Spécialiste">Spécialiste</option>
                                <option value="résidents">Résidents</option>
                            </select>
                            <div class="msgreq" >
                                Ce champ est requis !
                            </div>
                        </div>

                             <!-- lieu -->
                             <div class="login__box">
                            <i class="fas fa-duotone fa-stethoscope login__icon"></i>
                            <select placeholder="lieu de travail" name="lieu" autocomplete="off" required class="login__input form-control">
                                <option value="" disabled="disabled" selected="true">lieu de travail</option>
                                <option value="CHU">CHU</option>
                                <option value="Public">Public</option>
                                <option value="liberal">libéral</option>
                            </select>
                            <div class="msgreq" >
                                Ce champ est requis !
                            </div>
                        </div>
                        <button id="btnvalide" class="button-86" role="button" type="submit"style="margin:auto;">valider</button>

</form>





















<div class='container' id="animate">
  <div class='loader'>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--dot'></div>
    <div class='loader--text'></div>
  </div>
</div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="scripte/main.js" >
 
</script>

<script>

        document.querySelector("#pays").addEventListener("change",()=>{
        
           var code =$( "#pays option:selected" ).attr("name");
               document.getElementById("tt").innerHTML=code;
               document.getElementById("code").value=code;

        });



var inputs= document.getElementsByClassName("login__input form-control")
var msgrq= document.getElementsByClassName("msgreq")
        $("#btnvalide").click(function(){
            for(var i =0;i<8;i++ ){
              if(inputs[i].value==""){
                msgrq[i].style.display="block"
              }
              else{
                msgrq[i].style.display="none"
              }
            }

        })

</script>
</html>