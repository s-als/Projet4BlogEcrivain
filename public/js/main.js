// Navbar turn white on scroll
/*
const navbar = document.getElementById("nav");
window.onscroll = () => {
    if (window.scrollY > 100) {
        navbar.classList.add("navbar-shrink");
    } else {
        navbar.classList.remove("navbar-shrink");
    }
};
*/


// Smooth Scrolling
const links = document.querySelectorAll('#nav a');
links.forEach(
    element => element.addEventListener('click', function () {
        scrollTo(document.querySelector(element.hash).offsetTop, 1450);
    }));

const scrollTo = function (to, duration) {
    const
        element = document.scrollingElement || document.documentElement,
        start = element.scrollTop;
    //console.log('element.scrollTop:' + element.scrollTop);
    const
        change = to - start,
        startDate = +new Date(),
        // t = current time
        // b = start value
        // c = change in value
        // d = duration
        easeInOutExpo = function (t, b, c, d) {
            t /= d / 2;
            if (t < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
            t--;
            return c / 2 * (-Math.pow(2, -10 * t) + 2) + b;
        },
        animateScroll = function () {
            const currentDate = +new Date();
            //console.log('currentDate:' + currentDate);
            const currentTime = currentDate - startDate;
            //console.log('startDate:' + startDate);
            //console.log('currentTime:' + currentTime);
            element.scrollTop = parseInt(easeInOutExpo(currentTime, start, change, duration));
            //console.log('easeInOutExpo:' + easeInOutExpo(currentTime, start, change, duration));
            //console.log('New element.scrollTop:' + element.scrollTop);
            if (currentTime < duration) {
                requestAnimationFrame(animateScroll);
            } else {
                element.scrollTop = to;
            }
        };
    animateScroll();
};




// Back To Top Button
const mybutton = document.getElementById("BackToTopBtn");

window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}



// Navbar with beatiful tabs
function beautifulTabs() {
    var tabsNewAnim = $('#navbarSupportedContent');
    //var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
    var activeItemNewAnim = tabsNewAnim.find('.active');
    var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
    var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
    var itemPosNewAnimTop = activeItemNewAnim.position();
    var itemPosNewAnimLeft = activeItemNewAnim.position();

    $(".hori-selector").css({
        "top": itemPosNewAnimTop.top + "px",
        "left": itemPosNewAnimLeft.left + "px",
        "height": activeWidthNewAnimHeight + "px",
        "width": activeWidthNewAnimWidth + "px"
    });

    $("#navbarSupportedContent").on("click", "li", function (e) {
        $('#navbarSupportedContent ul li').removeClass("active");
        $(this).addClass('active');
        var activeWidthNewAnimHeight = $(this).innerHeight();
        var activeWidthNewAnimWidth = $(this).innerWidth();
        var itemPosNewAnimTop = $(this).position();
        var itemPosNewAnimLeft = $(this).position();
        $(".hori-selector").css({
            "top": itemPosNewAnimTop.top + "px",
            "left": itemPosNewAnimLeft.left + "px",
            "height": activeWidthNewAnimHeight + "px",
            "width": activeWidthNewAnimWidth + "px"
        });
    });
}

$(document).ready(function () {
    setTimeout(function () {
        beautifulTabs();
    });
});

$(window).on('resize', function () {
    setTimeout(function () {
        beautifulTabs();
    }, 500);
});

$(".navbar-toggler").click(function () {
    setTimeout(function () {
        beautifulTabs();
    });
});



//Animation on validation or on suppression of a comment in admin gestion page
/*
function validCom(id) {
  //let idCom = `comRow${id}`;
  alert(`Commentaire validé`)
  //document.getElementById(idCom).style.display = 'none';
  document.getElementById(`validFlagComment${id}`).innerHTML = "Commentaire validé !<i class='bi bi-check'>";
  document.getElementById(`validFlagComment${id}`).style.backgroundColor = 'green';
};
*/

//Change row content onclick with a smooth transition when validate or delete a comment:
function validCom(id, chapter) {
    const commentary = new Commentary(id, chapter);
    commentary.validCom();
}

function deleteCom(id, chapter) {
    const commentary = new Commentary(id, chapter);
    commentary.deleteCom();
}




/*function deleteCom(id) {
  confirm('Attention vous vous apprêtez à supprimer un commentaire. Continuer ?');
  let idCom = `comRow${id}`;
  let comRow = document.getElementById(idCom);
  let btnDelete = document.getElementById(`deleteFlagComment${id}`);
  //let comBtnsCell = document.getElementById(`comBtnsCell${id}`);

  btnDelete.innerHTML = "En cours de suppression...";
  btnDelete.style.backgroundColor = 'grey';
  comRow.classList.add('transitionOneLinear');
  comRow.classList.add('visuallyhidden');

  comRow.addEventListener('transitionend', function(e) {
	setTimeout(function () {
    //comBtnsCell.innerHTML = 'Commentaire supprimé<i class="bi bi-check"></i>';
    comRow.innerHTML = "<td class='comRowTd' colspan='5'>Commentaire supprimé<i class='bi bi-check'></i></td>";
    comRow.classList.remove('visuallyhidden');
		//comRow.classList.add('hidden');
		//alert('Commentaire supprimé.');
    }, 2000);
    }, {
      capture: false,
      once: true,
      passive: false
    });
};*/


// A faire en pure JS
//Displaying character count of textarea
/*$('#comment').keyup(function() {
    
    var characterCount = $(this).val().length,
        current = $('#current'),
        maximum = $('#maximum'),
        theCount = $('#the-count');
      
    current.text(characterCount);
    
    if (characterCount < 70) {
      current.css('color', '#666');
    }
    if (characterCount > 70 && characterCount < 90) {
      current.css('color', '#6d5555');
    }
    if (characterCount > 90 && characterCount < 100) {
      current.css('color', '#793535');
    }
    if (characterCount > 100 && characterCount < 120) {
      current.css('color', '#841c1c');
    }
    if (characterCount > 120 && characterCount < 139) {
      current.css('color', '#8f0001');
    }
    
    if (characterCount >= 140) {
      maximum.css('color', '#8f0001');
      current.css('color', '#8f0001');
      theCount.css('font-weight','bold');
    } else {
      maximum.css('color','#666');
      theCount.css('font-weight','normal');
    }
    
        
  }); 

var maxchar = 300;
var i = document.getElementById("commentText");
var c = document.getElementById("remainText");
c.innerHTML = maxchar;

i.addEventListener("keydown", count);

function count(e) {
  var len = i.value.length;
  len >= maxchar ? i.value = i.value.slice(0,len-1) : c.innerHTML = maxchar - len - 1;
}
*/