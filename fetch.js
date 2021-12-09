data = [{
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
const randomId = Math.floor(Math.random() * data.length);

function randomSinger(data) {
    return data[Math.floor(Math.random() * data.length)];

}

let sing = randomSinger(data)
console.log(sing)


function checkInArray(data, array) {
    for (let i = 0; i < array.length; i++) {
        if (array.includes(data)) {
            return true
        }
    }
    return false
}

async function getLyrics(sing) {

    const lyrics = await fetch('https://api.lyrics.ovh/v1/' + sing.artist + '/' + sing.title)
    const lyrics2 = await fetch('https://api.lyrics.ovh/v1/' + sing.artist + '/' + sing.title)
        // .then(response => response.text())
        // .then(data => {
        //     return data.lyrics
        // })
    console.log(lyrics)
    console.log(lyrics2)

    let getSongsList = [];

    // while (getSongsList.length < 3) {
    //     const lyrics = await fetch('https://api.lyrics.ovh/v1/'+ sing.artist + '/' + sing.title)
    //     console.log(lyrics)
    //     // const lyrics2 = await fetch('https://api.lyrics.ovh/v1/'+ sing.artist + '/' + sing.title)
    //     // const lyrics3 = await fetch('https://api.lyrics.ovh/v1/'+ sing.artist + '/' + sing.title)
    //     // console.log(lyrics1,lyrics2, lyrics3)
    //
    //     if (!checkInArray(data, getSongsList)) {
    //         console.log('lyrics')
    //         //
    //         let data = await lyrics.json();
    //         //
    //         getSongsList.push(data )
    //     }
    //     else{
    //         console.log('exist')
    //     }
    // }
    // console.log(getSongsList)

    //             const showLyrics = async () => {
    //                 const test = await lyrics;
    //                 console.log(test);
    //             };
    // return await lyrics.json()

}

// getLyrics().then(value => console.log(value));

let gh = getLyrics(sing)


console.log(gh)