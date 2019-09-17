import * as types from './types'
import {Api} from '../../libraries'

export function getAbout() {
  return Api({}, false).get('/about')
}

export function setAboutData(_callback) {
  return dispatch => {
    getAbout()
      .then(res => {
        dispatch({
          type: types.SUCCESS_GET_ABOUT_DATA,
          data: res.data.data,
        })
        _callback && _callback(true, res.data)
      })
      .catch(error => {
        dispatch({type: types.FAILURE_GET_ABOUT_DATA})
        _callback && _callback(false, error.response)
      })
  }
}
