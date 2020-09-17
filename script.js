var projects = document.querySelectorAll('.project-example');

projects.forEach((project, index) => {
    project.style.animation = `fade-in ${(index + 1 /8) - index * 0.7}s ease-in-out, drop-in ${(index + 1 /8) - index * 0.75}s ease-in-out`;
})

// Referenced this link: https://stackoverflow.com/questions/27752500/how-to-have-an-anim-gif-on-a-link-and-play-it-on-hover-and-reset 
$(function() {
    $(".project-example").hover(
        function() {
            $(this).find('.project-image').finish().animate({
                opacity: "0.4"
            });

            $(this).find('.github').finish().animate({
                opacity: "1.0"
            });

            $(this).find('.checkout_msg').finish().animate({
                opacity: "1.0"
            });
        },
        function() {
            $(this).find('.project-image').finish().animate({
                opacity: "1.0"
            });

            $(this).find('.github').finish().animate({
                opacity: "0.0"
            });

            $(this).find('.checkout_msg').finish().animate({
                opacity: "0.0"
            });
        }                       
    );                  
});

$(function() {
    $(".placeholder-project").hover(
        function() {
            $(this).find('.project-image').finish().animate({
                opacity: "0.4"
            });

            $(this).find('.github').finish().animate({
                opacity: "1.0"
            });

            $(this).find('.checkout_msg').finish().animate({
                opacity: "1.0"
            });
        function() {
            $(this).find('.project-image').finish().animate({
                opacity: "1.0"
            });

            $(this).find('.github').finish().animate({
                opacity: "0.0"
            });

            $(this).find('.checkout_msg').finish().animate({
                opacity: "0.0"
            });
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


function quoteGenerator() {
    var quoteSection = document.querySelector('.quote');
    var author = document.querySelector('.author');
    var randomNumber = Math.floor(Math.random()* 1600);

    fetch('https://type.fit/api/quotes')
    .then(response => response.json())
    .then(dataPacket => dataPacket[randomNumber])
    .then(result => {
        quoteSection.innerHTML = result.text;
        author.innerHTML = '    ~' + result.author;
    });
}

quoteGenerator();