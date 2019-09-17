import React, {Component} from 'react'
import {
  StatusBar,
  View,
  StyleSheet,
  Image,
  Animated,
  Easing,
} from 'react-native'

import {connect} from 'react-redux'
import {bindActionCreators} from 'redux'
import {actionCreators} from '../../modules'

import {ImagesPath, SCREEN_WIDTH} from '../../constant'
import {Colors} from '../../styles'

import {showMessage, hideMessage} from 'react-native-flash-message'

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: Colors.primary.green(),
    justifyContent: 'center',
    alignItems: 'center',
  },
  logo: {
    width: SCREEN_WIDTH * 0.5,
    height: 40,
    marginBottom: StatusBar.currentHeight,
  },
  img: {
    width: null,
    height: null,
    flex: 1,
    resizeMode: 'contain',
  },
})

class Splash extends Component {
  constructor(props) {
    super(props)

    this.state = {
      isFailed: false,
    }

    this.animVal = new Animated.Value(0)
  }

  opacity() {
    this.animVal.setValue(0)
    Animated.timing(this.animVal, {
      toValue: 1,
      duration: 4000,
      easing: Easing.linear,
      useNativeDriver: true,
    }).start(() => this.opacity())
  }

  navigateToNext() {
    const {data} = this.props
    const dataKey = Object.keys(data)
    const arrNullVal = dataKey.filter(i => data[i] === null)
    
    if (!arrNullVal.length) {
      setTimeout(() => this.props.navigation.navigate('Main'), 500)
    }
  }

  failedConnection(data) {
    if (!this.state.isFailed)
      this.setState({isFailed: true}, () => {
        showMessage({
          message: 'Connection Failed',
          description: 'Failed Connect to Network. Tap here to reload.',
          icon: 'warning',
          type: 'warning',
          hideOnPress: false,
          onPress: () => this.setData(),
        })
      })
  }

  setData() {
    this.setState({isFailed: false}, () => {
      hideMessage()
      this.props.setFooter((status, data) =>
        status ? this.navigateToNext() : this.failedConnection(data),
      )
      this.props.setHomeData((status, data) =>
        status ? this.navigateToNext() : this.failedConnection(data),
      )
      this.props.setGalleryData((status, data) =>
        status ? this.navigateToNext() : this.failedConnection(data),
      )
      this.props.setAboutData((status, data) =>
        status ? this.navigateToNext() : this.failedConnection(data),
      )
      this.props.setContactData((status, data) =>
        status ? this.navigateToNext() : this.failedConnection(data),
      )
    })
  }

  render() {
    const opacity = this.animVal.interpolate({
      inputRange: [0, 0.5, 1],
      outputRange: [0.3, 1, 0.3],
    })
    const scale = this.animVal.interpolate({
      inputRange: [0, 0.5, 1],
      outputRange: [0.97, 1, 0.97],
    })

    return (
      <View style={styles.container}>
        <StatusBar backgroundColor={Colors.primary.green(1)} />
        <Animated.View
          style={[styles.logo, {opacity: opacity, transform: [{scale: scale}]}]}
        >
          <Image
            source={ImagesPath.img.logo.white}
            style={styles.img}
            onLoad={() => {
              this.setData()
              this.opacity()
            }}
          />
        </Animated.View>
      </View>
    )
  }
}

const mapStateToProps = state => ({
  data: {
    ...state.home,
    ...state.global,
    ...state.gallery,
    ...state.about,
    ...state.contact,
  },
})

function mapDispatchToProps(dispatch) {
  return bindActionCreators(
    {
      setHomeData: actionCreators.setHomeData,
      setFooter: actionCreators.getFooter,
      setGalleryData: actionCreators.setGalleryData,
      setAboutData: actionCreators.setAboutData,
      setContactData: actionCreators.setContactData,
    },
    dispatch,
  )
}

export default connect(
  mapStateToProps,
  mapDispatchToProps,
)(Splash)
