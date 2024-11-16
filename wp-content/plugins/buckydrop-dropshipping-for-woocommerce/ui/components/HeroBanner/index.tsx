import React from '@wordpress/element'
import { __ } from '@wordpress/i18n'
import './index.scss'

const HeroBanner = (props) => {
  const {
    message,
  } = props

  return (
    <section className='hero-banner'>
      <header className='hero-banner-headline'>
        <h1>
          {__('Drop-Shipping Expert')}
        </h1>
        <p>
          {__('Covering ALL Chinese E-Commerce Platforms')}
        </p>
      </header>

      <ul className='hero-banner-highlights'>
        <li className='hero-banner-highlight'>
          {__('Your orders can source from 1688, Taobao, Tmall, Xianyu, JD, etc.')}
        </li>
        <li className='hero-banner-highlight'>
          {__('Numerous services such as customized packaging, create your own brand')}
        </li>
        <li className='hero-banner-highlight'>
          {__('Quickly connect to Shopify & WooCommerce stores, automate order fulfillment')}
        </li>
        <li className='hero-banner-highlight'>
          {__('Diversified logistics routes and customized logistics solutions, easy delivery')}
        </li>
        <li className='hero-banner-highlight'>
          {__('Exclusive butler-like service, without worries behind')}
        </li>
      </ul>

      {message}
    </section>
  )
}

export default HeroBanner
