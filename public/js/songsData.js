songsDataForApi = [
    {
        artist: 'Idina Menzel',
        title: 'Let It Go'
    },
    {
        artist: 'Backstreet Boys',
        title: 'All I Have to Give'
    },
    {
        artist: 'Aqua',
        title: 'Barbie Girl'
    },
    {
        artist: 'Images',
        title: 'Les démons de minuit'
    },
    {
        artist: 'Jacques Brel',
        title: 'Ne me quitte pas'
    },
    {
        artist: 'Charles Aznavour',
        title: 'La bohème'
    },
    {
        artist: 'Édith Piaf',
        title: 'La foule'
    },
    {
        artist: 'Marc Lavoine',
        title: 'Elle a les yeux revolver'
    },
    {
        artist: 'Céline Dion',
        title: 'Sous le vent'
    },
    {
        artist: 'Céline Dion',
        title: 'Pour Que Tu M\'Aimes Encore'
    },
    {
        artist: 'Patrick Bruel',
        title: 'Place des grands hommes'
    },
    {
        artist: 'Début de Soirée',
        title: 'Nuit de folie'
    },
    {
        artist: 'Lio',
        title: 'Banana Split'
    },
    {
        artist: 'Idina Menzel',
        title: 'Let It Go'
    },
    {
        artist: 'Francis Cabrel',
        title: 'Je l\'aime à mourir'
    },
    {
        artist: ' Jean-Jacques Goldman',
        title: 'Quand la musique est bonne'
    },
    {
        artist: 'Alain Bashung',
        title: 'Gaby Oh Gaby'
    },
    {
        artist: 'Jean-Jacques Goldman',
        title: 'Comme toi'
    },
    {
        artist: 'Renaud',
        title: 'Morgane de toi'
    },

];

const URL_API = 'https://api.lyrics.ovh/v1/';
const makeUrlForApi = ({artist, title}) => (`${URL_API}/${artist}/${title}`);

const urls = [
    makeUrlForApi(songsDataForApi[0]),
    makeUrlForApi(songsDataForApi[1]),
    makeUrlForApi(songsDataForApi[2]),
];