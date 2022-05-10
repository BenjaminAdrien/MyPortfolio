const sections = document.querySelectorAll('.section');
const sectBtns = document.querySelectorAll('.controls');
const sectBtn = document.querySelectorAll('.control');
const allSections = document.querySelector('.main-content');
const submitBtn = document.querySelector('.submit-btn');
const successTxt = document.querySelectorAll('.php');
submitted = false;
// window.name = "false";
// sessionStorage.setItem('sub', submitted);


function ContactOnMail() {
  submitBtn.addEventListener('click', () =>{
    successTxt.forEach(txt => {if (txt.textContent.includes('Message')) {
      window.name = "true";
      // sessionStorage.setItem('sub', submitted);
      sections.forEach((section) => {
        section.classList.remove('active')
      })
      document.getElementById('contact').classList.add('active');
      sectBtn.forEach((btn) => {
        btn.classList.remove('active-btn')
      })
      sectBtn[4].className += ' active-btn';
    }})
  } )
}

function PageTransitions() {
  console.log(window.name);
  if (window.name == "true") {
    sections.forEach((section) => {
      section.classList.remove('active')
    })
    document.getElementById('contact').classList.add('active');
    sectBtn.forEach((btn) => {
      btn.classList.remove('active-btn')
    })
    sectBtn[4].className += ' active-btn';
  }
  //Button click active class
  for (let i = 0; i < sectBtn.length; i++) {
    sectBtn[i].addEventListener('click', function() {
      window.name = "false";
      // sessionStorage.setItem('sub', submitted);
      let currentBtn = document.querySelectorAll('.active-btn');
      currentBtn[0].className = currentBtn[0].className.replace(' active-btn', '');
      this.className += ' active-btn'; //the space before the class name is important
      // this.xxxx doesn't exists in arrow function
    })
  }

  //section Active Class
  allSections.addEventListener('click', (e) =>{
    // sessionStorage.setItem('sub', submitted);
    const id = e.target.dataset.id;
    if (id) {
      //remove selected from the other btns
      // const btns = sectBtns[0].children;
      // for (let btn of btns){
      //     btn.classList.remove('active')
      // }
      // e.target.classList.add('active')

      //hide other sections
      sections.forEach((section) => {
        section.classList.remove('active')
      })

      const element = document.getElementById(id);
      element.classList.add('active');
    }
  })

  //toggle theme
  const themeBtn = document.querySelector('.theme-btn');
  themeBtn.addEventListener('click', () => {
    document.body.classList.toggle('light-mode')
  })
  ContactOnMail();
}



PageTransitions();
ContactOnMail();




