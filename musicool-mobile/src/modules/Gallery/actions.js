import * as types from './types'
import {Api} from '../../libraries'

export function getCategory() {
  return Api({}, false).get('/category_gallery')
}

export function getGallery(params) {
  return Api({}, false).get('/gallery', {params: {...params, limit: 5}})
}

export function setGalleryData(_callback) {
  return dispatch =>
    Promise.all([getCategory(), getGallery({page: 1})])
      .then(([category, gallery]) => {
        const data = {
          category: category.data.data,
          gallery: gallery.data.data,
          page: gallery.data.current_page,
          nextPage: gallery.data.last_page > gallery.data.current_page,
        }
        dispatch({
          type: types.SUCCESS_GET_GALLERY_DATA,
          data,
        })
        _callback && _callback(true, data)
      })
      .catch(err => {
        dispatch({type: types.FAILURE_GET_GALLERY_DATA})
        _callback && _callback(false, err.response)
      })
}

export function setGallery(category = null, _callback) {
  return (dispatch, getState) => {
    // Kosongkan data sebelum ambil yang baru
    dispatch({
      type: types.SUCCESS_EMPTY_LIST_GALLERY_DATA,
    })

    getGallery({category_id: category, page: 1})
      .then(res => {
        dispatch({
          type: types.SUCCESS_GET_LIST_GALLERY_DATA,
          data: res.data.data,
          page: res.data.current_page,
          nextPage: res.data.last_page > res.data.current_page,
        })
        _callback && _callback(true, res.data)
      })
      .catch(error => {
        dispatch({type: types.FAILURE_GET_LIST_GALLERY_DATA})
        _callback && _callback(false, error.response)
      })
  }
}

export function setMoreGallery(category = null, _callback) {
  return (dispatch, getState) => {
    if (getState().gallery.nextPage) {
      getGallery({category_id: category, page: getState().gallery.page + 1})
        .then(res => {
          dispatch({
            type: types.SUCCESS_GET_MORE_LIST_GALLERY_DATA,
            data: res.data.data,
            page: res.data.current_page,
            nextPage: res.data.last_page > res.data.current_page,
          })
          _callback && _callback(true, res.data)
        })
        .catch(error => {
          dispatch({type: types.FAILURE_GET_MORE_LIST_GALLERY_DATA})
          _callback && _callback(false, error.response)
        })
    }
  }
}
