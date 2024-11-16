import React, { memo } from "@wordpress/element";
import { CURRENCY_SYMBOL_CNY } from '@/utils/constants'
import extractPlainText from '@/utils/extractPlainText'

interface PropsInterface {
  data: any
}

const ServiceComboThumbnail = memo((props: PropsInterface) => {
  const { data } = props

  return (
    <div className='service-combo-thumbnail'>
      <div className='service-combo-thumbnail-image'>
        <div className='tiled-image square-container'>
          <img
            src={data.images}
            alt={data.comboName}
          />
        </div>
      </div>
      <div className='service-combo-thumbnail-content'>
        <div className='service-combo-thumbnail-title line-clamp-2'>
          {data.comboName}
        </div>
        <div className='service-combo-thumbnail-description line-clamp-2'>
          {extractPlainText(data.comboDesc)}
        </div>
        <div className='service-combo-thumbnail-footer'>
          <div className='service-combo-thumbnail-prices'>
            <div className='service-combo-thumbnail-price'>
              {`${CURRENCY_SYMBOL_CNY} ${data.comboPrice}`}
            </div>
            {(data.comboPrice < (data.comboOriginalPrice || 0)) && (
              <div className='service-combo-thumbnail-original-price'>
                {`${CURRENCY_SYMBOL_CNY} ${data.comboOriginalPrice}`}
              </div>
            )}
          </div>
          {/* <div className='service-combo-thumbnail-footer-right'>
            <a
              className='service-pricing-button'
              href={`https://www.buckydrop.com/en/admin/services_assemble/my_services/detail?comboCode=${data.comboCode}`}
            >
              Details
            </a>
          </div> */}
        </div>
      </div>
    </div>
  )
})

export default ServiceComboThumbnail
