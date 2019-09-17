import * as types from './types'
import {CreateReducer} from '../../libraries'

const initialState = {
  location: null,
  phone: null,
  email: null,
}

export const contact = CreateReducer(initialState, {
  [types.SUCCESS_GET_CONTACT_DATA](state, payload) {
    return {
      ...state,
      location: payload.data.location,
      phone: payload.data.phone,
      email: payload.data.email,
    }
  },
})
