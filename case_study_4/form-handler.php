<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="output.css">
  <title>Document</title>
</head>
<body>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $position = htmlspecialchars($_POST['position'] ?? '');
  $date = htmlspecialchars($_POST['date'] ?? '');
  $name = htmlspecialchars($_POST['name'] ?? '');
  $gender = htmlspecialchars($_POST['gender'] ?? '');
  $cityAddress = htmlspecialchars($_POST['city-address'] ?? '');
  $provincialAddress = htmlspecialchars($_POST['provincial-address'] ?? '');
  $telephone = htmlspecialchars($_POST['telephone'] ?? '');
  $cellphone = htmlspecialchars($_POST['cellphone'] ?? '');
  $cellphone1  = htmlspecialchars($_POST['cellphone1'] ?? '');
  $email  = htmlspecialchars($_POST['email'] ?? '');
  $dob  = htmlspecialchars($_POST['dob'] ?? '');
  $bop  = htmlspecialchars($_POST['bop'] ?? '');
  $cv  = htmlspecialchars($_POST['cv'] ?? '');
  $citizenship  = htmlspecialchars($_POST['citizenship'] ?? '');
  $height  = htmlspecialchars($_POST['height'] ?? '');
  $weight  = htmlspecialchars($_POST['weight'] ?? '');
  $religion  = htmlspecialchars($_POST['religion'] ?? '');
  $spouse  = htmlspecialchars($_POST['spouse'] ?? '');
  $occupation  = htmlspecialchars($_POST['occupation'] ?? '');
  $noc  = htmlspecialchars($_POST['noc'] ?? '');
  $dob1  = htmlspecialchars($_POST['dob1'] ?? '');
  $noc1  = htmlspecialchars($_POST['noc1'] ?? '');
  $dob2  = htmlspecialchars($_POST['dob2'] ?? '');
  $noc2  = htmlspecialchars($_POST['noc2'] ?? '');
  $dob3  = htmlspecialchars($_POST['dob3'] ?? '');
  $fname  = htmlspecialchars($_POST['fname'] ?? '');
  $fatherOccupation  = htmlspecialchars($_POST['fathers-occupation'] ?? '');
  $mname  = htmlspecialchars($_POST['mname'] ?? '');
  $motherOccupation  = htmlspecialchars($_POST['mothers-occupation'] ?? '');
  $language  = htmlspecialchars($_POST['language'] ?? '');
  $emergency  = htmlspecialchars($_POST['emergency'] ?? '');
  $emergencyAt  = htmlspecialchars($_POST['emergency-at'] ?? '');
  $elementary  = htmlspecialchars($_POST['elementary'] ?? '');
  $egraduate  = htmlspecialchars($_POST['egraduate'] ?? '');
  $highschool  = htmlspecialchars($_POST['highschool'] ?? '');
  $hgraduate  = htmlspecialchars($_POST['hgraduate'] ?? '');
  $college  = htmlspecialchars($_POST['college'] ?? '');
  $cgraduate  = htmlspecialchars($_POST['cgraduate'] ?? '');
  $degree  = htmlspecialchars($_POST['degree'] ?? '');
  $specialSkill  = htmlspecialchars($_POST['special-skill'] ?? '');
  $cm1  = htmlspecialchars($_POST['cm1'] ?? '');
  $position1  = htmlspecialchars($_POST['position1'] ?? '');
  $from1  = htmlspecialchars($_POST['from1'] ?? '');
  $to1  = htmlspecialchars($_POST['to1'] ?? '');
  $cm2  = htmlspecialchars($_POST['cm2'] ?? '');
  $position2  = htmlspecialchars($_POST['position2'] ?? '');
  $from2  = htmlspecialchars($_POST['from2'] ?? '');
  $to2  = htmlspecialchars($_POST['to2'] ?? '');
  $crname  = htmlspecialchars($_POST['crname'] ?? '');
  $crcompany  = htmlspecialchars($_POST['crcompany'] ?? '');
  $crposition  = htmlspecialchars($_POST['crposition'] ?? '');
  $crcontact  = htmlspecialchars($_POST['crcontact'] ?? '');
  $crname2  = htmlspecialchars($_POST['crname2'] ?? '');
  $crcompany2  = htmlspecialchars($_POST['crcompany2'] ?? '');
  $crposition2  = htmlspecialchars($_POST['crposition2'] ?? '');
  $crcontact2  = htmlspecialchars($_POST['crcontact2'] ?? '');
  $resCert  = htmlspecialchars($_POST['resCert'] ?? '');
  $issuedAt  = htmlspecialchars($_POST['issuedAt'] ?? '');
  $issuedOn  = htmlspecialchars($_POST['issuedOn'] ?? '');
  $sss  = htmlspecialchars($_POST['sss'] ?? '');
  $tin  = htmlspecialchars($_POST['tin'] ?? '');
  $nbi  = htmlspecialchars($_POST['nbi'] ?? '');
  $passport  = htmlspecialchars($_POST['passport'] ?? '');
  $fileToUpload = $_FILES['fileToUpload']['name'] ?? '';

     if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0) {
        $fileTmpPath = $_FILES['fileToUpload']['tmp_name'];
        $fileName = $_FILES['fileToUpload']['name'];
        $fileSize = $_FILES['fileToUpload']['size'];
        $fileType = $_FILES['fileToUpload']['type'];

        // choose a directory to save the image (e.g. uploads/)
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); // create uploads/ folder if it doesn’t exist
        }

        $dest_path = $uploadDir . basename($fileName);

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            
        } 
    }

    
  }

