const height = screen.width<screen.height?screen.availHeight:window.innerHeight;
const mainElements = document.getElementsByClassName('main');
const containerElements = document.getElementsByClassName('container');
const designElements = document.getElementsByClassName('design');

for(let i=0; i<mainElements.length; i++){
  mainElements[i].style.minHeight = height+'px';
}
for(let z=0; z<designElements.length; z++){
  designElements[z].style.height = height+'px';
}

for(let j=0; j<containerElements.length; j++){
  for(let x=0; x<containerElements[j].children.length; x++){
    containerElements[j].children[x].style.width = (parseInt(getComputedStyle(containerElements[j]).width.replace('px', ''))-400)/containerElements[j].children.length+'px';
  }
}

if(window.innerWidth <= 700){
  document.querySelector('#Achievements').id = '';
  document.querySelector('#achivmnts').id = 'Achievements';
}

const texts = ['Ashish Antil', 'An experienced Programmer at Microsoft.', "I'm Ashish Antil, a part time programmer.", 'Schooled at Tika Ram Model School', 'Not graduated till now.', 'hello world galkne;', 'asjg;aioehagf', 'g;aliehja;lgjhdea'];
const contentElements = document.querySelectorAll('.content');

screen.width < screen.height?document.querySelector('.navBar').style.width = screen.width+'px':0;

function lineTyper(line, elem){
  const charInterval = setInterval(() => {
    elem.innerHTML = elem.innerHTML.replace('&nbsp;', '');
    if(!line[0]){
      clearInterval(charInterval)
    }else{
      elem.innerHTML += line[0];
      line = line.slice(1, line.length);
    }
  }, (1/(((line.length/0.1)*5)/60))*1000);
}
lineTyper(texts[0], document.querySelector('.name'));
lineTyper(texts[1], document.querySelector('.description'))

let contentDone = [false, false, false];

const animate = () => {
  const top = document.documentElement.scrollTop;
  if(top >= height/2 && top <= height + height/2 && !contentDone[0]){
    lineTyper(texts[2], contentElements[0]);
    contentDone.splice(0, 1, true);
  }
  if(top >= height + height/2 && top <= height*2 + height/2 && !contentDone[1]){
    lineTyper(texts[3], contentElements[1]);
    lineTyper(texts[4], contentElements[2]);
    contentDone.splice(1, 1, true);
  }
  if(top >= height*2 + height/2 && !contentDone[2]){
    lineTyper(texts[5], contentElements[3]);
    lineTyper(texts[6], contentElements[4]);
    lineTyper(texts[7], contentElements[5]);
    contentDone.splice(2, 1, true);
  }
}

document.addEventListener('scroll', animate);
