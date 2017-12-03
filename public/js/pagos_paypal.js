paypal.Button.render({

           env: 'sandbox', // Or 'sandbox',

           commit: true, // Show a 'Pay Now' button

           style: {
               color: 'gold',
               size: 'small'
           },
           client: {
              sandbox:    'Ac_BveQ8sFTnr9JXTivUO0-ii--mCp9CyTx9eleIVlF_Dor_C8BWf33Q-UkuSm-ifueT60vdQDhLco'
            },

           payment: function(data, actions) {
             return actions.payment.create({
               payment: {
                 transactions: [
                   {
                  amount: { total: '230.00', currency: 'MXN' }
                    }
                  ]
                }
              });
           },

           onAuthorize: function(data, actions) {
             return actions.payment.execute().then(function() {
                  window.alert('Payment Complete!');


              });
           },

          //  onCancel: function(data, actions) {
          //      /*
          //       * Buyer cancelled the payment
          //       */
          //  },
           //
          //  onError: function(err) {
          //      /*
          //       * An error occurred during the transaction
          //       */
          //  }

       }, '#paypal-button');