import React, { memo, useMemo } from "@wordpress/element";
import { recommendedServicesPricing } from "../data";
import Service from "./Service";
import TextClamp from '../TextClamp'

const RecommendedServices = memo(() => {
  const { productServicesPricing, parcelServicesPricing } = useMemo(
    () => ({
      productServicesPricing: recommendedServicesPricing.filter(
        ({ serviceTarget }) => serviceTarget === "product"
      ),
      parcelServicesPricing: recommendedServicesPricing.filter(
        ({ serviceTarget }) => serviceTarget === "parcel"
      ),
    }),
    []
  );

  return (
    <section className="section recommended-services">
      <div className="section-inner">
        <header className="section-header">
          <h2 className="section-title">Commonly Used Value-added Services</h2>
          <p className="section-subtitle">
            <TextClamp text="You can browse and configure suitable value-added services in the service marketplace based on your store\'s main product categories and specific business requirements. Here are some commonly used value-added services offered by BuckyDrop clients:" />
          </p>
        </header>
        <div className="section-body">
          <div>
            <div className="row">
              {[...productServicesPricing, ...parcelServicesPricing].map(
                (item, index) => (
                  <div className="col col-12 col-md-6" key={index}>
                    <Service data={item} />
                  </div>
                )
              )}
            </div>
          </div>
        </div>
        <footer className="section-footer">
          <p className="md:visible">
            <span>
              The above are frequently used value-added services, with more
              customized services available on BuckyDrop. For details, please go
              to
            </span>
            <a
              href="https://www.buckydrop.com/en/services/market/"
              target="_blank"
            >
              &nbsp;Service Market
            </a>
            <span> or contact your exclusive Account Manager.</span>
          </p>
        </footer>
      </div>
    </section>
  );
});

export default RecommendedServices;
