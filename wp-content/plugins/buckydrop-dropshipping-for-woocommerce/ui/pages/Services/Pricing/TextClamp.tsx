import React, { memo, useState, useEffect } from "@wordpress/element"

interface PropsInterface {
  text: string
}

const btnStyle = { padding: '0', fontSize: '12px', height: '17px' }
const iconStyle = { fontSize: '8px', marginLeft: '3px' }

const TextClamp = memo((props: PropsInterface) => {
  const { text } = props

  const [isPhone, setIsPhone] = useState(false)
  const [isFold, setIsFold] = useState(true)
  const [maxTextLength, setMaxTextLength] = useState(180)

  useEffect(() => {
    const handleResize = () => {
      setIsPhone(window.innerWidth <= 768)
      setMaxTextLength((Math.trunc(window.innerWidth - 36) / 2))
    }

    handleResize()

    window.addEventListener('resize', handleResize)

    // 清除事件监听器
    return () => {
      window.removeEventListener('resize', handleResize)
    }
  }, [])

  const isOverLength = text.length > maxTextLength
  const formatText = `${text.substr(0, maxTextLength - 30)}...`

  return (
    isPhone && isOverLength ? (
      isFold ? (
        <>
          <span className='mr-8'>{formatText}</span>
          <a style={btnStyle} type='link' onClick={() => setIsFold(false)}>
            More Details
            <span role="img" aria-label="down" class="anticon anticon-down" style="font-size: 8px; margin-left: 3px;"><svg viewBox="64 64 896 896" focusable="false" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path></svg></span>
          </a>
        </>
      ) : (
        <>
          <span className='mr-8'>{text}</span>
          <a style={btnStyle} type='link' onClick={() => setIsFold(true)}>
            Pack Up
            <span role="img" aria-label="up" class="anticon anticon-up" style="font-size: 8px; margin-left: 3px;"><svg viewBox="64 64 896 896" focusable="false" data-icon="up" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M890.5 755.3L537.9 269.2c-12.8-17.6-39-17.6-51.7 0L133.5 755.3A8 8 0 00140 768h75c5.1 0 9.9-2.5 12.9-6.6L512 369.8l284.1 391.6c3 4.1 7.8 6.6 12.9 6.6h75c6.5 0 10.3-7.4 6.5-12.7z"></path></svg></span>
          </a>
        </>
      )
    ) : (
      <span>{text}</span>
    )
  )
})

export default TextClamp
