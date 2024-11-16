import React, { forwardRef } from '@wordpress/element'
import HCaptcha from '@hcaptcha/react-hcaptcha'
import './index.scss'

type Props = {
  lang: string
  className?: string
  theme?: 'light' | 'dark'
  onVerify: (token: string, eKey: string) => void
  onExpire?: () => void
  onError?: () => void
}

export type CaptchaType = {
  execute(): Promise<{ token: string, eKey: string }>
  resetCaptcha(): void
}

const HCAPTCHA_KEY = '30c06cf9-6a27-4b60-a650-b1da443a0f0e'

const Captcha = forwardRef<any, Props>((props, ref) => {
  const {
    lang,
    className = '',
    theme,
    onVerify,
    onExpire,
    onError,
  } = props
  const handleVerificationSuccess = (token: string, eKey: string) => {
    onVerify?.(token, eKey)
  }
  const handleExpire = () => {
    onExpire?.()
  }
  const handleError = () => {
    onError?.()
  }

  return (
    <div className={`captcha ${className}`}>
      <HCaptcha
        ref={ref}
        theme={theme}
        sitekey={HCAPTCHA_KEY}
        languageOverride={lang}
        /* @ts-ignore */
        onVerify={handleVerificationSuccess}
        onExpire={handleExpire}
        onError={handleError}
      />
    </div>
  )
})

export default Captcha
