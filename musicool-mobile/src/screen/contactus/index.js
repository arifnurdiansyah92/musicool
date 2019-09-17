import React, {Component} from 'react'
import {
  Text,
  View,
  ScrollView,
  StatusBar,
  Animated,
  ActivityIndicator,
} from 'react-native'

import {connect} from 'react-redux'
import {bindActionCreators} from 'redux'
import {actionCreators} from '../../modules'

import {Header, Footer, TextField, Button} from '../../components'
import {Colors} from '../../styles'

import {showMessage} from 'react-native-flash-message'
import Modal from 'react-native-modal'

import styles from './styles'

class ContactUs extends Component {
  constructor(props) {
    super(props)

    this.state = {
      isLoading: false,
      scrollY: new Animated.Value(0),
      form: [
        {
          id: 0,
          name: 'name',
          placeholder: 'Your Name',
          errMsg: null,
          autoCapitalize: 'words',
          value: '',
        },
        {
          id: 1,
          name: 'email',
          placeholder: 'Your Email',
          autoCapitalize: 'none',
          keyboardType: 'email-address',
          errMsg: null,
          value: '',
        },
        {
          id: 2,
          name: 'subject',
          placeholder: 'Subject',
          errMsg: null,
          value: '',
        },
        {
          id: 3,
          name: 'message',
          placeholder: 'Message',
          errMsg: null,
          value: '',
          multiline: true,
        },
      ],
    }
  }

  handleChangeTextfield(id, value, callback) {
    this.setState(
      {
        form: this.state.form.map((i, idx) => ({
          ...i,
          value: id === idx ? value : i.value,
          errMsg: id === idx ? null : i.errMsg,
        })),
      },
      () => callback && callback(),
    )
  }

  handleGetErrorTextField(err) {}

  showMessage(type, title, message = undefined, autoHide = true) {
    showMessage({
      message: title,
      description: message,
      icon: type,
      type: type,
      autoHide: autoHide,
    })
  }

  handleSubmitForm() {
    const {form} = this.state
    const checkVal = form.filter(i => i.value === '').map(i => i.name)
    if (!checkVal.length) {
      const data = {
        name: form[0].value,
        email: form[1].value,
        subject: form[2].value,
        message: form[3].value,
      }

      this.setState({isLoading: true})
      this.props.sendEmail(data, (status, res) => {
        if (status) {
          this.setState(
            {
              isLoading: false,
              form: form.map(i => ({
                ...i,
                value: '',
              })),
            },
            () =>
              this.showMessage(
                'success',
                'Success to send message',
                'Thank you for contacting us.',
              ),
          )
        } else {
          const errObj = res.data.data
          this.setState({
            form: form.map(i => ({
              ...i,
              value: errObj[i.name] ? '' : i.value,
              errMsg: errObj[i.name] ? errObj[i.name][0] : i.errMsg,
            })),
            isLoading: false,
          })
        }
      })
    } else {
      this.setState({
        form: form.map(i => ({
          ...i,
          errMsg:
            i.value === '' ? `The ${i.name} field is required.` : i.errMsg,
        })),
      })
    }
  }

  parseData(type, data = []) {
    switch (type) {
      case 'address':
        return data.map(({alamat, nama, ...i}) => ({
          ...i,
          name: `${alamat} ${nama}`,
        }))
      case 'email':
        return data.map(({email, ...i}) => ({...i, name: email}))
      case 'phone':
        return data.map(({phone_number, ...i}) => ({...i, name: phone_number}))
      default:
        return []
    }
  }

  render() {
    const {form} = this.state
    const {email, location, phone} = this.props

    let info = {
      location: location ? this.parseData('address', location) : [],
      emails: email ? this.parseData('email', email) : [],
      numbers: phone ? this.parseData('phone', phone) : [],
    }

    return (
      <View>
        <StatusBar backgroundColor={Colors.primary.green(1)} />
        <ScrollView
          scrollEventThrottle={1}
          onScroll={Animated.event([
            {nativeEvent: {contentOffset: {y: this.state.scrollY}}},
          ])}
        >
          <View style={styles.contentContainer}>
            <View style={styles.containerContentTitle}>
              <Text style={styles.contentTitle}>Contact Us</Text>
            </View>
            <View style={styles.content}>
              <Text style={styles.title}>We are Happy To Hear From You</Text>
              <Text style={styles.desc}>
                Diam felix laoreet, a sapien nunc Fusce non Morbi Nam fringilla
                arcu. Sed ex ince os dolor. Vest ibulum nec id eleifend nostra,
                gravidamo do In id laoreet, necn ibh. Lectus. Sagittis rhs
                sapien augue amet acorbi Nam fringilla arcu.
              </Text>

              <View style={styles.infoContainer}>
                {Object.keys(info).map(i => (
                  <View key={i} style={{flex: 1, marginBottom: 15}}>
                    <Text style={styles.infoTitle}>{'My ' + i}</Text>
                    {info[i].map((item, idx) => (
                      <Text key={'item-' + idx} style={styles.infoDesc}>
                        {item.name}
                      </Text>
                    ))}
                  </View>
                ))}
              </View>

              <View style={{marginTop: 20}}>
                {form.map((i, idx) => (
                  <TextField
                    key={'textField-' + idx}
                    {...i}
                    containerStyle={{marginBottom: 20}}
                    onChangeText={e => this.handleChangeTextfield(idx, e)}
                  />
                ))}
              </View>

              <Button
                activeOpacity={0.7}
                onPress={() => this.handleSubmitForm()}
              >
                Submit Now
              </Button>
            </View>
          </View>

          <Footer />
        </ScrollView>

        {/* Header disimpan dibawah supaya header tidak tertimpa oleh kontent (nb: z-index pada RN versi ini tidak berfungsi dengan baik di Platform Android. Terima Kasih -Adit) */}
        <Header animationValue={this.state.scrollY} />

        <Modal isVisible={this.state.isLoading}>
          <View
            style={{flex: 1, justifyContent: 'center', alignItems: 'center'}}
          >
            <ActivityIndicator size="large" />
          </View>
        </Modal>
      </View>
    )
  }
}

const mapStateToProps = state => ({
  ...state.contact,
})

function mapDispatchToProps(dispatch) {
  return bindActionCreators({sendEmail: actionCreators.sendEmail}, dispatch)
}

export default connect(
  mapStateToProps,
  mapDispatchToProps,
)(ContactUs)
