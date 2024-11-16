import React, { useState } from "@wordpress/element";
import { Modal } from "@/components/Modal";
import { CURRENCY_SYMBOL_CNY } from "@/utils/constants";
import { FREE_PLAN_CONFIG, PRO_PLAN_CONFIG } from '../constants'
import TextClamp from '../TextClamp'

const storeServiceFeeTableColumns = [
  {
    title: "Index",
    dataIndex: "index",
    width: 90,
  },
  {
    title: "Service Name",
    dataIndex: "serviceName",
  },
  {
    title: "Quantity",
    dataIndex: "quantity",
    width: 120,
  },
];

const storeServiceFeeTableDataSource = [
  {
    index: 1,
    serviceName: "Updating third-party product inventory and prices",
    quantity: 10000,
  },
  {
    index: 2,
    serviceName: "Associated Store Product Information",
    quantity: 1000,
  },
  {
    index: 3,
    serviceName: "Crawling third-party product links and pushing",
    quantity: 1000,
  },
];

const PricingStrategy = () => {
  const [businessCaseModalVisible, setBusinessCaseModalVisible] =
    useState(false);
  const handleOpenBusinessCaseModal = () => {
    setBusinessCaseModalVisible(true);
  };
  const handleCloseBusinessCaseModal = () => {
    setBusinessCaseModalVisible(false);
  };

  return (
    <section className="section service-pricing-strategy">
      <div className="section-inner">
        <header className="section-header">
          <h2 className="section-title">BuckyDrop Fulfillment Fee</h2>
          <p className="section-subtitle">
            <TextClamp text="The fulfillment fees on the BuckyDrop platform include store subscription fees, order fulfillment fees, and shipping fees for dispatched packages. The store subscription fee is charged based on the selected plan, the order fulfillment fee is calculated per outbound package, and the shipping fee is determined by the actual delivery of the package." />
            <a
              className="text-orange"
              onClick={handleOpenBusinessCaseModal}
            >
              Business Case &nbsp;&gt;&gt;
            </a>
          </p>
        </header>
        <div className='section-body'>
          <section className='pricing-card'>
            <header className='pricing-card-header'>
              <h3 className='pricing-card-title'>
                <i className='pricing-card-title-icon pricing-card-title-icon-store' />
                Store Subscription Fee
              </h3>
            </header>
            <div className='row'>
              <div className='col col-md-12 col-divide-md'>
                <div className='pricing-card-box'>
                  <i className='icon-plan' />
                  <div className='pricing-card-price'>
                    <b className='text-orange'>
                      {`${CURRENCY_SYMBOL_CNY}0.00`}
                    </b>
                    {`/ Lifetime / ${FREE_PLAN_CONFIG.unit}`}
                  </div>
                  <h6 className='pricing-card-items-title'>{FREE_PLAN_CONFIG.detailsTitle}</h6>
                  <ul className='pricing-card-items'>{
                    FREE_PLAN_CONFIG.details.map((el, index) => (
                      <li key={index}>{el}</li>
                    ))
                  }
                  </ul>
                </div>
              </div>
              <div className='col col-md-12'>
                <div className='pricing-card-box'>
                  <i className='icon-plan icon-plan-pro' />
                  <div className='pricing-card-price'>
                    <b className='text-orange mr-5'>
                      {`${CURRENCY_SYMBOL_CNY}199`}
                    </b>
                    {`/ Month / ${PRO_PLAN_CONFIG.unit}`}
                  </div>
                  <h6 className='pricing-card-items-title'>{PRO_PLAN_CONFIG.detailsTitle}</h6>
                  <ul className='pricing-card-items'>{
                    PRO_PLAN_CONFIG.details.map((el, index) => (
                      <li key={index}>{el}</li>
                    ))
                  }
                  </ul>
                </div>
              </div>
            </div>
            <footer className='pricing-card-footnote'>
              <ul>
                <li>1. The numbers in the first three benefits of the plan represent the quantity of gifted services, which will be credited to your service assets account upon store activation.</li>
                <li>2. The service assets in the Pro Plan are only valid during the subscription period and will automatically expire thereafter; the Free Plan remains valid permanently.</li>
                <li>3. Currently supporting independent：<i className='stores-logo' /></li>
              </ul>
            </footer>
          </section>
          <div className='row'>
            <div className='col col-md-12 col-divide-md'>
              <section style={{ marginBottom: 0 }} className='pricing-card green'>
                <header className='pricing-card-header'>
                  <h3 className='pricing-card-title'>
                    <i className='pricing-card-title-icon pricing-card-title-icon-order' />
                    Order Fulfillment Fee
                  </h3>
                </header>
                <div className='pricing-card-box'>
                  <div className='pricing-card-price'>
                    <b className='text-orange'>
                      {`${CURRENCY_SYMBOL_CNY}9.90`}
                    </b>
                    / package
                  </div>
                  <ul className='pricing-card-items green'>
                    <li>
                      Standard product purchasing service
                    </li>
                    <li>
                      Product warehousing service
                    </li>
                    <li>
                      Product outbound service
                    </li>
                    <li>
                      Basic packaging service for outbound orders
                    </li>
                    <li>
                      30-day free storage service
                    </li>
                  </ul>
                </div>
                <footer className='pricing-card-footnote'>
                  <ul>
                    <li>* The above price is the base fee, Packages with more than five items   will incur an extra charge of 2 RMB per item.</li>
                  </ul>
                </footer>
              </section>
            </div>
            <div className='col col-md-12'>
              <section style={{ marginBottom: 0 }} className='pricing-card orange'>
                <header className='pricing-card-header'>
                  <h3 className='pricing-card-title'>
                    <i className='pricing-card-title-icon pricing-card-title-icon-shipping' />
                    Shipping Fee
                  </h3>
                </header>
                <div className='pricing-card-box'>
                  <div>
                    <div className='pricing-card-price'>
                      <b className='text-orange'>
                        Payment On Actual
                      </b>
                    </div>
                    <p className='pricing-card-introduce'>
                      The shipping fee is calculated based on the specific route, destination, weight, and volume of each package. You can estimate the shipping fees for your store\'s orders by using the product information.
                    </p>
                  </div>
                  <footer className='pricing-card-footer md:visible'>
                    <a
                      className='service-pricing-button'
                      href="https://www.buckydrop.com/en/fee_calculator/"
                      target="_blank"
                    >
                      Calculate shipping costs
                      &nbsp;&gt;&gt;
                    </a>
                  </footer>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>

      <Modal
        title="Business Case"
        open={businessCaseModalVisible}
        cancelText="OK"
        onCancel={handleCloseBusinessCaseModal}
        onClose={handleCloseBusinessCaseModal}
      >
        <p className="text-14 mb-20">
          <span>
            Emma opened an independent Shopify store specializing in selling
            second-hand clothing with a focus on the Japanese market. The
            average order value is 500 yuan, and the cost of procuring the
            products is 300 yuan. The store receives an average of 500 orders
            per month. After fulfilling orders through the BuckyDrop platform,
            the store can achieve a
          </span>
          <span className="text-orange">&nbsp;monthly profit margin</span>
          <span> of </span>
          <span className="text-orange">30%</span>
          <span>.</span>
        </p>
        <div className="table-responsive mb-20">
          <table className="service-pricing-business-case-table">
            <tbody>
              <tr>
                <th colSpan={2}>Sales Revenue</th>
                <td>{`${CURRENCY_SYMBOL_CNY} 250000`}</td>
              </tr>
              <tr>
                <th rowSpan={4}>Cost Expenses </th>
                <th>Product Cost</th>
                <td>{`${CURRENCY_SYMBOL_CNY} 150000`}</td>
              </tr>
              <tr>
                <th>Fulfillment Cost</th>
                <td>{`${CURRENCY_SYMBOL_CNY} 4950`}</td>
              </tr>
              <tr>
                <th>Store Service Fee</th>
                <td>{`${CURRENCY_SYMBOL_CNY} 199`}</td>
              </tr>
              <tr>
                <th>Logistics Costs </th>
                <td>{`${CURRENCY_SYMBOL_CNY} 19000`}</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th colSpan={2}>Sales Profit</th>
                <td>{`${CURRENCY_SYMBOL_CNY} 75851`}</td>
              </tr>
            </tfoot>
          </table>
        </div>
        <ol className="list-decimal">
          <li>
            In the example, we use "Yuntu Clothing Special Line Logistics" as
            the shipping route for the orders, and calculate the shipping fees
            based on a weight of 500 grams per package.
          </li>
          <li>
            Please note that the prices for shipping routes are subject to
            market fluctuations and are updated in real-time. Therefore, the
            above prices are for reference only. The actual shipping fees will
            be charged based on the specific circumstances at the time of
            package dispatch.
          </li>
        </ol>
      </Modal>
    </section>
  );
};

export default PricingStrategy;
