var projects = document.querySelectorAll('.project-example');


console.log(projects);

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

if (screen.width < 500) {
    console.log('SMOLE')
}

console.log('done');

function hooli() {
    var dropMenu = document.querySelector('.nav-links');

    if (dropMenu.style.display =="flex") {
        dropMenu.style.display ="none"
    }
    else {
        dropMenu.style.display = "flex"
    }
}

function reset() {
    var dropMenu = document.querySelector('.nav-links');
    dropMenu.style.display ="none"
}