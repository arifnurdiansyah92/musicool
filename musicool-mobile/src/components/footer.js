import React, {Component} from 'react'
import {
  Text,
  View,
  Image,
  TouchableOpacity,
  TextInput,
  Linking,
  StyleSheet,
} from 'react-native'

import {connect} from 'react-redux'
import {bindActionCreators} from 'redux'
import {actionCreators} from '../modules'

import Icon from 'react-native-vector-icons/FontAwesome'
import Social from 'react-native-vector-icons/FontAwesome5Pro'
import {withNavigation} from 'react-navigation'
import {showMessage, hideMessage} from 'react-native-flash-message'

import {Colors, Fonts} from '../styles'
import {ImagesPath, SCREEN_HEIGHT, SCREEN_WIDTH} from '../constant'

const styles = StyleSheet.create({
  contactContainer: {
    paddingHorizontal: 15,
    paddingTop: 80,
    paddingBottom: 60,
    backgroundColor: '#222',
  },

  brandLogo: {
    width: 165,
    height: 30,
    marginBottom: 22,
  },
  title: {
    marginVertical: 15,
    fontFamily: Fonts.WorkSans.medium,
    fontSize: 15,
    color: Colors.primary.white(1),
  },
  textWhite: {
    color: '#fff',
    fontFamily: Fonts.Roboto.regular,
    marginBottom: 15,
    fontSize: 13,
  },
  textGrey: {
    fontSize: 13,
    color: '#ccc',
    fontFamily: Fonts.Roboto.regular,
    marginBottom: 13,
  },

  textInputContainer: {
    borderRadius: 38,
    overflow: 'hidden',
    backgroundColor: '#fff',
    flexDirection: 'row',
  },
  textInput: {
    flex: 1,
    fontFamily: Fonts.Roboto.regular,
    height: 38,
    paddingHorizontal: 15,
    fontSize: 13,
  },
  textInputBtn: {
    backgroundColor: Colors.primary.green(1),
    height: 38,
    width: 40,
    alignItems: 'center',
    justifyContent: 'center',
  },

  socialContainer: {
    marginTop: 25,
    flexDirection: 'row',
    flexWrap: 'wrap',
  },
  socialBtn: {
    width: '50%',
    flexDirection: 'row',
    marginBottom: 5,
    alignItems: 'center',
    paddingVertical: 5,
  },
  socialBtnIcon: {
    color: '#ccc',
    fontSize: 13,
    width: 25,
  },

  copyrightContainer: {
    backgroundColor: Colors.primary.green(1),
    alignItems: 'center',
    padding: 10,
  },
  copyright: {
    fontFamily: Fonts.Roboto.regular,
    color: Colors.primary.white(1),
    fontSize: 13,
  },

  img: {
    width: null,
    height: null,
    flex: 1,
    resizeMode: 'contain',
  },
})

class Footer extends Component {
  constructor(props) {
    super(props)

    this.state = {
      email: '',
      menu: [
        {id: 0, name: 'About Us', route: 'About'},
        {id: 1, name: 'Product', route: 'Product'},
        {id: 2, name: 'Gallery', route: 'Gallery'},
        {id: 3, name: 'Order Now', route: 'OrderNow'},
        {id: 4, name: 'Contact Us', route: 'Contact'},
      ],
      social: [
        {
          id: 0,
          name: 'twitter',
          label: 'Twitter',
          icon: 'twitter',
          link: 'https://www.google.com/',
        },
        {
          id: 0,
          name: 'facebook',
          label: 'Facebook',
          icon: 'facebook-f',
          link: 'https://www.google.com/',
        },
        {
          id: 0,
          name: 'googleplus',
          label: 'Google+',
          icon: 'google-plus-g',
          link: 'https://www.google.com/',
        },
        {
          id: 0,
          name: 'linkedin',
          label: 'Linkedin',
          icon: 'linkedin-in',
          link: 'https://www.google.com/',
        },
      ],
    }
  }

  handleOpenUrl(link) {
    Linking.canOpenURL(link).then(isSupport => {
      if (isSupport) {
        Linking.openURL(link)
      } else {
        console.log('Not Support')
      }
    })
  }

