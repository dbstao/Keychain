import React, { memo, useState, useEffect } from "@wordpress/element";
import ServiceComboThumbnail from "./ServiceComboThumbnail";
import { requestRecommendedServiceCombos } from "@/api/requests";
import TextClamp from '../TextClamp'

interface Combo {
  comboName: string;
  comboPrice: number;
  comboOriginalPrice?: number;
  comboDesc: string;
  images: string;
}

const ServiceCombos = memo(() => {
  const [recommendedServiceCombos, setRecommendedServiceCombos] = useState<
    Combo[]
  >([]);

  const fetchData = async () => {
    const requestBody = {
      ajax_nonce: window.buckydropAjax.ajax_nonce,
    };
    const response = await requestRecommendedServiceCombos(requestBody);
    const { data, state, msg } = response || {};
    if (state) {
      throw new Error(msg);
    } else {
      setRecommendedServiceCombos(data);
    }
  };

  useEffect(() => {
    fetchData();
  }, []);

  return (
    <section className="section service-pricing-combos">
      <div className="section-inner">
        <header className="section-header">
          <h2 className="section-title">
            Recommended Value-Added Service Packages
          </h2>
          <p className="section-subtitle">
            <TextClamp text='BuckyDrop offers a variety of value-added service packages for customers to choose from, based on their different business scenarios. You can select the suitable value-added service package, make a purchase, and set up fulfillment in advance. This provides more favorable pricing and simplifies the fulfillment process.' />
          </p>
        </header>
        <div className="section-body">
          <div>
            {recommendedServiceCombos.map((item, index) => (
              <div className='service-combo-thumbnail-container' key={index}>
                <ServiceComboThumbnail data={item} />
              </div>
            ))}
          </div>
        </div>
        <footer className="section-footer">
          <p className="md:visible">
            <span>
              For more discounted packages, please check and purchase in the
            </span>
            <a
              className='text-orange'
              href="https://www.buckydrop.com/en/services/market/"
              target="_blank"
            >
              &nbsp;Service Market
            </a>
            <span>.</span>
          </p>
        </footer>
      </div>
    </section>
  );
});

export default ServiceCombos;
