var path = require('path')
var webpack = require('webpack')

module.exports = {
    entry: {
        shop: './app/vue/main.js',   
    },
    output: {
        library: 'myVue',
        path: path.resolve(__dirname, './public/builds/production/js/dist'),
        publicPath: '/dist/',
        filename: '[name].bundle.js',
        chunkFilename: '[id].chunk.js'
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                use: [
                    'vue-style-loader',
                    'css-loader'
                ],
            },
            {
                test: /\.vue$/,
                loader: 'vue-loader',
                options: {
                    loaders: {}
                }
            },
            {
                test: /\.js$/,
                loader: 'babel-loader',
                exclude: /node_modules/
            },
            {
                test: /\.(png|jpg|svg)$/,
                loader: 'file-loader',
                options: {
                    name: '[name].[ext]?[hash]'
                }
            }
        ]
    },
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.esm.js'
        },
        extensions: ['*', '.js', '.vue', '.json']
    } 
}