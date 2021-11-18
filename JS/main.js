

$(document).ready(function(){
      $('.slide-inner').slick({
        variableWidth: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
        speed: 3000,
      });
    });

const sidebar = document.getElementById("sidebar");
const hamburger = document.getElementById("hamburger");
const topContainer = document.getElementById("top_container");

hamburger.addEventListener('click', () => {
  sidebar.style.display = 'block';
  top_container.style.marginLeft = '-350px';
})
