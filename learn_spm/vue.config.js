module.exports = {
    lintOnSave: false, // 关掉eslint
    // webpack-dev-server 相关配置
    devServer: {
        proxy: {
            '/api': {
                target: 'http://203.195.198.41/learnSPM',
                ws: true,
                changeOrigin: true,
                pathRewrite: {
                    '^/api': ''  //通过pathRewrite重写地址，将前缀/api转为/
                }
            }
        }
    },
    publicPath:process.env.NODE_ENV==='production'?'/learnSPM/':'/'
}
