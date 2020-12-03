<?php



require_once dirname(__FILE__).'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

require_once 'email/email.php';
require_once 'conexion.php';
require_once 'controller.php';
require_once 'config.php';

$contact = new Formulario;
$Email = new Email;



if($_POST){

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $date1 = isset($_POST['date1']) ? $_POST['date1'] : '';
    $date2 = isset($_POST['date2']) ? $_POST['date2'] : '';
    $family1 = isset($_POST['family1'] )? $_POST['family1'] : '';
    $family2 = isset($_POST['family2']) ? $_POST['family2'] : '';
    $family3 = isset($_POST['family3']) ? $_POST['family3']:'';
    $family4 = isset($_POST['family4']) ? $_POST['family4']: '';
    $family5 = isset($_POST['fammily_5']) ? $_POST['fammily_5'] : '';
    $family6 = isset($_POST['family_6']) ? $_POST['family_6'] : '';
    $phone = isset($_POST['phone2']) ? $_POST['phone2'] : '';
    $phoneC = isset($_POST['phoneC']) ? $_POST['phoneC'] : '';
    $signed = isset($_POST['signed']) ? $_POST['signed'] : '';
    $dateS = isset($_POST['dateS']) ? $_POST['dateS'] : '';
    $witness = isset($_POST['witness']) ? $_POST['witness'] : '';
    $dateW = isset($_POST['date2']) ? $_POST['date2'] : '';
    $client_name = isset($_POST['client_name']) ? $_POST['client_name'] : '';
    $client_ini = isset($_POST['client_ini']) ? $_POST['client_ini'] : '';
    $birth_client = isset($_POST['birh_client']) ? $_POST['birh_client'] : '';
    $email_client = isset($_POST['email_client']) ? $_POST['email_client'] : '';
    $phone_client = isset($_POST['phone_client']) ? $_POST['phone_client'] :'';
    $client_signature = $_POST['client_signature'];
    $dateApp = isset($_POST['dateApp']) ? $_POST['dateApp'] : '';
    $nameRep = isset($_POST['NameRep']) ? $_POST['NameRep']:'';
    $dateRep = isset($_POST['dateRep']) ? $_POST['dateRep'] : '';
    $signaRep = isset($_POST['SignaRep']) ? $_POST['SignaRep'] : '';
    $dateRep2 = isset($_POST['dateRep2']) ? $_POST['dateRep2'] : '';
    $namePat = isset($_POST['namePat']) ? $_POST['namePat'] : '';
    $birth = isset($_POST['birth']) ? $_POST['birth'] : '';
    $mediAlert = isset($_POST['medicationAler']) ? $_POST['medicationAler']:'';
    $currentMed = isset($_POST['currentMed']) ? $_POST['currentMed'] :'';
    $problemPhis = isset($_POST['problemPhis']) ? $_POST['problemPhis'] : '';
    $pastSurge = isset($_POST['pastSurge']) ? $_POST['pastSurge'] : '';
    $father = isset($_POST['father']) ? $_POST['father'] : '';
    $mother = isset($_POST['mother']) ? $_POST['mother'] :'';
    $brother = isset($_POST['brother']) ? $_POST['brother'] :'';
    $sister = isset($_POST['sister']) ? $_POST['sister'] :'';
    $drugA = isset($_POST['drugA']) ? $_POST['drugA'] : '';
    $smoke = isset($_POST['smoke']) ? $_POST['smoke'] : '';
    $smoke2 = isset($_POST['smoke2']) ? $_POST['smoke2'] : '';
    $alcohol = isset($_POST['alcohol']) ? $_POST['alcohol'] :'';
    $minimal = isset($_POST['minimal']) ? $_POST['minimal'] :'';
    $moderate = isset($_POST['moderate'])? $_POST['moderate']:'';
    $heavy = isset($_POST['heavy']) ? $_POST['heavy']:'';
    $alcoholTreat = isset($_POST['alcholTrea'])? $_POST['alcholTrea']:'';
    $drugAdict = isset($_POST['drugAdict']) ? $_POST['drugAdict'] :'';
    $abuseMed = isset($_POST['abusedMed']) ? $_POST['abusedMed'] : '';
    $descriptAbu = isset($_POST['descriptAbu']) ? $_POST['descriptAbu'] :'';
    $convitected = isset($_POST['convicted']) ? $_POST['convicted'] : '';
    $sentence  = isset($_POST['sentence']) ? $_POST['sentence'] : '';
    $pharmacy = isset($_POST['pharmacy']) ? $_POST['pharmacy']:'';
    $phoneUnrea = isset($_POST['phoneUnrea']) ? $_POST['phoneUnrea'] : '';
    $phoneWorks = isset($_POST['phoneWorks']) ? $_POST['phoneWorks'] :'';
    $cellWorks = isset($_POST['cellWorks']) ? $_POST['cellWorks'] :'';
    $agreementAccept = isset($_POST['noacceptAgree']) ? $_POST['noacceptAgree'] : '';
    $YessAgreementAccept = isset($_POST['yesacceptAgree']) ? $_POST['yesacceptAgree'] :'';
    $killSelf = isset($_POST['acept']) ? $_POST['acept'] : '';
    $notKillSelf = isset($_POST['noacept']) ? $_POST['noacept'] : '';
    $answerHonor = isset($_POST['answerHonor']) ? $_POST['answerHonor'] :'';
    $noAnswerHonor = isset($_POST['noanswerHonor']) ? $_POST['noanswerHonor'] :'';
    $signaAgree = isset($_POST['signaAgree']) ? $_POST['signaAgree'] : '';
    $dateAgree = isset($_POST['dateAgree']) ? $_POST['dateAgree'] : '';
    $patientName = isset($_POST['patientName'] )? $_POST['patientName'] :''; 
    $patientSSN = isset($_POST['patientSSN']) ? $_POST['patientSSN'] : '';
    $streetAddress = isset($_POST['streetAddress']) ? $_POST['streetAddress']:'';
    $patientBirth = isset($_POST['patientBirth']) ? $_POST['patientBirth'] :'';
    $ZipCode = isset($_POST['ZipCode']) ? $_POST['ZipCode'] : '';
    $homePhone = isset($_POST['homePhone']) ? $_POST['homePhone'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $workHome = isset($_POST['workHome']) ? $_POST['workHome']: '';
    $emailAddress = isset($_POST['emailAddress']) ? $_POST['emailAddress']:'';
    $mobilePhone = isset($_POST['mobilePhone']) ? $_POST['mobilePhone']:'';
    $primaryPhisician = isset($_POST['primaryPhisician']) ? $_POST['primaryPhisician'] :'';
    $Phischiatrist = isset($_POST['Phischiatrist']) ? $_POST['Phischiatrist']:'';
    $contactEmergency = isset($_POST['contactEmergency'])?$_POST['contactEmergency']:'';
    $phoneContactEmergency = isset($_POST['phoneContactEmergency']) ? $_POST['phoneContactEmergency'] :'';
    $reference = isset($_POST['reference']) ? $_POST['reference']:'';
    $statusMarital = isset($_POST['statusMarital']) ? $_POST['statusMarital'] :'';
    $partyResponsable = isset($_POST['partyResponsable']) ? $_POST['partyResponsable'] :'';
    $homePhoneParty = isset($_POST['homePhoneParty']) ? $_POST['homePhoneParty'] :'';
    $streetAd = isset($_POST['streetAd']) ? $_POST['streetAd']:'';
    $workPhone = isset($_POST['workPhone']) ? $_POST['workPhone'] : '';
    $phoneM = isset($_POST['phoneM']) ? $_POST['phoneM'] :'';
    $relaPatient = isset($_POST['relaPatient']) ? $_POST['relaPatient'] : '';
    $responsableSSN = isset($_POST['responsableSSN']) ? $_POST['responsableSSN'] :'';
    $insurangePrimary = isset($_POST['insurangePrimary']) ?$_POST['insurangePrimary'] :'';
    $policyHolderName = isset($_POST['policyHolderName']) ? $_POST['policyHolderName'] :'';
    $companyName = isset($_POST['companyName']) ? $_POST['companyName'] :'';
    $policyBirth = isset($_POST['policyBirth']) ? $_POST['policyBirth'] :'';
    $Zcode = isset($_POST['Zcode']) ? $_POST['Zcode'] : '';
    $Pmobile = isset($_POST['Pmobile']) ? $_POST['Pmobile'] : '';
    $relaPat = isset($_POST['relaPat']) ? $_POST['relaPat'] : '';
    $ssnRP = isset($_POST['ssnRP']) ? $_POST['ssnRP'] : '';
    $cityState = isset($_POST['cityState']) ? $_POST['cityState']:'';
    $numberId = isset($_POST['numberId']) ? $_POST['numberId'] :'';
    $nameCom = isset($_POST['nameCom']) ? $_POST['nameCom'] :'';
    $groupPolice = isset($_POST['groupPolice'])?$_POST['groupPolice']:'';
    $employerName = isset($_POST['employerName']) ? $_POST['employerName'] :'';
    $policySSN = isset($_POST['policySSN']) ? $_POST['policySSN'] : '';
    $secundaryInsurange = isset($_POST['secundaryInsurange']) ? $_POST['secundaryInsurange'] : '';
    $namePolicy2 = isset($_POST['namePolicy2']) ? $_POST['namePolicy2'] : '';
    $companyAddress2 = isset($_POST['companyAddress2']) ? $_POST['companyAddress2'] : '';
    $policyBirth2 = isset($_POST['policyBirth2']) ? $_POST['policyBirth2'] :'';
    $codeZip = isset($_POST['codeZip']) ? $_POST['codeZip'] : '';
    $number2ID = isset($_POST['number2ID']) ? $_POST['number2ID'] : '';
    $phoneCompany = isset($_POST['phoneCompany']) ? $_POST['phoneCompany'] :'';
    $policyGroupNumber = isset($_POST['policyGroupNumber']) ? $_POST['policyGroupNumber'] :'';
    $employer2 = isset($_POST['employer2']) ? $_POST['employer2'] :'';
    $policyHolder2 = isset($_POST['policyHolder2']) ? $_POST['policyHolder2'] :'';
    $signaThera = isset($_POST['signaThera']) ? $_POST['signaThera'] :'';
    $dateThera = isset($_POST['dateThera']) ? $_POST['dateThera'] : '';
    $patienName = isset($_POST['patienName']) ? $_POST['patienName']:'';
    $DoctorName = isset($_POST['DoctorName']) ? $_POST['DoctorName'] : '';
    $namesDistr = isset($_POST['namesDistr']) ? $_POST['namesDistr'] :'';
    $hospitalRecord = isset($_POST['hospitalRecord']) ? $_POST['hospitalRecord'] :'';
    $testResult = isset($_POST['testResult']) ? $_POST['testResult'] :'';
    $medicalResults = isset($_POST['medicalResults']) ? $_POST['medicalResults'] :''; 
    $medicalOpinion = isset($_POST['medicalOpinion'])? $_POST['medicalOpinion']:'';
    $treatmentPlan = isset($_POST['treatmentPlan']) ? $_POST['treatmentPlan']:'';
    $descriptionsPresciptions = isset($_POST['descriptionsPresciptions']) ? $_POST['descriptionsPresciptions'] :'';
    $notesConvesations = isset($_POST['notesConvesations']) ? $_POST['notesConvesations'] :'';
    $disclousure = isset($_POST['disclousure']) ? $_POST['disclousure'] :'';
    $disclousureDate = isset($_POST['disclousureDate']) ? $_POST['disclousureDate'] :'';
    $socialNumber = isset($_POST['socialNumber']) ? $_POST['socialNumber'] :'';
    $wName = isset($_POST['wName']) ? $_POST['wName'] :'';
    $disclousureDate2 = isset($_POST['disclousureDate2']) ? $_POST['disclousureDate2'] :'';
    $wSignature = isset($_POST['wSignature']) ? $_POST['wSignature'] : '';
    $nameDr = isset($_POST['nameDr']) ? $_POST['nameDr'] :'';
    $name_C = isset($_POST['name_C']) ? $_POST['name_C'] :'';
    $firma_C = isset($_POST['firma_C']) ? $_POST['firma_C'] :'';
    $name_Padres = isset($_POST['name_Padres']) ? $_POST['name_Padres'] :'';
    $firma_Padres = isset($_POST['firma_Padres']) ? $_POST['firma_Padres'] : '';
    $date_C = isset($_POST['date_C']) ? $_POST['date_C'] : '';
    $copayment_person = isset($_POST['copayment_person']) ? $_POST['copayment_person'] :'';
    $deducible = isset($_POST['deducible']) ? $_POST['deducible'] : '';
    $agreePayment = isset($_POST['agreePayment']) ? $_POST['agreePayment'] :'';
    $noagreePayment = isset($_POST['noagreePayment']) ? $_POST['noagreePayment'] :'';
    $deducible2 = isset($_POST['deducible2']) ? $_POST['deducible2'] :'';
    $signaparty = isset($_POST['signaparty']) ? $_POST['signaparty'] :'';
    $dateparty = isset($_POST['dateparty']) ? $_POST['dateparty'] :'';
    $clientName2 = isset($_POST['client_Name2']) ? $_POST['client_Name2'] :'';
    $clientName3 = isset($_POST['clientName3']) ? $_POST['clientName3'] :'';
    $signaCard = isset($_POST['signaCard']) ? $_POST['signaCard']:'';
    $initialsCard = isset($_POST['initialsCard']) ? $_POST['initialsCard'] :'';
    $dateExp = isset($_POST['dateExp']) ? $_POST['dateExp'] :'';
    $nameCliente = isset($_POST['nameCliente']) ? $_POST['nameCliente'] : '';
    $case = isset($_POST['case']) ? $_POST['case'] :'';
    $dateR = isset($_POST['dateR']) ? $_POST['dateR'] :'';
    $inactive = isset($_POST['inactive']) ? $_POST['inactive'] :'';
    $decreaseEner = isset($_POST['decreaseEner']) ? $_POST['decreaseEner'] :'';
    $restless = isset($_POST['restless'])?$_POST['restless']:'';
    $hopelessnes = isset($_POST['hopelessnes']) ? $_POST['hopelessnes'] :'';
    $guilt = isset($_POST['guilt']) ? $_POST['guilt'] :'';
    $panicAttacks = isset($_POST['panicAttacks']) ? $_POST['panicAttacks'] :'';
    $cruelty = isset($_POST['cruelty']) ? $_POST['cruelty'] :'';
    $lossPleasure = isset( $_POST['lossPleasure']) ?  $_POST['lossPleasure'] :'';
    $depressed = isset($_POST['depressed']) ? $_POST['depressed'] :'';
    $anxiety = isset($_POST['anxiety']) ? $_POST['anxiety'] :'';
    $sleepDist = isset($_POST['sleepDist']) ? $_POST['sleepDist'] :'';
    $withdrawn = isset($_POST['withdrawn']) ? $_POST['withdrawn']:'';
    $Oppositional = isset($_POST['Oppositional']) ? $_POST['Oppositional']:'';
    $concentration = isset($_POST['concentration']) ? $_POST['concentration'] :'';
    $indesecive = isset($_POST['indesecive']) ? $_POST['indesecive'] : '';
    $swing = isset($_POST['swing']) ? $_POST['swing'] :'';
    $rulesViolation = isset($_POST['rulesViolation']) ? $_POST['rulesViolation'] :'';
    $porblemLegal = isset($_POST['porblemLegal']) ? $_POST['porblemLegal']:'';
    $irritability = isset($_POST['irritability']) ? $_POST['irritability']:'';
    $helplessnes = isset($_POST['helplessnes']) ? $_POST['helplessnes'] :'';
    $eatingDist = isset($_POST['eatingDist']) ? $_POST['eatingDist'] :'';
    $inpulsivity = isset($_POST['inpulsivity']) ? $_POST['inpulsivity'] :'';
    $worry = isset($_POST['worry']) ? $_POST['worry']:'';
    $agressionRage = isset($_POST['agressionRage']) ? $_POST['agressionRage'] :'';
    $tearF = isset($_POST['tearF']) ? $_POST['tearF'] :'';
    $abusseSustance = isset($_POST['abusseSustance']) ? $_POST['abusseSustance']:'';
    $ritualBeha = isset($_POST['ritualBeha']) ? $_POST['ritualBeha'] :'';
    $selfEsteem = isset($_POST['selfEsteem']) ? $_POST['selfEsteem'] :'';
    $lowMotivation = isset($_POST['lowMotivation']) ? $_POST['lowMotivation']:'';
    $other = isset($_POST['other']) ? $_POST['other']:'';
    $stressLe = isset($_POST['stressLe']) ? $_POST['stressLe']:'';
    $changesPS = isset($_POST['changesPS']) ? $_POST['changesPS'] :'';
    $changesPSA = isset($_POST['changesPSA']) ? $_POST['changesPSA'] :'';
    $plantTreatmen = isset($_POST['plantTreatmen']) ? $_POST['plantTreatmen'] :'';
    $plantTreatmentDetail = isset($_POST['plantTreatmentDetail']) ? $_POST['plantTreatmentDetail'] :'';
    $sessionpermonth = isset($_POST['sessionpermonth']) ? $_POST['sessionpermonth'] :'';
    $client_concurred = isset($_POST['client_concurred']) ? $_POST['client_concurred'] :'';
    $dxCode = isset($_POST['dxCode']) ? $_POST['dxCode'] :'';
    $dxCurrent = isset($_POST['dxCurrent']) ? $_POST['dxCurrent'] :'';
    $urc = isset($_POST['urc']) ? $_POST['urc'] :'';
    $therapist = isset($_POST['therapist']) ? $_POST['therapist'] :'';
    $dateTh = isset($_POST['dateTh']) ? $_POST['dateTh'] :''; 
    $supervisor = isset($_POST['supervisor']) ? $_POST['supervisor'] :'';
    $dateSup = isset($_POST['dateSup']) ? $_POST['dateSup']:'';
    $client_name3 = isset($_POST['client_name3']) ? $_POST['client_name3'] :'';
    $caseNumber = isset($_POST['caseNumber']) ? $_POST['caseNumber'] :'';
    $appDate = isset($_POST['appDate']) ? $_POST['appDate']:'';
    $appTime = isset($_POST['appTime']) ? $_POST['appTime'] :'';
    $session_focus = isset($_POST['session_focus']) ? $_POST['session_focus'] :'';
    $theraphyInter = isset($_POST['theraphyInter']) ? $_POST['theraphyInter'] :'';
    $planInter = isset($_POST['planInter']) ? $_POST['planInter'] :'';
    $clientSignature = isset($_POST['clientSignature']) ? $_POST['clientSignature'] :'';
    $dateSignature = isset($_POST['dateSignature']) ? $_POST['dateSignature'] :'';
    $therapistSignature = isset($_POST['therapistSignature']) ? $_POST['therapistSignature'] :'';
    $dateSignature2 = isset($_POST['dateSignature2']) ? $_POST['dateSignature2'] :'';
    $parentSignature = isset($_POST['parentSignature']) ? $_POST['parentSignature'] :'';
    $parentDate = isset($_POST['parentDate']) ? $_POST['parentDate'] :'';
    $supervisorSignature = isset($_POST['supervisorSignature']) ? $_POST['supervisorSignature'] :'';
    $supervisorDate = isset($_POST['supervisorDate']) ? $_POST['supervisorDate'] :'';
   $dateBrith = isset($_POST['dateBrith']) ? $_POST['dateBrith'] : '';
   $cityPatient = isset($_POST['cityPatient']) ? $_POST['cityPatient'] : '';
    
   $disclousure = isset($_POST['disclousure']) ? $_POST['disclousure'] : '';
    $authorizationDisclousure = isset($_POST['authorizationDisclousure'])  ? $_POST['authorizationDisclousure'] : '';
    $authorizationDisclousure2 = isset($_POST['authorizationDisclousure2'])  ? $_POST['authorizationDisclousure2'] : '';
   $patientDisclousure = isset($_POST['patientDisclousure']) ? $_POST['patientDisclousure'] : '';
   $disclousureDate = isset($_POST['disclousureDate']) ? $_POST['disclousureDate'] : '';
   $auth_C = isset($_POST['auth_C']) ? $_POST['auth_C'] : '';
   $decreaseEner = isset($_POST['decreaseEner']) ? $_POST['decreaseEner'] : '';
   $restless = isset($_POST['restless']) ? $_POST['restless'] : '';
   $hopelessnes = isset($_POST['hopelessnes']) ? $_POST['hopelessnes'] : '';
   $panickAttacks = isset($_POST['panickAttacks']) ? $_POST['panickAttacks'] : '';
   $cruelty = isset($_POST['cruelty']) ? $_POST['cruelty'] : '';
   $lossPleasure = isset($_POST['lossPleasure']) ? $_POST['lossPleasure'] : '';
   $lossPleasure = isset($_POST['lossPleasure']) ? $_POST['lossPleasure'] : '';
   $depressed = isset($_POST['depressed']) ? $_POST['depressed'] : '';
   $anxiety = isset($_POST['anxiety']) ? $_POST['anxiety'] : '';
   $disturbanseSleep = isset($_POST['disturbanseSleep']) ? $_POST['disturbanseSleep'] : '';
   $withDrawn = isset($_POST['withDrawn']) ? $_POST['withDrawn'] : '';
   $oppositional = isset($_POST['oppositional']) ? $_POST['oppositional'] : '';
   $poorContcentration = isset($_POST['poorContcentration']) ? $_POST['poorContcentration'] : '';
   $indecisive = isset($_POST['indecisive']) ? $_POST['indecisive'] : '';
   $moodSw = isset($_POST['moodSw']) ? $_POST['moodSw'] : '';
   $violationR = isset($_POST['violationR']) ? $_POST['violationR'] : '';
   $legalPro = isset($_POST['legalPro']) ? $_POST['legalPro'] : '';
   $irritability = isset($_POST['irritability']) ? $_POST['irritability'] : '';
   $helplessnes = isset($_POST['helplessnes']) ? $_POST['helplessnes'] : '';
   $eationDis = isset($_POST['eationDis']) ? $_POST['eationDis'] : '';
   $impulsivity = isset($_POST['impulsivity']) ? $_POST['impulsivity'] : '';
   $worrying = isset($_POST['worrying']) ? $_POST['worrying'] : '';
   $agression = isset($_POST['agression']) ? $_POST['agression'] : '';
   $tearfulness = isset($_POST['tearfulness']) ? $_POST['tearfulness'] : '';
   $substanceAbu = isset($_POST['substanceAbu']) ? $_POST['substanceAbu'] : '';
   $ritualBe = isset($_POST['ritualBe']) ? $_POST['ritualBe'] : '';
   $lowSteem = isset($_POST['lowSteem']) ? $_POST['lowSteem'] : '';
   $lowMotivation = isset($_POST['lowMotivation']) ? $_POST['lowMotivation'] : '';
   $trat_crit = isset($_POST['trat_crit']) ? $_POST['trat_crit'] : '';
   $therapistDate = isset($_POST['therapistDate']) ? $_POST['therapistDate'] : '';

   $parentGuardian = isset($_POST['parentGuardian']) ? $_POST['parentGuardian'] : '';
   $parentDate = isset($_POST['parentDate']) ? $_POST['parentDate'] : '';
   
   
   
                          

           


                          

                            



    $content='
    
    
    <body>

    <div style="font-size: 35px; line-height: 60px; padding:20px; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;   border: 1px solid #f0f0f0; background-color: #5481E9; color:#fff">  
            Walking in Confidence  
              </div>             
                     
                  <p>I, '.$name.', agree to not harm in any way, attemp to kill my self, or kill my self during the period form '.$date1.' to '.$date2.', (the time of my next appoiment).</p><br><br>
                           
               
                            <p>
                                I, agree that, for any reason, if the appoiment seassion is posponed, canceled, etc., that this time period is extended until the next direct meeting with my conselor.In this period time, I agree to care myself, to eat well, and to get enough sleep each
                                nigth.
                            </p>
    
    
                            <p>I agree to make social/family contact with the following individuals</p>
                            <p> Name Family 1: '.$family1.' </p>
                            <p> Name Family 2:'.$family2.' </p>
                            <p> Name Family 3:'.$family3.' </p>
                            <p> Name Family 4:'.$family4.' </p>
    
                            
                            <p>I agree to rid my presence of all things I could use to harm or kill my self. I agree that, If I am having a rough time and come to a point wheat I may brake any of these promises, I will call and make significant contact with
                            any of following individuals</p>
    
                            <span> 
                              <p>Name Family : '.$family5.'</> at:#  '.$phone.' 
                             </span><br><br>
                           <span> 
                            <p>Name Family 1: '.$family6.'</> at:# '.$phoneC.' 
                           </span><br><br>
    
                           <p>
                           If I cannot contact these individuals, I will immediatly call the <b>Crisis Hotline at</b> # '.$phoneC.' or, call 1-800-273-8255, the U.S. 24-hour suicide prevention line.
                       </p>
    
                       <p>
                           I agree that these condition are important, worth, and that this is I am willing to make and keep. By my word and honor. I intend to keep this contact.
                       </p>
                       <span> 
                       Signed '.$signed.' Date '.$dateS.' 
                       </span><br><br>
                       <span> 
                       Witnessed by '.$witness.' Date '.$dateW.'
                       </span><br><br>
                       <hr>
    
    
                       <h2 >Telehealth Treatment Consent</h2>
    
                                <p><strong>Information and informed consent for telemental health and treatment</strong></p>
    
                                <span>Telemental health is live two-way audio and video electronic comunuications that allos therapist to meet outside of a physical office</span>
                                <br>
                                <p><strong>Client understanding</strong></p>
    
                                <ul>
                                    <li>I understand that telemental health services are completely voluntary and taht I can withdraw this consent at any time</li>
                                    <li>I understand that none of the telemental health sessions will be recorded or photographed</li>
                                    <li>I agree not to make or allow audio or video recordings of any portions of the sessions </li>
                                    <li>I understand that the laws that protect privacy and the Confidentiality of client information also apply to telemental health, and that no information obteined in the use of telemental health that identifies me will be disclosed
                                        to other entities whith out my consent</li>
                                    <li>I understand that telemental health i performed over a secure comunication system that is almost impossible for anyone else to access. I undertand that any internet based comunication is not 100% guaranteed to be secure</li>
                                    <li>I agree that the terapist and practice will not be held responsible if any outside the party gains access to my personal information by passing the secure measures of the comunication system </li>
                                    <li>I understand there are potencial risks tho this technology, including interruptions, unauthorirezed access, and technical dificulties </li>
                                    <li>In understand that I or my therapist may discontinue the telemental sessions at any time if it is felt that the video technology is not adequate for the situation</li>
                                    <li>I undertand that if there is an emergency during a telemental helath session, then my therapist may call emergency services, and/or emergency contact</li>
                                    <li>I undertand that if this form is signed in addition to the Notice of Privacy Practices and Consent to Treatment and that all office policies and procedures apply to telemental health services.</li>
                                    <li>I understand that if the video conferencing connectiions drops while I am in a session, I will have an additional phone line available to contact to my therapist, or I will make additional plans with my therapist ahead of time
                                        for re-contact </li>
                                    <li>I understand a "no show" or late fee will be charged if a miss an appoiment or do not cancel whitin 24 hours of scheduled appoiment. I understand credit card or other form of payment will be established before the first session.</li>
                                    <li>I understand my therapist will advise me about telmental health plataform to use she will establish a video conference session.</li>
                                </ul>
    
                                <br>
    
                                <h2>Client consent</h2>
                                <span> 
                                    Client Name:  '.$client_name.'
                                </span><br><br>
                                <span> 
                                I hereby give my informaed consent for the use of tlemental health in my care. Client Initials  '.$client_ini.'
                                </span><br><br>
                                <span> 
                                    Date Birth '.$birth_client.'
                                </span><br><br>
                                <span> 
                                Email '.$email_client.'  
                                </span><br><br>
                                <span> 
                                    Phone Number '.$phone_client.' 
                                </span><br><br>
                                <span> 
                                    Client Signature '.$client_signature.'  
                                </span><br><br>
                                <span> 
                                    Date '.$dateApp.'
                                </span><br><br>
                                <hr>
    
    
                                <h2 >Notice of Privacy Practices</h2>
                                <br>
                                <span>This notes describes how medical indformation about you may be used and disclosed and how yo can get access to it. Please review carefully.</span>
                                <br>
                                <ol>
                                    <li>Your medical records are used to provide treatment, bill and receive payments, adn conduct healthcare opperations. Example of these activities include but not limited to review of treatment records to ensure appropiate care,
                                        electronic or mail delivery of billing for treatment to you or other authorarized payers, appoiment reminder telephone call, and records review to ensure completeness and quality of care. Use and disclosure of medical records
                                        is limited to the internal used outlined above except require by law or authorized by patient or legal. </li>
    
                                    <li>Federal and state laws require abuse, neglect, domestict violence and threats to be reported to social services or other protective agencies. If such reports are made they will be disclosed to you or your legal Representative
                                        under disclosure increases risks of further.</li>
    
                                    <li>Disclosed information will be limited to the minimun necesary. You may request an account for any uses or disclosures other than those described in Section 1 and Sections 2.</li>
                                    <li>You or your legal representative, may request your records to be disclosed to yourself or other entity. Your request must be made in writing, clearly identify the person authorized to request the release, specify the information
                                        you want disclosed, the name and address of entity tou want the information releaced to, the purpose and the expiration date of the Authorization. Any authorization provided may be revoked in writing anytime. Phychotherapy
                                        notes are part of your medical records. We have 30 days to respond to a disclosure request and 60 days if the records is stored off site</li>
                                    <li>Tou may request corrections to your records</li>
                                    <li>A request for disclosure may be denied under the following circumtances: disclosure would likely endanger the life or physical safety of you or another person, requested information references other persons, except another
                                        healthcare provider, or if releaced to a legal representative would likely result in harm.</li>
                                    <li>A request for disclosure is denied for reasons outlined in Section 6, you or your legal representative may request review of denial. A review will be conducted by another licensed healthcare provider appointed by the original
                                        reviewer, who was not involved in the original decision to deny access. A review will be concluded whitin 30 days.</li>
                                    <li>You may request that we restrict uses and disclosures outlined in Section 1. However, we are not require to agree to the restrictions. If an agreement is made to restrict use or disclosure, we will be bound by such restriction
                                        until revoked by you or your legal representative orally or in writing except when disclosure is required by law or in an emergency. We may also revoke such restrictions but information gathered required y law or in an
                                        emergency. We may also revoke such restrictions but information gathered while the restriction was in place will remain restricted by such an agreement.</li>
                                    <li>If you wish to complain about privacy related issues yoy may contact the Secretary of the Departament of Health and Human Services, Hubert H. Humphrey Building, 200 Independence Avenue SW, Washington DC, 20201. In any case
                                        there will not be any retaliation against you or your legal representative for filing a complaint</li>
    
                                    <li>This agreement may be modified or amended as required by law or in the course of health care opperations.</li>
                                </ol>
    
                                <span>
                                    I HAVE READ AND UNDERSTOOD THIS PRIVACY NOTICE AND MY RIGTHS CONCERNING USE AND DISCLOSURE OF PROTECTED HEALTH CARE INFORMATION
                                </span>
    
    
    
                                <span> 
                                '.$nameRep.'  Date '.$dateRep.' 
                                </span><br><br>
                                <span> 
                                '.$signaRep.' Date '.$dateRep2.' 
                                </span><br><br>
    
                                <hr>
    
    
                                <h2 class="text-center">Patient Questionnaire</h2>
                                <span> Name: '.$namePat.'
                                   
                                </span><br><br>
                                <span> 
    
                                <span> 
                                    Date of Birth: '.$birth.' Age '.$dateS.' 
                                </span><br><br>
    
                                <span> 
                                Medication Alergies: '.$mediAlert.'
                                </span><br><br>
    
                                <span> 
                                Current  Medication: '.$currentMed.' 
                                </span><br><br>
    
                                <span> 
                                Phisycan diganosed medical problem: '.$problemPhis.'
                                </span><br><br>
    
                                <span> 
                                    Past seurgeries: '.$pastSurge.' 
                                    </span><br><br>
    
                                <span>
                                    1. Does your : '.$father.'  , '.$mother.' , '.$brother.', '.$sister.'  , have a history of alcohol or drug abuse? <br><br>  Problem alcohol: '.$drugA.' 
                                </span><br><br>
    
                                <span>
                                    2. Do you smoke? '.$smoke.'
                                    <br>
                                   Describe:  
                                   '.$smoke2.'
                                </span><br><br>
    
                                <span>
                                    3. Do you use alcohol?  '.$alcohol.'  <br> If yes: 
                                    '.$minimal.'  '.$moderate.'  '.$heavy.' 
                                </span><br><br>
    
    
                                <span>
                                    4. Have you ever treated or diganosid alcoholism: '.$alcoholTreat.'   
                                    
                                </span><br><br>
    
                                <span>
                                    5. Do you think you are an alcholic or a drug addict : '.$drugAdict.' 
                                    
                                </span><br><br>
    
                                <span>
                                    6. Have you abused prescriptions medications (your own or someelse)  '.$abuseMed.'  <br>
                                     Type??   '.$descriptAbu.'
                                    
                                </span><br><br>
    
                                <span>
                                    7. Are you convicted ?? '.$convitected.' <br>
                                    Sentence passed down: '.$sentence.' 
                                </span><br><br>
    
                                <span>
                                    8. What pharmacy will you utilizing??   '.$pharmacy.' 
                                    
                                </span><br><br>
    
                                <span>
                                    9. If Contact not function: '.$phoneUnrea.' <br>
                                    
                                    
                                    Phone#: '.$phoneWorks.'  #Cell: '.$cellWorks.' 
                                </span><br><br>
    
                                <span>
                                    10. Do you agree after reading, accepting, and signing todays documents and treatment agreement that violation or infringement of your treatment agreement will/may result in inmediate discontinuation of treatment with  DEA controlled medications without legal recourse or remedy sought on your behalf '.$agreementAccept.' '.$YessAgreementAccept.'
    
                                                        
                                </span><br><br>
    
                                <span>
                                    11. Do you understand inappropiate/improper use of precribed or non prescribed medications may/will KILL YOU ?? &nbsp;&nbsp; &nbsp;&nbsp;
    
                                    '.$killSelf.'
                                     '.$notKillSelf.'
                                </span><br><br>
    
                                <span>
                                    12. Is it your statement that you have answered all questions and inquiries in a truthful and honor manner 
    
                                    '.$answerHonor.' 
                                    '.$noAnswerHonor.'
                                </span><br><br>
    
                                <span class="container">
                                    
                                                                
                                 Signa Agree: '.$signaAgree.'<br><br>
    
                                 Date Agree: '.$dateAgree.'
                                </span><br><br>
    
    
                                <hr>
    
                                <h2 class="text-center">Pattient Registration Form</h2>
                                <span class="container">
                                    
                                                                
                                 Signature of Patient:  '.$signaAgree.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                 Number SSN:  &nbsp;&nbsp; '.$patientSSN.' <br><br> 
                                  
                                    
                                Street Address  '.$streetAd.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                Date Birth:   &nbsp;&nbsp; '.$dateBrith.'<br><br>
                                    
                                    
                                City:  &nbsp;&nbsp;'.$cityPatient.'  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                Home Phone: &nbsp;&nbsp;  '.$homePhone.'<br><br>
    
    
                                Genero:&nbsp;&nbsp; '.$gender.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                WorkPhone:&nbsp;&nbsp;  '.$workPhone.' <br><br>
    
    
                                Email Address:&nbsp;&nbsp; '.$emailAddress.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                Mobile Phone:&nbsp;&nbsp; '.$mobilePhone.'  <br><br>
    
    
                               Primari Phisician:&nbsp;&nbsp;  '.$primaryPhisician.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                Phisichiatrist:&nbsp;&nbsp; '.$Phischiatrist.'    <br><br>
    
                               Name Contact Emergency:&nbsp;&nbsp;  '.$contactEmergency.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                               Phone Contact Emergency:&nbsp;&nbsp;  '.$phoneContactEmergency.' <br><br>
                                    
                               Where you hear about us:&nbsp;&nbsp;  '.$reference.'  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                               Status Marital:&nbsp;&nbsp;   '.$statusMarital.'  <br><br>
    
    
                                </span><br><br><br><br>
    
                                <p><b>Responsable party is the person who will be paying the per-session fee for services (leave blank if same as patient)</b> </p>
    
                             Party Responsable:&nbsp;&nbsp;  '.$partyResponsable.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                              Home Phone:  '.$homePhoneParty.' <br><br>
    
                              Street Address: '.$streetAddress.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                              Work Phone:  '.$workPhone.' <br><br>
    
                              Zip Code:&nbsp;&nbsp; '.$Zcode.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                              Phone Mobile:&nbsp;&nbsp; '.$Pmobile.' <br><br>
    
                              Relation Patient:&nbsp;&nbsp; '.$relaPat.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                              SSN:&nbsp;&nbsp; '.$ssnRP.'  <br><br>
    
    
                              <hr>
    
                                <h2 class="text-center mt-5">Insurange Information</h2>
    
                                Insurange Primary: '.$insurangePrimary.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                Policy Holder Name: '.$policyHolderName.' 
    
                                Company Name: '.$companyName.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                Policy Holder Date of Birth '.$policyBirth.' 
    
                                City, State, Zip Code: '.$cityState.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                Identifaction Number '.$numberId.' 
    
                                Company Phone: '.$nameCom.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                Policy/Group Number:  '.$groupPolice.' 
    
                                Employer: '.$employerName.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                Policy Holder SSN: '.$policySSN.' 
    
    
                                Secundary Insurange: '.$secundaryInsurange.'  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                Policy Holder Name: '.$namePolicy2.' 
    
                                Company Address: '.$companyAddress2.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                Policy Holder Date of Birth: '.$policyBirth2.' 
    
                                City, State, Zip Code: '.$codeZip.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                Identifaction Number: '.$number2ID.' 
    
                                Company Phone: '.$phoneCompany.'  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                Policy/Group Number '.$policyGroupNumber.' 
    
                                Employer: '.$employer2.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                                Policy Holder SSN: '.$policyHolder2.'
    
                                <p ><b>Anny appoiment missed or canceled without 24 hour notice will result in a charge equal to 25% of the full rate of the therapy</b> </p>
    
                                Signature: '.$signaThera.' <br> Date: '.$dateThera.' 
    
    
                                <hr>
    
                                <h2 class="text-center">Confidentialy Release Form</h2>
    
                                <span class="mt-3">
                                I, '.$patienName.',  &nbsp; &nbsp; authorize &nbsp; &nbsp; '.$DoctorName.',&nbsp; &nbsp; to disclose to '.$namesDistr.'  &nbsp; &nbsp; the copies of any (Name and Location of Person(s)/Organization to Receive Information) and all records and information, which you may have possession. This includes all the transmissions of information and data via verbal and electronic contact.
                            </span>
    
                                <p>These records and information include, but may not be limited to: </p>
    
                                '.$hospitalRecord.' <br>
                                '.$testResult.'<br>
                                '.$medicalResults.'<br>
                                '.$medicalOpinion.'  <br>
                                '.$treatmentPlan.' <br>
                                '.$descriptionsPresciptions.' <br>
                                '.$notesConvesations.' <br>
                                <br><br>
                                <span class="mt-3">
                                    I, understain purpuse of this disclousure is &nbsp; &nbsp; '.$disclousure.' &nbsp; &nbsp; '.$authorizationDisclousure.'&nbsp; &nbsp;  '.$authorizationDisclousure2.'
                                    <br>
                                    '.$patientDisclousure.' Date: '.$disclousureDate.'
                                    <br>
                                    '.$socialNumber.' 
                                </span>
    
                                <span class="mt-3">
                                
                                    Print Witness Name: '.$wName.' &nbsp; &nbsp; Date: '.$disclousureDate2.'  <br>
                                    Signature Witness: '.$wSignature.' 
    
                                </span>
                                <br><br><br>
                                <h2 class="text-center">Attemption Recipient - Notice Prohibiting Redisclousure</h2>
                                <p>I understand that my records are protected under federals regulations and cannot disclosed without my writting consent unless otherwise provided for in the regulations. I also understand that I may revoke this consent at any time
                                    exvept to the extent that action has been taken in reliance on it. </p>
                                <br>
                                <p>This information has been disclosed to yo from the records protected by Federal confidentiality rules 42 C.F.R. Part 2). The federal rules prohibit you from making any further disclosure of this information unless further disclosure
                                    is expressly permited by the written consent of the person to whom it pertains or as otherwise permitted by 42 C.F.R. part 2. The federal rules restrict any use of this information to criminally investigate or prosecute any
                                    alcohol or drug patient.</p>
    
    
                                    <hr><br><br>
                                    <h2 class="text-center">Permiso para tratar al paciente</h2>
        
                                    <span class="mt-5"> Yo, '.$nameDr.'  &nbsp; &nbsp;autorizo a Adriana Ochoa , CMHP/CAP, para iniciar un tratamiento de consejería. Si fuera necesario, tambien autorizo que Adriana Ochoa, realice algunos exámenes para evalues el mejor plan de tratamiento para mejorar las relaciones personales, inter-familiares y sociales del cliente. <br>
                                        Tambien tengo conciencia de lo siguiente:
                                    </span><br>
                                    <ul>
                                        <li>Entiendo que la consulta de Adriana Ochoa no es una consulta medica y que en la eventualidad de necesitar un tratamiento profesional, puedo ser remitido a un psiquiatra o aun psicólogo clínico
                                        </li>
                                        <li>
                                            Las citas serán pautadas por ambas partes y los clientes seran responsables por llegar a tiempo. la cncelación de una cita debe tener un previo aviso de por lo menos 24 horas. Fallar a cumplir con la politica de cancelación tendra un valor de 25% de la
                                            consulta.
                                        </li>
                                        <li>En caso de emergencia y si hay menores de edad involucrados, Adriana Ochoa puede proceder según la ley etica a reportar a las autoridades locales.
                                        </li>
                                        <li>
                                            La confidencialidad de los asuntos tratados durante la consulta serán estricatamente respetados por Adriana Ochoa. Seré contactado telefonicamente para confirmar las citas pautadas por medio de SMS o llamadas.
                                        </li>
                                    </ul>
        
                                    <span>Nombre cliente: '.$name_C.' </span><br>
                                    <span>Firma: '.$firma_C.'</span><br>
                                    <span>Autrorizacion de padres o guardian menor de edad: '.$auth_C.'</span><br>
                                    <span>Nombre padre/madre/guardian:  '.$name_Padres.'</span><br>
                                    <span>Firma padre/madre/guardian: '.$firma_Padres.' </span><br>
                                    <span>Fecha: '.$date_C.'</span><br><br>
    
    
                                    <hr>
    
                                    <h2 class="text-center">No Show, Late cancellation and Copayment policy</h2>
        
                                    <span>1. I understand that I will be charged a LATE CANCELLATION fee of 25% of the full rate of the therapy if I fail to give at least 24 hour notice prior to cancelling my appoiment.</span>
                                    <br>
                                    <span>2. I understand that I will be charged a NO-SHOW fee of $130 if I fail to show for my appoiment.</span>
                                    <br>
                                    <span>3.I understand that I am responsible for knowing my co-payment amount and deductible amount. My co-payment amount per session is '.$copayment_person.' &nbsp;  My deducible amount per year is '.$deducible.'  &nbsp; Have you met your deducible for this year  '.$agreePayment.' Yes  - '.$noagreePayment.' No  If no, how much more do you to pay towards your deducible. '.$deducible2.'
                                    <br>
                                    <span>4. I understand that I will be charged a $60 service charge if I fail to make my payment and/or co-payment at the of my appoiment.</span>
                                    <br>
                                    <span>5. I understand that these charges are an out pocket expense and that my insurance carrier will not cover these charges.</span>
                                    <br>
                                    <span>6. I understand that the therapy session will last 60 minutes. I understand that if I am late to the appoiment, I will still have to end the session at the allotted time. By signing this, I am agreeing to the above stated terms and stipulations regarding the services I receive from this therapist.</span><br><br>
        
                                    '.$signaparty.'
        
                                    '.$dateparty.' <br><br>
    
                                    <hr>
    
                                    <h2 class="text-center mb-5">Credit/Debit Card Payment Consent Form</h2>
        
                                    Client name: '.$clientName2.' 
        
                                    Name on card if different than client: '.$client_name3.' 
        
                                    <p>I authorize Walking in Confidence LLC to charge my credit/debit/health account healtd card for professional services 24 hour before our scheduled appoiment. If I do not cancel before 24 hours, I recognize that Walking in Confidence
                                        LLC will charge my card as late cancel or no show or not show if I do not show up for the appoiment. I will be billed for the full session charge of the therapy service.</p>
                                    <br>
                                    <p>I verify that my credit card information, provided above, is accurate to the best of my kwoledge. If this information is incorrect or fraudulent or if my payment is declined. I undertand that I am responsible for the entire amount
                                        owed and any interest or additional cost incurred if denied. I also understand by signing and initialing this form that if form that if no payment has been made by me, my balance will go to collections if another alternative
                                        payment is not made within thirty days.</p>
        
                                   Signa Card: '.$signaCard.' <br>
                                   Initials Card: '.$initialsCard.' <br>
                                   Date Exp. Card: '.$dateExp.'<br><br><br>
                                    <hr>
        
                                    <h2 class="text-center">Counseling Treatment Plan</h2> <br><br>
        
                                   Client Name: '.$nameCliente.' <br>
                                   Case: '.$case.' 
                                    <br><br> Reopen Date: '.$dateR.'<br>
                                   Inactive: '.$inactive.'<br> 
        
                                    <span>Sympton rating for level of functioning change (scale 1-5; 1-mild, 3-moderate, 5-severe)</span><br><br>
        
        
        
                                   Drecrease Energy: '.$decreaseEner.' <br>
                                   RestLess: '.$restless.' <br>
                                   Hopelessnes: '.$hopelessnes.' <br>
                                   Guilt:  '.$guilt.'<br>
                                
                               
                                  Panic Attakcs: '.$panicAttacks.'<br>
                                  Cruelty: '.$cruelty.'<br>
                                 Loss Of Pleasure '.$lossPleasure.'<br>
                                  Deppressed '.$depressed.'<br>
                                
    
                                Anxiety: '.$anxiety.'<br>
                                Disturbance Sleep: '.$disturbanseSleep.'<br>
                                Whitdrawn '.$withDrawn.'<br>
                                Oppositional '.$oppositional.' <br>
                                
                                Poor Concentration: '.$poorContcentration.'<br>
                                 Indecisive: '.$indecisive.'<br>
                                Mood Swings '.$moodSw.'<br>
                                Violation Rules '.$violationR.'<br>
    
                                Legal Problems  '.$legalPro.'<br>
                                Irritability:  '.$irritability.'<br>
                                Helplessnes '.$helplessnes.'<br>
                                Eating Disturbing '.$eatingDist.'<br>
    
                                Impulsivity:  '.$impulsivity.'<br>
                                 Worrying: '.$worrying.'<br>
                                Agressions: '.$agression.'<br>
                                Tearfulness: '.$tearfulness.'<br>
    
                               Substance Abuse: '.$substanceAbu.'<br>
                               Ritual Beahavior '.$ritualBe.'<br>
                               Low Self-esteem '.$lowSteem.'<br>
                                Low Motivatation: '.$lowMotivation.'<br>
    
                                
                               Other:  '.$other.' 
                                <br><br><br> Chenges in Psychosocial / Psychological level of distress: <br>
                                '.$stressLe.' <br><br>
    
                                Changes in physical status: '.$changesPS.' <br>
    
                                Reports received/ Ancilarry services documented  '.$changesPSA.' <br>
    
                              
    
                                <span>
                                <strong>Treatment plan: progress toward/modification of goals and objectives, with estimated completion dates:</strong> 
                                </span><br><br>
    
                                '.$treatmentPlan.' 
    
                                <span>
                                    Changes in a treatment criteria &nbsp;&nbsp; '.$trat_crit.'  '.$trat_crit.' 
    
                                 '.$plantTreatmen.'  
    
    
                                </span><br><br>
    
                                <span>
    
                                    Sessions per month: '.$sessionpermonth.' &nbsp;&nbsp; client concurred: '.$client_concurred.'
                                </span><br><br>
    
                                <span>
                                    Dx Code (Original): '.$dxCode.' <br><br>
                                    Dx Code (Current): '.$dxCurrent.'<br><br>
                                    URC: '.$urc.'<br>
                                </span>
                                <br><br>
                               Therapist:  '.$therapist.' &nbsp;&nbsp; Date:;&nbsp; '.$dateTh.' <br><br>
    
                               Supervisor: '.$supervisor.'  &nbsp;&nbsp; Date: '.$dateSup.' 
    
                                <br><br>
    
                                <hr>
    
                                <h2 class="text-center">Theraphy Progress Note </h2> <br><br>
    
                                <span>
                                    Client name:  '.$client_name.' Case Number: '.$caseNumber.'
                                </span><br><br>
    
                                <span>
                                    Appoiment Date: '.$appDate.'  Appoiment Time: '.$appTime.'
                                </span><br><br>
    
                                <span>
                                <b> Session Focus:</b>  <br>
                                   '.$session_focus.' 
                                </span><br><br>
    
                                <span>
                                    <b>Theraphy Intervention</b>
                                   '.$theraphyInter.' 
                                </span>
    
                                <br><br>
    
                                <span>
                                    <b>Planned Intervention</b>
                                    '.$planInter.'
                                  
                                </span><br><br><br>
    
                              Client Signature: '.$client_signature.'&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;  &nbsp;&nbsp;
                            
                               Date Signature: '.$dateSignature.' 
                               <br> <br> <br>
    
                             Therapist Signature:  '.$therapistSignature.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;  &nbsp;&nbsp;
                            
                             Therapist Date:  '.$therapistDate.' 
    
    
                             <br> <br> <br>
    
                               Name parent: '.$parentGuardian.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;  &nbsp;&nbsp;
                               
                               Parent Name: '.$parentDate.' 
    
    
                               <br> <br> <br>
    
                              Supervisor Signature:  '.$supervisorSignature.' &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;  &nbsp;&nbsp;
                             
                              Supervisor Date:  '.$supervisorDate.' 
        
    
    
                             
                           
                  <br><br><br>
              
        
    </body>
    
          ';
        


          $html2pdf = new HTML2PDF('P', 'A4', 'fr');

          $html2pdf->setDefaultFont('Helvetica');
          $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
          
          $html2pdf = new HTML2PDF('P', 'A4', 'fr');
          $html2pdf->WriteHTML($content);
          
          
        
          
          $message = "<p>Consulte el archivo adjunto.</p>";
          $separator = md5(time());
          $eol = PHP_EOL;
          $filename = "pdf-documento.pdf";
          $pdfdoc = $html2pdf->Output('', 'S');
          $attachment = chunk_split(base64_encode($pdfdoc));
          
          $headers = "From: " .  $eol;
          $headers .= "MIME-Version: 1.0" . $eol;
          $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol . $eol;
          
          $body = '';
          
          $body .= "Content-Transfer-Encoding: 7bit" . $eol;
          $body .= "This is a MIME encoded message." . $eol; //had one more .$eol
          
          
          $body .= "--" . $separator . $eol;
          $body .= "Content-Type: text/html; charset=\"iso-8859-1\"" . $eol;
          $body .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
          $body .= $message . $eol;
          
          
          $body .= "--" . $separator . $eol;
          $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
          $body .= "Content-Transfer-Encoding: base64" . $eol;
          $body .= "Content-Disposition: attachment" . $eol . $eol;
          $body .= $attachment . $eol;
          $body .= "--" . $separator . "--";

          $se =  $contact->registrar($nameCliente,$email_client,$phone); 

          if($se){
            mail('c_pandares@hotmail.com', 'Mensaje', $body, $headers);
          }
          
         
          

    


}




