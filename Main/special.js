// const create = elem => document.createElement(elem);
const mainElements = document.getElementsByClassName('main');
const containerElements = document.getElementsByClassName('container');

for(let i=0; i<mainElements.length; i++){
  mainElements[i].style.height = window.innerHeight+'px';
}

for(let j=0; j<containerElements.length; j++){
  for(let x=0; x<containerElements[j].children.length; x++){
    containerElements[j].children[x].style.width = (parseInt(getComputedStyle(containerElements[j]).width.replace('px', ''))-400)/containerElements[j].children.length+'px';
  }
}