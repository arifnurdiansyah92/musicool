import React, {Component} from 'react'
import {
  Text,
  View,
  ImageBackground,
  ScrollView,
  Image,
  StatusBar,
  Animated,
} from 'react-native'

import {connect} from 'react-redux'
import {bindActionCreators} from 'redux'
// import {actionCreators} from '../../modules'

import WebView from 'react-native-autoheight-webview'

import {Header, Footer} from '../../components'
import {ImagesPath, SCREEN_WIDTH} from '../../constant'
import {Colors} from '../../styles'

import styles from './styles'

class Home extends Component {
  constructor(props) {
    super(props)

    this.state = {
      curBanner: 0,
      scrollY: new Animated.Value(0),
    }

    this.headerInterval = null
  }

  runHeaderInterval(duration = 5000) {
    // console.log('Init Interval')
    const {banner} = this.props
    this.headerInterval = setInterval(() => {
      const {curBanner} = this.state
      if (this.header) {
        this.setState(
          {curBanner: curBanner + 1 === banner.length ? 0 : curBanner + 1},
          () => {
            this.header.scrollTo({
              x: SCREEN_WIDTH * this.state.curBanner,
              animated: true,
            })
          },
        )
      }
    }, duration)
  }

  stopHeaderInterval() {
    // console.log('Clear Interval')
    clearInterval(this.headerInterval)
  }

  componentDidMount() {
    const {navigation} = this.props
    navigation.addListener('willFocus', () => this.runHeaderInterval())
    navigation.addListener('willBlur', () => this.stopHeaderInterval())
  }

  render() {
    const {banner, info, features} = this.props
    const {curBanner} = this.state

    return (
      <View>
        <StatusBar backgroundColor={Colors.primary.green(1)} />
        <ScrollView
          scrollEventThrottle={1}
          onScroll={Animated.event([
            {nativeEvent: {contentOffset: {y: this.state.scrollY}}},
          ])}
        >
          <View>
            <ScrollView
              ref={ref => (this.header = ref)}
              bounces={false}
              horizontal={true}
              pagingEnabled={true}
              showsHorizontalScrollIndicator={false}
              onMomentumScrollEnd={e =>
                this.setState({
                  curBanner: Math.round(
                    e.nativeEvent.contentOffset.x / SCREEN_WIDTH,
                  ),
                })
              }
            >
              {banner && banner.length ? (
                banner.map((i, idx) => (
                  <View key={'banner-' + idx} style={styles.headerBGContainer}>
                    <ImageBackground
                      source={{uri: i.banner}}
                      resizeMode="cover"
                      style={styles.headerBG}
                    >
                      <View style={styles.header}>
                        <View style={styles.headerTop}>
                          <View>
                            <Text style={styles.headerText}>
                              Hematnya Energi Hijaunya Bumi
                            </Text>
                            <View style={styles.headerBrand}>
                              <Image
                                source={ImagesPath.img.brandName}
                                style={styles.img}
                              />
                            </View>
                          </View>
                        </View>

                        <View style={styles.headerBottom}>
                          <View style={{flex: 1}}>
                            <View style={styles.leafImg}>
                              <Image
                                source={ImagesPath.img.leaf.one}
                                style={styles.img}
                              />
                            </View>
                          </View>
                          <View style={styles.healImg}>
                            <Image
                              source={ImagesPath.img.healTheEarth}
                              style={styles.img}
                            />
                          </View>
                        </View>
                      </View>
                    </ImageBackground>
                  </View>
                ))
              ) : (
                <View style={styles.headerBGContainer} />
              )}
            </ScrollView>
            <View style={styles.indicatorContainer}>
              <ScrollView horizontal={true} style={{width: 25 * banner.length}}>
                {banner.map((i, idx) => (
                  <View
                    key={'indicator' + idx}
                    style={[
                      styles.indicator,
                      curBanner === idx && styles.indicatorActive,
                    ]}
                  />
                ))}
              </ScrollView>
            </View>
          </View>

          <View style={styles.contentContainerWhite}>
            <View style={styles.contentLogo}>
              <Image source={ImagesPath.img.brandName} style={styles.img} />
            </View>
            <Text style={styles.contentTitle}>
              {info && info.tagline ? info.tagline : 'No Tagline'}
            </Text>
            <WebView
              originWhitelist={['*']}
              source={{html: info && info.info ? info.info : 'No Item'}}
              style={styles.contentWebView}
            />
            <View style={styles.contentImg}>
              <Image source={ImagesPath.img.product.one} style={styles.img} />
            </View>
          </View>

          <View style={styles.contentContainerGrey}>
            <Text style={styles.contentTitle}>
              Kelebihan Musicool Refrigerant MC 22 dibandingkan dengan bahan
              pendingin Freon
            </Text>
            {features &&
              features.map((i, idx) => (
                <View key={'features-' + idx}>
                  <Text style={styles.contentSubTitle}>
                    {i.title ? i.title : 'Untitle'}
                  </Text>
                  <Text style={styles.content}>
                    {i.description ? i.description : 'No Description'}
                  </Text>
                </View>
              ))}
          </View>

          <View style={styles.contentContainerGreen}>
            <WebView
              originWhitelist={['*']}
              source={{html: info && info.values ? info.values : ''}}
              style={styles.contentWebView}
            />
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
  ...state.home,
})

function mapDispatchToProps(dispatch) {
  return bindActionCreators({}, dispatch)
}

export default connect(
  mapStateToProps,
  mapDispatchToProps,
)(Home)
