import React, { memo } from "@wordpress/element";
import classNames from "@/utils/classNames";

const a = require

interface PropsInterface {
  data: any;
}

const CURRENCY_SYMBOL_CNY = "CN ¥"; // 人民币符号

const SERVICE_TARGET_TEXT = {
  product: "Product Service",
  parcel: "Parcel Service",
};

const Service = memo((props: PropsInterface) => {
  const { data } = props;

  return (
    <div className="card mb-32">
      {data.serviceTarget && (
        <div
          className={classNames({
            "card-badge": true,
            [`card-badge-${data.serviceTarget}`]: true,
          })}
        >
          {SERVICE_TARGET_TEXT[data.serviceTarget]}
        </div>
      )}
      <div className="card-image tiled-image square-container">
        <img src={require(`../img/${data.image}`)} alt={data.name} />
      </div>
      <div className="card-body pt-10 pr-30 pb-20 pl-30">
        <div className="text-black mb-10">{data.name}</div>
        <div className="text-black mb-10">{data.price}</div>
        <div style={{ minHeight: "44px" }}>
          <div className="md:d-inline text-gray mr-5">Applicable to</div>
          {data.applicableProducts}
        </div>
      </div>
    </div>
  );
});

export default Service;
