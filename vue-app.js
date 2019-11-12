var app = new Vue({

    el: '#app',

    data: {

      message: 'Bem-vindo!'

    },

    methods: {

          myFunctionOnLoad: function() {

          alert('Bem-vindo!')

      }

    },

    created: function() {

      this.myFunctionOnLoad()

    }

  });