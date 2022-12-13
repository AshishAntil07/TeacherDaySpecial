const height = screen.width<screen.height?screen.availHeight:window.innerHeight;
const mainElements = [...document.getElementsByClassName('main')];
const containerElements = document.getElementsByClassName('container');
const designElements = [...document.getElementsByClassName('design')];

for(let i=0; i<mainElements.length; i++){
  mainElements[i].style.minHeight = height+'px';
  mainElements[i].style.width = screen.availWidth+'px';
}
mainElements.forEach(elem => {elem.style.minHeight=height+'px';elem.style.width=screen.availWidth+'px'});
designElements.forEach(elem => elem.style.height=height+'px');

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
  ['over', 'out'].forEach(e=>document.querySelector('.contAchieve').children[z].addEventListener(`mouse${e}`, ev=>document.querySelector('.contAchieve').children[z].style.filter=`brightness(${100-(e==='over'?0:5)}%)`));
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
    const top = document.documentElement.scrollTop;
    if(top >= height/2 && top <= height + height/2 && !contentDone[0]){
      lineTyper(description, contentElements[0]);
      contentDone.splice(0, 1, true);
    }
    if(top >= height + height/2 && top <= height*2 + height/2 && !contentDone[1]){
      [0,1].forEach(ind=>lineTyper(education[ind], contentElements[ind+1]))
      contentDone.splice(1, 1, true);
    }
    if(top >= height*2 + height/2 && !contentDone[2]){
      [0,1,2,3,4].forEach(ind => lineTyper(achievements[ind], contentElements[ind+3]));
      contentDone.splice(2, 1, true);
    }
  }

  document.addEventListener('scroll', animate);
}else{
  let k=1;
  lineTyper(description, contentElements[0]);

  for(let l=0 ;l<education.length; k++, l++) lineTyper(education[l], contentElements[k])

  for(let m=0;m<achievements.length; k++, m++) lineTyper(achievements[m], contentElements[k])
}
