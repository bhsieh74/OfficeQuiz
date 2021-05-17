<html>

  <head>
      <title>Which "The Office" Character Are You?</title>
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
        body {
            color: white;
            background-color: black;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.6rem;
            overflow: hidden;

        }
        #title {
          margin-top: 2%;
            text-align: center;
        }
        #office {
          position: absolute;
          top: 0;
          right: 0;
          width: 400;
          height: 200;
        }
        .headshot {
          width: 200px;
          height: 200px;
        }
        #getstarted {
          margin: auto;
          width: 1530px;
          display: grid;
          grid-template-columns: repeat(7, 1fr);
          grid-template-rows: repeat(3, 1fr);
          grid-row-gap: 0px;
          grid-column-gap: 0;
          justify-content: center;
        }
        .buttondiv{
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          height: 200px;
          border: green;
        }
        #start {
          width: 100px;
          height: 30px;
        }
        #button {
          width: 150px;
          height: 50px;
        }
        .hidden {
          display: none;
        }
        .fade-in {
                animation: fadeIn ease 3s;
        }
        @keyframes fadeIn {
           0% {opacity:0;}
          100% {opacity:1;}
        }

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
        #result, a {
              margin: auto;
              text-align: center;
              width: 600;
              height: 720;
              border: 1px solid white;
              font-family: 'Montserrat', sans-serif;
        }
        img {
          transition: all 500ms;
          border-radius: 50%;
        }
        img:hover {
          transform: scale(1.08);
        }
        .transition {
          transition: all 500ms;
        }
        h6 {
          margin-left: 78px;
          margin-top: 5px;
          margin-bottom: 5px;
          transition: all 500ms;
        }
        .long {
          margin-left: 68px;
        }
        .short {
          margin-left: 85px;
        }
        
    </style>

  </head>


  <body>
      <?php

        if ($_GET['blank']) {
            echo '<script>alert("Please make sure you have selected an answer for all choices.")</script>'; 
        }
        ?> 
    <h1 id="title">Which "The Office" character are you?</h1>
    <hr>
    <div id="firstpanel" class="fade-in">
      <div id="getstarted">
          <div class='transition'>
          <img class='headshot' src="images/creedface.jpg">
          <h6>Creed</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/jimface.jpeg">
          <h6 class='short'>Jim</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/darrylface.jpg">
          <h6>Darryl</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/meredithface.jpg">
          <h6 class="long">Meredith</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/gabeface.jpg">
          <h6>Gabe</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/janface.jpg">
          <h6 class='short'>Jan</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/andyface.jpg">
          <h6>Andy</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/dwightface.jpg">
          <h6>Dwight</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/stanleyface.jpg">
          <h6 class='long'>Stanley</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/pamface.png">
          <h6>Pam</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/michaelface.png">
          <h6 class='long'>Michael</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/angelaface.webp">
          <h6>Angela</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/ryanface.jpg">
          <h6>Ryan</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/kellyface.jpg">
          <h6>Kelly</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/davidface.webp">
          <h6>David</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/erinface.jpg">
          <h6 class='short'>Erin</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/tobyface.jpg">
          <h6>Toby</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/kevinface.jpg">
          <h6>Kevin</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/hollyface.jpg">
          <h6>Holly</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/oscarface.jpg">
          <h6>Oscar</h6>
          </div>
          <div class='transition'>
          <img class='headshot' src="images/phyllisface.webp">
          <h6 class='long'>Phyllis</h6>
          </div>
      </div>
      <div class="buttondiv">
          <label id="label" for="name">Enter Your Name Below:</label>

          <textarea id="name" name="name" rows="2" cols="20"></textarea>
        <button id="start">Get Started</button>
      </div>
      </div>
    <div id="questions" class="hidden">
      <form action="processresults.php" method="GET">

        What best describes your typical workday?
        <select id='workday' name="workday">
          <option value="blank">Select an option</option>
          <option value="distract">Distracting my co-workers from doing their job</option>
          <option value="time">Counting down the time until I can go home</option>
          <option value="job">Actually doing my job</option>
          <option value="slack">Flirting with a co-worker</option>

        </select>
          <br>
          <br>


          Where do you see yourself in 10 years?
        <select id='dreamjob' name="dreamjob">
        <option value="blank">Select an option</option>
          <option value="artist">Professional Artist</option>
          <option value="sports">Sports Manager</option>
          <option value="millionaire">Retired and a millionaire</option>
          <option value="manager">Managing a company</option>
          <option value="celeb">Famous celebrity</option>
          <option value="none">None of the above</option>

        </select>
        <br>
        <br>

        Where do you want to live?
        <select id='live' name="live">
        <option value="blank">Select an option</option>

          <option value="nyc">New York City</option>
          <option value="maine">Maine</option>
          <option value="florida">Tallahassee</option>
          <option value="farm">A rural area</option>
          <option value="la">Los Angeles</option>
          <option value="scranton">Scranton, PA</option>


        </select>
        <br>
        <br>

        How will you probably die?
        <select id='death' name="death">
        <option value="blank">Select an option</option>

          <option value="never">I will never die</option>
          <option value="heart">Heart Attack</option>
          <option value="jump">Jumping onto a bouncy castle</option>
          <option value="attacked">Attacked by a co-worker</option>
          <option value="animal">Attacked by an animal</option>
          <option value="fire">Fire accident</option>
        </select>
        <br>
        <br>
        What is your opinion on love?
        <select id='love' name="love">
        <option value="blank">Select an option</option>

          <option value="marry">I am dating/married and loyal</option>
          <option value="single">Single and ready to mingle</option>
          <option value="dumb">Love is stupid</option>
          <option value="nope">Not interested in a relationship at this time</option>
          <option value="many">I can have as many partners as I want</option>
        </select>
        <br>
        <br>
        <div class="buttondiv">
          <button id="button">What character am I?</button>
      </div>
      </form>
        <hr>
      </div>

  </body>
    <script>
        
        let getstarted = document.getElementById('start');
        let firstpanel = document.getElementById('firstpanel');
        let questions = document.getElementById('questions');
        getstarted.onclick = function() {
          let name = document.getElementById("name");
          if (name.value == "") {
            alert("Please enter your name.");
            return;
          }
          else {
            document.cookie = "name=" + name.value;
            firstpanel.classList.add('hidden');
            questions.classList.remove('hidden');
          }

        }
        let images = document.querySelectorAll('.transition');
        let names = document.querySelectorAll('h6');
        function changeOpacity(x) {
            images[0].style.opacity = '0.5';
            images[1].style.opacity = '0.5';
            images[2].style.opacity = '0.5';
            images[3].style.opacity = '0.5';
            images[4].style.opacity = '0.5';
            images[5].style.opacity = '0.5';
            images[6].style.opacity = '0.5';
            images[7].style.opacity = '0.5';
            images[8].style.opacity = '0.5';
            images[9].style.opacity = '0.5';
            images[10].style.opacity = '0.5';
            images[11].style.opacity = '0.5';
            images[12].style.opacity = '0.5';
            images[13].style.opacity = '0.5';
            images[14].style.opacity = '0.5';
            images[15].style.opacity = '0.5';
            images[16].style.opacity = '0.5';
            images[17].style.opacity = '0.5';
            images[18].style.opacity = '0.5';
            images[19].style.opacity = '0.5';
            images[20].style.opacity = '0.5';
            this.style.opacity = '1';
            
        }

        function resetOpacity() {
            images[0].style.opacity = '1';
            images[1].style.opacity = '1';
            images[2].style.opacity = '1';
            images[3].style.opacity = '1';
            images[4].style.opacity = '1';
            images[5].style.opacity = '1';
            images[6].style.opacity = '1';
            images[7].style.opacity = '1';
            images[8].style.opacity = '1';
            images[9].style.opacity = '1';
            images[10].style.opacity = '1';
            images[11].style.opacity = '1';
            images[12].style.opacity = '1';
            images[13].style.opacity = '1';
            images[14].style.opacity = '1';
            images[15].style.opacity = '1';
            images[16].style.opacity = '1';
            images[17].style.opacity = '1';
            images[18].style.opacity = '1';
            images[19].style.opacity = '1';
            images[20].style.opacity = '1';
            names[0].style.opacity = '1';
            names[1].style.opacity = '1';
            names[2].style.opacity = '1';
            names[3].style.opacity = '1';
            names[4].style.opacity = '1';
            names[5].style.opacity = '1';
            names[6].style.opacity = '1';
            names[7].style.opacity = '1';
            names[8].style.opacity = '1';
            names[9].style.opacity = '1';
            names[10].style.opacity = '1';
            names[11].style.opacity = '1';
            names[12].style.opacity = '1';
            names[13].style.opacity = '1';
            names[14].style.opacity = '1';
            names[15].style.opacity = '1';
            names[16].style.opacity = '1';
            names[17].style.opacity = '1';
            names[18].style.opacity = '1';
            names[19].style.opacity = '1';
            names[20].style.opacity = '1';

        }
        images[0].addEventListener('mouseover', changeOpacity);
        images[1].addEventListener('mouseover', changeOpacity);
        images[2].addEventListener('mouseover', changeOpacity);
        images[3].addEventListener('mouseover', changeOpacity);
        images[4].addEventListener('mouseover', changeOpacity);
        images[5].addEventListener('mouseover', changeOpacity);
        images[6].addEventListener('mouseover', changeOpacity);
        images[7].addEventListener('mouseover', changeOpacity);
        images[8].addEventListener('mouseover', changeOpacity);
        images[9].addEventListener('mouseover', changeOpacity);
        images[10].addEventListener('mouseover', changeOpacity);
        images[11].addEventListener('mouseover', changeOpacity);
        images[12].addEventListener('mouseover', changeOpacity);
        images[13].addEventListener('mouseover', changeOpacity);
        images[14].addEventListener('mouseover', changeOpacity);
        images[15].addEventListener('mouseover', changeOpacity);
        images[16].addEventListener('mouseover', changeOpacity);
        images[17].addEventListener('mouseover', changeOpacity);
        images[18].addEventListener('mouseover', changeOpacity);
        images[19].addEventListener('mouseover', changeOpacity);
        images[20].addEventListener('mouseover', changeOpacity);

        images[0].addEventListener('mouseout', resetOpacity);
        images[1].addEventListener('mouseout', resetOpacity);
        images[2].addEventListener('mouseout', resetOpacity);
        images[3].addEventListener('mouseout', resetOpacity);
        images[4].addEventListener('mouseout', resetOpacity);
        images[5].addEventListener('mouseout', resetOpacity);
        images[6].addEventListener('mouseout', resetOpacity);
        images[7].addEventListener('mouseout', resetOpacity);
        images[8].addEventListener('mouseout', resetOpacity);
        images[9].addEventListener('mouseout', resetOpacity);
        images[10].addEventListener('mouseout', resetOpacity);
        images[11].addEventListener('mouseout', resetOpacity);
        images[12].addEventListener('mouseout', resetOpacity);
        images[13].addEventListener('mouseout', resetOpacity);
        images[14].addEventListener('mouseout', resetOpacity);
        images[15].addEventListener('mouseout', resetOpacity);
        images[16].addEventListener('mouseout', resetOpacity);
        images[17].addEventListener('mouseout', resetOpacity);
        images[18].addEventListener('mouseout', resetOpacity);
        images[19].addEventListener('mouseout', resetOpacity);
        images[20].addEventListener('mouseout', resetOpacity);


        </script>


</html>
