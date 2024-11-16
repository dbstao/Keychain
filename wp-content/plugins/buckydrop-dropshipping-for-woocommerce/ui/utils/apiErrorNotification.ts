import toast from '@/components/Toast'

const apiErrorNotification = (error) => {
  toast.error(error.message)
}

export default apiErrorNotification