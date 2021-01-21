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
            const currentTime = currentDate - startDate;
            element.scrollTop = parseInt(easeInOutExpo(currentTime, start, change, duration));
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




//In admin page, change row content onclick with a smooth transition when validate or delete a comment:
function validCom(id, chapter) {
    const commentary = new Commentary(id, chapter);
    commentary.validCom();
}

function deleteCom(id, chapter) {
    const commentary = new Commentary(id, chapter);
    commentary.deleteCom();
}



//Displaying character count of textarea
$('#comment').keyup(function() {
    
    var characterCount = $(this).val().length,
        current = $('#current'),
        maximum = $('#maximum'),
        theCount = $('#the-count');
      
    current.text(characterCount);
    
    if (characterCount < 70) {
      current.css('color', '#666');
    }
    if (characterCount > 600 && characterCount < 800) {
      current.css('color', '#793535');
    }
    if (characterCount > 800 && characterCount < 900) {
      current.css('color', '#841c1c');
    }
    
    if (characterCount >= 900) {
      maximum.css('color', '#8f0001');
      current.css('color', '#8f0001');
      theCount.css('font-weight','bold');
    } else {
      maximum.css('color','#666');
      theCount.css('font-weight','normal');
    }
}); 
