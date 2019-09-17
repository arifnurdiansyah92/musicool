import * as types from './types'
import {CreateReducer} from '../../libraries'

const initialState = {
  footer: null,
}

export const global = CreateReducer(initialState, {
  [types.SUCCESS_GET_FOOTER_DATA](state, payload) {
    return {
      ...state,
      footer: payload.data,
    }
  },
})
