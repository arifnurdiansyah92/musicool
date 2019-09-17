import React, {Component} from 'react'
import {StatusBar, View, StyleSheet, Text} from 'react-native'

import {Colors, Fonts} from '../../styles'
import {Header} from '../../components'

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: Colors.primary.green(),
    justifyContent: 'center',
    alignItems: 'center',
  },
  text: {
    textTransform: 'capitalize',
    color: Colors.primary.white(),
    fontFamily: Fonts.WorkSans.light,
    fontSize: 50,
    textAlign: 'center',
    paddingHorizontal: 15,
    lineHeight: 65
  },
})

export default class Dummy extends Component {
  render() {
    return (
      <View style={{flex: 1}}>
        <View style={styles.container}>
          <StatusBar backgroundColor={Colors.primary.green(1)} />
          <Text style={styles.text}>under construction</Text>
          <Text style={styles.text}>🛠</Text>
        </View>
        <Header />
      </View>
    )
  }
}
