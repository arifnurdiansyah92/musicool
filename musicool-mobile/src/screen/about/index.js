import React, {Component} from 'react'
import {Text, View, ScrollView, Image, StatusBar, Animated} from 'react-native'

import {connect} from 'react-redux'
import {bindActionCreators} from 'redux'
// import {actionCreators} from '../../modules'

import WebView from 'react-native-autoheight-webview'

import {Header, Footer} from '../../components'
import {ImagesPath} from '../../constant'
import {Colors} from '../../styles'

import styles from './styles'

class About extends Component {
  constructor(props) {
    super(props)

    this.state = {
      scrollY: new Animated.Value(0),
    }
  }

  render() {
    const {about} = this.props
    
    return (
      <View>
        <StatusBar backgroundColor={Colors.primary.green(1)} />
        <ScrollView
          scrollEventThrottle={1}
          onScroll={Animated.event([
            {nativeEvent: {contentOffset: {y: this.state.scrollY}}},
          ])}
        >
          <View style={styles.contentContainerWhite}>
            <View>
              <Text style={styles.contentBigTitle}>About Us</Text>
              <View style={styles.contentTitleLine} />
            </View>
            <WebView
              originWhitelist={['*']}
              source={{html: about && about.about ? about.about : ''}}
              style={styles.contentWebView}
            />
            <View style={{marginTop: 45, marginBottom: 20}}>
              <Text style={styles.brandValueText}>Brand Values</Text>
              <View style={styles.contentImg}>
                <Image source={ImagesPath.img.brandValue} style={styles.img} />
              </View>
            </View>
          </View>

          <Footer />
        </ScrollView>

        {/* Header disimpan dibawah supaya header tidak tertimpa oleh kontent (nb: z-index pada RN versi ini tidak berfungsi dengan baik di Platform Android. Terima Kasih -Adit) */}
        <Header animationValue={this.state.scrollY} />
      </View>
    )
  }
}

const mapStateToProps = state => ({
  ...state.about,
})

function mapDispatchToProps(dispatch) {
  return bindActionCreators({}, dispatch)
}

export default connect(
  mapStateToProps,
  mapDispatchToProps,
)(About)
