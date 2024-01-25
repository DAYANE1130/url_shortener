import { VueLoaderPlugin } from 'vue-loader';

export default {
  entry: './resources/js/app.js',
  module: {
    rules: [
      {
        test: /\.vue$/,
        loader: 'vue-loader'
      },
    ]
  },
  plugins: [
    new VueLoaderPlugin()
  ],
  devServer: {
    port: 8080, 
  }
};
