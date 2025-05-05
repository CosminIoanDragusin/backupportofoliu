var typed = new Typed('#text',{
    strings:['Absolvent 2024', 'C# and .NET', 'Java and JavaFX', 'Web Development', 'Testare Manuala si Selenium'],
    typeSpeed:100,
    backSpeed:80,
    loop:true,
})

//JavaScript SHOW SKILLS Code

let skillBtn = document.querySelector('.skill_btn');
let skillDet = document.querySelector('.about_bottom');

skillBtn.addEventListener('click',() =>{
    skillDet.classList.toggle('show_skills');
});

//sticky nav code

let nav = document.querySelector('nav');

window.addEventListener('scroll', () =>{
    if(window.scrollY > 100){
        nav.classList.add('sticky_nav');
    }
    else{
        nav.classList.remove('sticky_nav');
    }
})

var swiper = new Swiper('.testSwiper',{
    slidesPerView:1,
    loop:true,
    autoplay:true,
})

// filters

var mixer = mixitup('.portfolios_images')

//blogs swiper slider

var blogSwiper = new Swiper('.blogSwiper',{
    slidesPerView:3,
    spaceBetween:30,
    loop:true,
    autoplay:true,
    breakpoints:{
        1200:{
            slidesPerView:2,
            spaceBetween:10,
        },
        900:{
            slidesPerView:1,
            spaceBetween:10,
        },
        500:{
            slidesPerView:1,
            spaceBetween:10,
        },
    }
});

//show nav

let bar = document.querySelector('.bars');
let menu = document.querySelector('.menu');

bar.addEventListener('click',() =>{
    menu.classList.toggle('show_nav');
});


var interestSwiper = new Swiper(".interestSwiper", {
    loop: true,
    autoplay: true,
    grabCursor: true,
    spaceBetween: 30,
    breakpoints: {
      568: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
    },
  });

