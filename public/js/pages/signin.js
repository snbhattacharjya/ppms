/*
 *  Document   : signin.js
 *  Author     : ppms
 *  Description: Custom JS code used in Sign In Page
 */

class pageAuthSignIn {
    /*
     * Init Sign In Form Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
     *
     */
    static initValidation() {
        // Load default options for jQuery Validation plugin
        ppms.helpers('validation');

        // Init Form Validation
        jQuery('.js-validation-signin').validate({
            rules: {
                'code': {
                    required: true,
                    minlength: 3
                },
                'password': {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                'code': {
                    required: 'Please enter a username',
                    minlength: 'Your username must consist of at least 3 characters'
                },
                'password': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long'
                }
            }
        });
    }

    /*
     * Init functionality
     *
     */
    static init() {
        this.initValidation();
    }
}

// Initialize when page loads
jQuery(() => { pageAuthSignIn.init(); });
