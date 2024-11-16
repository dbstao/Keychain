import React, { render } from '@wordpress/element'
import Layout from '@/layouts'
import Content from './Content'

document.addEventListener('DOMContentLoaded', () => {
  const appRoot = document.getElementById('buckydrop-app')

  render(
    <Layout>
      <Content />
    </Layout>,
    appRoot
  )
})
