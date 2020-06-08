module.exports = {
    // webpack-dev-server 相关配置
    devServer: {
        port:80,
        proxy: {
            '/api/*': {
                target: 'http://203.195.198.41/',
                ws: true,
                changeOrigin: true,
                host: 'api.io',
                pathRewrite: {
                    '/api': ''  //通过pathRewrite重写地址，将前缀/api转为/
                }
            }
        }
    },
    publicPath:'',
}
