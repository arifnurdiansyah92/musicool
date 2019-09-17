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

export default class Blog extends Component {
  constructor(props) {
    super(props)

    this.state = {
      scrollY: new Animated.Value(0),
      listPost: [
        {
          id: 0,
          title: 'Musicool : Environmentally Friendly Hydrocarbon Refrigerant',
          img: ImagesPath.img.blog.one,
          highlight:
            'Synthetic refrigerants that contain Chlorofluorocarbons (CFC) for cooling machines such as refrigerators and air conditioners are widely used by industry players.',
        },
        {
          id: 1,
          title:
            'Introduction of Musicool environment-friendly refrigerants at Pertamina',
          img: ImagesPath.img.blog.two,
          highlight:
            'Musicool is a nation-wide production refrigerant produced at the Pertamina Refinery Unit III Plaju refinery. The name Musicool is taken from the name of the Musi River, the place of production of this product.',
        },
        {
          id: 2,
          title:
            'Pertamina introduces musicool, a cheap and environmentally friendly',
          img: ImagesPath.img.blog.three,
          highlight:
            'Pertamina introduces Musicool to the community starting from the world of education.',
        },
        {
          id: 3,
          title:
            'Pertamina Shows Musicool, Environmentally Friendly Liquid Gas for AC',
          img: ImagesPath.img.blog.four,
          highlight:
            'PT Pertamina exhibits environmentally friendly liquid gas called Musicool. This environmentally friendly looking gas is said not to cause ozone depletion.',
        },
      ],
    }
  }

  render() {
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
              <Text style={styles.contentBigTitle}>Blog</Text>
              <View style={styles.contentTitleLine} />
            </View>

            {this.state.listPost.map((i, idx) => (
              <View key={'post-' + idx} style={idx && {marginTop: 60}}>
                <View style={styles.contentImg}>
                  <Image
                    source={i.img}
                    style={[styles.img, {resizeMode: 'cover'}]}
                  />
                </View>
                <TouchableOpacity activeOpacity={0.7}>
                  <Text style={styles.contentTitle}>{i.title}</Text>
                </TouchableOpacity>
                <Text style={styles.content} numberOfLines={4}>
                  {i.highlight}
                </Text>
                <View style={[styles.row, {marginTop: 12}]}>
                  <View style={styles.readMoreLine} />
                  <TouchableOpacity
                    style={styles.readMoreBtn}
                    activeOpacity={0.7}
                  >
                    <Text style={[styles.readMoreBtnText, {marginRight: 12}]}>
                      Read more
                    </Text>
                    <Icon
                      name="long-arrow-alt-right"
                      style={[styles.readMoreBtnText, {marginTop: 2}]}
                    />
                  </TouchableOpacity>
                </View>
              </View>
            ))}

            <View style={{marginTop: 60}}>
              <Text style={styles.contentSubTitle}>Categories</Text>
              <TouchableOpacity activeOpacity={0.7}>
                <Text style={[styles.content, {marginBottom: 10}]}>
                  Everyday Life
                </Text>
              </TouchableOpacity>
              <TouchableOpacity activeOpacity={0.7}>
                <Text style={[styles.content, {marginBottom: 10}]}>
                  Product
                </Text>
              </TouchableOpacity>
              <TouchableOpacity activeOpacity={0.7}>
                <Text style={[styles.content, {marginBottom: 10}]}>Promo</Text>
              </TouchableOpacity>
              <TouchableOpacity activeOpacity={0.7}>
                <Text style={[styles.content, {marginBottom: 10}]}>
                  General
                </Text>
              </TouchableOpacity>
            </View>

            <View style={{marginTop: 30}}>
              <Text style={styles.contentSubTitle}>Most Popular</Text>
              <TouchableOpacity activeOpacity={0.7}>
                <Text style={[styles.content, {marginBottom: 10}]}>
                  Pertamina Shows Musicool, Environmentally Friendly Liquid Gas
                  for AC
                </Text>
              </TouchableOpacity>
              <TouchableOpacity activeOpacity={0.7}>
                <Text style={[styles.content, {marginBottom: 10}]}>
                  Pertamina introduces musicool, a cheap and environmentally
                  friendly
                </Text>
              </TouchableOpacity>
              <TouchableOpacity activeOpacity={0.7}>
                <Text style={[styles.content, {marginBottom: 10}]}>
                  Musicool : Environmentally Friendly Hydrocarbon Refrigerant
                </Text>
              </TouchableOpacity>
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
