import React, { memo } from "@wordpress/element";

const Header = memo(() => {
  return (
    <header className="page-header">
      <div className="page-header-inner">
        <div className='page-header-text-content'>
          <h1>
            BuckyDrop Fee Introduction
          </h1>
          <p>
            The BuckyDrop Fee consists of two components: the fulfillment fee and the value-added service fees. The fulfillment fee is the basic cost of fulfilling BuckyDrop orders, while value-added service fees provide additional services tailored to meet the specific customer business requirements.
          </p>
        </div>
        <div className='img-box'>
          <img src={require('./img/header-finance.png')} alt='finance' />
        </div>
      </div>
    </header>
  );
});

export default Header;
