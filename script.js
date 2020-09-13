var projects = document.querySelectorAll('.project-example');


// console.log(projects);

projects.forEach((project, index) => {
    project.style.animation = `fade-in ${(index + 1 /8) - index * 0.7}s ease-in-out, drop-in ${(index + 1 /8) - index * 0.75}s ease-in-out`;
})

// Referenced this link: https://stackoverflow.com/questions/27752500/how-to-have-an-anim-gif-on-a-link-and-play-it-on-hover-and-reset 

$(function() {
    $(".project-example-1").hover(
        function() {
            $('.arduino').attr("src", "../assets/dance_robot_dance.gif");
        },
        function() {
            $('.arduino').attr("src", "../assets/blue.jpg");
        }                       
    );                  
});

$(function() {
    $(".project-example-2").hover(
        function() {
            $('.python').attr("src", "../assets/snek.gif");
        },
        function() {
            $('.python').attr("src", "../assets/python.jpg"); 
        }                       
    );                  
});

$(function() {
    $(".project-example-3").hover(
        function() {
            $('.corona').attr("src", "../assets/corona.gif");
        },
        function() {
            $('.corona').attr("src", "../assets/corona.jpg");
        }                       
    );                  
});

$(function() {
    $(".project-example-4").hover(
        function() {
            $('.coffee').attr("src", "../assets/hot_coffee.gif");
        },
        function() {
            $('.coffee').attr("src", "../assets/cup_of_joe.jpg");
        }                       
    );                  
});

$(function() {
    $(".project-example-5").hover(
        function() {
            $('.unknown').attr("src", "../assets/pooh.gif");
        },
        function() {
            $('.unknown').attr("src", "../assets/404.jpg");
        }                       
    );                  
});

const toggleButton = document.querySelector('.toggle-button');
const navbarlinks = document.getElementsByClassName('navbar-links')[0];

toggleButton.addEventListener('click', () => {
    console.log('Toggle Clicked')
    navbarlinks.classList.toggle('active');
    
    navbarlinks.style.animation = "navLinkFade ease-out 0.5s";
});