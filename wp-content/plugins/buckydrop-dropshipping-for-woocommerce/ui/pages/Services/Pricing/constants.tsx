import React from "@wordpress/element";

export const FREE_PLAN_CONFIG = {
  title: 'Free',
  unit: 'Store',
  detailsTitle: 'What you get:',
  details: [
    <p>
      <span>Updating third-party product inventory and prices</span>
      <b>（1000）</b>
    </p>,
    <p>
      <span>Associated Store Product Information</span>
      <b>（100）</b>
    </p>,
    <p>
      <span>Crawling third-party product links and pushing</span>
      <b>（100）</b>
    </p>,
    <p>
      <span>Order Fulfillment</span>
      <b>（30 orders）</b>
    </p>,
    <p>
      <span></span>
      <b></b>
    </p>,
    <p>Crawling third-party product links</p>,
    <p>Automatically syncing order information</p>,
    <p>Automatic package logistics updates</p>,
  ],
}

export const PRO_PLAN_CONFIG = {
  title: 'Pro',
  unit: 'Store',
  detailsTitle: 'Everything in Pro:',
  details: [
    <p style={{ letterSpacing: '-0.5px' }}>
      <span>Updating third-party product inventory and prices</span>
      <b>（10000）</b>
    </p>,
    <p>
      <span>Associated Store Product Information</span>
      <b>（1000）</b>
    </p>,
    <p>
      <span>Crawling third-party product links and pushing</span>
      <b>（1000）</b>
    </p>,
    <p>
      <span>Order Fulfillment</span>
      <b>（Unlimited Quantity）</b>
    </p>,
    <p>Crawling third-party product links</p>,
    <p>Automatically syncing order information</p>,
    <p>Automatic package logistics updates</p>,
  ],
}
