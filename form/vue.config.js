const { defineConfig } = require('@vue/cli-service')
module.exports = {
  publicPath: process.env.NODE_ENV === 'production'
  ? '/production-sub-path/'
  : '/',
}

// module.exports = defineConfig({
//   transpileDependencies: true
// })

// const { defineConfig } = require('@vue/cli-service')
// module.exports = defineConfig({
//   indexPath: 'index.php',
//       chainWebpack: config => {
//       if (process.env.NODE_ENV === 'production') {
//         config
//           .plugin('html')
//           .tap(args => {
//             args[0].template = './src/index_template.php'
//             return args
//           })
//       }
//   }
// })