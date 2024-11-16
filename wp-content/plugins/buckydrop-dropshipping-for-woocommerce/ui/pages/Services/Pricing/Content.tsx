import React, { memo, useState } from "@wordpress/element";
import MainLayout from "@/layouts/Main";
import Header from "./Header";
import PricingStrategy from "./PricingStrategy";
import ServiceCombos from "./ServiceCombos";
import RecommendedServices from "./RecommendedServices";
import "./pricing.scss";

type Props = {};

const Content = memo((props: Props) => {
  return (
    <MainLayout>
      <div className="services-pricing-page">
        <div className="page-container">
          <Header />
          <div className="page-body">
            <div className="page-body-inner">
              <PricingStrategy />
              <ServiceCombos />
              <RecommendedServices />
            </div>
          </div>
        </div>
      </div>
    </MainLayout>
  );
});

export default Content;
