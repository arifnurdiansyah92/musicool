import React from 'react'
import {Text, StyleSheet, TouchableOpacity} from 'react-native'

import {Colors, Fonts} from '../styles'

const styles = StyleSheet.create({
  btnContrainer: {
    backgroundColor: Colors.primary.green(),
    alignItems: 'center',
    flexDirection: 'row',
    justifyContent: 'center',
    paddingVertical: 15,
    borderRadius: 100,
    paddingHorizontal: 10,
  },
  btnText: {
    color: Colors.primary.white(),
    textAlign: 'center',
    textTransform: 'uppercase',
    fontFamily: Fonts.WorkSans.medium,
  },
})

const Button = ({style, textStyle, children = '', ...props}) => {
  return (
    <TouchableOpacity {...props} style={[styles.btnContrainer, style]}>
      <Text style={[styles.btnText, textStyle]}>{children}</Text>
    </TouchableOpacity>
  )
}

export default Button