?>
  <div class="biodata-container">
    <div class="header">
      <h1>BIO-DATA</h1>
  </label>
  <?= "<img src='$dest_path' alt='Uploaded Photo' width='150'>" ?>
    </div>
      <div class="personal-data"><div class="personal-data-title">PERSONAL DATA</div></div>
      <div class="first-form">
          <div class="PDNG">
            <div><label for="position" id="js-position">Position Desired:</label><div class="output"><?= $position?></div></div>
            <div><label for="date" id="js-date">Date:</label><div class="output"><?= $date?></div></div>
            <div><label for="name" id="js-name">Name:</label><div class="output"><?= $name?></div></div>
            <div><label for="gender" id="js-gender">Gender:</label>
              <div class="output"><?= $gender?></div>
            </div>
          </div>
          <div class="CP">
            <div><label for="city-address" id="js-city-address">City Address:</label><div class="output"><?= $cityAddress?></div></div>
            <div><label for="provincial-address" id="js-provincial-address">Provincial Address:</label><div class="output"><?= $provincialAddress?></div></div>
          </div>
          <div class="PDNG">
            <div><label for="position" id="js-telephone">Telephone:</label><div class="output"><?= $telephone?></div></div>
            <div><label for="date" id="js-cellphone">Cellphone:</label><div class="output"><?= $cellphone?></div></div>
            <div><label for="position" id="js-email">Email Address:</label><div class="output"><?= $email?></div></div>
            <div><label for="date" id="js-cellphone1"></label><div class="output"><?= $cellphone1?></div></div>
            <div><label for="position" id="js-dob">Date of Birth:</label><div class="output"><?= $dob?></div></div>
            <div><label for="date" id="js-bop">Birth of Place:</label><div class="output"><?= $bop?></div></div>
            <div><label for="position" id="js-cv">Civil Status:</label><div class="output"><?= $cv?></div></div>
            <div><label for="position" id="js-citizenship">Citizenship:</label><div class="output"><?= $citizenship?></div></div>
            <div><label for="position" id="js-height">Height:</label><div class="output"><?= $height?></div></div>  
            <div><label for="date" id="js-weight">Weight:</label><div class="output"><?= $weight?></div></div>  
            <div><label for="position" id="js-religion">Religion:</label><div class="output"><?= $religion?></div></div>
            <div></div>     
            <div><label for="date" id="js-spouse">Spouse:</label><div class="output"><?= $spouse?></div></div>  


            <div><label for="position" id="js-occupation">Occupation:</label><div class="output"><?= $occupation?></div></div>
            <div><label for="date" id="js-noc">Name of Children:</label><div class="output"><?= $noc?></div></div>  
            <div><label for="position" id="js-dob1">Date of Birth:</label><div class="output"><?= $dob1?></div></div> 
            <div><label for="position" id="js-noc1"></label><div class="output"><?= $noc1?></div></div>
            <div><label for="position" id="js-dob2"></label><div class="output"><?= $dob2?></div></div>
            <div><label for="position" id="js-noc2"></label><div class="output"><?= $noc2?></div></div>
            <div><label for="position" id="js-dob3"></label><div class="output"><?= $dob3?></div></div>
            <div><label for="date" id="js-fname">Father's Name:</label><div class="output"><?= $fname?></div></div>  
            <div><label for="position" id="js-fathers-occupation">Occupation:</label><div class="output"><?= $fatherOccupation?></div></div>
            <div><label for="date" id="js-mname">Mother's Name</label><div class="output"><?= $mname?></div></div>  
            <div><label for="position" id="js-mothers-occupation">Occupation:</label><div class="output"><?= $motherOccupation?></div></div> 
        </div>
          <div class="CP2">
            <div><label for="city-address" id="js-language">Language or Dialect spoken and written:</label><div class="output"><?= $language?></div></div>
            <div><label for="provincial-address" id="js-emergency">Person to be contacted incase of emergency:</label><div class="output"><?= $emergency?></div></div>
            <div><label for="provincial-address" id="js-emergency-at">his or her address and telephone:</label><div class="output"><?= $emergencyAt?></div></div>
          </div>    
      </div>
      
      <div class="educational-background"><div class="educational-background-title">EDUCATIONAL BACKGROUND</div></div>
      <div class="first-form">
        <div class="PDNG">
            <div><label for="position" id="js-elementary">Elementary:</label><div class="output"><?= $elementary?></div></div>
            <div><label for="date" id="js-egraduate">Year Graduated:</label><div class="output"><?= $egraduate?></div></div>
            <div><label for="position" id="js-highschool">High School:</label><div class="output"><?= $highschool?></div></div>
            <div><label for="date" id="js-hgraduate">Year Graduated:</label><div class="output"><?= $hgraduate?></div></div>
            <div><label for="position" id="js-college">College:</label><div class="output"><?= $college?></div></div>
            <div><label for="date" id="js-cgraduate">Year Graduated:</label><div class="output"><?= $cgraduate?></div></div>
        </div>
        <div class="CP3">
            <div><label for="city-address" id="js-degree">Degree Received:</label><div class="output"><?= $degree?></div></div>
            <div><label for="provincial-address" id="js-special-skill">Special Skills:</label><div class="output"><?= $specialSkill?></div></div>
          </div>
      </div>

      <div class="educational-background"><div class="educational-background-title">EMPLOYMENT RECORD</div></div>
      <div class="first-form">
        <div class="CP3">
          <div><label for="city-address" id="js-cm1">Company Name:</label><div class="output"><?= $cm1?></div></div>
        </div>
        <div class="three-columns">
          <div><label for="city-address" id="js-position1">Position:</label><div class="output"><?= $position1?></div></div>
          <div><label for="city-address" id="js-from1">From:</label><div class="output"><?= $from1?></div></div>
          <div><label for="city-address" id="js-to1">To:</label><div class="output"><?= $to1?></div></div>
        </div><br>
        <div class="CP3">
          <div><label for="city-address" id="js-cm2">Company Name:</label><div class="output"><?= $cm2?></div></div>
        </div>
        <div class="three-columns">
          <div><label for="city-address" id="js-position2">Position:</label><div class="output"><?= $position2?></div></div>
          <div><label for="city-address" id="js-from2">From:</label><div class="output"><?= $from2?></div></div>
          <div><label for="city-address" id="js-to2">To:</label><div class="output"><?= $to2?></div></div>
        </div>
      </div>

      <div class="educational-background"><div class="educational-background-title">CHARACTER REFERENCE</div></div>
      <div class="first-form">
        <div class="PDNG">
            <div><label for="position" id="js-crname">Name:</label><div class="output"><?= $crname?></div></div>
            <div><label for="date" id="js-crcompany">Company:</label><div class="output"><?= $crcompany?></div></div>
            <div><label for="position" id="js-crposition">Position:</label><div class="output"><?= $crposition?></div></div>
            <div><label for="date" id="js-crcontact">Contact No.:</label><div class="output"><?= $crcontact?></div></div>
        </div><br><br>
        <div class="PDNG">
            <div><label for="position" id="js-crname2">Name:</label><div class="output"><?= $crname2?></div></div>
            <div><label for="date" id="js-crcompany2">Company:</label><div class="output"><?= $crcompany2?></div></div>
            <div><label for="position" id="js-crposition2">Position:</label><div class="output"><?= $crposition2?></div></div>
            <div><label for="date" id="js-crcontact2">Contact No.:</label><div class="output"><?= $crcontact2?></div></div>
        </div>
      </div>
      <div class="last-section">
        <div class="last-grid">
          <div><label for="position" id="js-resCert">Res. Cert. No.:</label><div class="output"><?= $resCert?></div></div>
          <div><label for="position" id="js-issuedAt">Issued at:</label><div class="output"><?= $issuedAt?></div></div>
          <div><label for="position" id="js-issuedOn">Issued on:</label><div class="output"><?= $issuedOn?></div></div>
          <div><label for="position" id="js-sss">SSS:</label><div class="output"><?= $sss?></div></div>
          <div><label for="position" id="js-tin">TIN:</label><div class="output"><?= $tin?></div></div>
          <div><label for="position" id="js-nbi">NBI No.:</label><div class="output"><?= $nbi?></div></div>
          <div><label for="position" id="js-passport">Passport No.:</label><div class="output"><?= $passport?></div></div>
        </div>
        <div class="last-right">
          <div class="last-grid-right">
          <div class="declaration">I hereby certify that the above information is true and correct to the best of 
            my knowledge and belief. I also understand that any misinterpretation will be considered reason for 
            withdrawal of an offer or subsequent dismissal if employed.
          </div>
          <div class="signature">________________________________________________</div>
          <div>Applicant's Signature</div>
        </div>
        </div>
      </div>
  </div>

</body>
</html>