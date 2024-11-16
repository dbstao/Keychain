import React from '@wordpress/element'
import { Toaster } from 'react-hot-toast'
import '@/api'
import Provider from './Provider'
import useUserInfo from '@/hooks/useUserInfo'
import '@/styles/global.scss'
import './index.scss'

type Props = {
  children: any
}

const Layout = (props: Props) => {
  const { children } = props
  const { userInfo } = useUserInfo()

  return (
    <Provider
      userInfo={userInfo}
    >
      <main className='base-layout'>
        {children}
        <Toaster
          containerStyle={{
            marginTop: '30px',
          }}
          toastOptions={{
            style: {
              minWidth: '380px',
            }
          }}
        />
      </main>
    </Provider>
  )
}

export default Layout