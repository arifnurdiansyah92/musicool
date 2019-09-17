import React, {Component} from 'react'
import {Text, View} from 'react-native'
import AppNavigator from './src/navigation/router'
import {Provider} from 'react-redux'
import store from './src/modules/store'

import FlashMessage from 'react-native-flash-message'

export default class App extends Component {
  render() {
    return (
      <Provider store={store}>
        <AppNavigator />
        <FlashMessage position="bottom" duration={3000} autoHide={false} />
      </Provider>
    )
  }
}
