<?php
  //variables for the header mwehehe
  $name = "Chris Joshua Fernandez";
  $job = "Aspiring Software Engineer";
  $phone = "09929579473";
  $address = "Nibaliw Sur, Bautista, Pangasinan";
  $email = "22ur0729@psu.edu.ph";
  $bday = "January 30, 2003";
  $linkedin = "linkedin.com/in/chris-joshua-fernandez";
  $gender = "Male";
  $gitlab = "gitlab.com/Fernandez-CJj";
  $nationality = "Filipino";

  //variable for section 1
  $description = "Motivated Information Technology student at Pangasinan State University with a strong foundation in software development and mobile applications. Experienced in academic projects that involve coding, debugging, and beta testing apps. Passionate about creating efficient and user-friendly solutions, with a keen interest in improving everyday user experiences. Eager to apply my skills in real-world projects and contribute to the growth of innovative software companies.";

  //variables for section 2 
  $year1 = "2016-2021";
  $diploma = "High School Diploma";
  $shs = "Internation Colleges for Excellence";
  $list1 = "Member, Journalist Club";
  $list2 = "Member, Youth Club";
  $list3 = "Journalist of the year";

  $year2 = "2022-present";
  $collegeDiploma = "Bachelor of Science in Information Technology";
  $college = "Pangasinan State University";
  $list4 = "Designing UI and UX";
  $list5 = "Develop Mobile Application";
  $list6 = "Develop Website";

  //variables for section 3
  $year3 = "June 2022";
  $year3_2 = "-present";
  $freelance = "Aspiring Software Engineer";
  $company = "N/A";
  $list7 = "Created a prototype for deaf users that allow the non-deaf user to learn sign language in their own";
  $list8 = "Created a prototype for organizer and talents that allow them to discover talents and events on their own";
  $list9 = "Created a website for finding restaurants in the province of Tarlac";

  //variables for section 4
  $skill1 = "C++, C#, Java";
  $skill2 = "HTML, CSS, Javascript, php";
  $skill3 = "Dart, Flutter, mySQL";
  $skill4 = "Figma";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resume</title>

  <style>
    body{
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #efefefff;
    }
    .resume-border {
      background: white;              
      padding: 10px;                   
      max-width: 1200px;               
      margin: 40px auto;               
      border-radius: 10px;            
      box-shadow: 0 8px 20px rgba(0,0,0,0.15); 
    }
    .header-container{
      display: flex;
      align-items: center;
      margin: 20px auto;
      max-width: 1200px;
      width: 90%;
      padding: 20px;
      background-color: #0a75ad;
      color: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    .left-info img{
      width: 200px;
      height: 290px;
      border-radius: 2%;
      object-fit: cover;
      margin-right: 30px;
    }
    .right-info{
      display: flex;
      flex-direction: column;
      justify-content: center;
      flex: 1;
    }
     .right-top-content .name {
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 8px;
    }
    .right-top-content .job {
      font-size: 20px;
      font-style: italic;
      color: #dcdcdc; /* softer shade for job title */
    }
    .right-bottom-content{
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: repeat(4, auto);
      gap: 10px 30px;
      margin-top: 15px;
      font-size: 20px;
    }
    .right-bottom-content div{
      padding: 5px 10px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.4);
    }

     /*.right-bottom-content div{ 
    }
    */
    .main-body{
      margin: 20px auto;      
      max-width: 1200px;   
      width: 90%;             
      padding: 20px;   
      margin-top: -20px;       
    }
    .section-1{
      font-size: 20px;
      max-width: 980px; /* set a smaller width */
      margin: 0 auto;   /* centers it horizontally */
      line-height: 1.3;
      text-align: justify;
    }
    .section-2{
     margin-top: 10px;
    }
    .section-2-border {
    border-bottom: 2px solid #000;
    padding-bottom: 5px;
    }

    .section-2 h2 {
      display: inline-block;
      margin-left: 50px;
      margin-bottom: 0;    
      padding-bottom: 0;
      font-size: 30px;
      color: #0a75ad;
    }
    .education-item{
      display: flex;
      margin: 20px 0;
    }
    .year-container{
      width: 200px;
      font-weight: bold;
      font-size: 20px;
      color: #000000ff;
      margin-left: 50px;
    }
    .highschool-info-container{
      margin-left: 80px;
    }
    .diploma{
      font-size: 20px;
      font-weight: bold;
    }
    .shs-name{
      font-size: 20px;
    }
    .activities-container{
      margin-top: 20px;
      font-size: 20px;
    }
    .activities-container li{
      margin-left: 35px;
    }
    .college-info-container{
      margin-left: 80px;

    }
    .education-item-2{
      display: flex;
      margin-top: 30px;
    }
    .section-3{
     margin-top: 10px;
    }
    .section-3-border {
    border-bottom: 2px solid #000;
    padding-bottom: 5px;
    }

    .section-3 h2 {
      display: inline-block;
      margin-left: 50px;
      margin-bottom: 0;    
      padding-bottom: 0;
      font-size: 30px;
      color: #0a75ad;
    }
     .section-4{
     margin-top: 10px;
    }
    .section-4-border {
    border-bottom: 2px solid #000;
    padding-bottom: 5px;
    }

    .section-4 h2 {
      display: inline-block;
      margin-left: 50px;
      margin-bottom: 0;    
      padding-bottom: 0;
      font-size: 30px;
      color: #0a75ad;
    }
    .skills-container{
      font-size: 20px;
      margin-left: 370px;
    }
    li::marker{
      color: #0a75ad;
      font-size: 1.3em;
    }
    .experience-info-container{
      margin-left: 110px;
    }
    .forMargin{
      margin-left: 18px;
    }
  </style>
