import React, {Component} from 'react'
import {Animated, TouchableOpacity, Image} from 'react-native'
import {SCREEN_WIDTH} from '../constant'
import {Colors} from '../styles'

export default class ImageButton extends Component {
  constructor(props) {
    super(props)

    this.state = {
      btnScaleAnim: new Animated.Value(1),
    }
  }

  handleBtnPressDown() {
    Animated.spring(this.state.btnScaleAnim, {
      toValue: 0.95,
      duration: 100,
      useNativeDriver: true,
    }).start()
  }

  handleBtnPressUp() {
    Animated.timing(this.state.btnScaleAnim, {
      toValue: 1,
      duration: 100,
      useNativeDriver: true,
    }).start()
  }

  render() {
    const {onPress} = this.props
    const {btnScaleAnim} = this.state

    return (
      <TouchableOpacity
        onPress={() => onPress && onPress()}
        activeOpacity={1}
        onPressIn={() => this.handleBtnPressDown()}
        onPressOut={() => this.handleBtnPressUp()}
        style={{
          width: SCREEN_WIDTH - 30,
          height: (SCREEN_WIDTH - 30) / 1.75 + 40,
        }}
      >
        <Animated.View
          style={{
            top: 20,
            position: 'absolute',
            width: SCREEN_WIDTH - 30,
            height: (SCREEN_WIDTH - 30) / 1.75,
            backgroundColor: Colors.light.gray(),
            borderRadius: 12,
            elevation: 2,
            overflow: 'hidden',
            transform: [{scale: btnScaleAnim}],
          }}
        >
          <Image
            source={this.props.source}
            style={{width: '100%', height: '100%'}}
          />
        </Animated.View>
      </TouchableOpacity>
    )
  }
}
