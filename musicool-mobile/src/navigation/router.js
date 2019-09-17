import React from 'react'
import {
  ScrollView,
  StatusBar,
  View,
  TouchableOpacity,
  Image,
} from 'react-native'
import {
  createSwitchNavigator,
  DrawerItems,
  SafeAreaView,
} from 'react-navigation'
import Icon from 'react-native-vector-icons/FontAwesome5'

import {Colors, Fonts} from '../styles'
import {SCREEN_HEIGHT, APPBAR_HEIGHT, ImagesPath} from '../constant'
import {createAppContainer, createDrawerNavigator} from 'react-navigation'

import HomeScreen from '../screen/home'
import AboutScreen from '../screen/about'
import ProductScreen from '../screen/product'
import BlogScreen from '../screen/blog'
import GalleryScreen from '../screen/gallery'
import ContactUsScreen from '../screen/contactus'
import OrderNowScreen from '../screen/ordernow'

import SplashScreen from '../screen/splash'

// import DummyScreen from "../screen/dummy"
import QRCodeDummyScreen from "../screen/dummy/qrCodeTest"

const CustomDrawerContentComponent = props => (
  <ScrollView>
    <SafeAreaView
      style={{
        height: SCREEN_HEIGHT - StatusBar.currentHeight,
        backgroundColor: Colors.primary.green(1),
      }}
      forceInset={{top: 'always', horizontal: 'never'}}
    >
      <View
        style={{
          height: APPBAR_HEIGHT,
          borderBottomWidth: 0.75,
          borderBottomColor: Colors.primary.white(1),
          justifyContent: 'center',
          alignItems: 'flex-end',
          paddingHorizontal: 15,
        }}
      >
        <TouchableOpacity onPress={() => props.navigation.closeDrawer()}>
          <Icon
            name="times-circle"
            light={true}
            style={{fontSize: 25, color: '#fff'}}
          />
        </TouchableOpacity>
      </View>
      <View style={{flex: 1}}>
        <DrawerItems
          {...props}
          activeBackgroundColor="transparent"
          inactiveTintColor={Colors.primary.white(1)}
          activeTintColor={Colors.primary.yellow()}
          itemsContainerStyle={{paddingVertical: 20}}
          itemStyle={{paddingHorizontal: 20, paddingVertical: 12}}
          labelStyle={{
            fontSize: 16,
            fontWeight: 'normal',
            fontFamily: Fonts.Roboto.regular,
            margin: 0,
          }}
        />
      </View>
      <View
        style={{
          height: APPBAR_HEIGHT * 2 - StatusBar.currentHeight / 2,
          backgroundColor: '#222',
          alignItems: 'center',
          paddingTop: 20,
        }}
      >
        <View style={{width: 140, height: 40}}>
          <Image
            source={ImagesPath.img.logo.white}
            style={{width: null, height: null, flex: 1, resizeMode: 'contain'}}
          />
        </View>
      </View>
    </SafeAreaView>
  </ScrollView>
)

const MainNavigator = createDrawerNavigator(
  {
    Home: {
      screen: HomeScreen,
      navigationOptions: {
        title: 'HOME',
      },
    },
    About: {
      screen: AboutScreen,
      navigationOptions: {
        title: 'ABOUT US',
      },
    },
    Product: {
      screen: ProductScreen,
      navigationOptions: {
        title: 'PRODUCT',
      },
    },
    Network: {
      screen: QRCodeDummyScreen,
      navigationOptions: {
        title: 'NETWORK',
      },
    },
    Blog: {
      screen: BlogScreen,
      navigationOptions: {
        title: 'BLOG',
      },
    },
    Gallery: {
      screen: GalleryScreen,
      navigationOptions: {
        title: 'GALLERY',
      },
    },
    OrderNow: {
      screen: OrderNowScreen,
      navigationOptions: {
        title: 'ORDER NOW',
      },
    },
    Contact: {
      screen: ContactUsScreen,
      navigationOptions: {
        title: 'CONTACT',
      },
    },
  },
  {
    contentComponent: props => <CustomDrawerContentComponent {...props} />,
    overlayColor: Colors.primary.white(0.75),
    drawerPosition: 'right',
    initialRouteName: 'Home',
  },
)

const AppNavigator = createSwitchNavigator(
  {
    Splash: {screen: SplashScreen},
    Main: {screen: MainNavigator},
  },
  {
    headerMode: 'none',
    initialRouteName: 'Splash',
  },
)

export default createAppContainer(AppNavigator)
