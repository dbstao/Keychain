import React from '@wordpress/element'
import './index.scss'

type Props = {
  children: any
}

const MainLayout = (props: Props) => {
  const { children } = props

  return (
    <div className='main-layout'>
      {children}
    </div>
  )
}

export default MainLayout