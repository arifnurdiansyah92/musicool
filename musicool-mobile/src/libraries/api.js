import axios from 'axios'
import configuration from '../config/configuration'

const config = configuration['development']
const headerData = ({token, ...data} = {}) => {
  const header = {
    Accept: 'application/json',
    'Content-Type': 'application/json',
    ...data,
  }
  if (token) {
    header['Authorization'] = `Bearer ${token}`
  }

  return header
}

const Api = ({headers, ...axiosConfig} = {}, showLog = true) => {
  const instance = axios.create({
    timeout: 3000,
    baseURL: config.host,
    headers: headerData(headers),
    ...axiosConfig,
  })

  instance.interceptors.request.use(
    function(config) {
      // Do something before request is sent
      showLog && console.log('instance.interceptors.request', config)

      return config
    },
    function(error) {
      // Do something with request error
      return Promise.reject(error)
    },
  )

  return instance
}

export default Api
