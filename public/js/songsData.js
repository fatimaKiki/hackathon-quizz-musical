songsDataForApi = [{
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
  {
    artist: 'Dua Lipa',
    title: 'Love Again'
  },
];

const URL_API = 'https://api.lyrics.ovh/v1/';
const makeUrlForApi = ({ artist, title }) => (`${URL_API}/${artist}/${title}`);

const urls = [
  makeUrlForApi(songsDataForApi[0]),
  makeUrlForApi(songsDataForApi[1]),
  makeUrlForApi(songsDataForApi[2]),
];