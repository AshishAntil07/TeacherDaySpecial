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
  `)
}

const homeText = [
  'Monika Tomar', 
  'Lecturer at Tika Ram Model School', 
];

const description = "I'm Monika Tomar. I'm currently employed as a lecturer at Tika Ram Model School, Sonipat, Haryana. There, I teach Social Science, and had taught French earlier. I am the Head of the House and exam coordinator. I also had been a great student in my school. I believe in simplicity, honesty and transparency. I am my own favorite, and living my life at my own terms. I love children and they love me!";
const education = [
  'Did my matriculation and XII from CBSE Rishikul and Sambhu Dayal Modern School respectively.',
  'Graduated from Maharashi Dayanand University(MDU) with MBA, Cannaught Palace with YMCA, and TTAH(Travel Tourism and Airport Handling).'
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
