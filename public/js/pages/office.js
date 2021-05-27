/*
 *  Document   : office.js
 *  Author     : ppms
 *  Description: Custom JS code used in Sign In Page
 */

class pageOffice {
    /*
     * Init Sign In Form Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
     *
     */
    static initValidation() {
        // Load default options for jQuery Validation plugin
        ppms.helpers('validation');

        // Init Form Validation
        jQuery('.js-validation').validate({
            rules: {
                'name' : {
                    required: true,
                    maxlength: 100,
                    minlength: 3
                },            
                'hod_designation' : {
                    required: true,
                    maxlength: 50,
                    minlength: 3
                },
                'address' : {
                    required: true,
                    maxlength: 100,
                    minlength: 3
                },
                'post_office' : {
                    required: true,
                    maxlength: 30,
                    minlength: 3
                },
                'pincode' : {
                    required: true,
                    digits: true,
                    minlength: 6,
                    maxlength: 6
                },
                'block_muni_id' : {
                    required: true
                },
                'police_station_id' : {
                    required: true
                },
                'asm_const_id' : {
                    required: true
                },
                'category_id' : {
                    required: true
                },
                'institute_id' : {
                    required: true
                },
                'phone' : {
                    required: true,
                    digits: true
                },
                'fax' : {
                    required: true,
                    digits: true
                },
                'email' : {
                    required: true,
                    email: true
                },
                'hod_mobile' : {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true
                },
                'total_staff' : {
                    required: true,
                    min: 0,
                    max: 1000
                },
                'male_staff' : {
                    required: true,
                    min: 0,
                    max: 1000
                },
                'female_staff' : {
                    required: true,
                    min: 0,
                    max: 1000
                }
            },
            messages: {
                'name' : {
                    required: 'Please enter the name of the Office',
                    maxlength: 'Maximum Length of the Office Name should be within 100 characters',
                    minLength: 'Minimum Length of the Office Name should be 3 characters',
                },            
                'hod_designation' : {
                    required: 'Please enter the Designation for Head of Office',
                    maxlength: 'Designation for Head of Office must be within 50 characters',
                    minlength: 'Designation for Head of Office must be at least 3 characters'
                },
                'address' : {
                    required: 'Please enter the Address of Office',
                    maxlength: 'Address must be within 50 characters',
                    minlength: 'Address must be at least 3 characters'
                },
                'post_office' : {
                    required: 'Please enter the Post-Office of Office',
                    maxlength: 'Post-Office must be within 30 characters',
                    minlength: 'Post-Office must be at least 3 characters'
                },
                'pincode' : {
                    required: 'Please enter the Address of Office',
                    digits: 'The input must be in digits only',
                    minlength: 'Pincode must be of length 6 digits only',
                    maxlength: 'Pincode must be of length 6 digits only m                            ',
                },
                'block_muni_id' : {
                    required: 'Please enter the Block-Municipality of Office'
                },
                'police_station_id' : {
                    required: 'Please enter the Police Station of Office'
                },
                'asm_const_id' : {
                    required: 'Please enter the Assembly Constituency of Office'
                },
                'category_id' : {
                    required: 'Please enter the Category of Office'
                },
                'institute_id' : {
                    required: 'Please enter the Institute of Office'
                },
                'phone' : {
                    required: 'Please enter the Phone No. of Office',
                    digits: 'The input must be in digits only'
                },
                'fax' : {
                    required: 'Please enter the Fax of Office',
                    digits: 'The input must be in digits only'
                },
                'email' : {
                    required: 'Please enter the email of Office',
                    email: 'Please enter a valid email only'
                },
                'hod_mobile' : {
                    required: 'Please enter the Mobile No. for Head of Office',
                    minlength: 'Mobile No. must of length 10 digits only',
                    maxlength: 'Mobile No. must of length 10 digits only',
                    digits: 'The input must be in digits only'
                },
                'total_staff' : {
                    required: 'Please enter the Total Staff of Office',
                    min: 'Total Staff Must be Greater than 0',
                    max: 'Total Staff Must be Less than 1000'
                },
                'male_staff' : {
                    required: 'Please enter the Male Staff of Office',
                    min: 'Male Staff Must be Greater than 0',
                    max: 'Male Staff Must be Less than 1000'
                },
                'female_staff' : {
                    required: 'Please enter the Female Staff of Office',
                    min: 'Female Staff Must be Greater than 0',
                    max: 'Female Staff Must be Less than 1000'
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
jQuery(() => { pageOffice.init(); });
