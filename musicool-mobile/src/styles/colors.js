const generateColor = (color, opacity = 1) => `rgba(${color}, ${opacity})`

export default {
  primary: {
    green: opacity => generateColor(`0, 155, 76`, opacity),
    gray: opacity => generateColor(`158, 158, 158`, opacity),
    white: opacity => generateColor(`255,255,255`, opacity),
    black: opacity => generateColor(`51,51,51`, opacity),
    yellow: opacity => generateColor(`255, 238, 0`, opacity),
    brown: opacity => generateColor(`107, 67, 44`, opacity),
  },
  dark: {
    gray: opacity => generateColor(`102,102,102`, opacity),
    yellow: opacity => generateColor(`253, 190, 0`, opacity),
    blue: opacity => generateColor(`35, 62, 130`, opacity),
  },
  light: {
    gray: opacity => generateColor(`245,246,247`, opacity),
    white: opacity => generateColor(`247, 247, 247`, opacity),
    blue: opacity => generateColor(`170, 202, 218`, opacity),
    green: opacity => generateColor(`40, 184, 150`, opacity),
  },
}
