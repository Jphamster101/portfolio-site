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