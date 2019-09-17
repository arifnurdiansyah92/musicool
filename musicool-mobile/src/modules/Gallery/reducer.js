import * as types from './types'
import {CreateReducer} from '../../libraries'

const initialState = {
  page: 1,
  nextPage: false,
  gallery: null,
  category: null,
}

export const gallery = CreateReducer(initialState, {
  [types.SUCCESS_GET_GALLERY_DATA](state, payload) {
    return {
      ...state,
      category: payload.data.category,
      page: payload.data.page,
      nextPage: payload.data.nextPage,
      gallery: payload.data.gallery,
    }
  },
  [types.SUCCESS_GET_LIST_GALLERY_DATA](state, payload) {
    return {
      ...state,
      page: payload.page,
      nextPage: payload.nextPage,
      gallery: payload.data,
    }
  },
  [types.SUCCESS_GET_MORE_LIST_GALLERY_DATA](state, payload) {
    return {
      ...state,
      page: payload.page,
      nextPage: payload.nextPage,
      gallery: [...state.gallery, ...payload.data],
    }
  },
  [types.SUCCESS_EMPTY_LIST_GALLERY_DATA](state) {
    return {
      ...initialState,
      category: state.category,
    }
  },
})
