import * as types from './types'
import {Api} from '../../libraries'

export function getBanner() {
  return Api({}, false).get('/banners')
}

export function getInfo() {
  return Api({}, false).get('/info')
}

export function getFeatures() {
  return Api({}, false).get('/features')
}

export function setHomeData(_callback) {
  return dispatch =>
    Promise.all([getBanner(), getInfo(), getFeatures()])
      .then(([banner, info, features]) => {
        const data = {
          banner: banner.data.data,
          info: info.data.data,
          features: features.data.data,
        }

        dispatch({
          type: types.SUCCESS_GET_HOME_DATA,
          data,
        })
        _callback && _callback(true, data)
      })
      .catch(err => {
        dispatch({type: types.FAILURE_GET_HOME_DATA})
        _callback && _callback(false, err.response)
      })
}