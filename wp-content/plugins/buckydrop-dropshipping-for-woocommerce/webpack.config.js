const path = require('path')
const defaultConfig = require('@wordpress/scripts/config/webpack.config')

module.exports = {
  ...defaultConfig,
  entry: {
    login: './ui/pages/Login',
    profile: './ui/pages/Profile',
    service_pricing: './ui/pages/Services/Pricing',
  },
  resolve: {
    ...defaultConfig.resolve,
    alias: {
      '@': path.resolve(__dirname, 'ui'),
    }
  }
}