</head>
<body>
  <div class="resume-border">
    <!-- this is for header -->
    <div class="resume-holder">
      <div class="header-container">
        <div class="left-info">
          <img src="images/profile.jpeg">
        </div>
        <div class="right-info">
          <div class="right-top-content">
            <div class="name"><?=$name ?></div>
            <div class="job"><?=$job ?></div>
          </div>
          <div class="right-bottom-content">
            <div class="phone"><strong>Phone:</strong> <?=$phone ?></div>
            <div class="address"><strong>Address:</strong> <?=$address ?></div>
            <div class="email"><strong>Email:</strong> <?=$email ?></div>
            <div class="dob"><strong>Birthday:</strong> <?=$bday ?></div>
            <div class="linkedin"><strong>Linkedin:</strong> <?=$linkedin ?></div>
            <div class="gender"><strong>Gender:</strong> <?=$gender ?></div>
            <div class="gitlab"><strong>GitLab:</strong> <?=$gitlab ?></div>
            <div class="nationality"><strong>Nationality:</strong> <?=$nationality ?></div>
          </div>
        </div> 
      </div>

      <!-- this is for main content -->
      <div class="main-body">
        <div class="section-1"><?= $description?></div>
        <div class="section-2">
          <div class="section-2-border">
            <h2>Education</h2>
          </div>
          <div class="education-item">
            <div class="year-container">
              <div class="year"><?= $year1?></div>
            </div>
            <div class="highschool-info-container">
              <div class="diploma"><?= $diploma?></div>
              <div class="shs-name"><?= $shs?></div>
              <div class="activities-container">Activities:
                <li><?= $list1?></li>  
                <li><?= $list2?></li>
                <li><?= $list3?></li>
              </div>
            </div>
          </div>
          <div class="education-item-2">
            <div class="year-container">
              <div class="year"><?= $year2?></div>
            </div>
            <div class="college-info-container">
              <div class="diploma"><?= $collegeDiploma?></div>
              <div class="shs-name"><?= $college?></div>
              <div class="activities-container">Specialization:
                <li><?= $list4?></li>  
                <li><?= $list5?></li>
                <li><?= $list6?></li>
              </div>
            </div>
          </div>  
        </div>
        <div class="section-3">
          <div class="section-3-border">
            <h2>Experience</h2>
          </div>
          <div class="education-item">
            <div class="year-container">
              <div class="year"><?= $year3?><br><?= $year3_2?></div>
            </div>
            <div class="experience-info-container">
              <div class="forMargin">
              <div class="diploma"><?= $freelance?></div>
              <div class="shs-name"><?= $company?></div>
              </div>
              <div class="activities-container">
                <ul>
                  <li><?= $list7?></li>  
                  <li><?= $list8?></li>
                  <li><?= $list9?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="section-4">
          <div class="section-4-border">
            <h2>Skills</h2>
          </div>
          <div class="education-item">
              <div class="skills-container">
                <li><?= $skill1?></li>  
                <li><?= $skill2?></li>
                <li><?= $skill3?></li>
                <li><?= $skill4?></li>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

