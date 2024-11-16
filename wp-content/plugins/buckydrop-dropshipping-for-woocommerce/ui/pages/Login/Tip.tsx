import React, { useState } from '@wordpress/element'
import {
  Button,
  Icon,
  Modal,
  ExternalLink,
} from '@wordpress/components'
import { __ } from '@wordpress/i18n'

const Tip = () => {
  const [isModalVisible, setIsModalVisible] = useState(false)
  const handleOpenModal = () => {
    setIsModalVisible(true)
  }
  const handleCloseModal = () => {
    setIsModalVisible(false)
  }

  return (
    <>
      <Icon
        icon='editor-help'
        size={30}
        className='cursor-pointer text-gray ml-5'
        onClick={handleOpenModal}
      />
      {isModalVisible && (
        <Modal
          title={__('Tip')}
          style={{ maxWidth: '600px' }}
          onRequestClose={handleCloseModal}
        >
          <p>
            {__('Visit the ')}
            <ExternalLink href='https://www.buckydrop.com/en/register?utm_source=woocommerce&utm_medium=plugin'>
              {__('BuckDrop official website')}
            </ExternalLink>
            {__(' to register an account and associate it with WooCommerce to quickly fulfill the contract')}
          </p>
          <footer className='text-center'>
            <Button
              variant='primary'
              onClick={handleCloseModal}
            >
              {__('OK')}
            </Button>
          </footer>
        </Modal>
      )}
    </>
  )
}

export default Tip