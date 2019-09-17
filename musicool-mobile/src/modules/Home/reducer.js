import * as types from './types'
import {CreateReducer} from '../../libraries'

const initialState = {
  banner: null,
  features: null,
  info: null,
}

export const home = CreateReducer(initialState, {
  [types.SUCCESS_GET_HOME_DATA](state, payload) {
    return {
      ...state,
      banner: payload.data.banner,
      features: payload.data.features,
      info: payload.data.info,
    }
  },
})
