import * as types from './types'
import {Api} from '../../libraries'

export function getLocation() {
  return Api({}, false).get('/location')
}
export function getPhone() {
  return Api({}, false).get('/phone')
}
export function getEmail() {
  return Api({}, false).get('/email')
}

export function setContactData(_callback) {
  return dispatch =>
    Promise.all([getLocation(), getPhone(), getEmail()])
      .then(([location, phone, email]) => {
        const data = {
          location: location.data.data,
          phone: phone.data.data,
          email: email.data.data,
        }

        dispatch({
          type: types.SUCCESS_GET_CONTACT_DATA,
          data,
        })
        _callback && _callback(true, data)
      })
      .catch(err => {
        dispatch({type: types.FAILURE_GET_CONTACT_DATA})
        _callback && _callback(false, err.response)
      })
}

export function sendEmail(data, _callback) {
  return dispatch => {
    Api()
      .post('/contact_us', data)
      .then(e => {
        dispatch({
          type: types.SUCCESS_SEND_CONTACT,
        })
        _callback && _callback(true, e)
      })
      .catch(e => {
        dispatch({
          type: types.FAILURE_SEND_CONTACT,
        })
        _callback && _callback(false, e.response)
      })
  }
}
