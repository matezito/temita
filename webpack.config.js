const path = require('path');
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");


module.exports = {
    mode: "production",
    entry: { //ADD ONE ENTRY FOR EACH PAGE WHIT THE SCSS AND JS FILE
        app: ['./app/js/app.js', './app/css/app.scss'],
        home:['./app/js/home.js'],
    },
    output:{
        path: path.resolve(__dirname),
        filename: './assets/js/[name].min.js', //THIS BUILD DE BUNDLES WITH NAMES JS
    },
    module: {
        rules: [
            {
                test: /\.js$/, exclude: /node_modules/,
                use: { loader: "babel-loader" }
            },
            {
                test: /\.(sass|scss)$/,
                use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader']
            } 
        ]
    },
    plugins: [new MiniCssExtractPlugin({ filename: './assets/css/[name].min.css' }) ], //THIS BUILD DE BUNDLES WITH NAMES CSS
    optimization: {
        minimizer: [
            new UglifyJSPlugin({
                cache: true,
                parallel: true
            }), 
            new OptimizeCSSAssetsPlugin({})
        ]
    }
};