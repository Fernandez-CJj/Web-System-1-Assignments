<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <style>
body {
  margin: 0;
  font-family: Arial;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 30px;
}

.biodata-container {
  width: 1000px;
  border: 1px solid black;
  padding: 20px;
  padding-bottom: 100px;
}

.header {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

h1 {
  flex: 1;
  text-align: center;
  font-size: 60px;
  font-weight: 900;
  color: #2e2e2e;
  margin-left: 100px;
}

#fileToUpload {
  display: none;
}

.photo-box {
  width: 150px;
  height: 150px;
  border: 2px dashed #2e2e2e;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  font-size: 14px;
  color: #555;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  background-color: #f9f9f9;
}

.photo-box:hover {
  background-color: #efefef;
}

/* Image fills the box but hidden by default */
.photo-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: none;
}

.personal-data,
.educational-background {
  background-color: #2e2e2e;
  color: white;
  margin-top: 20px;
  height: 40px;
  display: flex;
  align-items: center;
  border-radius: 10px;
}

.personal-data-title,
.educational-background-title {
  margin-left: 20px;
  font-weight: bold;
}

.educational-background {
  margin-top: 10px;
}

.first-form {
  margin-top: 10px;
  border: 1px solid #2e2e2e;
  border-radius: 10px;

  padding: 20px;
  /* added */
}

.personal-data,
.first-form {
  width: 100%;
  box-sizing: border-box;
}

.PDNG {
  margin-left: 10px;
  margin-right: 10px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  /* added - 2 columns */
  gap: 15px 30px;
  /* added - spacing */
}

.PDNG div {
  display: grid;
  /* added */
  grid-template-columns: 130px 1fr;
  /* added - label + input */
  align-items: center;
  /* added */
  gap: 10px;
  /* added */
}

.CP {
  margin-top: 10px;
  margin-left: 10px;
  margin-right: 10px;
  margin-bottom: 10px;
  display: grid;
  /* changed from row */
  grid-template-columns: 1fr;
  /* 1 column */
  gap: 15px;
  /* spacing */
}

.CP div {
  display: grid;
  /* added */
  grid-template-columns: 130px 1fr;
  /* label + input */
  align-items: center;
  /* added */
  gap: 10px;
  /* added */
}

input,
select {
  border: none;
  border-bottom: 1px solid black;
  padding: 5px;
  width: 100%;
  font-size: 14px;
}

.CP2 {
  margin-top: 10px;
  margin-left: 10px;
  margin-right: 10px;
  display: grid;
  /* changed from row */
  grid-template-columns: 1fr;
  /* 1 column */
  gap: 15px;
  /* spacing */
}

.CP2 div {
  display: grid;
  /* added */
  grid-template-columns: 350px 1fr;
  /* label + input */
  align-items: center;
  /* added */
  gap: 10px;
  /* added */
}

.CP3 {
  margin-top: 10px;
  margin-left: 10px;
  margin-right: 10px;
  display: grid;
  /* changed from row */
  grid-template-columns: 1fr;
  /* 1 column */
  gap: 15px;
  /* spacing */
}

.CP3 div {
  display: grid;
  /* added */
  grid-template-columns: 130px 1fr;
  /* label + input */
  align-items: center;
  /* added */
  gap: 10px;
  /* added */
}

.three-columns {
  margin-left: 10px;
  margin-right: 10px;
  display: grid;
  grid-template-columns: 2fr 1fr 1fr;
  /* added - 2 columns */
  gap: 15px 30px;
  /* added - spacing */
}

.three-columns div {
  display: grid;
  /* added */
  grid-template-columns: 130px 1fr;
  /* added - label + input */
  align-items: center;
  /* added */
  gap: 10px;
  /* added */
}

.last-section {
  display: grid;
  grid-template-columns: 500px 1fr;
  margin-top: 10px;
  align-items: center;
  justify-content: center;
}

.last-grid {
  display: grid;
  grid-template-columns: 1fr;
  /* added - 2 columns */
  gap: 8px;
  /* added - spacing */
  border: none;
  border: 1px solid black;
  border-radius: 20px;
  padding: 20px;
}

.last-grid div {
  display: grid;
  /* added */
  grid-template-columns: 130px 1fr;
  /* added - label + input */
  align-items: center;
  /* added */
  gap: 10px;
  /* added */
}

.last-right {
  display: flex;
  flex-direction: column;
  /* stack text + signature */
  justify-content: flex-end;
  /* push content to bottom */
  align-items: flex-end;
  /* align to the right */
  margin: 20px;
  text-align: center;
  /* keep "Applicant's Signature" centered under the line */
}

.signature {
  margin-top: 30px;
  /* space between text and line */
}

.submit {
  margin-top: 30px;
  display: flex;
  justify-content: center;
}

