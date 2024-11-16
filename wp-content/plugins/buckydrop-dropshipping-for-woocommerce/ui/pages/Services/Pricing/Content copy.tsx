import React, { memo } from '@wordpress/element'
import MainLayout from '@/layouts/Main'
import './index.css'

type Props = {
}

const Content = memo((props: Props) => {
  return (
    <MainLayout>
      <div className="services-pricing-page">
        <div className="page-container">
          <header className="page-header">
            <div className="page-header-inner">
              <h1>Expense Standards</h1>
              <p className="text-gray">We provide common and characteristic customized services covering all business scenarios.
                The following fee standards are provided to help you accurately calculate fees and make your e-commerce
                business costs intuitive.</p>
            </div>
          </header>
          <div className="page-body">
            <div className="page-body-inner">
              <section className="section">
                <header className="section-header">
                  <h2 className="section-title">Fee Standards<br />for Regular Services</h2>
                </header>
                <div className="section-body">
                  <div className="md:hidden">
                    <section className="box">
                      <header className="box-header">
                        <h3 className="box-title">Product Procurement</h3>
                      </header>
                      <div className="box-body">
                        <div className="list-item">
                          <h4 className="text-16 text-black mb-10">Shopping Agent Service</h4>
                          <p className="text-12 text-black" style={{ minHeight: '50px' }}>
                            Purchase the desired products via the product links provided by customers
                          </p>
                          <div className="flex-center-vertical mt-10">
                            <div className="flex-center-vertical"><span className="text-gray mr-20">Required</span><span
                              className="text-black"><span role="img" aria-label="check" className="anticon anticon-check"><svg
                                viewBox="64 64 896 896" focusable="false" data-icon="check" width="1em" height="1em"
                                fill="currentColor" aria-hidden="true">
                                <path
                                  d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 00-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z">
                                </path>
                              </svg></span></span></div>
                            <div className="flex-center-vertical ml-auto"><span className="text-gray mr-20">Price</span><span
                              className="text-black">¥2.5/SKU</span></div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section className="box">
                      <header className="box-header">
                        <h3 className="box-title">Product Processing</h3>
                      </header>
                      <div className="box-body">
                        <div className="list-item">
                          <h4 className="text-16 text-black mb-10">Remove Tags</h4>
                          <p className="text-12 text-black" style={{ minHeight: '50px' }}>Remove specific tags from products (work
                            instructions required)</p>
                          <div className="flex-center-vertical mt-10">
                            <div className="flex-center-vertical"><span className="text-gray mr-20">Required</span><span
                              className="text-black">-</span></div>
                            <div className="flex-center-vertical ml-auto"><span className="text-gray mr-20">Price</span><span
                              className="text-black">¥0.5/PCS</span></div>
                          </div>
                        </div>
                        <div className="list-item">
                          <h4 className="text-16 text-black mb-10">Replace Tags</h4>
                          <p className="text-12 text-black" style={{ minHeight: '50px' }}>Replace product tags (work instructions
                            required)</p>
                          <div className="flex-center-vertical mt-10">
                            <div className="flex-center-vertical"><span className="text-gray mr-20">Required</span><span
                              className="text-black">-</span></div>
                            <div className="flex-center-vertical ml-auto"><span className="text-gray mr-20">Price</span><span
                              className="text-black">¥1/PCS</span></div>
                          </div>
                        </div>
                        <div className="list-item">
                          <h4 className="text-16 text-black mb-10">Replace Custom Labels</h4>
                          <p className="text-12 text-black" style={{ minHeight: '50px' }}>Replace existing product labels with
                            customized ones (work instructions required)</p>
                          <div className="flex-center-vertical mt-10">
                            <div className="flex-center-vertical"><span className="text-gray mr-20">Required</span><span
                              className="text-black">-</span></div>
                            <div className="flex-center-vertical ml-auto"><span className="text-gray mr-20">Price</span><span
                              className="text-black">¥1/PCS</span></div>
                          </div>
                        </div>
                        <div className="list-item">
                          <h4 className="text-16 text-black mb-10">Remove Labels</h4>
                          <p className="text-12 text-black" style={{ minHeight: '50px' }}>Designated service for apparel: Remove
                            specific labels from the apparel (work instructions required)</p>
                          <div className="flex-center-vertical mt-10">
                            <div className="flex-center-vertical"><span className="text-gray mr-20">Required</span><span
                              className="text-black">-</span></div>
                            <div className="flex-center-vertical ml-auto"><span className="text-gray mr-20">Price</span><span
                              className="text-black">¥1/PCS</span></div>
                          </div>
                        </div>
                        <div className="list-item">
                          <h4 className="text-16 text-black mb-10">Replace Packages</h4>
                          <p className="text-12 text-black" style={{ minHeight: '50px' }}>Replace the original packaging with
                            customized packaging or BuckyDrop's standard packaging (work instructions required)</p>
                          <div className="flex-center-vertical mt-10">
                            <div className="flex-center-vertical"><span className="text-gray mr-20">Required</span><span
                              className="text-black">-</span></div>
                            <div className="flex-center-vertical ml-auto"><span className="text-gray mr-20">Price</span><span
                              className="text-black">¥1.5/PCS</span></div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section className="box">
                      <header className="box-header">
                        <h3 className="box-title">Storage </h3>
                      </header>
                      <div className="box-body">
                        <div className="list-item">
                          <h4 className="text-16 text-black mb-10">Standard Inspection</h4>
                          <p className="text-12 text-black" style={{ minHeight: '50px' }}>Check the style, color, model, size, and
                            quantity of the products per the customer's procurement requests, and check the quality of
                            products through appearance</p>
                          <div className="flex-center-vertical mt-10">
                            <div className="flex-center-vertical"><span className="text-gray mr-20">Required</span><span
                              className="text-black"><span role="img" aria-label="check" className="anticon anticon-check"><svg
                                viewBox="64 64 896 896" focusable="false" data-icon="check" width="1em" height="1em"
                                fill="currentColor" aria-hidden="true">
                                <path
                                  d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 00-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z">
                                </path>
                              </svg></span></span></div>
                            <div className="flex-center-vertical ml-auto"><span className="text-gray mr-20">Price</span><span
                              className="text-black">¥2/PCS</span></div>
                          </div>
                        </div>
                        <div className="list-item">
                          <h4 className="text-16 text-black mb-10">Dropshipping Inbound</h4>
                          <p className="text-12 text-black" style={{ minHeight: '50px' }}>No product source: Store products in the
                            warehouse as specified in the sales order</p>
                          <div className="flex-center-vertical mt-10">
                            <div className="flex-center-vertical"><span className="text-gray mr-20">Required</span><span
                              className="text-black"><span role="img" aria-label="check" className="anticon anticon-check"><svg
                                viewBox="64 64 896 896" focusable="false" data-icon="check" width="1em" height="1em"
                                fill="currentColor" aria-hidden="true">
                                <path
                                  d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 00-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z">
                                </path>
                              </svg></span></span></div>
                            <div className="flex-center-vertical ml-auto"><span className="text-gray mr-20">Price</span><span
                              className="text-black">¥2/PCS</span></div>
                          </div>
                        </div>
                        <div className="list-item">
                          <h4 className="text-16 text-black mb-10">Dropshipping Outbound</h4>
                          <p className="text-12 text-black" style={{ minHeight: '50px' }}>No product source: Ship products out of the
                            warehouse as specified in the sales order</p>
                          <div className="flex-center-vertical mt-10">
                            <div className="flex-center-vertical"><span className="text-gray mr-20">Required</span><span
                              className="text-black"><span role="img" aria-label="check" className="anticon anticon-check"><svg
                                viewBox="64 64 896 896" focusable="false" data-icon="check" width="1em" height="1em"
                                fill="currentColor" aria-hidden="true">
                                <path
                                  d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 00-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z">
                                </path>
                              </svg></span></span></div>
                            <div className="flex-center-vertical ml-auto"><span className="text-gray mr-20">Price</span><span
                              className="text-black">¥2/PG</span></div>
                          </div>
                        </div>
                        <div className="list-item">
                          <h4 className="text-16 text-black mb-10">Stock Up</h4>
                          <p className="text-12 text-black" style={{ minHeight: '50px' }}>Stock up: Store products in the warehouse
                            per the customer's sales plan</p>
                          <div className="flex-center-vertical mt-10">
                            <div className="flex-center-vertical"><span className="text-gray mr-20">Required</span><span
                              className="text-black">-</span></div>
                            <div className="flex-center-vertical ml-auto"><span className="text-gray mr-20">Price</span><span
                              className="text-black">¥1.5/SKU</span></div>
                          </div>
                        </div>
                        <div className="list-item">
                          <h4 className="text-16 text-black mb-10">Inventory Sales</h4>
                          <p className="text-12 text-black" style={{ minHeight: '50px' }}>Stock up: Ship already-in-inventory products
                            out of the warehouse</p>
                          <div className="flex-center-vertical mt-10">
                            <div className="flex-center-vertical"><span className="text-gray mr-20">Required</span><span
                              className="text-black">-</span></div>
                            <div className="flex-center-vertical ml-auto"><span className="text-gray mr-20">Price</span><span
                              className="text-black">¥3/PG</span></div>
                          </div>
                        </div>
                        <div className="list-item">
                          <h4 className="text-16 text-black mb-10">Storage Fees</h4>
                          <p className="text-12 text-black" style={{ minHeight: '50px' }}>Free for the first 30 days</p>
                        </div>
                      </div>
                    </section>
                    <section className="box">
                      <header className="box-header">
                        <h3 className="box-title">Shipping </h3>
                      </header>
                      <div className="box-body">
                        <div className="list-item">
                          <h4 className="text-16 text-black mb-10">Packing </h4>
                          <p className="text-12 text-black" style={{ minHeight: '50px' }}>Fees for packaging products before shipping
                            them out, charged by packaging type</p>
                          <div className="flex-center-vertical mt-10">
                            <div className="flex-center-vertical"><span className="text-gray mr-20">Required</span><span
                              className="text-black"><span role="img" aria-label="check" className="anticon anticon-check"><svg
                                viewBox="64 64 896 896" focusable="false" data-icon="check" width="1em" height="1em"
                                fill="currentColor" aria-hidden="true">
                                <path
                                  d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 00-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z">
                                </path>
                              </svg></span></span></div>
                            <div className="flex-center-vertical ml-auto"><span className="text-gray mr-20">Price</span><span
                              className="text-black">¥1.5/Bag, ¥4/Box</span></div>
                          </div>
                        </div>
                        <div className="list-item">
                          <h4 className="text-16 text-black mb-10">Packaging Material Fees</h4>
                          <p className="text-12 text-black" style={{ minHeight: '50px' }}>Calculated based on the actual weight of the
                            package</p>
                        </div>
                        <div className="list-item">
                          <h4 className="text-16 text-black mb-10">Logistics Expenses</h4>
                          <p className="text-12 text-black" style={{ minHeight: '50px' }}>Actual collection by different logistics
                            providers</p>
                          <div className="flex-center-vertical mt-10">
                            <div className="flex-center-vertical"><span className="text-gray mr-20">Required</span><span
                              className="text-black"><span role="img" aria-label="check" className="anticon anticon-check"><svg
                                viewBox="64 64 896 896" focusable="false" data-icon="check" width="1em" height="1em"
                                fill="currentColor" aria-hidden="true">
                                <path
                                  d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 00-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z">
                                </path>
                              </svg></span></span></div>
                            <div className="flex-center-vertical ml-auto"><a href="https://www.buckydrop.com/en/fee_calculator" target="_blank">Calculate
                              logistics costs &gt;&gt;</a></div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div className="md:visible">
                    <table className="services-fee-table w-full">
                      <thead>
                        <th>Scene </th>
                        <th>Items </th>
                        <th>Required</th>
                        <th>Price</th>
                        <th style={{ width: '360px' }}>Introduce </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td><span className="text-black text-bold">Product Procurement</span></td>
                          <td>Shopping Agent Service</td>
                          <td><span role="img" aria-label="check" className="anticon anticon-check"><svg viewBox="64 64 896 896"
                            focusable="false" data-icon="check" width="1em" height="1em" fill="currentColor"
                            aria-hidden="true">
                            <path
                              d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 00-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z">
                            </path>
                          </svg></span></td>
                          <td>¥2.5/SKU</td>
                          <td>Purchase the desired products via the product links provided by customers</td>
                        </tr>
                        <tr>
                          <td className="line" colSpan={5}></td>
                        </tr>
                        <tr>
                          <td rowSpan={5}><span className="text-black text-bold">Product Processing</span></td>
                          <td>Remove Tags</td>
                          <td>-</td>
                          <td>¥0.5/PCS</td>
                          <td>Remove specific tags from products (work instructions required)</td>
                        </tr>
                        <tr>
                          <td>Replace Tags</td>
                          <td>-</td>
                          <td>¥1/PCS</td>
                          <td>Replace product tags (work instructions required)</td>
                        </tr>
                        <tr>
                          <td>Replace Custom Labels</td>
                          <td>-</td>
                          <td>¥1/PCS</td>
                          <td>Replace existing product labels with customized ones (work instructions required)</td>
                        </tr>
                        <tr>
                          <td>Remove Labels</td>
                          <td>-</td>
                          <td>¥1/PCS</td>
                          <td>Designated service for apparel: Remove specific labels from the apparel (work instructions
                            required)</td>
                        </tr>
                        <tr>
                          <td>Replace Packages</td>
                          <td>-</td>
                          <td>¥1.5/PCS</td>
                          <td>Replace the original packaging with customized packaging or BuckyDrop's standard packaging (work
                            instructions required)</td>
                        </tr>
                        <tr>
                          <td className="line" colSpan={5}></td>
                        </tr>
                        <tr>
                          <td rowSpan={6}><span className="text-black text-bold">Storage </span></td>
                          <td>Standard Inspection</td>
                          <td><span role="img" aria-label="check" className="anticon anticon-check"><svg viewBox="64 64 896 896"
                            focusable="false" data-icon="check" width="1em" height="1em" fill="currentColor"
                            aria-hidden="true">
                            <path
                              d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 00-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z">
                            </path>
                          </svg></span></td>
                          <td>¥2/PCS</td>
                          <td>Check the style, color, model, size, and quantity of the products per the customer's procurement
                            requests, and check the quality of products through appearance</td>
                        </tr>
                        <tr>
                          <td>Dropshipping Inbound</td>
                          <td><span role="img" aria-label="check" className="anticon anticon-check"><svg viewBox="64 64 896 896"
                            focusable="false" data-icon="check" width="1em" height="1em" fill="currentColor"
                            aria-hidden="true">
                            <path
                              d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 00-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z">
                            </path>
                          </svg></span></td>
                          <td>¥2/PCS</td>
                          <td>No product source: Store products in the warehouse as specified in the sales order</td>
                        </tr>
                        <tr>
                          <td>Dropshipping Outbound</td>
                          <td><span role="img" aria-label="check" className="anticon anticon-check"><svg viewBox="64 64 896 896"
                            focusable="false" data-icon="check" width="1em" height="1em" fill="currentColor"
                            aria-hidden="true">
                            <path
                              d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 00-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z">
                            </path>
                          </svg></span></td>
                          <td>¥2/PG</td>
                          <td>No product source: Ship products out of the warehouse as specified in the sales order</td>
                        </tr>
                        <tr>
                          <td>Stock Up</td>
                          <td>-</td>
                          <td>¥1.5/SKU</td>
                          <td>Stock up: Store products in the warehouse per the customer's sales plan</td>
                        </tr>
                        <tr>
                          <td>Inventory Sales</td>
                          <td>-</td>
                          <td>¥3/PG</td>
                          <td>Stock up: Ship already-in-inventory products out of the warehouse</td>
                        </tr>
                        <tr>
                          <td>Storage Fees</td>
                          <td></td>
                          <td></td>
                          <td>Free for the first 30 days</td>
                        </tr>
                        <tr>
                          <td className="line" colSpan={5}></td>
                        </tr>
                        <tr>
                          <td rowSpan={3}><span className="text-black text-bold">Shipping </span></td>
                          <td>Packing </td>
                          <td><span role="img" aria-label="check" className="anticon anticon-check"><svg viewBox="64 64 896 896"
                            focusable="false" data-icon="check" width="1em" height="1em" fill="currentColor"
                            aria-hidden="true">
                            <path
                              d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 00-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z">
                            </path>
                          </svg></span></td>
                          <td>¥1.5/Bag, ¥4/Box</td>
                          <td>Fees for packaging products before shipping them out, charged by packaging type</td>
                        </tr>
                        <tr>
                          <td>Packaging Material Fees</td>
                          <td></td>
                          <td></td>
                          <td>Calculated based on the actual weight of the package</td>
                        </tr>
                        <tr>
                          <td>Logistics Expenses</td>
                          <td><span role="img" aria-label="check" className="anticon anticon-check"><svg viewBox="64 64 896 896"
                            focusable="false" data-icon="check" width="1em" height="1em" fill="currentColor"
                            aria-hidden="true">
                            <path
                              d="M912 190h-69.9c-9.8 0-19.1 4.5-25.1 12.2L404.7 724.5 207 474a32 32 0 00-25.1-12.2H112c-6.7 0-10.4 7.7-6.3 12.9l273.9 347c12.8 16.2 37.4 16.2 50.3 0l488.4-618.9c4.1-5.1.4-12.8-6.3-12.8z">
                            </path>
                          </svg></span></td>
                          <td></td>
                          <td>Actual collection by different logistics providers<br /><a href="https://www.buckydrop.com/en/fee_calculator"
                            target="_blank">Calculate logistics costs &gt;&gt;</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </section>
              <section className="section">
                <header className="section-header">
                  <h2 className="section-title">Other Customized<br />Services</h2>
                </header>
                <div className="section-body">
                  <div className="row">
                    <div className="col col-12 col-md-6">
                      <div className="mb-32">
                        <div className="tiled-image aspect-square">
                          <img
                            src={require("./img/logistics_solutions.jpg")}
                            alt="Logistics solutions" />
                        </div>
                        <div className="text-center pt-10 pr-20 pb-20 pl-20">
                          <div className="text-black mb-10">Logistics solutions</div>
                          <div className="text-black">¥50/Once</div>
                        </div>
                      </div>
                    </div>
                    <div className="col col-12 col-md-6">
                      <div className="mb-32">
                        <div className="tiled-image aspect-square">
                          <img
                            src={require("./img/expert_purchasing_agent.jpg")}
                            alt="Expert purchasing agent" />
                        </div>
                        <div className="text-center pt-10 pr-20 pb-20 pl-20">
                          <div className="text-black mb-10">Expert purchasing agent</div>
                          <div className="text-black">¥5/SKU</div>
                        </div>
                      </div>
                    </div>
                    <div className="col col-12 col-md-6">
                      <div className="mb-32">
                        <div className="tiled-image aspect-square">
                          <img
                            src={require("./img/customized_products.jpg?v1")}
                            alt="OEM/ODM" />
                        </div>
                        <div className="text-center pt-10 pr-20 pb-20 pl-20">
                          <div className="text-black mb-10">OEM/ODM</div>
                          <div className="text-black">¥2.5/PCS</div>
                        </div>
                      </div>
                    </div>
                    <div className="col col-12 col-md-6">
                      <div className="mb-32">
                        <div className="tiled-image aspect-square">
                          <img
                            src={require("./img/fine_quality_inspection.jpg")}
                            alt="Fine quality inspection" />
                        </div>
                        <div className="text-center pt-10 pr-20 pb-20 pl-20">
                          <div className="text-black mb-10">Fine quality inspection</div>
                          <div className="text-black">¥3/PCS</div>
                        </div>
                      </div>
                    </div>
                    <div className="col col-12 col-md-6">
                      <div className="mb-32">
                        <div className="tiled-image aspect-square">
                          <img
                            src={require("./img/product_photography.jpg")}
                            alt="Product photography" />
                        </div>
                        <div className="text-center pt-10 pr-20 pb-20 pl-20">
                          <div className="text-black mb-10">Product photography</div>
                          <div className="text-black">¥3/PCS</div>
                        </div>
                      </div>
                    </div>
                    <div className="col col-12 col-md-6">
                      <div className="mb-32">
                        <div className="tiled-image aspect-square">
                          <img
                            src={require("./img/clean_stains.jpg")}
                            alt="Clean stains" />
                        </div>
                        <div className="text-center pt-10 pr-20 pb-20 pl-20">
                          <div className="text-black mb-10">Clean stains</div>
                          <div className="text-black">¥20/PCS</div>
                        </div>
                      </div>
                    </div>
                    <div className="col col-12 col-md-6">
                      <div className="mb-32">
                        <div className="tiled-image aspect-square">
                          <img
                            src={require("./img/buttonhole_trimming.jpg")}
                            alt="Buttonhole trimming" />
                        </div>
                        <div className="text-center pt-10 pr-20 pb-20 pl-20">
                          <div className="text-black mb-10">Buttonhole trimming</div>
                          <div className="text-black">¥4/PCS</div>
                        </div>
                      </div>
                    </div>
                    <div className="col col-12 col-md-6">
                      <div className="mb-32">
                        <div className="tiled-image aspect-square">
                          <img
                            src={require("./img/package_photography.jpg")}
                            alt="Package photography" />
                        </div>
                        <div className="text-center pt-10 pr-20 pb-20 pl-20">
                          <div className="text-black mb-10">Package photography</div>
                          <div className="text-black">¥5/PG</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </MainLayout>
  )
})

export default Content
