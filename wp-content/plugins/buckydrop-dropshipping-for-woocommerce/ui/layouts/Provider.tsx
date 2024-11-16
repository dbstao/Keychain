import React, { createContext } from '@wordpress/element'

export const Context = createContext({})

const Provider = (props) => {
  const { children, ...rest } = props

  return (
    <Context.Provider
      value={rest}
    >
      {children}
    </Context.Provider>
  )
}

export default Provider