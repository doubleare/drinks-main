$('.slider__wrapper').slick({
    prevArrow:'<button class="slider-arrows slider-arrows__left"> prev</button>',
    nextArrow: '<button class="slider-arrows slider-arrows__right"> next</button>',
})
$('.review__slider').slick({
    arrows: false,
    dots: true,
    
})
$('.offer__slider').slick({
    arrows: false,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    centerMode: true,
    centerPadding: '-30px',
    infinite: true,
    responsive: [
        {
          breakpoint: 970,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode: false,
            centerMode: true,
          }
        },
        {
          breakpoint: 800,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: false,
          }
        },
    ]

});
$('.Events__slider').slick({
    prevArrow: '<img class="slider-arrows slider-arrows__eventsprev"  src="img/Events-prev.png" alt=""></img>',
    nextArrow: '<img class="slider-arrows slider-arrows__eventnext" src="img/Events-next.png" alt=""></img>',
    responsive: [
        {
          breakpoint: 1340,
          settings: {
         arrows:false,
         dots: true,
          }
        },
    ]
})

$('.contact__input').on('input', function(){
  var $this = $(this);
  if ($this.val() == '') {
      $this.removeClass('contact__input_filled');
  } else {
      $this.addClass('contact__input_filled');
  }
});


function app(){
   const buttons = document.querySelectorAll('.Products__link');
   const cards =  document.querySelectorAll('.Products__card')
   function fiter(category, items){
    items.forEach((item) =>{
           const isItemFiltired =  !item.classList.contains(category);
           const isShowAll = category.toLowerCase() === 'all';

           if(isItemFiltired && !isShowAll){
              item.classList.add('hide')
           } else{
              item.classList.remove('hide')
           }
    });
   }

    
    buttons.forEach((button) => {
        button.addEventListener('click', () =>{
            const currenCategory = button.dataset.filter
            fiter(currenCategory,cards)
        });
    })
} 

app();


let burger = document.querySelector('.burger-menu');
let hr = document.querySelector('.header__hr');
let botul = document.querySelector('.header__bot-ul');

burger.addEventListener('click', function(){
    burger.classList.toggle('is-active'); 
    hr.classList.toggle('is-active');
    botul.classList.toggle('is-active');
});


let btn = document.querySelector('.popup-msg');
let pop = document.querySelector('.popup');
let btn2 = document.querySelector('.popup-msg1');
let btnClose = document.querySelector('.popup-btn.btn-close');
const body = document.querySelector('body');

btn.addEventListener('click', function() {
    pop.classList.add('open')
    body.classList.add('hidden')
});
btn2.addEventListener('click', function() {
    pop.classList.add('open')
    body.classList.add('hidden')
});
btnClose.addEventListener('click', function() {
    pop.classList.remove('open')
    body.classList.remove('hidden')
});