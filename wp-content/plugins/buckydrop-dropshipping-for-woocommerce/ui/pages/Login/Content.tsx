import React, {
  useState,
  useRef,
} from '@wordpress/element'
import { __ } from '@wordpress/i18n'
import {
  Card,
  CardHeader,
  CardBody,
  CardFooter,
  Button,
  TextControl,
  ExternalLink,
  __experimentalHeading as Heading,
  __experimentalDivider as Divider,
} from '@wordpress/components'
import { useFormik } from 'formik'
import * as yup from 'yup'
import { ERROR_NEED_RESOLVE_CAPTCHA } from '@/constants'
import getLang from '@/utils/getLang'
import apiErrorNotification  from '@/utils/apiErrorNotification'
import RSAEncryption from '@/utils/rsaEncryption'
import buildURL from '@/utils/buildURL'
import { requestSignIn } from '@/api/requests'
import MainLayout from '@/layouts/Main'
import Form from '@/components/Form'
import Captcha, { CaptchaType } from '@/components/Captcha'
import Toast from '@/components/Toast'
import HeroBanner from '@/components/HeroBanner'
import Tip from './Tip'

const validationSchema = yup.object({
  account: yup
    .string()
    .email(__('Enter a valid email'))
    .required(__('Email is required'))
    .trim(),
  password: yup
    .string()
    .min(6, __('Password should be of minimum 6 characters length'))
    .max(20, __('Password should be of maximum 20 characters length'))
    .required(__('Password is required')),
})

const Login = () => {
  const lang = getLang()
  const [needCaptcha, setNeedCaptcha] = useState<boolean>()
  const [captchaResponse, setCaptchaResponse] = useState<{ token?: string, eKey?: string }>({})
  const isCaptchaUnVerified = needCaptcha && !captchaResponse?.token
  const captchaRef = useRef<CaptchaType>(null)
  const [isPendingSubmit, setIsPendingSubmit] = useState(false)
  const handleCaptchaVerify = (token, eKey) => {
    setCaptchaResponse({
      token,
      eKey,
    })
  }
  const form = useFormik({
    initialValues: {
      account: '',
      password: '',
    },
    validationSchema,
    onSubmit: async (values) => {
      try {
        setIsPendingSubmit(true)

        const {
          account,
          password,
        } = values
        const rsaEncryption = RSAEncryption.getInstance()
        const requestBody = {
          account,
          password: rsaEncryption.encrypt(password),
          captchaResponse: captchaResponse?.token,
          ajax_nonce: window.buckydropAjax.ajax_nonce,
        }
        const response = await requestSignIn(requestBody)
        const { state, msg } = response || {} 

        if (!state) {
          Toast.success(__('Your store has been successfully linked to the BuckyDrop platform.'))
          location.replace(buildURL('buckydrop-actived'))
        }

        // 验证码已使用，需重置
        if (needCaptcha && state !== 0) {
          captchaRef.current?.resetCaptcha()
          setCaptchaResponse({})
        }
        if (state) {
          if (state === ERROR_NEED_RESOLVE_CAPTCHA) {
            setNeedCaptcha(true)
          }
          throw new Error(msg)
        }
      } catch (error) {
        apiErrorNotification(error)
      } finally {
        setIsPendingSubmit(false)
      }
    },
  })

  return (
    <MainLayout>
      <Card>
        <CardBody>
          <HeroBanner
            message={(
              <p>
                {__('This plugin provides access to the product database through an API. To activate the plugin, please visit the ')}
                <ExternalLink href='https://www.buckydrop.com/en/register?utm_source=woocommerce&utm_medium=plugin'>
                  {__('BuckyDrop website')}
                </ExternalLink>
                {__(' and register an account. After registration, you can search for sources of goods through the BuckyDrop platform, associate them with sources of goods, and perform automated order fulfillment. BuckyDrop provides you with full process guarantees such as product procurement, quality inspection processing, and logistics delivery services.')}
              </p>
            )}
          />
        </CardBody>
      </Card>

      <Divider margin={8} />

      <Form onSubmit={form.handleSubmit}>
        <Card>
          <CardHeader>
            <Heading as='h2'>
              {__('Associate BuckyDrop Account')}
              <Tip />
            </Heading>
          </CardHeader>
          <CardBody>
            <TextControl
              label={__('Email')}
              type='email'
              name='account'
              value={form.values?.account}
              help={form.touched?.account && (
                <span className='text-red'>
                  {form.errors?.account}
                </span>
              )}
              placeholder={__('Email')}
              onChange={form.handleChange('account')}
            />
            <TextControl
              label={__('Password')}
              type='password'
              name='password'
              value={form.values?.password}
              help={form.touched?.password && (
                <span className='text-red'>
                  {form.errors?.password}
                </span>
              )}
              placeholder={__('Password')}
              onChange={form.handleChange('password')}
            />
            {needCaptcha && (
              <Captcha
                ref={captchaRef}
                lang={lang}
                onVerify={handleCaptchaVerify}
              />
            )}
          </CardBody>
          <CardFooter>
            <Button
              isBusy={isPendingSubmit}
              type='submit'
              variant='primary'
              disabled={isCaptchaUnVerified}
            >
              {__('Submit')}
            </Button>
          </CardFooter>
        </Card>
      </Form>
    </MainLayout>
  )
}

export default Login