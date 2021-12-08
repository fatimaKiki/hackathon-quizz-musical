data = [
    {
        artist: 'Adele',
        title: 'Easy On Me'
    },
    {
        artist: 'Ed Sheeran',
        title: 'Shivers'
    },
    {
        artist: 'Dua Lipa',
        title: 'Love Again'
    },

]

function randomSinger(data) {
    return data[Math.floor(Math.random() * data.length)];

}

let sing = randomSinger(data)
console.log(sing)

async function getLyrics(sing) {

    const lyrics = await fetch('https://api.lyrics.ovh/v1/' + sing.artist + '/' + sing.title)
    // .then(response => response.text())
    // .then(data => {
    //     return data.lyrics
    // })
    let data = await lyrics.json();
    let lyricsSpan = document.querySelector('.lyrics')
    lyricsSpan.innerText = data.lyrics;

}

let gh = getLyrics(sing)


console.log(gh)


