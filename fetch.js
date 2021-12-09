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

    const song1 = await fetch('https://api.lyrics.ovh/v1/' + sing.artist + '/' + sing.title)
        .then(response => {
            return response.json()
        })
        .then(function (text) {
            lyricsSpan.textContent = text.lyrics;
        })
        .catch((error) => {
            console.error('Error:', error);
        });

    const song2 = await fetch('https://api.lyrics.ovh/v1/' + sing.artist + '/' + sing.title)
        .then(response => {
            return response.json()
        })
        .then(function (text) {
            lyricsSpan.textContent = text.lyrics;
        })
        .catch((error) => {
            console.error('Error:', error);
        });


    const song3 = await fetch('https://api.lyrics.ovh/v1/' + sing.artist + '/' + sing.title)
        .then(response => {
            return response.json()
        })
        .then(function (text) {
            lyricsSpan.textContent = text.lyrics;
        })
        .catch((error) => {
            console.error('Error:', error);
        });

    const songsChooce = Promise.all([song1, song2, song3]);
    console.log(songsChooce)

}

let gh = getLyrics(sing)


console.log(gh)


