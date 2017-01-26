<template>
    <div>
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
        <input :name="name" type="text" :id="name"  v-model="dateField" 
        class="form-control col-md-7 col-xs-12 dob cal_cal asyc-dob ">
        <small class="green">dd/mm/yyyy</small>
    </div>
</template>

<script>
/**
 * Creating Date Picker Compenent
 * @type {Object}
 */
const DatePicker = {
    data: function() {
        return {
            dateField: null
        }
    },
    // Componet properties
    props: ['name', 'init_data'],
    methods: {
        date_picked: function(_Date) {
            // fire date picked event to lisiten by parent module
            this.$emit('date_picked', _Date);
        }
    },
    mounted: function() {
        // protecting root context
        var self = this;
        let _init_data = this.init_data || moment().format('DD/MM/YYYY');
        // init date range picker extenstion
        $('#' + this.name).daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_2",
            startDate: _init_data,
            locale: {
                format: 'DD/MM/YYYY'
            }
        }, (start) => {
            // call date picked API
            this.date_picked(start.format('DD/MM/YYYY'));
        });
    }
}
// ES5 export Object
export default DatePicker
</script>