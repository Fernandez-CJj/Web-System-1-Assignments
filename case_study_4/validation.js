const fileInput = document.getElementById("fileToUpload");
const preview = document.getElementById("preview");
const uploadText = document.getElementById("upload-text");

fileInput.addEventListener("change", function () {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      preview.src = e.target.result;
      preview.style.display = "block";   // show image
      uploadText.style.display = "none"; // hide text
    };
    reader.readAsDataURL(file);
  }
});

function validateForm(event) {
  let position = document.getElementById('position').value.trim();
  let date = document.getElementById('date').value.trim();
  let name = document.getElementById('name').value.trim();
  let gender = document.getElementById('gender').value.trim();
  let cityAddress = document.getElementById('city-address').value.trim();
  let provincialAddress = document.getElementById('provincial-address').value.trim();
  let telephone = document.getElementById('telephone').value.trim();
  let cellphone = document.getElementById('cellphone').value.trim();
  let cellphone1 = document.getElementById('cellphone1').value.trim();
  let email = document.getElementById('email').value.trim();
  let dob = document.getElementById('dob').value.trim();
  let bop = document.getElementById('bop').value.trim();
  let cv = document.getElementById('cv').value.trim();
  let citizenship = document.getElementById('citizenship').value.trim();
  let height = document.getElementById('height').value.trim();
  let weight = document.getElementById('weight').value.trim();
  let religion = document.getElementById('religion').value.trim();
  let spouse = document.getElementById('spouse').value.trim();
  let occupation = document.getElementById('occupation').value.trim();
  let noc = document.getElementById('noc').value.trim();
  let dob1 = document.getElementById('dob1').value.trim();
  let noc1 = document.getElementById('noc1').value.trim();
  let dob2 = document.getElementById('dob2').value.trim();
  let noc2 = document.getElementById('noc2').value.trim();
  let dob3 = document.getElementById('dob3').value.trim();
  let fname = document.getElementById('fname').value.trim();
  let fatherOccupation = document.getElementById('fathers-occupation').value.trim();
  let mname = document.getElementById('mname').value.trim();
  let motherOccupation = document.getElementById('mothers-occupation').value.trim();
  let language = document.getElementById('language').value.trim();
  let emergency = document.getElementById('emergency').value.trim();
  let emergencyAt = document.getElementById('emergency-at').value.trim();
  let elementary = document.getElementById('elementary').value.trim();
  let egraduate = document.getElementById('egraduate').value.trim();
  let highschool = document.getElementById('highschool').value.trim();
  let hgraduate = document.getElementById('hgraduate').value.trim();
  let college = document.getElementById('college').value.trim();
  let cgraduate = document.getElementById('cgraduate').value.trim();
  let degree = document.getElementById('degree').value.trim();
  let specialSkill = document.getElementById('special-skill').value.trim();
  let cm1 = document.getElementById('cm1').value.trim();
  let position1 = document.getElementById('position1').value.trim();
  let from1 = document.getElementById('from1').value.trim();
  let to1 = document.getElementById('to1').value.trim();
  let cm2 = document.getElementById('cm2').value.trim();
  let position2 = document.getElementById('position2').value.trim();
  let from2 = document.getElementById('from2').value.trim();
  let to2 = document.getElementById('to2').value.trim();
  let crname = document.getElementById('crname').value.trim();
  let crcompany = document.getElementById('crcompany').value.trim();
  let crposition = document.getElementById('crposition').value.trim();
  let crcontact = document.getElementById('crcontact').value.trim();
  let crname2 = document.getElementById('crname2').value.trim();
  let crcompany2 = document.getElementById('crcompany2').value.trim();
  let crposition2 = document.getElementById('crposition2').value.trim();
  let crcontact2 = document.getElementById('crcontact2').value.trim();
  let resCert = document.getElementById('resCert').value.trim();
  let issuedAt = document.getElementById('issuedAt').value.trim();
  let issuedOn = document.getElementById('issuedOn').value.trim();
  let sss = document.getElementById('sss').value.trim();
  let tin = document.getElementById('tin').value.trim();
  let nbi = document.getElementById('nbi').value.trim();
  let passport = document.getElementById('passport').value.trim();
  let fileToUpload = document.getElementById('fileToUpload').value;

  if (fileToUpload === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('upload-text').innerHTML = "<b style='color: red'> Upload is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('upload-text').innerHTML = "Click to upload: "
  }
  if (position === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-position').innerHTML = "<b style='color: red'> Position is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-position').innerHTML = "Position Desired: "
  }
  if (date === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-date').innerHTML = "<b style='color: red'> Date is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-date').innerHTML = "Position Desired: "
  }
  if (name === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-name').innerHTML = "<b style='color: red'> Name is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-name').innerHTML = "Position Desired: "
  }
  if (gender === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-gender').innerHTML = "<b style='color: red'> Gender is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-gender').innerHTML = "Select Gender "
  }
  if (gender === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-gender').innerHTML = "<b style='color: red'> Gender is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-gender').innerHTML = "Gender: "
  }
  if (cityAddress === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-city-address').innerHTML = "<b style='color: red'> City Address is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-city-address').innerHTML = "City Address: "
  }
  if (provincialAddress === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-provincial-address').innerHTML = "<b style='color: red'>Provincial Address is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-provincial-address').innerHTML = "Provincial Address: "
  }
  if (telephone === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-telephone').innerHTML = "<b style='color: red'>Telephone is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-telephone').innerHTML = "Telephone: "
  }
  if (cellphone === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-cellphone').innerHTML = "<b style='color: red'>Cellphone is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-cellphone').innerHTML = "Cellphone: "
  }
  if (email === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-email').innerHTML = "<b style='color: red'>Email Address is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-email').innerHTML = "Email Address: "
  }
  if (cellphone1 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-cellphone1').innerHTML = "<b style='color: red'>Cellphone is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-cellphone1').innerHTML = "Cellphone: "
  }
  if (dob === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-dob').innerHTML = "<b style='color: red'>Date of Birth is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-dob').innerHTML = "Date of Birth: "
  }
  if (bop === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-bop').innerHTML = "<b style='color: red'>Birth of Place is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-bop').innerHTML = "Birth of Place: "
  }
  if (cv === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-cv').innerHTML = "<b style='color: red'>Civil Status is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-cv').innerHTML = "Civil Status: "
  }
  if (citizenship === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-citizenship').innerHTML = "<b style='color: red'>Citizenship is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-citizenship').innerHTML = "Citizenship: "
  }
  if (height === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-height').innerHTML = "<b style='color: red'>Height is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-height').innerHTML = "Height: "
  }
  if (weight === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-weight').innerHTML = "<b style='color: red'>Weight is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-weight').innerHTML = "Weight: "
  }
  if (religion === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-religion').innerHTML = "<b style='color: red'>Religion is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-religion').innerHTML = "Religion: "
  }
  if (spouse === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-spouse').innerHTML = "<b style='color: red'>Spouse is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-spouse').innerHTML = "Spouse: "
  }
  if (occupation === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-occupation').innerHTML = "<b style='color: red'>Occupation is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-occupation').innerHTML = "Occupation: "
  }
  if (noc === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-noc').innerHTML = "<b style='color: red'>Name of Children is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-noc').innerHTML = "Name of Children: "
  }
  if (dob1 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-dob1').innerHTML = "<b style='color: red'>Date of Birth is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-dob1').innerHTML = "Date of Birth: "
  }
  if (noc1 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-noc1').innerHTML = "<b style='color: red'>Name of Children is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-noc1').innerHTML = "Name of Children: "
  }
  if (dob2 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-dob2').innerHTML = "<b style='color: red'>Date of Birth is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-dob2').innerHTML = "Date of Birth: "
  }
  if (noc2 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-noc2').innerHTML = "<b style='color: red'>Name of Children is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-noc2').innerHTML = "Name of Children: "
  }
  if (dob3 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-dob3').innerHTML = "<b style='color: red'>Date of Birth is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-dob3').innerHTML = "Date of Birth: "
  }
  if (fname === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-fname').innerHTML = "<b style='color: red'>Father's Name is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-fname').innerHTML = "Father's Name: "
  }
  if (fatherOccupation === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-fathers-occupation').innerHTML = "<b style='color: red'>Occupation is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-fathers-occupation').innerHTML = "Father's Occupation: "
  }
  if (mname === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-mname').innerHTML = "<b style='color: red'>Mother's Name is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-mname').innerHTML = "Mother's Name: "
  }
  if (motherOccupation === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-mothers-occupation').innerHTML = "<b style='color: red'>Occupation is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-mothers-occupation').innerHTML = "Mothers's Occupation: "
  }
  if (language === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-language').innerHTML = "<b style='color: red'>Language or Dialect spoken and written: is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-language').innerHTML = "Language or Dialect spoken and written: "
  }
  if (emergency === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-emergency').innerHTML = "<b style='color: red'>Person to be contacted incase of emergency is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-emergency').innerHTML = "Person to be contacted incase of emergency: "
  }
  if (emergencyAt === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-emergency-at').innerHTML = "<b style='color: red'>his or her address and telephone is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-emergency-at').innerHTML = "his or her address and telephone: "
  }
  if (elementary === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-elementary').innerHTML = "<b style='color: red'>Elementary is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-elementary').innerHTML = "Elementary: "
  }
  if (egraduate === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-egraduate').innerHTML = "<b style='color: red'>Year Graduate is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-egraduate').innerHTML = "Year Graduate: "
  }
  if (highschool === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-highschool').innerHTML = "<b style='color: red'>High School is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-highschool').innerHTML = "High School: "
  }
  if (hgraduate === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-hgraduate').innerHTML = "<b style='color: red'>Year Graduate is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-hgraduate').innerHTML = "Year Graduate: "
  }
  if (college === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-college').innerHTML = "<b style='color: red'>College is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-college').innerHTML = "College: "
  }
  if (cgraduate === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-cgraduate').innerHTML = "<b style='color: red'>Year Graduate is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-cgraduate').innerHTML = "Year Graduate: "
  }
  if (degree === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-degree').innerHTML = "<b style='color: red'>Degree is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-degree').innerHTML = "Degree: "
  }
  if (specialSkill === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-special-skill').innerHTML = "<b style='color: red'>Special Skills is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-special-skill').innerHTML = "Spcial Skills: "
  }
  if (cm1 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-cm1').innerHTML = "<b style='color: red'>Company is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-cm1').innerHTML = "Company: "
  }
  if (position1 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-position1').innerHTML = "<b style='color: red'>Position is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-position1').innerHTML = "Position: "
  }
  if (from1 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-from1').innerHTML = "<b style='color: red'>From is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-from1').innerHTML = "From: "
  }
  if (to1 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-to1').innerHTML = "<b style='color: red'>To is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-to1').innerHTML = "From: "
  }
  if (cm2 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-cm2').innerHTML = "<b style='color: red'>Company is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-cm2').innerHTML = "Company: "
  }
  if (position2 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-position2').innerHTML = "<b style='color: red'>Position is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-position2').innerHTML = "Position: "
  }
  if (from2 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-from2').innerHTML = "<b style='color: red'>From is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-from2').innerHTML = "From: "
  }
  if (to2 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-to2').innerHTML = "<b style='color: red'>To is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-to2').innerHTML = "From: "
  }

  if (crname === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-crname').innerHTML = "<b style='color: red'>Name is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-crname').innerHTML = "Name: "
  }
  if (crcompany === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-crcompany').innerHTML = "<b style='color: red'>Company is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-crcompany').innerHTML = "Company: "
  }
  if (crposition === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-crposition').innerHTML = "<b style='color: red'>Position is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-crposition').innerHTML = "Position: "
  }
  if (crcontact === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-crcontact').innerHTML = "<b style='color: red'>Contact No. is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-crcontact').innerHTML = "Contact No.: "
  }
  if (crname2 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-crname2').innerHTML = "<b style='color: red'>Name is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-crname2').innerHTML = "Name: "
  }
  if (crcompany2 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-crcompany2').innerHTML = "<b style='color: red'>Company is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-crcompany2').innerHTML = "Company: "
  }
  if (crposition2 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-crposition2').innerHTML = "<b style='color: red'>Position is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-crposition2').innerHTML = "Position: "
  }
  if (crcontact2 === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-crcontact2').innerHTML = "<b style='color: red'>Contact No. is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-crcontact2').innerHTML = "Contact No.: "
  }
  if (resCert === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-resCert').innerHTML = "<b style='color: red'>Res. Cert. No. is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-resCert').innerHTML = "Res. Cert. No.: "
  }
  if (issuedAt === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-issuedAt').innerHTML = "<b style='color: red'>Issued at is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-issuedAt').innerHTML = "Issued at: "
  }
  if (issuedOn === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-issuedOn').innerHTML = "<b style='color: red'>Issued on is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-issuedOn').innerHTML = "Issued on: "
  }
  if (sss === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-sss').innerHTML = "<b style='color: red'>SSS is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-sss').innerHTML = "SSS: "
  }
  if (tin === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-tin').innerHTML = "<b style='color: red'>TIN is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-tin').innerHTML = "TIN: "
  }
  if (nbi === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-nbi').innerHTML = "<b style='color: red'>NBI NO. is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-nbi').innerHTML = "NBI NO.: "
  }
  if (passport === "") {
    document.getElementById('submit-error').innerHTML = "<b style='color: red'> Fill all the fields! </b>"
    document.getElementById('js-passport').innerHTML = "<b style='color: red'>Passport is required! </b>"
    event.preventDefault(event);
  } else {
    document.getElementById('js-passport').innerHTML = "Passport: "
  }
}

