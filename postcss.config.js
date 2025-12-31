export default {
  plugins: {
    autoprefixer: {
      overrideBrowserslist: [
        '>= 0.5%',
        'last 2 major versions',
        'not dead',
        'Chrome >= 60',
        'Firefox >= 60',
        'Edge >= 79',
        'Safari >= 12',
        'iOS >= 12'
      ]
    }
  }
};

