const webpack = require('webpack');
const path = require('path');
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const CopyPlugin = require('copy-webpack-plugin');



const config = {
    entry: {
        app: './app.js'
    },
    output: {
        filename: 'js/[name].js',
        chunkFilename: "js/[name].js",
        path: path.resolve(__dirname, 'dist'),
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: [
                        {
                            loader: 'css-loader',
                            options: {importLoaders: 1}
                        },
                        'postcss-loader', 'sass-loader']
                })
            },
            {
                test: /\.css$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: ['css-loader', 'postcss-loader']
                })
            },
            {
                test: /\.js$/,
                exclude: /(node_modules|bower_components)/,
                loader: 'babel-loader',
                query: {
                    presets: ['es2015']
                }
            },
            { 
                test: /\.(woff|woff2|eot|ttf|svg)$/, 
                use: [{
                    loader: 'file-loader',
                    options: {
                        name: '[name].[ext]',
                        publicPath: '../'
                    }
                }]
            },
            {
                test: /\.(png|jpg|gif)$/,
                loader: 'file-loader',
            }
        ]
    },
    plugins: [
        new CopyPlugin([
            { from: 'assets/img', to: 'img' },
            { from: 'assets/js', to: 'js' },
            { from: 'assets/includes', to: 'includes' }
          ]),
        new ExtractTextPlugin('/css/[name].css'),
        new webpack.optimize.CommonsChunkPlugin({
            name: 'vendor',
            minChunks(module) {
                let context = module.context;
                return context && context.indexOf('node_modules') >= 0;
            },
        }),
        new BrowserSyncPlugin({
            proxy: 'portfolio.test',
            port: 3000,
            files: [
                '**/*.php'
            ],
            ghostMode: {
                clicks: false,
                location: false,
                forms: false,
                scroll: false
            },
            injectChanges: true,
            logFileChanges: true,
            logLevel: 'debug',
            logPrefix: 'wepback',
            notify: true,
            reloadDelay: 0
        }),
    ]
};

if (process.env.NODE_ENV === 'production') {
    config.plugins.push(
        new UglifyJSPlugin(),
        new OptimizeCssAssetsPlugin()
    );
}

module.exports = config;
