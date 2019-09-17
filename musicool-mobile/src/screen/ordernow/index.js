import React, {Component} from 'react'
import {Text, View, ScrollView, StatusBar, Animated} from 'react-native'

import {Header, Footer, TextField, Button} from '../../components'
import {SCREEN_WIDTH} from '../../constant'
import {Colors} from '../../styles'

import {showMessage} from 'react-native-flash-message'

import styles from './styles'

export default class ContactUs extends Component {
  constructor(props) {
    super(props)

    this.state = {
      scrollY: new Animated.Value(0),
      info: {
        location: 'Sekelimus raya barat 123 Bandung - Indonesia.',
        emails: ['Info@musicool.com', 'admin@musicool.com'],
        numbers: ['(102) 6666 8888', '(102) 6666 8888'],
      },
      form: [
        {
          id: 0,
          name: 'name',
          placeholder: 'Nama',
          errMsg: null,
          value: '',
        },
        {
          id: 1,
          name: 'email',
          placeholder: 'Email',
          errMsg: null,
          value: '',
        },
        {
          id: 2,
          name: 'phone',
          placeholder: 'No Handphone',
          errMsg: null,
          value: '',
        },
        {
          id: 3,
          name: 'address',
          placeholder: 'Alamat',
          errMsg: null,
          value: '',
        },
        {
          id: 4,
          name: 'ACSum',
          placeholder: 'Jumlah AC',
          errMsg: null,
          containerStyle: styles.halfTextFieldLeft,
          value: '',
        },
        {
          id: 5,
          name: 'ACBrand',
          placeholder: 'Merk AC',
          errMsg: null,
          containerStyle: styles.halfTextFieldRight,
          value: '',
        },
        {
          id: 6,
          name: 'service',
          placeholder: 'Layanan',
          errMsg: null,
          containerStyle: styles.halfTextFieldLeft,
          value: '',
        },
        {
          id: 7,
          name: 'description',
          placeholder: 'Keterangan',
          errMsg: null,
          containerStyle: styles.halfTextFieldRight,
          value: '',
        },
        {
          id: 8,
          name: 'remark',
          placeholder: 'Remark',
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
      this.showMessage(
        'success',
        'Success to send message',
        'Thank you for contacting us.',
      )
    } else {
      this.setState({
        form: form.map(i => ({
          ...i,
          errMsg: i.value === '' ? 'require' : i.errMsg,
        })),
      })
    }
  }

  render() {
    const {form, info} = this.state

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
              <Text style={styles.contentTitle}>Order Now</Text>
            </View>
            <View style={styles.content}>
              <Text style={styles.title}>
                Anda Dapat Melakukan Order Secara Instan Menggunakan Form Di
                Bawah Ini
              </Text>
              <Text style={styles.desc}>
                Diam felix laoreet, a sapien nunc Fusce non Morbi Nam fringilla
                arcu. Sed ex ince os dolor. Vest ibulum nec id eleifend nostra,
                gravidamo do In id laoreet, necn ibh. Lectus. Sagittis rhs
                sapien augue amet acorbi Nam fringilla arcu.
              </Text>

              <View
                style={{marginTop: 30, flexDirection: 'row', flexWrap: 'wrap'}}
              >
                {form.map((i, idx) => (
                  <TextField
                    key={'textField-' + idx}
                    {...i}
                    containerStyle={[{marginBottom: 20}, i.containerStyle]}
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
      </View>
    )
  }
}
