import {combineReducers} from 'redux'

// Reducers
import * as GlobalReducer from './Global/reducer'
import * as HomeReducer from './Home/reducer'
import * as GalleryReducer from './Gallery/reducer'
import * as AboutUsReducer from './AboutUs/reducer'
import * as ContactReducer from './Contact/reducer'

// Actions
import * as GlobalAction from './Global/actions'
import * as HomeAction from './Home/actions'
import * as GalleryAction from './Gallery/actions'
import * as AboutUsAction from './AboutUs/actions'
import * as ContactAction from './Contact/actions'

export const reducer = combineReducers(
  Object.assign(
    {},
    GlobalReducer,
    HomeReducer,
    GalleryReducer,
    AboutUsReducer,
    ContactReducer,
  ),
)

export const actionCreators = Object.assign(
  {},
  HomeAction,
  GlobalAction,
  GalleryAction,
  AboutUsAction,
  ContactAction,
)
