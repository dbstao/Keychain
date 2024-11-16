const classNames = (obj: any): string => {
  const arr: string[] = []
  Object.keys(obj).forEach(key => {
    if (!!obj[key]) {
      arr.push(key)
    }
  })
  return arr.join(' ')
}

export default classNames;
