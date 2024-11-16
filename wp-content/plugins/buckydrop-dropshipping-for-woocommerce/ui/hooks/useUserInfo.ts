import { useState, useEffect } from '@wordpress/element'
import { requestUserInfo } from '@/api/requests'
import apiErrorNotification  from '@/utils/apiErrorNotification'
import getPath from '@/utils/getPath'

const skipPaths = [
  'buckydrop-active',
  'buckydrop-pricing',
]

const useUserInfo = () => {
  const [userInfo, setUserInfo] = useState<any>()
  const path = getPath()
  const skip = skipPaths.includes(path)

  useEffect(() => {
    if (skip) return

    requestUserInfo()
      .then(({ state, msg, data = {} }) => {
        if (state) throw new Error(msg)
        setUserInfo(data)
      })
      .catch(apiErrorNotification)
  }, [skip])

  return {
    userInfo,
  }
}

export default useUserInfo