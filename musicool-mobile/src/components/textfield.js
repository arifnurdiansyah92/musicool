import React, {Component} from 'react'
import {View, TextInput, StyleSheet, Animated} from 'react-native'

import Icon from 'react-native-vector-icons/FontAwesome'
const AnimatedIcon = Animated.createAnimatedComponent(Icon)

import {Colors, Fonts} from '../styles'

const styles = StyleSheet.create({
  container: {
    backgroundColor: Colors.light.gray(),
    flexDirection: 'row',
    paddingHorizontal: 20,
    alignItems: 'center',
    width: "100%"
  },
  textInput: {
    flex: 1,
    fontFamily: Fonts.WorkSans.regular,
    color: Colors.primary.gray(),
  },
  icon: {
    fontSize: 20,
    marginLeft: 10,
    color: 'red',
  },
  textArea: {
    height: 150,
    textAlignVertical: 'top',
    paddingVertical: 15,
  },
})

export default class TextField extends Component {
  constructor(props) {
    super(props)

    this.state = {
      springVal: new Animated.Value(0),
    }
  }

  runAnimation() {
    Animated.spring(this.state.springVal, {
      toValue: 1,
      friction: 1,
      useNativeDriver: true,
    }).start()
  }

  render() {
    const {errMsg, style, containerStyle, multiline, placeholder, ...props} = this.props

    return (
      <View style={[styles.container, containerStyle]}>
        <TextInput
          multiline={multiline}
          autoCorrect={false}
          {...props}
          placeholder={errMsg ? errMsg : placeholder}
          placeholderTextColor={errMsg && "red"}
          style={[styles.textInput, style, multiline && styles.textArea]}
        />
        {errMsg && (
          <AnimatedIcon
            onLayout={() => this.runAnimation()}
            name="exclamation"
            style={[styles.icon, {transform: [{scale: this.state.springVal}]}]}
          />
        )}
      </View>
    )
  }
}
