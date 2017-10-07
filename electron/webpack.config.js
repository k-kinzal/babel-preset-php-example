module.exports = {
  context: __dirname + '/src',
  entry: __dirname + '/src/index.php',
  output: {
    path: __dirname + '/public',
    filename: 'index.js'
  },
  module: {
    loaders: [
      {
        test: /\.php$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['php']
          }
        }
      }
    ]
  }
};
