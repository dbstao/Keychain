import { useContext } from '@wordpress/element'
import { Context } from '@/layouts/Provider'

const useGlobalState = () => {
  const value = useContext(Context)

  if (typeof value === 'undefined') {
    throw new Error('useGlobalState 必须在 Provider 中使用')
  }

  return value
}

export default useGlobalState
