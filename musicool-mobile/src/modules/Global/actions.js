import * as types from './types'
import {Api} from '../../libraries'

export function getFooter(_callback) {
  return dispatch => {
    Api({}, false)
      .get('/contacts')
      .then(res => {
        dispatch({
          type: types.SUCCESS_GET_FOOTER_DATA,
          data: res.data.data,
        })
        _callback && _callback(true, res.data)
      })
      .catch(error => {
        dispatch({type: types.FAILURE_GET_FOOTER_DATA})
        _callback && _callback(false, error.response)
      })
  }
}

export function postSubscribeEmail(email, _callback) {
  return dispatch => {
    Api()
      .post('/subscriber', {email})
      .then(e => {
        dispatch({
          type: types.SUCCESS_POST_SUBSCRIBER_DATA,
        })
        _callback && _callback(true, e)
      })
      .catch(e => {
        dispatch({
          type: types.FAILURE_POST_SUBSCRIBER_DATA,
        })
        _callback && _callback(false, e.response)
      })
  }
}