.submit-button {
  background-color: #2e2e2e;
  color: white;
  border: none;
  font-size: 20px;
  padding: 12px 30px;
  border-radius: 8px;
  cursor: pointer;
  width: 700px;
  height: 60px;
  /* prevent full width */
}

.submit-button:hover {
  background-color: #535353ff;
}

.submit-button:active{
  opacity: 0.3;
}

.js-submit-error {
  margin-top: 10px;
  font-size: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: red;
}
  </style>
</head>
<body>
  <div class="biodata-container">
    <form action="form-handler.php" method="post" enctype="multipart/form-data">
    <div class="header">
      <h1>BIO-DATA</h1>
      <label for="fileToUpload" class="photo-box">
    <span id="upload-text">Click to Upload Photo</span>
    <img id="preview" src="" alt="" style="display:none;"/>
  </label>
  <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
    </div>
      <div class="personal-data"><div class="personal-data-title">PERSONAL DATA</div></div>
      <div class="first-form">
          <div class="PDNG">
            <div><label for="position" id="js-position">Position Desired:</label> <input type="text" id="position" name="position"></div>
            <div><label for="date" id="js-date">Date:</label> <input type="date" id="date" name="date"></div>
            <div><label for="name" id="js-name">Name:</label> <input type="text" id="name" name="name"></div>
            <div><label for="gender" id="js-gender">Gender:</label>
              <select id="gender" name="gender">
                <option value="">-- Select Gender --</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          <div class="CP">
            <div><label for="city-address" id="js-city-address">City Address:</label> <input type="text" id="city-address" name="city-address"></div>
            <div><label for="provincial-address" id="js-provincial-address">Provincial Address:</label> <input type="text" id="provincial-address" name="provincial-address"></div>
          </div>
          <div class="PDNG">
            <div><label for="position" id="js-telephone">Telephone:</label> <input type="telephone" id="telephone" name="telephone"></div>
            <div><label for="date" id="js-cellphone">Cellphone:</label> <input type="text" id="cellphone" name="cellphone"></div>
            <div><label for="position" id="js-email">Email Address:</label> <input type="text" id="email" name="email"></div>
            <div><label for="date" id="js-cellphone1"></label> <input type="text" id="cellphone1" name="cellphone1"></div>
            <div><label for="position" id="js-dob">Date of Birth:</label> <input type="date" id="dob" name="dob"></div>
            <div><label for="date" id="js-bop">Birth of Place:</label> <input type="text" id="bop" name="bop"></div>
            <div><label for="position" id="js-cv">Civil Status:</label> <input type="text" id="cv" name="cv"></div>
            <div><label for="position" id="js-citizenship">Citizenship:</label> <input type="text" id="citizenship" name="citizenship"></div>
            <div><label for="position" id="js-height">Height:</label> <input type="text" id="height" name="height"></div>  
            <div><label for="date" id="js-weight">Weight:</label> <input type="text" id="weight" name="weight"></div>  
            <div><label for="position" id="js-religion">Religion:</label> <input type="text" id="religion" name="religion"></div>
            <div></div>     
            <div><label for="date" id="js-spouse">Spouse:</label> <input type="text" id="spouse" name="spouse"></div>  
            <div><label for="position" id="js-occupation">Occupation:</label> <input type="text" id="occupation" name="occupation"></div>
            <div><label for="date" id="js-noc">Name of Children:</label> <input type="text" id="noc" name="noc"></div>  
            <div><label for="position" id="js-dob1">Date of Birth:</label> <input type="text" id="dob1" name="dob1"></div> 
            <div><label for="position" id="js-noc1"></label> <input type="text" id="noc1" name="noc1"></div>
            <div><label for="position" id="js-dob2"></label> <input type="text" id="dob2" name="dob2"></div>
            <div><label for="position" id="js-noc2"></label> <input type="text" id="noc2" name="noc2"></div>
            <div><label for="position" id="js-dob3"></label> <input type="text" id="dob3" name="dob3"></div>
            <div><label for="date" id="js-fname">Father's Name:</label> <input type="text" id="fname" name="fname"></div>  
            <div><label for="position" id="js-fathers-occupation">Occupation:</label> <input type="text" id="fathers-occupation" name="fathers-occupation"></div>
            <div><label for="date" id="js-mname">Mother's Name</label> <input type="text" id="mname" name="mname"></div>  
            <div><label for="position" id="js-mothers-occupation">Occupation:</label> <input type="text" id="mothers-occupation" name="mothers-occupation"></div> 
        </div>
          <div class="CP2">
            <div><label for="city-address" id="js-language">Language or Dialect spoken and written:</label> <input type="text" id="language" name="language"></div>
            <div><label for="provincial-address" id="js-emergency">Person to be contacted incase of emergency:</label> <input type="text" id="emergency" name="emergency"></div>
            <div><label for="provincial-address" id="js-emergency-at">his or her address and telephone:</label> <input type="text" id="emergency-at" name="emergency-at"></div>
          </div>    
      </div>
      
      <div class="educational-background"><div class="educational-background-title">EDUCATIONAL BACKGROUND</div></div>
      <div class="first-form">
        <div class="PDNG">
            <div><label for="position" id="js-elementary">Elementary:</label> <input type="text" id="elementary" name="elementary"></div>
            <div><label for="date" id="js-egraduate">Year Graduated:</label> <input type="text" id="egraduate" name="egraduate"></div>
            <div><label for="position" id="js-highschool">High School:</label> <input type="text" id="highschool" name="highschool"></div>
            <div><label for="date" id="js-hgraduate">Year Graduated:</label> <input type="text" id="hgraduate" name="hgraduate"></div>
            <div><label for="position" id="js-college">College:</label> <input type="text" id="college" name="college"></div>
            <div><label for="date" id="js-cgraduate">Year Graduated:</label> <input type="text" id="cgraduate" name="cgraduate"></div>
        </div>
        <div class="CP3">
            <div><label for="city-address" id="js-degree">Degree Received:</label> <input type="text" id="degree" name="degree"></div>
            <div><label for="provincial-address" id="js-special-skill">Special Skills:</label> <input type="text" id="special-skill" name="special-skill"></div>
          </div>
      </div>

      <div class="educational-background"><div class="educational-background-title">EMPLOYMENT RECORD</div></div>
      <div class="first-form">
        <div class="CP3">
          <div><label for="city-address" id="js-cm1">Company Name:</label> <input type="text" id="cm1" name="cm1"></div>
        </div>
        <div class="three-columns">
          <div><label for="city-address" id="js-position1">Position:</label> <input type="text" id="position1" name="position1"></div>
          <div><label for="city-address" id="js-from1">From:</label> <input type="text" id="from1" name="from1"></div>
          <div><label for="city-address" id="js-to1">To:</label> <input type="text" id="to1" name="to1"></div>
        </div><br>
        <div class="CP3">
          <div><label for="city-address" id="js-cm2">Company Name:</label> <input type="text" id="cm2" name="cm2"></div>
        </div>
        <div class="three-columns">
          <div><label for="city-address" id="js-position2">Position:</label> <input type="text" id="position2" name="position2"></div>
          <div><label for="city-address" id="js-from2">From:</label> <input type="text" id="from2" name="from2"></div>
          <div><label for="city-address" id="js-to2">To:</label> <input type="text" id="to2" name="to2"></div>
        </div>
      </div>

      <div class="educational-background"><div class="educational-background-title">CHARACTER REFERENCE</div></div>
      <div class="first-form">
        <div class="PDNG">
            <div><label for="position" id="js-crname">Name:</label> <input type="text" id="crname" name="crname"></div>
            <div><label for="date" id="js-crcompany">Company:</label> <input type="text" id="crcompany" name="crcompany"></div>
            <div><label for="position" id="js-crposition">Position:</label> <input type="text" id="crposition" name="crposition"></div>
            <div><label for="date" id="js-crcontact">Contact No.:</label> <input type="text" id="crcontact" name="crcontact"></div>
        </div><br><br>
        <div class="PDNG">
            <div><label for="position" id="js-crname2">Name:</label> <input type="text" id="crname2" name="crname2"></div>
            <div><label for="date" id="js-crcompany2">Company:</label> <input type="text" id="crcompany2" name="crcompany2"></div>
            <div><label for="position" id="js-crposition2">Position:</label> <input type="text" id="crposition2" name="crposition2"></div>
            <div><label for="date" id="js-crcontact2">Contact No.:</label> <input type="text" id="crcontact2" name="crcontact2"></div>
        </div>
      </div>
      <div class="last-section">
        <div class="last-grid">
          <div><label for="position" id="js-resCert">Res. Cert. No.:</label> <input type="text" id="resCert" name="resCert"></div>
          <div><label for="position" id="js-issuedAt">Issued at:</label> <input type="text" id="issuedAt" name="issuedAt"></div>
          <div><label for="position" id="js-issuedOn">Issued on:</label> <input type="text" id="issuedOn" name="issuedOn"></div>
          <div><label for="position" id="js-sss">SSS:</label> <input type="text" id="sss" name="sss"></div>
          <div><label for="position" id="js-tin">TIN:</label> <input type="text" id="tin" name="tin"></div>
          <div><label for="position" id="js-nbi">NBI No.:</label> <input type="text" id="nbi" name="nbi"></div>
          <div><label for="position" id="js-passport">Passport No.:</label> <input type="text" id="passport" name="passport"></div>
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
      <div class="submit">
        <input type="submit" class="submit-button" value="Submit" onclick="validateForm(event)">
      </div>
      <div class="js-submit-error"><span id="submit-error"></span></div>
    </form>
    
    <script src="validation.js"></script>
  </div>
</body>
</html>
