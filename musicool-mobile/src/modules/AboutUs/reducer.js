import * as types from './types'
import {CreateReducer} from '../../libraries'

const initialState = {
  about: null,
}

export const about = CreateReducer(initialState, {
  [types.SUCCESS_GET_ABOUT_DATA](state, payload) {
    return {
      ...state,
      about: payload.data,
    }
  },
})
