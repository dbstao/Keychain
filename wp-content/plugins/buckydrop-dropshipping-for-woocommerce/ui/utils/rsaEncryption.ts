import JSEncrypt from 'jsencrypt'

export const RSA_PUB_KEY = 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCCwAswp457ZU92anOohs/j2QBhSV5JeLEZpf2x1quN3Hj+7WJl4FZx+NkUCbGwYk3WlY9zH06RUoKJFJV/hShe1oI/m8VtKFL5RkIpQWqiAIGIFeW5q7NbKnSToe+yAu63+VDBmXB8w9jPdpZ3neynxIXu9MYaFh4I4jX3h7M0YQIDAQAB'

export default class RSAEncryption {
  static instance: any
  crypt: any

  constructor () {
    this.crypt = new JSEncrypt()
    this.crypt.setKey(RSA_PUB_KEY)
  }

  static getInstance () {
    if (!this.instance) {
      this.instance = new RSAEncryption()
    }
    return this.instance
  }

  encrypt (text) {
    return this.crypt.encrypt(text.toString())
  }
}
