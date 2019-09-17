import React from 'react'
import {
  Text,
  View,
  StyleSheet,
  TouchableOpacity,
  ScrollView,
} from 'react-native'

import {Colors, Fonts} from '../styles'

const styles = StyleSheet.create({
  container: {
    paddingHorizontal: 15,
    marginBottom: 10,
  },
})

const TabNav = ({router = [], disabled = false, onSelect = () => {}}) => {
  const [selectedTab, setSelectedTab] = React.useState(0)

  return (
    <ScrollView
      horizontal={true}
      showsHorizontalScrollIndicator={false}
      contentContainerStyle={styles.container}
    >
      {router.map((i, idx) => (
        <TouchableOpacity
          key={'tab-' + idx}
          disabled={selectedTab === idx || disabled}
          onPress={() => {
            onSelect(i.id)
            setSelectedTab(idx)
          }}
        >
          <View
            style={{
              alignItems: 'center',
              paddingRight: router.length !== idx + 1 ? 15 : 0,
              paddingBottom: 12,
            }}
          >
            <Text
              style={{
                color:
                  selectedTab === idx
                    ? Colors.dark.gray()
                    : Colors.primary.gray(),
                fontFamily:
                  selectedTab === idx
                    ? Fonts.Roboto.medium
                    : Fonts.Roboto.regular,
                fontSize: 13,
              }}
            >
              {i.name}
            </Text>
            <View
              style={{
                marginTop: 5,
                borderRadius: 5,
                width: '100%',
                height: 3,
                backgroundColor:
                  selectedTab === idx ? Colors.primary.green() : 'transparent',
              }}
            />
          </View>
        </TouchableOpacity>
      ))}
    </ScrollView>
  )
}

export default TabNav
