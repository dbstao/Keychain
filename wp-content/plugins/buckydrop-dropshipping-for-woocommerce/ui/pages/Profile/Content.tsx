import React from '@wordpress/element'
import {
  Card,
  CardHeader,
  CardBody,
  ExternalLink,
  __experimentalHeading as Heading,
  __experimentalDivider as Divider,
  __experimentalItemGroup as ItemGroup,
  __experimentalItem as Item,
} from '@wordpress/components'
import { __ } from '@wordpress/i18n'
import MainLayout from '@/layouts/Main'
import useGlobalState from '@/hooks/useGlobalState'
import HeroBanner from '@/components/HeroBanner'

const Profile = () => {
  const { userInfo } = useGlobalState()

  return (
    <MainLayout>
      <Card>
        <CardBody>
          <HeroBanner
            message={(
              <p>
                {__('You have completed the account activation process. Please visit the ')}
                <ExternalLink href='https://buckydrop.com/en/login'>
                  {__('BuckyDrop website')}
                </ExternalLink>
                {__(' and log in to your associated account. Through the BuckyDrop platform, you can search for sources of goods and associate them, enabling automated order fulfillment. BuckyDrop provides you with end-to-end guarantees, including product procurement, quality inspection processing, and logistics delivery services.')}
              </p>
            )}
          />
        </CardBody>
      </Card>

      <Divider margin={8} />

      <Card>
        <CardHeader>
          <Heading as='h2'>
            {__('Profile')}
          </Heading>
        </CardHeader>
        <CardBody>
          <p>
            {__('Congratulations on successfully associating our account. You can access ')}
            <ExternalLink href='https://www.buckydrop.com'>
              {__('BuckyDrop')}
            </ExternalLink>
            {__(' for more operations.')}
          </p>
          <Divider margin={4} />
          <ItemGroup>
            <Item size='large'>
              <span>{__('Email')}:</span>
              <span className='ml-5'>{userInfo?.accountName}</span>
            </Item>
          </ItemGroup>
        </CardBody>
      </Card>
    </MainLayout>
  )
}

export default Profile
