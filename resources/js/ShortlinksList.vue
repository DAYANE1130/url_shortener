
<template>
  <div>
    <h2>Shortlinks Criados:</h2>
    <ul>
      <li v-for="(link, index) in shortlinks" :key="index">
        <p>URL Original: {{ link.originalUrl }}</p>
        <p>Link Curto: <a :href="link.shortUrl">{{ link.shortUrl }}</a></p>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      shortlinks: [
        { originalUrl: 'http://www.exemplo.com', shortUrl: 'http://short.exemplo/abc123' },
        { originalUrl: 'http://www.teste.com', shortUrl: 'http://short.exemplo/def456' }
      ]
    };
  }
}
</script>

<style scoped>

</style>
