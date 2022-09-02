<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Monika Tomar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="Main/Pictures/Monika%20Ma'am.png" type="image/x-icon">
    <style>
    *{
      margin: 0;
      padding: 0;
    }
    body{
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f6f3bc;
    }
    html{
      scroll-behavior: smooth;
      overflow-x: hidden;
    }

    /* Main */

    .navBar{
      height: 50px;
      background-color: #f6f3bcd8;
      position: fixed;
      z-index: 5;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .navBar h3{
      margin-left: 50px;
      font-weight: 500;
    }
    .navigator, .navigator section{
      display: flex;
    }
    .navigator section{
      margin-right: 20px;
    }
    .navigator{
      margin-right: 50px;
    }
    .series{
      margin-right: 2.5px;
      color:#5f461a
    }

    .main{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .main:first-child{
      flex-flow: row wrap;
    }
    .home{
      width: 570px;
      display: flex;  
      align-items: flex-end;
    }
    .details{
      transform: translate(0, -50%);
    }
    .name{
      font-size: 40px;
      line-height: 40px;
    }
    .pictureFrame{
      height: 200px;
      width: 200px;
      border-bottom: 3px solid #5f461a;
      border-radius: 50%;
      position: absolute;
      box-sizing: border-box;
      z-index: 2;
    }
    .pictureFrame:last-child{
      border: 3px solid #5f461a;
      border-bottom: none;
      z-index: 0;
    }
    .picture img{
      position: absolute;
      z-index: 1;
      transform: translate(0, 10%);
    }
    .picture{
      height: 300px;
      width: 200px;
      margin-right: 25px;
      display: flex;
      justify-content: center;
      transform: translate(0, 0);
      align-items: flex-end;
      border-radius: 300px;
      overflow: hidden;
    }
    .links{
      display: flex;
      align-items: center;
      margin-top: 10px;
    }
    .links a:first-child{
      margin-right: 50px;
    }
    a{
      color: black;
      text-decoration: none;
    }
    a::after{
      content: '';
      height: 2px;
      width: 0;
      background: #5f461a;
      display: block;
      transition: width .4s;
    }
    a:hover::after{
      width: 75%;
    }
    .links a::before{
      content: '>';
      font-family: 'consolas';
      color: #5f461a;
      display: block;
      position: absolute;
      transform: translate(550%, 1.5px);
      transition: margin .4s;
    }
    .links a:last-child::before{
      transform: translate(1200%, 1.5px);
    }
    .links a:hover::before{
      margin-left: 2.5px;
    }
    .main:nth-child(4), .main:nth-child(5), .main:nth-child(6){
      flex-flow: column nowrap;
      position: relative;
    }
    .container{
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      flex-flow: row wrap;
      margin-top: 100px;
      width: 100%;
    }
    .container section{
      box-sizing: border-box;
      min-height: 250px;
      min-width: 300px;
      margin-bottom: 20px;
      background: #e6e29e;
      border-radius: 5px;
      padding: 10px;
    }
    .container section h2{
      text-align: center;
    }
    h1{
      font-weight: 500;
    }
    h1[heading]::after{
      content: '';
      width: 50%;
      height: 3px;
      background: #5f461a;
      display: block;
      transform: translate(50%, 0);
      border-radius: 5px;
    }
    [heading]{
      font-family: consolas;
    }
    .content{
      padding: 15px;
      font-size: 17px;
      text-align: justify;
    }
    footer{
      height: 60px;
      display: flex;
      justify-content: space-around;
      position: relative;
      align-items: center;
    }
    footer .maker{
      display: flex;
    }

    /* Design */

    .design{
      position: absolute;
      width: 100%;
    }
    .d1 .major-square{
      height: 655px;
      width: 655px;
      z-index: -4;
      border-radius: 25px;
      border: 3px solid #cecb8f;
    }
    .d1 .major-square::after{
      content: '';
      width: 100%;
      height: 100%;
      display: block;
      border-radius: 25px;
      transform: translate(-50px, -50px);
      background: #a07121;
    }
    .d1 .major-square:first-child{
      transform: translate(50px, 50px) rotateZ(45deg);
    }
    .d1 .major-square:nth-child(2){
      transform: translate(75%, 200px) rotateZ(115deg);
    }
    .d1 .minor-square{
      height: 200px;
      width: 200px;
      z-index: -4;
      border-radius: 20px;
      border: 3px solid #cecb8f;
    }
    .d1 .minor-square::after{
      content: '';
      width: 100%;
      height: 100%;
      transform: translate(-25px, -25px);
      display: block;
      border-radius: 20px;
      border: 3px solid #a07121;
    }
    .d1 .minor-square:nth-child(3){
      transform: translate(100%, 100%) rotateZ(55deg);
    }
    .d1 .minor-square:nth-child(4){
      transform: translate(200%, 200%) rotateZ(125deg);
    }
    .d1 .minor-square:nth-child(5){
      transform: translate(50%, 400%) rotateZ(235deg);
    }
    .d1 .minor-square:nth-child(6){
      position: absolute;
      transform: rotateZ(300deg);
      right: 25%;
      margin-top: 300px;
    }

    /* Media queries */

    @media screen and (max-width: 570px) {
      .home{
        flex-flow: column nowrap;
        justify-content: center;
        width: 100%;
      }
      .details{
        margin-top: 50px;
        display: flex;
        align-items: center;
        flex-flow: column nowrap;
        width: 100%;
      }
      .picture{
        margin-right: 50%;
        transform: translate(50%, 0);
      }
    }
    @media screen and (max-width: 700px){
      .navBar h3{
        display: none;
      }
      .navigator{
        flex-flow: row wrap;
        justify-content: center;
        width: 100%;
        margin: 0;
      }

      footer{
        flex-flow: column nowrap;
      }
      .navigator section{
        margin: 0;
      }
      .navigator section:first-child, .navigator section:nth-child(2), .navigator section:nth-child(3){
        margin-right: 20px;
      }
    }
    @media screen and (max-width: 400px){
      .container section{
        max-width: 90%;
        min-width: 90%;
      }
    }
    </style>
  </head>
  <body>

    <div class="design d1">
      <div class="major-square"></div>
      <div class="major-square"></div>

      <div class="minor-square"></div>
      <div class="minor-square"></div>
      <div class="minor-square"></div>
      <div class="minor-square"></div>
    </div>

    <div class="navBar">
      <h3>Monika Tomar</h3>
      <div class="navigator">
        <section>
          <div class="series">01.</div>
          <a href="#Home">Home</a>
        </section>
        <section>
          <div class="series">02.</div>
          <a href="#About">About</a>
        </section>
        <section>
          <div class="series">03.</div>
          <a href="#Education">Education</a>
        </section>
        <section>
          <div class="series">04.</div>
          <a href="#Achievements">Achievements</a>
        </section>
      </div>
    </div>

    <div class="main" id='Home'>
      <div class="home">
        <div class="picture">
          <img src="Main/Pictures/Monika%20Ma'am.png" style='height:350px;width:250px;margin-right: 10px;' alt="Monika Tomar">
          <div class="pictureFrame"></div>
          <div class="pictureFrame"></div>
        </div>
        <div class="details">
          <div class="name">&nbsp;</div>
          <div class="description"></div>
          <div class="links">
            <a href="#About">About</a>
            <a href="#Achievements">Achievements</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="main" id='About'>
      <h1 heading>About</h1>
      <div class="container">
        <section>
          <div class="content"></div>
        </section>
      </div>
    </div>

    <div class="main" id='Education'>
      <h1 heading>Education</h1>
      <div class="container">
        <section>
          <h2 heading>Schooling</h2>
          <div class="content"></div>
        </section>
        <section>
          <h2 heading>Graduation</h2>
          <div class="content"></div>
        </section>
      </div>
    </div>

    <div class="main" id='achivmnts'>
      <h1 heading>Achievements</h1>
      <div class="container contAchieve">
        <section>
          <div class="content"></div>
        </section>
        <section>
          <div class="content"></div>
        </section>
        <section>
          <div class="content"></div>
        </section>
        <section>
          <div class="content"></div>
        </section>
        <section>
          <div class="content"></div>
        </section>
      </div>
    </div>

    <div style='position: relative;display: flex;justify-content: center;align-items: center;'><hr color='#5f461a' width='90%' noshadow></div>
    <footer id='Achievements'>
      <section class="maker">
        <div>Made with ❤ by&nbsp;</div>
        <a github href="https://github.com/AshishAntil07">Ashish</a>
      </section>
      <div class="navigator">
        <section>
          <a href="#Home">Home</a>
        </section>
        <section>
          <a href="#About">About</a>
        </section>
        <section>
          <a href="#Education_Status">Education</a>
        </section>
        <section>
          <a href="#Achievements">Achievements</a>
        </section>
      </div>
    </footer>
    
    <script>
      const height = screen.width<screen.height?screen.availHeight:window.innerHeight;
      const mainElements = document.getElementsByClassName('main');
      const containerElements = document.getElementsByClassName('container');
      const designElements = document.getElementsByClassName('design');

      for(let i=0; i<mainElements.length; i++){
        mainElements[i].style.minHeight = height+'px';
        mainElements[i].style.width = screen.availWidth+'px';
      }
      for(let z=0; z<designElements.length; z++){
        designElements[z].style.height = height+'px';
      }

      for(let j=0; j<containerElements.length-1; j++){
        for(let x=0; x<containerElements[j].children.length; x++){
          containerElements[j].children[x].style.width = containerElements[j].children[x].style.maxWidth = (parseInt(getComputedStyle(containerElements[j]).width.replace('px', ''))-400)/containerElements[j].children.length+'px';
        }
      }

      if(window.innerWidth <= 700){
        document.querySelector('#Achievements').id = '';
        document.querySelector('#achivmnts').id = 'Achievements';
      }

      for(let z = 0; z<document.querySelector('.contAchieve').children.length; z++){
        document.querySelector('.contAchieve').children[z].setAttribute('style', `
          height: 60px;
          max-height: 60px;
          min-height: 60px;
          margin: 10px;
          ${screen.width>screen.height?
            'max-width: 325px;min-width: 325px;'
            :''}
          display: flex;
          justify-content: center;
          align-items: center;
          padding: 0;
          cursor: default;
          filter: brightness(95%);
          transition: filter .4s;
        `)
        document.querySelector('.contAchieve').children[z].addEventListener('mouseover', e=>document.querySelector('.contAchieve').children[z].style.filter = 'brightness(100%)')
        document.querySelector('.contAchieve').children[z].addEventListener('mouseout', e=>document.querySelector('.contAchieve').children[z].style.filter = 'brightness(95%)')
      }

      const homeText = [
        'Monika Tomar', 
        'Lecturer at Tika Ram Model School', 
      ];

      const description = "I'm Monika Tomar, and I'm currently employed as a lecturer at Tika Ram Model School, Sonipat, Haryana. There, I teach Social Science and had taught French earlier. I am the Head of Amity House and also remained exam coordinator. I had also been a great student in my school. I remain joyful, active, and happy. I never become sad and don't let others be sad. I believe in simplicity. I'm very honest and punctual in my job. I am my own favorite and live my life on my own terms. I love children and they love me! You will know more about me in a few moments.";
      const education = [
        'Did my matriculation and post-matriculation from Rishikul affiliated with CBSE and Sambhu Dayal Modern School respectively.',
        'Got my MBA degree from Maharashi Dayanand University(MDU), YMCA from Cannaught Palace, and TTAH(Travel Tourism and Airport Handling).'
      ]
      const achievements = [
        'House Head',
        'Examination Coordinator',
        'CTET',
        'HTET',
        'Qualified Assistant Suptt.'
      ]

      const contentElements = document.querySelectorAll('.content');

      if(screen.width < screen.height){
        document.querySelector('.navBar').style.width = screen.availWidth+'px';
        document.querySelector('.design').children[1].classList.remove('major-square');
        document.querySelector('.design').children[1].style.height = '655px';
      };

      function lineTyper(line, elem){
        const length = line.length;
        const charInterval = setInterval(() => {
          elem.innerHTML = elem.innerHTML.replace('&nbsp;', '');
          if(!line[0]){
            clearInterval(charInterval)
          }else{
            elem.innerHTML += line[0];
            line = line.slice(1, line.length);
          }
        }, (1/(((length/0.1)*5)/60))*1000);
      }
      lineTyper(homeText[0], document.querySelector('.name'));
      lineTyper(homeText[1], document.querySelector('.description'))


      if(screen.width > screen.height){
        let contentDone = [false, false, false];

        const animate = () => {
          console.log('fired');
          const top = document.documentElement.scrollTop;
          if(top >= height/2 && top <= height + height/2 && !contentDone[0]){
            lineTyper(description, contentElements[0]);
            contentDone.splice(0, 1, true);
          }
          if(top >= height + height/2 && top <= height*2 + height/2 && !contentDone[1]){
            lineTyper(education[0], contentElements[1]);
            lineTyper(education[1], contentElements[2]);
            contentDone.splice(1, 1, true);
          }
          if(top >= height*2 + height/2 && !contentDone[2]){
            lineTyper(achievements[0], contentElements[3]);
            lineTyper(achievements[1], contentElements[4]);
            lineTyper(achievements[2], contentElements[5]);
            lineTyper(achievements[3], contentElements[6]);
            lineTyper(achievements[4], contentElements[7]);
            contentDone.splice(2, 1, true);
          }
        }

        document.addEventListener('scroll', animate);
      }else{
        let k=1;
        lineTyper(description, contentElements[0]);
        for(let l=0 ;l<education.length; k++, l++){
          lineTyper(education[l], contentElements[k]);
        }
        for(let m=0;m<achievements.length; k++, m++){
          lineTyper(achievements[m], contentElements[k]);
        }
      }
    </script>
  </body>
</html>
