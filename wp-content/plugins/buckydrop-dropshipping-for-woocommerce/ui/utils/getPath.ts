import qs from 'qs'

const getPath = (urlSearch = window.location.search) => {
  const queryString = urlSearch.replace(/^(\?)/i, '')
  const { page } = qs.parse(queryString) || {}

  return page
}

export default getPath