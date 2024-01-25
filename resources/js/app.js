// // app.js
// import { createApp } from 'vue';
// import UrlShortenerForm from './urlShortenerForm.vue';
// import ShortlinksList from './shortlinksList.vue';

// createApp({
//   components: {
//     UrlShortenerForm,
//     ShortlinksList
//   }
// }).mount('#app');

// app.js
import { createApp } from 'vue';
import UrlShortenerForm from './UrlShortenerForm.vue';
import ShortlinksList from './ShortlinksList.vue';

const app = createApp({});

app.component('url-shortener-form', UrlShortenerForm.default);
app.component('shortlinks-list', ShortlinksList.default);

app.mount('#app');





