
const path = require('path');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    context: __dirname,
    entry : "./src/js/index.js" ,
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'index.js'
      },
      devServer: {
        contentBase:  'http://localhost:85/my-word/',
        compress: true,
        port: 9000
      },
      module: {
        rules: [
          { 
              test: /\.css$/,
              use:  [
                MiniCssExtractPlugin.loader,
                {loader: 'css-loader'},
                
        ]
      }]}
      ,
      plugins: [
         new BrowserSyncPlugin({
           // browse to http://localhost:3000/ during development,
           // ./public directory is being served
           proxy : 'http://localhost:85/my-word/',
          // host: 'localhost',
            port: 5000,
           files: [
            '**/*.php','**/*.css','**/*.js'
          ]
        
        //   //server: { baseDir: ['public'] }
         }),
        new MiniCssExtractPlugin({
          filename : '[name].[contentHash].css'}
        )
      ]
}