  showMessage(type, title, message = undefined, autoHide = true) {
    showMessage({
      message: title,
      description: message,
      icon: type,
      type: type,
      autoHide: autoHide,
    })
  }

  handleSubcribeEmail() {
    if (this.state.email !== '') {
      this.props.postSubscribe(this.state.email, (status, res) => {
        if (status) {
          this.setState({email: ''}, () => {
            this.showMessage(
              'success',
              'Success to subscribe',
              'Thank you for subscribing to our newsletters.',
            )
          })
        } else {
          this.showMessage(
            'danger',
            'Failed to subscribe',
            res.data.data.email[0],
          )
        }
      })
    } else {
      this.showMessage(
        'danger',
        'Failed to subscribe',
        'The email field is required.',
      )
    }
  }

  render() {
    const {footerData} = this.props

    return (
      <View>
        <View style={styles.contactContainer}>
          <View style={styles.brandLogo}>
            <Image source={ImagesPath.img.logo.white} style={styles.img} />
          </View>
          <View>
            <View style={{flexDirection: 'row'}}>
              <Icon
                name="envelope"
                style={[styles.socialBtnIcon, {width: 22, marginTop: 3}]}
              />
              <Text style={styles.textWhite}>
                {footerData.email ? footerData.email : '-'}
              </Text>
            </View>
            <View style={{flexDirection: 'row'}}>
              <Icon
                name="phone"
                style={[styles.socialBtnIcon, {width: 22, marginTop: 3}]}
              />
              <Text style={styles.textWhite}>
                {footerData.no_telfon ? footerData.no_telfon : '-'}
              </Text>
            </View>
          </View>
          <View>
            <Text style={styles.title}>Company</Text>
            {this.state.menu.map((i, idx) => (
              <View key={'menu-' + idx} style={{alignItems: 'flex-start'}}>
                <TouchableOpacity
                  activeOpacity={0.7}
                  onPress={() => this.props.navigation.navigate(i.route)}
                >
                  <Text style={styles.textGrey}>{i.name}</Text>
                </TouchableOpacity>
              </View>
            ))}
          </View>
          <View>
            <Text style={styles.title}>Subscribe</Text>
            <Text style={styles.textWhite}>Get latest update and offers.</Text>
            <View style={styles.textInputContainer}>
              <TextInput
                value={this.state.email}
                onFocus={() => hideMessage()}
                onChangeText={e => this.setState({email: e})}
                placeholder="Enter your email"
                keyboardType="email-address"
                style={styles.textInput}
                autoCapitalize="none"
              />
              <TouchableOpacity
                onPress={() => this.handleSubcribeEmail()}
                activeOpacity={0.7}
                style={styles.textInputBtn}
              >
                <Icon name="arrow-right" size={15} color="#fff" />
              </TouchableOpacity>
            </View>
          </View>
          <View
            style={[
              styles.socialContainer,
              SCREEN_HEIGHT < SCREEN_WIDTH && {flexWrap: 'nowrap'},
            ]}
          >
            {this.state.social.map((i, idx) => (
              <TouchableOpacity
                key={'social-' + idx}
                activeOpacity={0.7}
                onPress={() => this.handleOpenUrl(i.link + footerData[i.name])}
                style={[
                  styles.socialBtn,
                  SCREEN_HEIGHT < SCREEN_WIDTH && {flex: 1},
                ]}
              >
                <Social name={i.icon} style={styles.socialBtnIcon} />
                <Text style={[styles.textGrey, {marginBottom: 0}]}>
                  {i.label}
                </Text>
              </TouchableOpacity>
            ))}
          </View>
        </View>
        <View style={styles.copyrightContainer}>
          <Text style={styles.copyright}>Copyright © 2019 MUSICOOL</Text>
        </View>
      </View>
    )
  }
}

const mapStateToProps = state => ({
  footerData: state.global.footer,
})

function mapDispatchToProps(dispatch) {
  return bindActionCreators(
    {
      getFooter: actionCreators.getFooter,
      postSubscribe: actionCreators.postSubscribeEmail,
    },
    dispatch,
  )
}

export default connect(
  mapStateToProps,
  mapDispatchToProps,
)(withNavigation(Footer))
