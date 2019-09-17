import React, {Component} from 'react'
import {Animated, View, Image, StyleSheet, TouchableOpacity} from 'react-native'

import {withNavigation} from 'react-navigation'

import {APPBAR_HEIGHT, ImagesPath} from '../constant'
import {Colors} from '../styles'
import Icon from 'react-native-vector-icons/MaterialCommunityIcons'

const AnimateIcon = Animated.createAnimatedComponent(Icon)

const styles = StyleSheet.create({
  container: {
    height: APPBAR_HEIGHT,
    flexDirection: 'row',
    alignItems: 'center',
    paddingHorizontal: 15,
    position: 'absolute',
    right: 0,
    left: 0,
    top: 0,
    zIndex: 10000
  },
  logo: {
    width: 140,
    height: 25,
    marginBottom: 5,
  },

  img: {
    width: null,
    height: null,
    flex: 1,
    resizeMode: 'contain',
  },
})

class Header extends Component {
  render() {
    const {animationValue} = this.props

    const backgroundColor = animationValue
      ? animationValue.interpolate({
          inputRange: [0, APPBAR_HEIGHT, APPBAR_HEIGHT * 2],
          outputRange: [
            'transparent',
            'transparent',
            Colors.primary.green(0.85),
          ],
          extrapolate: 'clamp',
          useNativeDriver: true,
        })
      : null

    const top = animationValue
      ? animationValue.interpolate({
          inputRange: [0, APPBAR_HEIGHT, APPBAR_HEIGHT * 2],
          outputRange: [0, -APPBAR_HEIGHT, 0],
          extrapolate: 'clamp',
          useNativeDriver: true,
        })
      : null

    const color = animationValue
      ? animationValue.interpolate({
          inputRange: [0, APPBAR_HEIGHT, APPBAR_HEIGHT * 2],
          outputRange: [
            Colors.primary.black(1),
            Colors.primary.black(1),
            Colors.primary.white(1),
          ],
          extrapolate: 'clamp',
          useNativeDriver: true,
        })
      : null

    const opacity = animationValue
      ? animationValue.interpolate({
          inputRange: [0, APPBAR_HEIGHT, APPBAR_HEIGHT * 2],
          outputRange: [0, 0, 1],
          extrapolate: 'clamp',
          useNativeDriver: true,
        })
      : null

    return (
      <Animated.View
        style={[styles.container, {backgroundColor: backgroundColor, top: top}]}
      >
        <View style={{flex: 1}}>
          <View style={styles.logo}>
            <Image source={ImagesPath.img.logo.normal} style={styles.img} />
          </View>
          <Animated.View
            style={[styles.logo, {marginTop: -30, opacity: opacity}]}
          >
            <Image source={ImagesPath.img.logo.white} style={styles.img} />
          </Animated.View>
        </View>
        <View style={{flex: 1, alignItems: 'flex-end'}}>
          <TouchableOpacity
            activeOpacity={0.7}
            onPress={() => this.props.navigation.openDrawer()}
          >
            <AnimateIcon name="menu" style={{fontSize: 30, color: color}} />
          </TouchableOpacity>
        </View>
      </Animated.View>
    )
  }
}

export default withNavigation(Header)
