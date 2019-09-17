import React, {Component} from 'react'
import {
  Text,
  View,
  ScrollView,
  Image,
  StatusBar,
  Animated,
  TouchableOpacity,
} from 'react-native'

import Icon from 'react-native-vector-icons/FontAwesome5'

import {Header, Footer} from '../../components'
import {ImagesPath} from '../../constant'
import {Colors} from '../../styles'

import styles from './styles'

export default class Home extends Component {
  constructor(props) {
    super(props)

    this.state = {
      scrollY: new Animated.Value(0),
      kelebihan: [
        'Tidak memerlukan penggantian komponen',
        'Tidak memerlukan penggantian oli / pelumas',
        'Jumlah pengisian media pendingin hanya 30% dari jumlah media pendingin CFC maupun HFC',
        'Menurunkan aliran listrik rata-rata 18 - 23%',
        'Menambah umur pemakaian kompresor',
        'Pencapaian temperatur dingin lebih cepat',
        'Tidak merusak lapisan ozon',
        'Tidak meningkatkan pemanasan global',
      ],
    }
  }

  render() {
    return (
      <View>
        <StatusBar backgroundColor={Colors.primary.green(1)} />
        <ScrollView
          scrollEventThrottle={16}
          onScroll={Animated.event([
            {nativeEvent: {contentOffset: {y: this.state.scrollY}}},
          ])}
        >
          <View style={styles.contentContainerWhite}>
            <View>
              <Text style={styles.contentBigTitle}>Our product</Text>
              <View style={styles.contentTitleLine} />
            </View>
            <View style={styles.contentImg}>
              <Image source={ImagesPath.img.product.two} style={styles.img} />
            </View>
            <Text style={styles.contentTitle}>
              <Text style={styles.greenText}>Musicool </Text>
              MC 22
            </Text>
            <Text style={styles.contentSubTitle}>3kg, 6kg, 45kg</Text>
            <Text style={styles.content}>
              Musicool MC-22 adalah Refrigeran Hidrokarbon produksi Pertamina
              yang dapat digunakan untuk menggantikan Refrigeran Sintetik jenis
              R-22, yang selama ini dipakai sebagai bahan pendingin dalam
              berbagai mesin pendingin seperti AC Split, Chiller, Refrigerator,
              Cold Storage dan lain – lain.
            </Text>
            <Text style={styles.content}>
              Berikut ini adalah berbagai kelebihan Musicool MC-22 sebagai bahan
              pendingin:
            </Text>

            <View>
              {this.state.kelebihan.map((i, idx) => (
                <View key={'kelebihan-' + idx} style={{flexDirection: 'row'}}>
                  <Icon name="circle" solid={true} style={styles.contentMark} />
                  <Text
                    style={[styles.content, {marginBottom: 0, lineHeight: 22}]}
                  >
                    {i}
                  </Text>
                </View>
              ))}
            </View>

            <View style={{alignItems: 'flex-start', marginTop: 30}}>
              <TouchableOpacity
                onPress={() => this.props.navigation.navigate("OrderNow")}
                style={styles.btn}
                activeOpacity={0.7}
              >
                <Text style={styles.btnText}>ORDER NOW</Text>
              </TouchableOpacity>
            </View>
          </View>
          <View style={styles.contentContainerGrey}>
            <View style={{marginBottom: 10}}>
              <Text style={styles.contentSubTitle}>Description</Text>
              <Text style={styles.content}>
                Imperdiet ligula feugiat duis vestibulum a taciti varius
                facilisis fermentum est purus mollis a a a ullamcorper et purus.
                Curae hendrerit facilisis a a vestibulum parturient sodales nec
                erat vestibulum pharetra dapibus consequat himenaeos condimentum
                et montes nec felis eleifend lectus diam duis pulvinar phasellus
                orci. Inceptos nisl suspendisse mauris mi eu odio accumsan
                vulputate tortor parturient vulputate adipiscing ac ullamcorper
                cursus curae viverra condimentum ultricies conubia suspendisse
                consectetur erat est sociis hendrerit. Ornare pharetra aptent
                sem taciti a netus dapibus nam a massa suspendisse vestibulum
                amet suscipit condimentum vestibulum adipiscing.
              </Text>
            </View>
            <View style={{marginBottom: 10}}>
              <Text style={styles.contentSubTitle}>Additional Video</Text>
            </View>
            <View style={{marginBottom: 10}}>
              <Text style={styles.contentSubTitle}>Regulasi Pemerintah</Text>
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
