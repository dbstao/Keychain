import React from '@wordpress/components'

type Props = {
  schema: any
  children: any
  onSubmit: any
}

const Form = (props: Props) => {
  const {
    children,
    onSubmit,
  } = props
  return (
    <form onSubmit={onSubmit}>
      {children}
    </form>
  )
}

export default Form
