<?php

if (isset($_SERVER['REQUEST_URI'])) {
    $url = $_SERVER['REQUEST_URI'];
    if (substr($url, 0, 7)!=='http://') {
        $url = 'http://'.$_SERVER['HTTP_HOST'];
        if (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT']!=80) {
            $url.= ':'.$_SERVER['SERVER_PORT'];
        }
        $url.= $_SERVER['REQUEST_URI'];
    }
} else {
    $url = 'http://localhost/html2pdf/examples/forms.php';
}
?>
<style type="text/css">
li
{ font-size: 10pt; }

input, textarea, select
{
    border: dashed 1mm red;
    background: #FCC;
    color: #400;
    text-align: left;
    font-size: 11pt;
}
</style>
<page footer="form,date,time">
    <h1>Test de formulaire</h1><br>
    <br>
        <form >

                        <div class="form">

                            <span>I, <input type="text" name="name" id="nombre" >, agree to not harm in any way, attemp to kill my self, or kill my self during the period form <input type="date" name="date1" id="date1" > to <input type="date" name="date2" id="date2" >, (the time of my next appoiment).</span><br><br>



                            <p>
                                I, agree that, for any reason, if the appoiment seassion is posponed, canceled, etc., that this time period is extended until the next direct meeting with my conselor.In this period time, I agree to care myself, to eat well, and to get enough sleep each
                                nigth.
                            </p>

                            <p>I agree to make social/family contact with the following individuals</p>
                            <input type="text" name="family1" class="form-control" placeholder="name-1" id="family1" >
                            <input type="text" name="family2" class="form-control" placeholder="name-2" id="family2" >
                            <input type="text" name="family3" class="form-control" placeholder="name-3" id="family3" >
                            <input type="text" name="family4" class="form-control" placeholder="name-4" id="family4" >

                            <p>I agree to rid my presence of all things I could use to harm or kill my self. I agree that, If I am having a rough time and come to a point wheat I may brake any of these promises, I will call and make significant contact with
                                any of following individuals</p>

                            <span> 
                                <input type="text" name="family_5" width="50% important!;" placeholder="name" id="family5" >at:# <input type="text" name="phone1" id="phone1" > 
                            </span><br><br>
                            <span> 
                                <input type="text" name="family_6"  placeholder="name" id="family6" >at:# <input type="text" name="phone2" id="phone2" > 
                            </span><br><br>

                            <p>
                                If I cannot contact these individuals, I will immediatly call the <b>Crisis Hotline at</b> # <input type="text" name="phoneC" id="phoneC" > or, call 1-800-273-8255, the U.S. 24-hour suicide prevention line.
                            </p>

                            <p>
                                I agree that these condition are important, worth, and that this is I am willing to make and keep. By my word and honor. I intend to keep this contact.
                            </p>
                            <span> 
                            Signed <input type="text" name="signed" width="50% important!;" placeholder="name" id="signed1">Date <input type="date" name="dateS" id="dateS" > 
                            </span><br><br>
                            <span> 
                            Witnessed by <input type="text" name="witness"  placeholder="name" id="witness1" >Date <input type="date" name="dateW" id="dateW" > 
                            </span><br><br>
                            <hr>
                    

                     
                            <h3>Client consent</h3>
                            <span> 
                                Client Name:   <input type="text" name="client_name" width="50% important!;" placeholder="Client name" id="client_name" > 
                            </span><br><br>
                            <span> 
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos earum obcaecati culpa, vero porro officiis?  <input type="text" name="client_ini" width="50% important!;" placeholder="Client Initials"> 
                            </span><br><br>
                            <span> 
                                Date Birth  <input type="date" name="birth_client" width="50% important!;" placeholder="Client Birth"> 
                            </span><br><br>
                            <span> 
                            Email  <input type="email" name="email_client" width="50% important!;" placeholder="Client Email"> 
                            </span><br><br>
                            <span> 
                                Phone Number  <input type="text" name="phone_client" width="50% important!;" placeholder="Client Phone"> 
                            </span><br><br>
                            <span> 
                                Client Signature  <input type="text" name="client_signature" width="50% important!;" placeholder="Client Signature"> 
                            </span><br><br>
                            <span> 
                                Date <input type="date" name="dateApp" width="50% important!;" placeholder="Date"> 
                            </span><br><br>

                           
                      
                            <hr>

                            <span> 
                            <input type="text" name="NameRep"  placeholder="Individual or Legal Representative(Please print)" class="form-control2">  Date <input type="date" name="dateRep" > 
                            </span><br><br>
                            <span> 
                            <input type="text" name="SignaRep"  placeholder="Signature of Individual or Legal Representative" class="form-control2">Date <input type="date" name="dateRep2" > 
                            </span><br><br>

                            <hr>

                            <h2 class="text-center">Patient Questionnaire</h2>
                            <span> Name:
                                <input type="text" name="NamePat" class="form-control2 mt-5" placeholder="Name patient" class="form-control2"> 
                                        </span><br><br>
                            <span> 

                            <span> 
                                Date of Birth: <input type="text" name="birth" width="50% important!;" placeholder="Birth Date">     Age <input type="date" name="dateS" class="mr-50"> 
                            </span><br><br>

                            <span> 
                            Medication Alergies: <textarea name="medicationAler" class="form-control"></textarea> 
                            </span><br><br>

                            <span> 
                            Current  Medication: <textarea name="currentMed" class="form-control"></textarea> 
                            </span><br><br>

                            <span> 
                            Phisycan diganosed medical problem: <textarea name="problemPhis" class="form-control"></textarea> 
                            </span><br><br>

                            <span> 
                                Past seurgeries: <textarea name="pastSurge" class="form-control"></textarea> 
                                </span><br><br>

                            <span>
                                1. Does your <input type="checkbox" name="father" value="Father"> Father, <input type="checkbox" name="mother" value="mother"> Mother, <input type="checkbox" name="brother" value="brother"> Brother (s), <input type="checkbox" name="sister" value="sister"> Sister(s), have a history of alcohol or drug abuse? <input type="text" name="drugA" class="form-control2" placeholder="History of alcohol or drug abuse">
                            </span><br><br>

                            <span>
                                2. Do you smoke?  <input type="text" name="smoke" class="form-control2" placeholder="smoke?"> If yes, 
                                <input type="text" name="smoke2" class="form-control2" placeholder="stop smoke">
                            </span><br><br>

                            <span>
                                3. Do you use alcohol?  <input type="text" name="alcohol" class="form-control2" placeholder="Do you use alcohol?"> If yes, 
                                <input type="radio" name="minimal" value="minimal"> Minimal  <input type="radio" name="moderate" value="moderate"> Moderate  <input type="radio" name="heavy" value="heavy"> Heavy
                            </span><br><br>


                            <span>
                                4. <input type="text" name="alcholTrea" class="form-control2" placeholder="Have you ever treated or diganosid alcoholism">  
                                
                            </span><br><br>

                            <span>
                                5. Do you think you are an alcholic or a drug addict  <input type="text" name="drugAdict" class="form-control2" placeholder="Yes or No">  
                                
                            </span><br><br>

                            <span>
                                6. Have you abused prescriptions medications (your own or some else)  <input type="text" name="abusedMed" class="form-control3" >  Type?? <textarea name="descriptAbu" class="form-control mt-1"></textarea>
                                
                            </span><br><br>

                            <span>
                                7. <input type="text" name="convicted" class="form-control3" placeholder="Are you convicted ??">  
                                <input type="text" name="sentence" class="form-control3" placeholder="Sentence passed down">
                            </span><br><br>

                            <span>
                                8. What pharmacy will you utilizing?? <input type="text" name="pharmacy" class="form-control" placeholder="Name of pharmacy">  
                                
                            </span><br><br>

                            <span>
                                9. 
                                <input type="text" name="phoneUnrea" class="form-control" placeholder="Contact not function"> 
                                
                                Phone#: <input type="text" class="form-control3" name="phoneWorks" placeholder="Phone client"> #Cell:  <input type="text" class="form-control3" name="cellWorks" placeholder="Cellular client">                            
                            </span><br><br>

                            <span>
                                10. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam iure, quasi cumque minus, molestias est maxime consectetur eum vel quam officiis a alias beatae at. &nbsp;&nbsp; &nbsp;&nbsp;

                                <input type="radio" name="acceptAgree" value="accept signed"> Yes  &nbsp;&nbsp;
                                <input type="radio" name="noacceptAgree" value="No Agree Signed"> No                           
                            </span><br><br>

                            <span>
                                11. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam iure, quasi cumque minus, molestias est maxime consectetur eum vel quam officiis a alias beatae at. &nbsp;&nbsp; &nbsp;&nbsp;

                                <input type="radio" name="acept" value="Understand kill my self"> Yes  &nbsp;&nbsp;
                                <input type="radio" name="noacept" value="No Understand kill my self"> No                           
                            </span><br><br>

                            <span>
                                12. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam iure, quasi cumque minus, molestias est maxime consectetur eum vel quam officiis a alias beatae at. &nbsp;&nbsp; &nbsp;&nbsp;

                                <input type="radio" name="answerHonor" value="Answer Honor"> Yes  &nbsp;&nbsp;
                                <input type="radio" name="noanswerHonor" value="No-Answer Honor"> No                           
                            </span><br><br>

                            <span class="container">
                                
                                                            
                                <input type="text" class="form-control3" name="signaAgree" placeholder="Signature"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                                <input type="date" class="form-control3" name="dateAgree" placeholder="Date">                            
                            </span><br><br>

                            <hr>

                            <h2 class="text-center">Pattient Registration Form</h2>
                            <span class="container">
                                
                                                            
                                <input type="text" class="form-control3 mt-5" name="patientName" placeholder="Pattient Name"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                <input type="text" class="form-control3" name="patientSSN" placeholder="Social Security #">  
                                
                                
                                <input type="text" class="form-control3 mt-5" name="streetAddress" placeholder="Street Address"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                <input type="date" class="form-control3" name="patientBirth" placeholder="Date Birth"> 
                                
                                
                                <input type="text" class="form-control3 mt-5" name="ZipCode" placeholder="City, State, ZIP Code"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                <input type="text" class="form-control3" name="homePhone" placeholder="Home Phone">  


                                <input type="text" class="form-control3 mt-5" name="gender" placeholder="Gender"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                <input type="text" class="form-control3" name="workHome" placeholder="Work Phone">  


                                <input type="text" class="form-control3 mt-5" name="emailAddress" placeholder="Email Address"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                <input type="text" class="form-control3" name="mobilePhone" placeholder="Mobile Phone">  


                                <input type="text" class="form-control3 mt-5" name="primaryPhisician" placeholder="Primary Phisician"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                <input type="text" class="form-control3" name="Phischiatrist" placeholder="Phischiatrist (if any)">  

                                <input type="text" class="form-control3 mt-5" name="contactEmergency" placeholder="Emergency Contact Person"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                <input type="text" class="form-control3" name="phoneContactEmergency" placeholder="Emergency Contact Phone">
                                
                                <input type="text" class="form-control3 mt-5" name="reference" placeholder="How dou you hear about us"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                <input type="text" class="form-control3" name="statusMarital" placeholder="Marital status">  


                            </span><br><br><br><br>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur voluptatum magni alias? Temporibus accusamus voluptas odio inventore eius architecto asperiores sunt, repellat voluptatum quas at, animi eaque dolor? Et, laborum.</p>

                            <input type="text" class="form-control3 mt-2" name="partyResponsable" placeholder="Responsable Party"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control3" name="homePhoneParty" placeholder="Home Phone">

                            <input type="text" class="form-control3 mt-5" name="streetAd" placeholder="Street address"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control3" name="workPhone" placeholder="Work Phone">

                            <input type="text" class="form-control3 mt-5" name="signaAgree" placeholder="City, State, ZIP Code"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control3" name="phoneM" placeholder="Mobile Phone">

                            <input type="text" class="form-control3 mt-5" name="relaPatient" placeholder="Relationship to pattient"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control3" name="responsableSSN" placeholder="Responsable party ssn">

                            <hr>

                            <h2 class="text-center mt-5">Insurange Information</h2>

                            <input type="text" class="form-control3 mt-5" name="insurangePrimary" placeholder="Primary Insurange"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control3" name="policyHolderName" placeholder="Policy Holder Name">

                            <input type="text" class="form-control3 mt-5" name="companyName" placeholder="Company Address"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="date" class="form-control3" name="policyBirth" placeholder="Policy Holder Date of Birth">

                            <input type="text" class="form-control3 mt-5" name="cityState" placeholder="City, State, Zip Code"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control3" name="numberId" placeholder="Identifaction Number">

                            <input type="text" class="form-control3 mt-5" name="nameCom" placeholder="Company Phone"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control3" name="groupPolice" placeholder="Policy/Group Number">

                            <input type="text" class="form-control3 mt-5" name="employerName" placeholder="Employer"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control3" name="policySSN" placeholder="Policy Holder SSN">


                            <input type="text" class="form-control3 mt-5" name="secundaryInsurange" placeholder="Secundary Insurange"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control3" name="namePolicy2" placeholder="Policy Holder Name">

                            <input type="text" class="form-control3 mt-5" name="companyAddress2" placeholder="Company Address"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control3" name="policyBirth2" placeholder="Policy Holder Date of Birth">

                            <input type="text" class="form-control3 mt-5" name="codeZip" placeholder="City, State, Zip Code"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control3" name="number2ID" placeholder="Identifaction Number">

                            <input type="text" class="form-control3 mt-5" name="phoneCompany" placeholder="Company Phone"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control3" name="policyGroupNumber" placeholder="Policy/Group Number">

                            <input type="text" class="form-control3 mt-5" name="employer2" placeholder="Employer"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control3" name="policyHolder2" placeholder="Policy Holder SSN">

                            <p class="mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum sint in corrupti. Et beatae a laboriosam in ratione distinctio, quos magni quia placeat laborum perferendis velit necessitatibus corrupti amet. Maxime!</p>

                            Signature: <input type="text" class="form-control2" name="signaThera"><br> Date: <input type="date" class="form-control2" name="dateThera">

                            <hr>

                            <h2 class="text-center">Confidentialy Release Form</h2>

                            <span class="mt-3">
                            I, <input type="text" name="patienName" class="form-control3" placeholder="Name pattient">,&nbsp; &nbsp; authorize &nbsp; &nbsp;<input type="text" class="form-control3" name="DoctorName" placeholder="Name doctor">,&nbsp; &nbsp; to disclose to <input type="text" class="form-control3" name="namesDistr" placeholder="Location of persons Organizations"> &nbsp; &nbsp; the copies of any.....
                            </span>

                            <p>These records and information include, but may not be limited to: </p>

                            <input type="checkbox" name="hospitalRecord" value="hospital"> Hospital Records <br>
                            <input type="checkbox" name="testResult" value="testResult"> Laboratory Test Result <br>
                            <input type="checkbox" name="medicalResults" value="medicalResults"> Medical Results <br>
                            <input type="checkbox" name="medicalOpinion" value="medicalOpinion"> Medical Opinion <br>
                            <input type="checkbox" name="treatmentPlan" value="treatmentPlan"> Treatment Plans <br>
                            <input type="checkbox" name="descriptionsPresciptions" value="descriptionsPresciptions"> Descriptions and Prescriptions <br>
                            <input type="checkbox" name="notesConvesations" value="notesConvesations"> Notes of conversations <br>
                            <br><br>
                            <span class="mt-3">
                                I, understain purpuse of this disclousure is &nbsp; &nbsp; <input type="text" name="disclousure" class="form-control3">&nbsp; &nbsp; <input type="text" name="authorizationDisclousure" class="form-control3" placeholder="Authorization Disclousure">&nbsp; &nbsp;  <input type="text" name="authorizationDisclousure2" class="form-control3">
                                <br>
                                <input type="text" name="patientDisclousure" class="form-control2" placeholder="Patient Name"> Date: <input type="date" name="disclousureDate" class="form-control3">
                                <br>
                                <input type="text" name="socialNumber" class="form-control2 mt-1" placeholder="Social Security Number">  
                            </span>

                            <span class="mt-3">
                            
                                Print Witness Name <input type="text" name="wName" class="form-control2" placeholder="Witness Name"> &nbsp; &nbsp; Date: <input type="date" name="disclousureDate2" class="form-control3"> <br>
                                Signature Witness: <input type="text" name="wSignature" class="form-control3">
                            
                            </span>

                            <h2 class="text-center">Attemption Recipient - Notice Prohibiting Redisclousure</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis minima voluptates perspiciatis, culpa eum nemo odit labore itaque, reiciendis in fuga doloremque iure possimus aspernatur provident suscipit fugiat quisquam voluptatem
                                unde vero consectetur sed temporibus? Autem quod hic laboriosam corrupti sint impedit at porro eveniet id necessitatibus, magnam, architecto tempora?</p>
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat saepe tempora explicabo voluptatibus provident iste at voluptatum reiciendis earum totam, cumque optio esse amet molestiae, modi labore. Blanditiis voluptatibus ea
                                sit quia, rerum minima. Dolore fugiat cupiditate dolorem fugit enim ex totam, iure optio inventore! Sequi sint in repellendus dolore?</p>


                            <h2 class="text-center">Permiso para tratar al paciente</h2>

                            <span class="mt-5"> Yo, <input type="text" name="nameDr" class="form-control3"> &nbsp; &nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quas corrupti, ducimus commodi culpa voluptatibus voluptates nemo est excepturi. Dolor quo hic laborum optio quibusdam tenetur rem provident impedit, esse odit! Illo quisquam velit sunt voluptas enim ex blanditiis atque? Quae aliquid minus cupiditate praesentium accusantium fugit dolorum? Excepturi corporis commodi iste delectus tempore vel iusto necessitatibus similique cumque voluptatibus aperiam, quam illo saepe itaque laborum placeat. Nihil modi pariatur deserunt similique hic accusantium corporis ab placeat non harum nemo, saepe voluptas quis! Vel expedita labore inventore quo veritatis sed quasi quia. Deserunt, laborum quod vitae quas mollitia officiis porro.</span>
                            <ul>
                                <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores consequuntur optio a mollitia doloremque veniam praesentium labore magnam quasi. Voluptatibus natus harum veniam. Vero maiores voluptatibus voluptate hic. Suscipit,
                                    architecto!
                                </li>
                                <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur inventore aspernatur hic voluptate aliquam ad harum eius sit minus veniam natus voluptates ullam ipsum animi architecto, voluptatibus dolor, ab magni.</li>
                                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit assumenda officia laudantium. Ipsum mollitia consequuntur, ex voluptatem veniam est neque. Modi accusamus repellendus ullam culpa distinctio fugit laboriosam
                                    ut a.
                                </li>
                            </ul>

                            <span>Nombre cliente: <input type="text" name="name_C" class="form-control2"></span><br>
                            <span>Firma: <input type="text" name="firma_C" class="form-control2"></span><br>
                            <span>Autrorizacion de padres o guardian menor de edad: <input type="text" name="auth_C" class="form-control2"></span><br>
                            <span>Nombre padre/madre/guardian: <input type="text" name="name_Padres" class="form-control2"></span><br>
                            <span>Firma padre/madre/guardian: <input type="text" name="firma_Padres" class="form-control2"></span><br>
                            <span>Fecha: <input type="date" name="date_C" class="form-control3"></span><br><br>

                            <hr>

                            <h2 class="text-center">No Show, Late cancellation and Copayment policy</h2>

                            <span>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, blanditiis sit veniam vel minima alias nulla impedit voluptas itaque illum error dolores, quibusdam corporis quasi consequatur fugit explicabo, necessitatibus tempora.</span>

                            <span>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, blanditiis sit veniam vel minima alias nulla impedit voluptas itaque illum error dolores, quibusdam corporis quasi consequatur fugit explicabo, necessitatibus tempora.</span>

                            <span>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, blanditiis sit veniam vel minima alias nulla impedit voluptas <input type="text" name="copayment_person" class="form-control3" placeholder="name copayment person"> &nbsp;  illum error dolores, quibusdam corporis quasi consequatur fugit <input type="text" name="deducible" class="form-control3" placeholder="amount deducible per year"> &nbsp; necessitatibus tempora. Lorem ipsum dolor sit amet.?? <input type="checkbox" name="agreePayment" value="Yes"> Yes  <input type="checkbox" name="noagreePayment" value="No"> No  Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aliquid asperiores totam? Suscipit, eius! <input type="text" name="deducible2" class="form-control3" placeholder="how much more you can pay"> &nbsp;</span>

                            <span>4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, blanditiis sit veniam vel minima alias nulla impedit voluptas itaque illum error dolores, quibusdam corporis quasi consequatur fugit explicabo, necessitatibus tempora.</span>

                            <span>5. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, blanditiis sit veniam vel minima alias nulla impedit voluptas itaque illum error dolores, quibusdam corporis quasi consequatur fugit explicabo, necessitatibus tempora.</span>

                            <span>6. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, blanditiis sit veniam vel minima alias nulla impedit voluptas itaque illum error dolores, quibusdam corporis quasi consequatur fugit explicabo, necessitatibus tempora.</span><br><br>

                            <input type="text" name="signaparty" placeholder="Signature of Responsable Party" class="form-control2">

                            <input type="date" name="dateparty" placeholder="Date" class="form-control2 mt-2"><br><br>

                            <hr>

                            <h2 class="text-center mb-5">Credit/Debit Card Payment Consent Form</h2>

                            <input type="text" class="form-control2" placeholder="Client name" name="client_Name2">

                            <input type="text" class="form-control2" placeholder="Name on card if different than client" name="clientName3">

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque maxime reiciendis quod perferendis, mollitia voluptatem sunt iusto assumenda labore possimus consectetur fugiat voluptas nesciunt. Quasi, nulla repudiandae repellendus
                                soluta sit sint laborum nostrum, quod necessitatibus molestias, dicta itaque commodi unde numquam mollitia placeat incidunt. Sed deleniti officia necessitatibus iusto quibusdam?</p>

                            <input type="text" name="signaCard" placeholder="Signature of Responsable" class="form-control2">
                            <input type="text" name="initialsCard" placeholder="Initials on card" class="form-control2">
                            <input type="date" name="dateExp" placeholder="Expiration Date" class="form-control2 mt-2"><br><br>
                            <hr>

                            <h2 class="text-center">Counseling Treatment Plan</h2> <br><br>

                            <input type="text" name="nameCliente" placeholder="Client Name" class="form-control2">
                            <input type="text" name="case" placeholder="case">
                            <br><br> Reopen Date <input type="date" name="dateR" class="form-control3">
                            <input type="text" name="inactive" placeholder="Inactive" class="form-control2">

                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque vero vel numquam veritatis repellat minima omnis iure error laborum itaque corrupti cupiditate, voluptates incidunt aspernatur tenetur non inventore repellendus rem?</span><br><br>



                            <input type="number" name="decreaseEner" placeholder="Decrease Energy" class="form-control4">
                            <input type="number" name="restless" placeholder="Restlessnes" class="form-control4">
                            <input type="number" name="hopelessnes" placeholder="Hope Lessness" class="form-control4">
                            <input type="number" name="guilt" placeholder="Execesive Guilt" class="form-control4">
                            <br>
                            <input type="number" name="panicAttacks" placeholder="Panic Attacks" class="form-control4">
                            <input type="number" name="cruelty" placeholder="Cruelty" class="form-control4">
                            <input type="number" name="lossPleasure" placeholder="Loss of Pleasure" class="form-control4">
                            <input type="number" name="depressed" placeholder="Deppressed Mood" class="form-control4">

                            <input type="number" name="anxiety" placeholder="Anxiety" class="form-control4">
                            <input type="number" name="sleepDist" placeholder="Sleep Disturbance" class="form-control4">
                            <input type="number" name="withdrawn" placeholder="WithDrawn" class="form-control4">
                            <input type="number" name="Oppositional" placeholder="Oppositional" class="form-control4">

                            <input type="number" name="concentration" placeholder="Poor Concentration" class="form-control4">
                            <input type="number" name="indesecive" placeholder="Indesicive" class="form-control4">
                            <input type="number" name="swing" placeholder="Mood Swing" class="form-control4">
                            <input type="number" name="rulesViolation" placeholder="Violation Rules" class="form-control4">

                            <input type="number" name="porblemLegal" placeholder="Legal Problems" class="form-control4">
                            <input type="number" name="irritability" placeholder="Irritability" class="form-control4">
                            <input type="number" name="helplessnes" placeholder="Helpessness" class="form-control4">
                            <input type="number" name="eatingDist" placeholder="Eating Disturbance" class="form-control4">

                            <input type="number" name="inpulsivity" placeholder="Inpulsivity" class="form-control4">
                            <input type="number" name="worry" placeholder="Worrying" class="form-control4">
                            <input type="number" name="agressionRage" placeholder="Agression/Rage" class="form-control4">
                            <input type="number" name="tearF" placeholder="Tearfulness" class="form-control4">

                            <input type="number" name="abusseSustance" placeholder="Substance abuse" class="form-control4">
                            <input type="number" name="ritualBeha" placeholder="Ritualistic behavior" class="form-control4">
                            <input type="number" name="selfEsteem" placeholder="Low self-esteem" class="form-control4">
                            <input type="number" name="lowMotivation" placeholder="Low Motivation" class="form-control4">

                            <input type="text" name="other" class="form-control" placeholder="Other">
                            <br><br><br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi labore minus consequuntur ipsum quidem quasi facilis officiis, distinctio eius asperiores? <br>
                            <input type="radio" name="stressLe" value="greater"> Greater - <input type="radio" name="stressLe" value="less"> Less - <input type="radio" name="stressLe" value="none"> None <br><br>

                            <input type="number" name="changesPS" placeholder="Changes in physical status" class="form-control2"><br><br>

                            <input type="number" name="changesPSA" placeholder="Reports received/ Ancilarry services documented" class="form-control2"><br><br>

                            <span>
                                Treatment plan: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, perspiciatis! :
                            </span>

                            <textarea name="plantTreatmen" id="" cols="30" rows="10" class="form-control"></textarea><br>

                            <span>
                                Changes in a treatment criteria &nbsp;&nbsp;  <input type="radio" name="trat_crit" class="form-control5" value="Yes, I noted changes in treatment criteria">Yes <input type="radio" name="trat_crit" class="form-control5" value="No, I not noted changes in treatment criteria"> No,&nbsp;&nbsp; if yes, note changes. <br><br>

                                <textarea name="plantTreatmentDetail" id="" cols="30" rows="10" class="form-control"></textarea>


                            </span><br><br>

                            <span>

                                Sessions per month: <input type="number" name="sessionpermonth" class="form-control5"> &nbsp;&nbsp; client concurred: <input type="radio" name="client_concurred" class="form-control5" value="yes, client concurred">Yes, &nbsp;<input type="radio" name="client_concurred" class="form-control5" value="no, client concurred"> No
                            </span><br><br>

                            <span>
                                Dx Code (Original) <input type="text" name="dxCode" class="form-conrol2"><br><br>
                                Dx Code (Current) <input type="text" name="dxCurrent" class="form-conrol2"><br><br>
                                URC <input type="text" name="urc" class="form-conrol2"><br>
                            </span>

                            <input type="text" name="therapist" class="form-control2" placeholder="Thearapist"> &nbsp;&nbsp; <input type="date" name="dateTh" class="form-control5"><br><br>

                            <input type="text" name="supervisor" class="form-control2" placeholder="Supervisor"> &nbsp;&nbsp; <input type="date" name="dateSup" class="form-control5">

                            <br><br>

                            <hr>

                            <h2 class="text-center">Theraphy Progress Note </h2> <br><br>

                            <span>
                                Client's name:&nbsp; <input type="text" class="form-control2" name="client_name3">&nbsp;&nbsp; Case Number: <input type="text" name="caseNumber" class="form-control2" placeholder="Case Number">
                            </span><br><br>

                            <span>
                                Appoiment Date:&nbsp; <input type="date" class="form-control2" name="appDate">&nbsp;&nbsp; Appoiment Time: <input type="time" name="appTime" class="form-control2" >
                            </span><br><br>

                            <span>
                            <b> Session Focus:</b>  <br>
                                <textarea name="session_focus" class="form-control" cols="30" rows="10"></textarea>
                            </span><br><br>

                            <span>
                                <b>Theraphy Intervention</b>
                                <textarea name="theraphyInter" class="form-control" cols="30" rows="10"></textarea>
                            </span>

                            <br><br>

                            <span>
                                <b>Planned Intervention</b>
                                <textarea name="planInter" class="form-control" cols="30" rows="10"></textarea>
                            </span><br><br><br>

                            <input type="text" class="form-control3 mt-5" name="clientSignature" placeholder="Client Signature"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp; Date &nbsp;&nbsp;
                            <input type="date" class="form-control3" name="dateSignature">


                            <input type="text" class="form-control3 mt-5" name="therapistSignature" placeholder="Therapist Signature"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp; Date &nbsp;&nbsp;
                            <input type="date" class="form-control3" name="dateSignature2">




                            <input type="text" class="form-control3 mt-5" name="parentSignature" placeholder="Parent's/Guardian Signature"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Date &nbsp;&nbsp;
                            <input type="date" class="form-control3" name="parentDate">




                            <input type="text" class="form-control3 mt-5" name="supervisorSignature" placeholder="Supervisor"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp; Date &nbsp;&nbsp;
                            <input type="date" class="form-control3" name="supervisorDate">


                            <input type="submit" value="Enviar" class="btn btn-primary btn-block mt-5 p-3"> <br><br>


                        </div>
                    </form>
</page>