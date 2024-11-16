import axios from 'axios'
import qs from 'qs'
import { ERROR_NEED_ASSOCIATE_BUCKYDROP } from '@/constants'
import getLoginURL from '@/utils/getLoginURL'

const baseURL = (location.origin + location.pathname).match(/(https?:\/\/.*?)\/wp-admin\//)?.[1] || '/'
axios.defaults.baseURL = baseURL
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=UTF-8'

axios.interceptors.request.use(config => {
  return {
    ...config,
    headers: {
      ...config.headers,
      Lang: 'en',
    },
    data: typeof config?.data !== 'undefined' ? qs.stringify(config.data) : undefined,
  }
}, error => {
  return Promise.reject(error)
})

axios.interceptors.response.use(response => {
  if (response.data?.state === ERROR_NEED_ASSOCIATE_BUCKYDROP) {
    location.href = getLoginURL()
    return Promise.reject()
  }
  if (typeof response.data?.state !== 'undefined') {
    const { state, msg, ...rest } = response.data

    return {
      ...rest,
      state,
      msg: `${msg} [${state}]`,
    }
  } else {
    return response.data
  }
}, error => {
  console.log(error)
})