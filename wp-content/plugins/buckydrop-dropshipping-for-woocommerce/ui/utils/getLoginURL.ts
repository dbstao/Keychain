const getLoginURL = () => {
  const { origin, pathname } = window.location

  return `${origin}${pathname}?page=buckydrop-active`
}

export default getLoginURL