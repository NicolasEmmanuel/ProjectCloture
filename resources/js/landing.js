// Nav bar css 


const navbar = document.querySelector(".navbar");

navbar.querySelector(".toggle").addEventListener("click", () => {
  navbar.classList.toggle("collapsed");
});

window.addEventListener("scroll", e => {
  let windowY = window.pageYOffset;

  let navbarHeight = document.querySelector(".navbar").offsetHeight;

  if (windowY > navbarHeight) navbar.classList.add("sticky");else
  navbar.classList.remove("sticky");
});

// back ground

const colors = ['electricBlue', 'section1', 'section2', 'section3', 'section4']

const sections = [...document.getElementsByTagName('section')]
//const navbars = [...document.getElementsByClassName('navbar')]

window.addEventListener('scroll', function () {

  const scrollFromTop = window.pageYOffset

  for (let i = 0; sections.length > i; i++) {

    if (scrollFromTop <= sections[i].offsetTop) {
       // navbar.className += " "+colors[i] ;
        
      document.body.className = colors[i] ;
      break
    } 

  }

})
