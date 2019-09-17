import React, {Component} from 'react'
import {Text, StyleSheet, StatusBar, View, Alert} from 'react-native'

import QRCodeScanner from 'react-native-qrcode-scanner'
import {Colors} from '../../styles'
import {SCREEN_HEIGHT, SCREEN_WIDTH} from '../../constant'

const height = SCREEN_HEIGHT - StatusBar.currentHeight

const styles = StyleSheet.create({
  camera: {
    height: height,
  },

  markerContainer: {
    width: SCREEN_WIDTH,
    height: height,
  },
  markerOutsideColor: {
    backgroundColor: 'rgba(0,0,0,0.6)',
  },
  markerOutsideTop: {
    width: SCREEN_WIDTH,
    height: height * 0.2,
  },
  markerOutsideBottom: {
    width: SCREEN_WIDTH,
    flex: 1,
  },
  markerOutsideSide: {
    width: SCREEN_WIDTH * 0.225,
    height: SCREEN_WIDTH * 0.55,
  },
  marker: {
    width: SCREEN_WIDTH * 0.55,
    height: SCREEN_WIDTH * 0.55,
    borderColor: Colors.primary.green(),
    borderWidth: 0.2,
  },
  markerCorner: {
    width: 20,
    height: 20,
    borderTopWidth: 3,
    borderLeftWidth: 3,
    borderColor: Colors.primary.green(),
    position: 'absolute',
  },
})

class QRCodeMarker extends Component {
  render() {
    return (
      <View style={styles.markerContainer}>
        <View style={[styles.markerOutsideColor, styles.markerOutsideTop]} />
        <View style={{flexDirection: 'row', alignItems: 'center'}}>
          <View style={[styles.markerOutsideColor, styles.markerOutsideSide]} />
          <View
            style={styles.marker}
          >
            <View style={styles.markerCorner} />
            <View
              style={[
                styles.markerCorner,
                {right: 0, transform: [{rotate: '90deg'}]},
              ]}
            />
            <View
              style={[
                styles.markerCorner,
                {bottom: 0, right: 0, transform: [{rotate: '180deg'}]},
              ]}
            />
            <View
              style={[
                styles.markerCorner,
                {bottom: 0, left: 0, transform: [{rotate: '-90deg'}]},
              ]}
            />
          </View>
          <View style={[styles.markerOutsideColor, styles.markerOutsideSide]} />
        </View>

        <View style={[styles.markerOutsideColor, styles.markerOutsideBottom]} />
      </View>
    )
  }
}

export default class QRCode extends Component {
  constructor(props) {
    super(props)

    this.state = {
      focusedScreen: false,
    }
  }

  onSuccess = e => {
    Alert.alert('QR CODE', e.data)
  }

  componentDidMount() {
    const {navigation} = this.props
    navigation.addListener('willFocus', () =>
      this.setState({focusedScreen: true}),
    )
    navigation.addListener('willBlur', () =>
      this.setState({focusedScreen: false}),
    )
  }

  render() {
    const {focusedScreen} = this.state
    return focusedScreen ? (
      <QRCodeScanner
        onRead={this.onSuccess}
        showMarker={true}
        customMarker={<QRCodeMarker />}
        containerStyle={styles.cameraContainer}
        reactivate={true}
        reactivateTimeout={5000}
        cameraStyle={styles.camera}
      />
    ) : (
      <View />
    )
  }
}
