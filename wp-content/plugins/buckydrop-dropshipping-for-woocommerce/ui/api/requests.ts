import axios from 'axios'

export const requestSignIn = (requestBody) => (
  axios.post('/wp-admin/admin-ajax.php', {
    ...requestBody,
    action: 'buckydrop_active_account',
  })
)

export const requestUserInfo = (requestBody) => (
  axios.post('/wp-admin/admin-ajax.php', {
    ...requestBody,
    action: 'buckydrop_user_info',
  })
)

export const requestRecommendedServiceCombos = (requestBody) => (
  axios.post('/wp-admin/admin-ajax.php', {
    ...requestBody,
    action: 'buckydrop_get_ticket_list',
  })
)