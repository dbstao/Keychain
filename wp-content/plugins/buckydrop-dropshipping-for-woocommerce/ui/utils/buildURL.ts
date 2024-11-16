const buildURL = (path: string): string => {
  const { origin, pathname } = window.location

  return `${origin}${pathname}?page=${path}`
}

export default buildURL